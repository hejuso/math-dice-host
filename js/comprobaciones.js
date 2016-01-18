//Comprbacion de numeros

$(document).ready(function(){
    $('#submit').click(function() {
        if (isNaN($('#edad').val())) {
            $('#edad').css('border-color','#FF0000');
            $("#aviso").modal();
            return false;
        }
    });
});