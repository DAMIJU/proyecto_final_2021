<?php 

include('DB/conexion.php');

/* AQUI ATRAPAMOS LOS DATOS */
$task = $_POST['task'];

/* AQUI SE CREA Y SE EJECUTA EL QUERY PARA INSERTAR LA NUEVA TAREA/PENDIENTE */
$sql = "INSERT INTO tabla_pendientes (titulo) VALUES ('$task')";
$result = mysqli_query($con, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>