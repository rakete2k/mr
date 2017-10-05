$(function () {
    $( "#title" ).keypress(function() {
        resetError("title-div","titleError");
        saveData = true;
    });
    $( "#village" ).keypress(function() {
        resetError("village-div","villageError");
        saveData = true;
    });
    $( "#living_space" ).keypress(function() {
        resetError("living-space-div","livingSpaceError");
        saveData = true;
    });
    $( "#realization_year" ).keypress(function() {
        resetError("realization-year-div","realizationYearError");
        saveData = true;
    });

    $('#project-speichern').click(function () {
        var Input = {
            "id"                  :$("#id").val(),
            "title"             :$("#title" ).val(),
            "village"           :$("#village" ).val(),
            "living_space"      :$("#living_space" ).val(),
            "realization_year"  :$("#realization_year" ).val(),
            "description"       :$("#description" ).val(),
            "activate"          :$("#activate" ).val()
        };
        if(validataForm(Input)) {
            $.ajax({
                type:   "POST",
                url:    "edit-form",
                data:   Input,
                success: function (data) {
                    $('#createDialog').modal('toggle');
                }
            })
        }
    });
});

function resetError(id_input, id_message) {
    $("#"+id_input).removeClass("has-error");
    $("#"+id_message).remove();
}

function validataForm(form) {
    saveData = true;
    if(!form['title'].length>0) {
        $("#titleError").remove();
        $("#title-div").append("<small id='titleError' class='form-text text-muted'><p class='text-danger'>Bitte geben Sie einen Titel ein.</p></small>").addClass("has-error");
        saveData = false;
    }
    if(!form['village'].length>0) {
        $("#villageError").remove();
        $("#village-div").append("<small id='villageError' class='form-text text-muted'><p class='text-danger'>Bitte geben Sie einen Ort ein.</p></small>").addClass("has-error");
        saveData = false;
    }
    if(!form['realization_year'].length>0) {
        $("#realizationYearError").remove();
        $("#realization-year-div").append("<small id='realizationYearError' class='form-text text-muted'><p class='text-warning'>Bitte geben Sie ein Realisierungsjahr ein.</p></small>").addClass("has-error");
        saveData = false;
    } else if(form['realization_year'].length<4) {
        $("#realizationYearError").remove();
        $("#realization-year-div").append("<small id='realizationYearError' class='form-text text-muted'><p class='text-warning'>Bitte geben Sie ein gültiges Realisierungsjahr ein.</p></small>").addClass("has-error");
        saveData = false;
    }
    if(!form['living_space'].length>0) {
        $("#livingSpaceError").remove();
        $("#living-space-div").append("<small id='livingSpaceError' class='form-text text-muted'><p class='text-danger'>Bitte geben Sie eine Wohnfläche ein.</p></small>").addClass("has-error");
        saveData = false;
    }
    return saveData;
}
