$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function(){
    $('.open-deleteDialog').click(function () {
        $(".dialog-title").html($(this).data('title'));
        $("#delete-dialog-btn").attr( "data-id", $(this).data('id') ).click(function () {
            $(this).removeData('id').unbind('click');
            deleteProject($(this).data('id'));
        });
    });
});
/**
 * Delete the project by id.
 *
 * @param id
 */
function deleteProject(id) {
    var Input = {
        "id" :id
    };
    $.ajax({
        type:   "POST",
        url:    "projects/delete-project",
        data:   Input,
        success: function (data) {
            $('#project_row_' + id).remove();
        }
    })
}
