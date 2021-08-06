<div class="modal fade" id="ModalGaleria<?php echo $mostrar['portfolio_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ActualizarGaleria">
      <div class="modal-header">
        <center><h5 style="font-weight:bold;color:#ffffff" class="modal-title" id="exampleModalLabel">Actualizar <?php echo $mostrar['title']?></h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" autocomplete="OFF" action="#" enctype="multipart/form-data">
      <input type="hidden" name="portfolio_id" value="<?php echo $mostrar['portfolio_id']?>">
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
      <input type="submit" name="GuardarImagenGaleria" class="btn btn-success" value="Agregar">
              <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>   
        </form>
      </div>
    </div>
  </div>
</div>
<?php 
   if(isset($_POST['GuardarImagenGaleria'])){
    include("DB/conexion.php");
      $portfolio_id = $_REQUEST['portfolio_id'];
      $TituloImagen = $_POST['TituloImagen'];
      $ImagenPortafolio = addslashes(file_get_contents($_FILES['ImagenPortafolio']['tmp_name']));

      $query="UPDATE tabla_portfolio SET title='".$TituloImagen."', imagen='".$ImagenPortafolio."' WHERE portfolio_id='".$portfolio_id."'  ";
	    $resultado = $con->query($query);

	    if($resultado){
		  echo "<script>alert('Los datos han sido actualizados correctamente');window.location='config.php?modulo=Galeria'</script>";
	    }else{
		  echo "<script type=\"text/javascript\">alert(\"No se podrán guardar los datos\");</script>";  
	    }

   }

?>