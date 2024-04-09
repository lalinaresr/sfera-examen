<div class="modal fade" id="edit-profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> Editar información</h4>
            </div>
            <form id="form-update-profile" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="firstname">Nombre(s):</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" required minlength="3" maxlength="30" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Apellido(s):</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" required minlength="3" maxlength="30" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" class="form-control" required maxlength="120" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control" required minlength="8" maxlength="30" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn-update-profile" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>