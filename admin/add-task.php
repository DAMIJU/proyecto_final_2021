<?php 

include('DB/conexion.php');

$task = $_POST['task'];

$sql = "INSERT INTO tabla_pendientes (titulo) VALUES ('$task')";
$result = mysqli_query($con, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>