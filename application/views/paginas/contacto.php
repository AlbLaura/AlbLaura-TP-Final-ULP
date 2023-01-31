<div class="fondo">
    <div class="container pt-3">
        <div id="recuadro_contacto">
            <div class="row text-center">
                <div class="col-12">
                    <h3>CONTACTO</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group text-center">
                        <label for="comment">MENSAJE</label>
                        <textarea class="form-control" rows="15" id="comment" placeholder="Escribe tu mensaje aqui..." maxlength="400"></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <form action="/action_page.php" class="was-validated">
                        <div class="text-center">
                            <label class="comment">TUS DATOS</label>
                        </div>
                        <div id="f_name"class="form-group">
                            <label for="pwd">Nombre (Requerido)</label>
                            <input type="name" class="form-control" placeholder="Elon Musk" id="pwd" required>
                            <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">Por favor, completa este espacio.</div>
                        </div>
                        <div id="f_email" class="form-group">
                            <label for="email">Email (Requerido)</label>
                            <input type="email" class="form-control" placeholder="ElonMusk_95@gmail.com" id="email" required>
                            <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">Por favor, completa este espacio.</div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <label for="comment">Asunto</label>
                            <textarea class="form-control " rows="1" id="comment" placeholder="Consulta" required></textarea>
                        </div>
                        <div class="col-3 mt-5">
                            <button class="btn azul btn-block">Editar</button>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-3 mt-5">
                            <button class="btn amarillo btn-block float-right">Enviar</button>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="row">
            <div class="col mt-4">
                <?=$publicidad_hor?>
            </div>
        </div>
    </div>
</div>