<?php
    if (isset($_POST['submit'])) {
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "you_";

    
        $conn =  new mysqli($servername, $username, $password, $dbname);

        if ($conn)
        {
            echo "Connected successfully!";
        } else {
            echo "Error";
        }
      
        $hotelName = $_POST['hotelName'];
        $hotelEmail = $_POST['email'];
        $hotelPhone = $_POST['phone'];
        $hotelDescription = $_POST['hotelDescription'];
       

       
       $sql = "INSERT INTO hotels (`Nom_hotel`, `Email`, `Phone`, `Description`) VALUES ('$hotelName', '$hotelEmail', '$hotelPhone', '$hotelDescription')";
    $query = mysqli_query($conn,$sql);
        if ($query) {
            echo "Data inserted successfully!";
        } else {
            echo "Error";
        }
    }
    ?>