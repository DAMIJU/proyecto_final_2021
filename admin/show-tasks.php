<?php 

include('DB/conexion.php');

$sql = "SELECT * FROM tabla_pendientes";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

?>

<li>
    <span class="text"><?php echo $row['titulo']; ?></span>
    <i id="removeBtn" class="icon fa fa-trash" data-id="<?php echo $row['id']; ?>"></i>
</li>

<?php
    }
    echo '<div class="pending-text">Hay ' . mysqli_num_rows($result) . ' tareas pendientes.</div>';
} else {
    echo "<li><span class='text'>No Record Found.</span></li>";
}

?>