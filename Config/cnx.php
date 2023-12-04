<?php  
$con=mysqli_connect("localhost","root","","you_booking");
if(!$con){
    echo "failed connexion".mysqli_connect_error();
}

mysqli_set_charset($con, "utf8mb4");
?>