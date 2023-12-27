<?php
    if (isset($_POST['submit'])) {
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "you_booking";

    
        $conn =  new mysqli($servername, $username, $password, $dbname);

        if ($conn)
        {
            echo "Connected successfully!";
        } else {
            echo "Error";
        }
      
        $typeChambre = $_POST['typeChambre'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $disponibilite = $_POST['disponibilite'];
        $quantite = $_POST['quantite'];
        $hotel_id = $_POST['ID'];

       

       
        $checkHotelQuery = "SELECT * FROM `hotels` WHERE `ID` = '$hotel_id'";
        $result = mysqli_query($conn, $checkHotelQuery);
        
        if (mysqli_num_rows($result) > 0) {
            
            $sql = "INSERT INTO `chambres`(`Type_chambre`, `Description`, `Prix`, `Disponibilite`, `Quantite`, `hotel_id`) VALUES ('$typeChambre', '$description', '$prix', '$disponibilite', '$quantite', '$hotel_id')";
            $query = mysqli_query($conn, $sql);
        
            if ($query) {
                echo "Data inserted successfully!";
            } else {
                echo "Errr";
            }
        } else {
            echo "Hotel with ID $hotel_id not found";
        }
    }
        
    ?>