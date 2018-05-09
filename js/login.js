
   
$(function() {
    
    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $formUpdate = $('#update-form');
     var $formDelete = $('#delete-form');
    var $divForms = $('#div-forms');
    var $formAdmin = $('#adminIns-form');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $("form").submit(function () {
        switch(this.id) {
            case "login-form":
                var $lg_username=$('#login_username').val();
                var $lg_password=$('#login_password').val();
                if ($lg_username == "ERROR") {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
                } else {
					datos = {"accion":"LOGIN", "user":$('#login_username').val(), "password":$('#login_password').val()};
					validaInformacion(datos,"LOGIN")
                }
                return false;
                break;
            case "lost-form":
                var $ls_email=$('#lost_email').val();
                if ($ls_email == "ERROR") {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Send error");
                } else {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Send OK");
                }
                return false;
                break;
            case "register-form":
                var $rg_username=$('#register_username').val();
                var $rg_email=$('#register_email').val();
                var $rg_password=$('#register_password').val();
                var $rg_nombre=$('#register_nombre').val();
                var $rg_telefono=$('#register_telefono').val();
                

                if ($rg_username == "ERROR") {
                    
                } else {
                  datos = {"accion":"REGISTER", "user":$('#register_username').val(), "email":$('#register_email').val(), "password":$('#register_password').val(),
                           "nombre":$('#register_nombre').val(), "telefono":$('#register_telefono').val(),};
                       validaInformacion(datos,"REGISTER")
                }
                return false;
                break;
           case "update-form":
                 var $ud_nombre=$('#ud_nombre').val();
                 var $ud_email=$('#ud_email').val();
                 var $ud_telefono=$('#ud_telefono').val();
                 var $ud_password=$('#ud_password').val();
                 var $ud_user=$('#ud_idUsuario').val();
                 if ($up_user== "ERROR") {
                   window.alert("valio");
                 }else{
                    datos = {"accion":"UPDAT", "nombre":$('#ud_username').val(), "email":$('#ud_email').val(), "telefono":$('#ud_telefono').val(),
                           "password":$('#ud_password').val(), "user":$('#ud_idUsuario').val(),};
                       validaInformacion(datos,"UPDAT")
                 }
                 return false;
                 break;
            case "adminIns-form":
                 var $ud_nombre=$('#ud_nombre').val();
                  if ($up_nombre == "ERROR") {

                  
                 }else{
                    datos = {"accion":"Admin", "nombre":$('#ad_username').val(), "email":$('#ad_email').val(), "telefono":$('#ad_telefono').val(),
                           "password":$('#ad_password').val(), "user":$('#ad_idUsuario').val(),};
                       validaInformacion(datos,"ADMIN")
                 }

                 return false;
                 break;
            
        }
        return false;
    });
    
    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
    
    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }
    
    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }
    
    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("glyphicon-chevron-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("glyphicon-chevron-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
  		}, $msgShowTime);
    }
	
	function validaInformacion(datos,accion){

		$.ajax({
			url: "/integrador6.3/includes/validador.php",
			type: "GET",
			data: datos
			}).done(function(respuesta){
			if (respuesta.estado === "ok") {
				if (accion=="LOGIN"){
					msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
					window.location.reload(true);
				}
				if (accion=="LOGOUT"){
					window.location.reload(true);
				}
                 if (accion=="REGISTER") {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Registro OK");
                    window.location.reload(true);
                }
               if (accion=="UPDAT") {
                    window.alert("llego a validar")
                }
               
				
			}else{
				if (accion=="LOGIN"){
					msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Password incorrecto");
				}

                if (accion=="REGISTER"){
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Registro incorrecto");
                }
			
			}
            

		});
	}
	
	$("#TerminarSession").click(function(){
		datos = {"accion":"LOGOUT"};
		validaInformacion(datos,"LOGOUT")
	});

});