


<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                 </button>
            </div>
            
            <!-- comienza # DIV Formulario -->
            <div id="div-forms">
            
                <!-- Begin # Login Form -->
                <form id="login-form">
                    <div class="modal-body">
                        <div id="div-login-msg">
                            <span id="icon-login-msg" class="oi oi-chevron-right"></span>
                            <span id="text-login-msg">Escriba su usuario y password.</span>
                        </div>
                        <input id="login_username" class="form-control" type="text" placeholder="Usuario" required>
                        <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
                        </div>
                        <div>
                            <button id="login_lost_btn" type="button" class="btn btn-link">Recuperar password?</button>
                            <button id="login_register_btn" type="button" class="btn btn-link">Registro</button>
                        </div>
                    </div>
                </form>
                <!-- Termina # Login Form -->
                
                <!-- Comienza | Lost Password Form -->
                <form id="lost-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-lost-msg">
                            <span id="icon-lost-msg" class="oi oi-chevron-right"></span>
                            <span id="text-lost-msg">Escriba su direccion de Email.</span>
                        </div>
                        <input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                        </div>
                        <div>
                            <button id="lost_login_btn" type="button" class="btn btn-link">Ingresar</button>
                            <button id="lost_register_btn" type="button" class="btn btn-link">Registro</button>
                        </div>
                    </div>
                </form>
                <!-- End | Lost Password Form -->
                
                <!-- comienza | Formulario de Registro -->
                <form id="register-form" style="display:none;" action="login.php" method="post">
                    <div class="modal-body">
                        <div id="div-register-msg">
                            <span id="icon-register-msg" class="oi oi-chevron-right"></span>
                            <span id="text-register-msg">Registre su Cuenta</span>
                        </div>
                        <input id="register_username" class="form-control" type="text" placeholder="Usuario" required >
                        <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required >
                        <input id="register_password" class="form-control" type="password" placeholder="Password" required >
                        <input id="register_nombre" class="form-control" type="text" placeholder="Nombre" required >
                        <input id="register_telefono" class="form-control" type="text" placeholder="Telefono" required >
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" >Registro</button>
                        </div>
                        <div>
                            <button id="register_login_btn" type="button" class="btn btn-link">Ingresar</button>
                            <button id="register_lost_btn" type="button" class="btn btn-link">Recuperar password?</button>
                        </div>
                    </div>
                </form>
                <!-- Termina | Formulario de Registro  -->
                
            </div>
            <!-- End # DIV Form -->
            
        </div>
    </div>
</div>
<!-- END # MODAL LOGIN -->