var uploadFilesInfo = [];
function removeUploadelement(element, file) {
    var token = $('[name=_token]').val();
    var elementfile = $('#'+element);
    var filename = file.name;
    elementfile.fadeOut( "slow", function() {
        elementfile.remove();
    });

    $.ajax({
        headers: {
            'X-CSRF-Token': token
        },
        type: 'POST',
        url: '/admin/project/delete',
        data: "id="+filename,
        dataType: 'html'
    });
}

function preparePreviewHtml(file) {
    var dropzone = $('#drop-zone');
    upload = $('#upload');
    if(uploadFilesInfo.length === 0) {
        dropzone.html('');
    }
    uploadFilesInfo.push(file);
    var element_id = 'upload-element-' + uploadFilesInfo.length;
    var element = $('#'+element_id);
    var close = 'dropzone/individual/upload/img/close.png';
    var base_url = $('meta[name="base_url"]').attr('content');

    var html = '<div id="'+element_id+'" class="view third-effect">'
       + '<div id="effect-6" class="effects">'
       + '<div class="img-border">'
       + '<div class="img">'
       + '<img class="img-thumb" src="' + file.dataURL + '" alt="Thumb"/>'
       + '<div class="overlay">'
       + '<a id="link-'+element_id+'" href="javascript:void(0)" class="expand"><img src="'+base_url+'/'+close+'" alt=""></a>'
       + '</div>'
       + '</div>'
       + '</div>'
       + '</div>'
       + '</div>';

    dropzone.append(html);
    if (!upload.val()) {
        upload.val(file.name)
    } else {
        upload.val(upload.val()+';'+file.name)
    }

    touch();
    $('#link-'+element_id).click(function () {
        removeUploadelement(element_id, file);
    });
}

function touch() {
    if (Modernizr.touch) {
        var overlay = $(".close-overlay");
        overlay.removeClass("hidden");
        $(".img").click(function(e){
            if (!$(this).hasClass("hover")) {
                $(this).addClass("hover");
            }
        });
        overlay.click(function(e){
            e.preventDefault();
            e.stopPropagation();
            if ($(this).closest(".img").hasClass("hover")) {
                $(this).closest(".img").removeClass("hover");
            }
        });
    } else {
        $(".img").mouseenter(function(){
            $(this).addClass("hover");
        }).mouseleave(function(){
            $(this).removeClass("hover");
        });
    }
}
$(function () {
    var token = $('[name=_token]').val();
    $("#drop-zone").dropzone({
        headers: {
            'X-CSRF-Token': token
        },
        url: "/admin/project/upload",
        type: 'POST',
        dataType: "json",
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2,
        previewTemplate: "<div></div>",
        init: function() {
            this.on("success", function(file, data) {
                preparePreviewHtml(file);
                $uploadfiles = $('#uploadfiles');
                if (!$uploadfiles.val()) {
                    $uploadfiles.val(data)
                } else {
                    $uploadfiles.val($uploadfiles.val()+';'+data)
                }
            });
            this.on("complete", function(data) {

            });
        }
    });
});