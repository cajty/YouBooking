g<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
if (isset($_POST['register'])) {
    register();
} else if (isset($_POST['login'])) {
    login();
}
function register()
{
    require './Config/cnx.php';
    $firstname = $_POST['Prenom'];
    $lastname = $_POST['Nom'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $password = trim($_POST['Mot_de_passe']);
    $pass = password_hash($password, PASSWORD_DEFAULT);
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $typeuser = $_POST['typeUser_id'];
    $path_image = "./images/users/" . $image;
    $Autres_informations = $_POST['Autres_informations'];
    $qeury = "INSERT INTO `utilisateurs`(`Nom`, `Prenom`, `Email`, `Phone`, `image`, `Mot_de_passe`, `Autres_informations`, `typeUser_id`) 
    VALUES ('$lastname','$firstname','$email','$phone','$image',' $pass','$Autres_informations','$typeuser') ";
    $result = mysqli_query($con, $qeury);
    if ($result) {
        $varimage = move_uploaded_file($image_tmp, $path_image);
        echo "addedd successful";
    }
}

function login()
{
    require './Config/cnx.php';
    $email = trim($_POST['Email']);
    $pass = trim($_POST['password']);

    $query = " SELECT * FROM `utilisateurs` WHERE Email = ?";

    $stmt = mysqli_prepare($con, $query);
    if (!$stmt){echo "Erreur de préparation de la requête: " . mysqli_error($con);}
    else if ($stmt) {
        mysqli_stmt_bind_param($stmt,"s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (!$result) {
            echo "Erreur d'exécution de la requête: " . mysqli_error($con);
        }
        else if ($result) {
             $row = mysqli_fetch_assoc($result);
            if ($row) {
               
            // $passfromform = $pass; // Sauvegarde du mot de passe saisi
            $passafterfetch = $row["Mot_de_passe"];
            // $pass = password_hash($pass, PASSWORD_DEFAULT);
            // $passfromform=$pass;
           
            // // Output pour vérification
            // echo "Mot de passe saisi: $pass <br>";
            // echo "Mot de passe depuis la base de données: $passafterfetch <br>";

            if (password_verify($pass, $passafterfetch)) {
                $role = $row["typeUser_id"];
                $id = $row["ID"];
                if ($role == 1) {
                    $_SESSION["typeUser_id"] = 'admin';
                    $_SESSION['ID'] = $id;
                    header('location:./index.php');
                    exit;
                } else if ($role == 2) {
                    $_SESSION["typeUser_id"] = 'client';
                    $_SESSION['ID'] = $id;
                    header('location:./index.php');
                    exit;
                } else if ($role == 3) {
                    $_SESSION["typeUser_id"] = 'service client';
                    $_SESSION['ID'] = $id;
                    header('location:./index.php');
                    exit;
                } else if ($role == 4) {
                    $_SESSION["typeUser_id"] = 'proprietaire de hotel';
                    $_SESSION['ID'] = $id;
                    header('location:./index.php');
                    exit;
                }

            } else {var_dump(password_verify($pass, $passafterfetch)) ;
                echo "mot de passe incorrect  "; }
        }else echo "email not found";
        }
    }
}





?>