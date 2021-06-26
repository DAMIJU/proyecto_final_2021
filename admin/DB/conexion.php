
    <?php 
    $conn = mysqli_connect("localhost","root","","database_casme");
     
    if(!$conn){
        die("Connection error: " . mysqli_connect_error());	
    }
    ?>