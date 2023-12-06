<?php
session_start();    
$_SESSION["typeUser_id"] ;
 session_destroy(); 
 header("location:./login.php");


?>