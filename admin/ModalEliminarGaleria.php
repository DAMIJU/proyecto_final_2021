<div class="modal fade" id="ModalEliminarGaleria<?php echo $mostrar['portfolio_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ActualizarGaleria">
      <div class="modal-header">
        <center><h5 style="font-weight:bold;color:#ffffff" class="modal-title" id="exampleModalLabel">¿Está seguro de eliminar <?php echo $mostrar['title']?>?</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label style="font-weight:normal;font-weight:bold" class="col-md-2"> Título </label>
            <div class="col-md-7">
              <?php echo $mostrar['title']?>
            </div>
          <label style="font-weight:normal;font-weight:bold" class="col-md-2"> Imagen </label>

           <div class="col-md-15">
               <center><img style="max-width:84%;border-radius:5px" class="img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']);?>"></center>
            </div>
           <div class="col-md-7">
           </div>
        </div>

      </div>
      <div class="modal-footer">
      <input type="button" name="Eliminar_ImagenGaleria" class="btn btn-success" onclick="location.href='DeleteImageGallery.php?Portfolio_id=<?php echo $mostrar['portfolio_id']?>'" value="Eliminar">
      <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>   
      </div>
    </div>
  </div>
</div>
