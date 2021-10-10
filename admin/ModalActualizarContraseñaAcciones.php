<div class="modal fade" id="CambiarContraseñaAcciones<?php echo $mostrar['ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="AgregarUser.php" id="myform" method="POST" autocomplete="OFF" accept-charset="utf-8">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight:bold;">Cambiar contraseña para acciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="password" name="ContrasenaAccionesNueva" class="form-control" placeholder="Contraseña nueva"><br>
                    <input type="password" name="" class="form-control" placeholder="Contraseña actual">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-info" onclick="alert('Aún faltan cosas, espere JAJAJAJ')">Guardar cambios</button>
                </div>
            </div>
        </div>
    </form>
</div>