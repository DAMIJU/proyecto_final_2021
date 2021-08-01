<div class="modal fade" id="ModalGaleria<?php echo $mostrar['portfolio_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ActualizarGaleria">
      <div class="modal-header">
        <center><h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Actualizar <?php echo $mostrar['title']?></h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" autocomplete="OFF" action="#" enctype="multipart/form-data">
        <div class="form-group">
          <label style="font-weight:normal;font-weight:bold" class="col-md-2"> Título </label>
            <div class="col-md-7">
              <input type="text" required="required" style="color:black;border:1px solid black" id="Titulo" value="<?php echo $mostrar['title']?>" name="TituloImagen" class="form-control">
            </div>
          <label style="font-weight:normal;font-weight:bold" class="col-md-2"> Imagen </label>
            <div class="col-md-7">
              <input type="file" id="FotoGaleria" required name="ImagenPortafolio">
           </div><BR>
           <div class="col-md-15">
               <center><img style="max-width:84%;border-radius:5px" class="img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']);?>"></center>
            </div>
           <div class="col-md-7">
           </div>
        </div>

      </div>
      <div class="modal-footer">
      <input type="submit" name="Agregar_Mascota" class="btn btn-success" value="Agregar">
              <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>   
        </form>
      </div>
    </div>
  </div>
</div>