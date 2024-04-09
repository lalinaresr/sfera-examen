<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">Iniciar Sesión</div>
        <div class="panel-body">
            <div class="row">
                <form id="form-login" method="POST">
                    <div class="form-group">
                        <label for="user" class="col-md-3 mb-3">Usuario:</label>
                        <div class="col-md-9 mb-3">
                            <input type="text" id="user" name="user" class="form-control" placeholder="Ingrese el su nombre de usuario" required autocomplete="off" autofocus="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 mb-3">Contraseña:</label>
                        <div class="col-md-9 mb-3">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese su contraseña" required>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" id="btn-login" class="btn btn-default"><span class="glyphicon glyphicon-lock"></span> Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>