<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div>
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="bed-outline"></ion-icon></span>
                        <span class="title">YouBooking</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">profile</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">

                    </label>
                </div>

                <div class="user">
                    <img src="client.jpg" alt="">
                </div>
            </div>


            <h1>Hey nimaaa </h1>
            <h2>Welcome back!</h2>
            <?php
            require_once("./Config/cnx.php");


            // Your SQL query
            $sql = "
SELECT
    r.ID ,
    u.Nom ,
    u.Prenom,
    u.Email ,
    c.Type_chambre,
    nc.Numero,
    h.Nom_hotel ,
    r.Date_debut ,
    r.Date_fin 
FROM
    reservations r
JOIN
    utilisateurs u ON r.ID_Utilisateur = u.ID
JOIN
    numero_chambre nc ON r.Numero_Chambre = nc.ID
JOIN
    chambres c ON nc.chambre_id = c.ID
JOIN
    hotels h ON c.hotel_id = h.ID
WHERE
    h.ID = 1;
";

            $result = mysqli_query($con, $sql);
         
            
            // Check for errors
            if (!$result) {
                die("Query failed: " . mysqli_error($con));
            }
            ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Reservation Report</title>
                <!-- Add your styling if needed -->
            </head>

            <body>
                <h1>Reservation Report for Hotel </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Reservation ID</th>
                            <th>User Name</th>
                            <th>User First Name</th>
                            <th>User Email</th>
                            <th>Room Type</th>
                            <th>Room Number</th>
                            <th>Check-In Date</th>
                            <th>Check-Out Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                                <tr>
                                <td> $row[ID]</td>
                                <td> $row[Nom]</td>
                                <td> $row[Prenom]</td>
                                <td> $row[Email]</td>
                                <td> $row[Type_chambre]</td>
                                <td> $row[Numero]</td>
                                <td> $row[Date_debut]</td>
                                <td> $row[Date_fin]</td>
                                <td>
                                <a class ='btn btn-danger btn-sm 'href =\"res_delete.php?id=$row[ID]\"onClick=\"return confirm('Are you sure you want to delete?')\" >Delete</a>
                                </td>
                                </tr>";
                        }


                        ?>
                    </tbody>
                </table>

                <?php
                mysqli_close($con);
                ?>
            </body>

            </html>



            <script src="assets/js/main.js"></script>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>