<div class="modal fade" id="ModalCitas<?php echo $mostrar['Num_Registro_Cita']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content ActualizarGaleria">
      <div class="modal-header">
        <center><h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Detalles de la cita de <?php echo $mostrar['Nombre_Mascota']?></h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
            <label style="font-weight:normal;font-weight:bold" class="col-md-4"> Dueño : </label>
            
            <?php echo $mostrar['Nombre_Dueño']; ?>
       
            <br>
            <label style="font-weight:normal;font-weight:bold" class="col-md-4"> Celular : </label>
            
            <?php echo $mostrar['Telefono_Fijo']; ?>
        
            <br>
            <label style="font-weight:normal;font-weight:bold" class="col-md-4"> Tipo de cita :</label>
          
            <?php echo $mostrar['Tipo_Cita']; ?>
   
            <br>
            <label style="font-weight:normal;font-weight:bold" class="col-md-4"> Notas internas :</label>
           
            <?php echo $mostrar['Notas_Internas']; ?>
       
            <br>
            <label style="font-weight:normal;font-weight:bold" class="col-md-4"> Fecha :</label>
          
            <?php echo $mostrar['Fecha_Cita']; ?>
       
            <br>
            <label style="font-weight:normal;font-weight:bold" class="col-md-4"> Hora Cita :</label>
          
            <?php echo $mostrar['Hora_Cita']; ?>
       
            <br>
            <label style="font-weight:normal;font-weight:bold" class="col-md-4"> Estado :</label>
         
            <?php echo $mostrar['Estado_Cita']; ?>
  
            <br>
 
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>   

      </div>
    </div>
  </div>
</div>
