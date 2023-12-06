<?php 
include 'connexion.php';


$id = $_GET['id']; 
$sql = "DELETE FROM hotels WHERE id ='$id'";
mysqli_query($conn, $sql);

header('location: dashbord.php'); 

?>