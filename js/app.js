$(function () {
    $("#header").load("header.html");
    $("#footer").load("footer.html");

});

$("#qual").hide();

$("#inputq").attr("required", "required");  
document.getElementById('comoConheceu').addEventListener('change', function () {
var comoConheceu = this.value ;



if(comoConheceu == "Associações"){
    $("#inputq").attr("required", "required");  
    $("#qual").show();

}else {
    $("#inputq").removeAttr("required");
    $("#qual").hide();
    
}




});

$('#dia5').bind('change', function () {
    if ($(this).is(':checked'))
    $("#dia6").removeAttr("required"); 
    else{
    $("#dia6").attr("required", "required");  
    }
});

$('#dia6').bind('change', function () {
    if ($(this).is(':checked'))
    $("#dia5").removeAttr("required");
    else{
    $("#dia5").attr("required", "required");  
    }
});

$('input[type="checkbox"]').on('change', function() {
$('input[name="' + this.name + '"]').not(this).prop('checked', false);
$('input[name="' + this.name + '"]').not(this).removeAttr("required");

});

   // Example starter JavaScript for disabling form submissions if there are invalid fields
   (function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();




$("#telefone").mask("(99) 9999-9999?9") .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });