<?php
include 'connexion.php';

$id = $_GET['id'];
$select = "SELECT * FROM hotels WHERE id = $id";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($res);

if (!$row) {
    die("Hotel not found");
}

if (isset($_POST['submit'])) {
    $hotelName = $_POST['nom'];
    $hotelEmail = $_POST['email'];
    $hotelPhone = $_POST['phone'];
    $hotelDescription = $_POST['description'];

    $sql = "UPDATE `hotels` SET `Nom_hotel`='$hotelName', `Email`='$hotelEmail', `Phone`='$hotelPhone', `Description`='$hotelDescription' WHERE id=$id";
    $resu = mysqli_query($conn, $sql);

    if ($resu) {
        header('location: ./dashbord.php');
    } else {
        header('location: home.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>Edit Hotel</h2>
        <form method="post" action="">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nom</label>
                <div>
                    <input type="text" class="form-control" name="nom" value="<?php echo $row['Nom_hotel']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div>
                    <input type="text" class="form-control" name="email" value="<?php echo $row['Email']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div>
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['Phone']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Description</label>
                <div>
                    <input type="text" class="form-control" name="description" value="<?php echo $row['Description']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-warning" name="submit">Update</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-warning" href="./dashbord.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
