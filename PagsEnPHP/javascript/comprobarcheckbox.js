$(document).ready(function() {
    $('#MayoriaEdad').on('change', function () {
        if ($(this).is(':checked')) {
            $(".jquery").hide();
        } else {
            $(".jquery").show();
        }
    })
});