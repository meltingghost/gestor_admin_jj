<div class="modal fade" id="modalEditarPerfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Perfil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetModalEditarPerfil()"></button>
            </div>

            <div class="modal-body">

                <p><b>Aqui podrá modificar su perfil.</b></p>
                <hr>

                <div id="divValidarUser" style="display: block;">

                    <form id="formValidarUser" method="POST" autocomplete="off" onsubmit="return validarUser()">

                        <p align="justify">Por favor, complete sus credenciales para validar su perfil y poder efectuar la modificación, ingrese los datos con los que inicio sesión.</p>
                        <hr>
                        
                        <div class="row">
                            <div class="col">
                                <label for="validarUsername" class="formV-label">Nombre de Usuario:</label>
                                <input type="text" name="validarUsername" id="validarUsername" class="form-control input-no-space" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="validarPassword" class="formV-label">Contraseña:</label>
                                <input type="password" name="validarPassword" id="validarPassword" class="form-control input-no-space" required>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col" style="text-align: right;">
                                <input type="submit" class="btn btn-primary" value="Validar">
                            </div>
                        </div>
                        
                    </form>

                </div>
                
                <div id="divEditarPerfil" style="display: none;">

                    <form id="formEditarPerfil" method="POST" autocomplete="off">

                        <input type="hidden" name="idUsuarioEdit" id="idUsuarioEdit">
                        <input type="hidden" name="usernameOld" id="usernameOld">
                        <input type="hidden" name="cargoUserOld" id="cargoUserOld">

                        <div class="row">
                            <div class="col formV-group" id="nombreUserEditGroup">
                                <label for="nombreUserEdit" class="formV-label">Nombre:</label>
                                <div class="formV-group-input">
                                    <input type="text" id="nombreUserEdit" name="nombreUserEdit" class="form-control formV-input" pattern="[a-zA-Z ]+" minlength="3" maxlength="30" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un nombre valido.</small>
                                </div>
                            </div>
                            <div class="col formV-group" id="apellidoUserEditGroup">
                                <label for="apellidoUserEdit" class="formV-label">Apellido:</label>
                                <div class="formV-group-input">
                                    <input type="text" id="apellidoUserEdit" name="apellidoUserEdit" class="form-control formV-input" pattern="[a-zA-Z ]+" minlength="3" maxlength="30" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text formV-input-error">Debe ingresar un apellido valido.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 formV-group" id="correoUserEditGroup">
                                <label for="correoUserEdit" class="formV-label">Correo Electrónico:</label>
                                <div class="formV-group-input">
                                    <input type="email" id="correoUserEdit" name="correoUserEdit" class="form-control input-no-space formV-input" minlength="6" maxlength="80">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text formV-input-error">Debe ingresar un correo valido.</small>
                                </div>
                            </div>
                            <div class="col-sm-5 formV-group" id="cargosUserEditGroup">
                                <label for="cargosUserEdit" class="formV-label">Función como Usuario:</label>
                                <div class="formV-group-input">
                                    <div id="cargarCargosUserEdit"></div>
                                </div>
                            </div>
                        </div><br>
                        <p style="text-align: justify;"><b>Por razones de seguridad no mostramos el nombre de usuario ni la contraseña; por otro lado, para confirmar que modificará su perfil deberá ingresar el nombre de usuario y la contraseña ya sea que desee cambiar dichos campos o no.</b></p>
                        <div class="row">
                            <div class="col formV-group" id="usernameEditGroup">
                                <label for="usernameEdit" class="formV-label">Nombre de Usuario:</label>
                                <div class="formV-group-input">
                                    <input type="text" id="usernameEdit" name="usernameEdit" class="form-control input-no-space formV-input" minlength="3" maxlength="30">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text formV-input-error">El nombre de usuario debe ser de más de 3 digitos y sin simbolos.</small>
                                </div>
                            </div>
                            <div class="col formV-group" id="passwordEditGroup">
                                <label for="passwordEdit" class="formV-label">Contraseña:</label>
                                <div class="formV-group-input">
                                    <input type="password" id="passwordEdit" name="passwordEdit" class="form-control input-no-space formV-input" minlength="8" maxlength="16">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text formV-input-error">La contraseña debe tener entre 8 y 16 caracteres.</small>
                                </div>
                            </div>
                        </div><br>

                        <div class="modal-footer">
                            <button type="button" id="btnCerrarModalEditarPerfil" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetModalEditarPerfil()">Cerrar</button>
                            <input type="submit" class="btn btn-warning" value="Modificar">
                        </div>

                    </form>

                </div>

            </div>
            
        </div>
    </div>
</div>