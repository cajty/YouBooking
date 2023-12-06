<?php
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "you_booking";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $hotelName = $_POST['nom'];
    $hotelEmail = $_POST['email'];
    $hotelPhone = $_POST['phone'];
    $hotelDescription = $_POST['description'];

    $sql = "INSERT INTO hotels (`Nom_hotel`, `Email`, `Phone`, `Description`) VALUES ('$hotelName', '$hotelEmail', '$hotelPhone', '$hotelDescription')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data inserted successfully!";
    } else {
        echo "Error";
    }

    mysqli_close($conn);
}
?>