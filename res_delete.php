<?php
// Include the database connection file
require_once("./Config/cnx.php");

// Get id parameter value from URL
$id = $_GET['id'];
$g = "DELETE FROM reservations WHERE Numero_Chambre = '$id';
UPDATE numero_chambre SET statusChambres= 1 WHERE id = '$id'; ";
// Delete row from the database table
$result = mysqli_query($con, $g) ;

// Redirect to the main display page (index.php in our case)
header("Location:dashboard_S_C.php");

?>