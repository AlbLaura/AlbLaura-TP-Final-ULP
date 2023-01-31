<div class="fondo">
    <div class="container pt-3">
        <div id="recuadro_login">
            <div class="row text-center">
                <div class="col-12">
                    <h3>LOGIN</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="/action_page.php" class="was-validated">
                        <div id="f_name" class="form-group">
                            <label for="name">Usuario (Requerido)</label>
                            <input type="name" class="form-control" placeholder="Elon_Musk" id="user" required>
                            <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">Por favor, completa este espacio.</div>
                        </div>
                        <div id="f_password" class="form-group">
                            <label for="password">Contraseña (Requerido)</label>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="*********" id="pass" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-eye-slash"></i></span>
                                </div>
                                <div class="valid-feedback">Valido.</div>
                                <div class="invalid-feedback">Por favor, completa este espacio.</div>
                            </div>
                        </div>
                    </form>
                    <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">Recuérdame</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-3">
                    <a href="<?=base_url()?>pagina/index"><button class="btn azul btn-block">Volver</button></a>
                </div>
                <div class="col-4"></div>
                <div class="col-4 mt-3">
                    <button class="btn amarillo btn-block">Enviar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mt-4"><a href="#">Olvidaste tu usuario o contraseña?</a></div>
                <div class="col-12 text-center mt-2"><a href="#">Registrarse</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-4">
                <?=$publicidad_hor?>
            </div>
        </div>
    </div>
</div>