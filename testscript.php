<?php
session_start();

if (isset($_POST['register'])) {
    registerUser();
} else if (isset($_POST['login'])) {
    loginUser();
}

function registerUser()
{
    require './Config/cnx.php';

    $firstname = $_POST['Prenom'] ?? '';
    $lastname = $_POST['Nom'] ?? '';
    $email = $_POST['Email'] ?? '';
    $phone = $_POST['Phone'] ?? '';
    $password = isset($_POST['Mot_de_passe']) ? trim($_POST['Mot_de_passe']) : '';
    $pass = password_hash($password, PASSWORD_DEFAULT);
    $image = $_FILES['image']['name'] ?? '';
    $image_tmp = $_FILES['image']['tmp_name'] ?? '';
    $typeuser = $_POST['typeUser_id'] ?? '';
    $path_image = "./images/users/" . $image;
    $Autres_informations = $_POST['Autres_informations'] ?? '';

    $query = "INSERT INTO `utilisateurs`(`Nom`, `Prenom`, `Email`, `Phone`, `image`, `Mot_de_passe`, `Autres_informations`, `typeUser_id`) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssssss", $lastname, $firstname, $email, $phone, $image, $pass, $Autres_informations, $typeuser);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $varimage = move_uploaded_file($image_tmp, $path_image);
            echo "Inscription réussie";
            header("./index.php");
        } else {
            echo "Erreur lors de l'inscription";
        }
    } else {
        echo "deamande invalide";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
}

function loginUser()
{
    require './Config/cnx.php';

    $email = trim($_POST['Email'] ?? '');
    $pass = trim($_POST['password'] ?? '');

    $query = "SELECT * FROM `utilisateurs` WHERE Email = ?";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                $passafterfetch = $row['Mot_de_passe'];

                if (password_verify($pass, $passafterfetch)) {
                    $role = $row["typeUser_id"];
                    $id = $row["ID"];

                    switch ($role) {
                        case 1:
                            $_SESSION["typeUser_id"] = 'admin';
                            header('location:./dashboard.php');
                            break;
                        case 2:
                            $_SESSION["typeUser_id"] = 'client';
                            header('location:./index.php');
                            break;
                        case 3:
                            $_SESSION["typeUser_id"] = 'service client';
                            break;
                        case 4:
                            $_SESSION["typeUser_id"] = 'proprietaire de hotel';
                            header('location:./dashboard.php');
                            break;
                        default:
                            break;
                    }

                    $_SESSION['ID'] = $id;
                    exit;
                } else {
                    echo "Mot de passe incorrect";
                }
            } else {
                echo "Utilisateur non trouvé. Veuillez vous inscrire.";
                echo "<a href='./register.php'>S'inscrire</a>";
            }
        } else {
            echo "Erreur lors de la requête";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($con);
    }
}
?>
