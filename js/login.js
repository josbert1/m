$("#btnlogin").click(function(e){
e.preventDefault();
jQuery.validator.messages.required = 'Este campo es obligatorio.';
       var validado = $("#form-login").valid();
       if(validado){
var dato=$('#form-login').serialize();
        $.ajax(
                {
                    type: "POST",
                    url: "controlador/LoginControlador.php",
                    data: dato
                }
        ).done(function(resultado){
        console.log(resultado);
                if (resultado=='2'){
            $(".container").addClass("error");
           setTimeout('$(".container").removeClass("error")', 1000);
                }else{
            $(".container").addClass("active");
           setTimeout('window.location.reload()', 1000);	
                }
                
            })
			}
});