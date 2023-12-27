<?php
include("./Config/cnx.php");
session_start();
$_SESSION["pays"] = null;
$_SESSION["vill"] = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>youhotel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.cs">
</head>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }



    .hero_section {
        background-image: url(./imag/hotel.jpg);
        background-size: cover;
        position: relative;
        background-attachment: fixed;

    }

    .hero_section .contenr {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .hero_section .contenr p {
        font-size: 26px;
        color: #fff;
        font-weight: bold;
        line-height: 1.6;
        width: 600px;
        text-align: center;
        z-index: 555;
        background-color: rgb(0, 0, 0, 0.5);
        border-radius: 8px;
        padding: 10px;
        font-family: Arial, Helvetica, sans-serif;
    }

    @media (max-width: 768px) {
        .header .contenr ul {
            display: none;
        }

        .hero_section .contenr p {
            font-size: 18px;
        }
    }

    p,
    h3,
    a,
    button,
    input {
        font-family: Arial, Helvetica, sans-serif;
    }

    main {
        margin-top: 70px;
    }

    main .contenr .about {
        min-height: 70vh;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 40px;
        overflow: hidden;
        margin-bottom: 50px;
    }

    @media (max-width: 768px) {
        .header .contenr ul {
            display: none;
        }

        .hero_section .contenr p {
            font-size: 18px;
        }
    }

    main .contenr .about .about_info,
    main .contenr .about .about_image {
        width: 500px;
        height: 100%;
    }

    main .contenr .about .about_info h3 {
        color: #b47f2f;
        font-weight: bold;
        margin-bottom: 40px;
        font-size: 30px;
    }

    main .contenr .about .about_info p {
        line-height: 1.6;
        font-size: 18px;
        color: gray;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .header .contenr ul {
            display: none;
        }


        .hero_section .contenr p {
            font-size: 18px;
        }

        main .contenr .about .about_info p {
            font-size: 16px;
        }

        main .contenr .about .about_info h3 {
            font-size: 20px;
        }
    }

    main .contenr .about .about_image {
        flex: 1;
        overflow: hidden;
        border-radius: 8px;
    }

    main .contenr .about .about_image img {
        width: 100%;
        height: 100%;
        transition: 1s;
    }

    main .contenr .about .about_image img:hover {
        transform: scale(1.6) rotate(3deg);
    }



    main .contenr .hotels {
        padding: 40px 0;
        width: 100%;
        height: auto;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
    }

    main .contenr .hotels .cart {
        height: auto;
        background-color: rgb(245, 245, 245);
    }

    main .contenr .hotels .cart .imageHotel {
        width: 100%;
        height: 200px;
        overflow: hidden;

    }

    main .contenr .hotels .cart .imageHotel img {
        width: 100%;
        height: 100%;
        transition: 0.3s;
    }

    main .contenr .hotels .cart .imageHotel img:hover {
        transform: scale(1.3);
    }

    main .contenr .hotels .cart .info {
        padding: 10px;
        line-height: 2;
    }

    main .contenr .hotels .cart .info p {
        display: flex;
        width: 100%;
        justify-content: space-between;
        padding: 5px;
        font-weight: 600;
    }

    main .contenr .hotels .cart .info span {
        width: 60%;
    }

    main .contenr .hotels .cart .info .name {
        width: 100%;
        font-weight: 500;
        font-size: 22px;
    }

    main .contenr .hotels .cart .info .name,
    main .contenr .hotels .cart .info span {
        color: #b47f2f;
        font-weight: bold;
    }

    main .contenr .hotels .cart .info a {
        background-color: #b47f2f;
        color: #fff;
        padding: 6px 20px;
        margin-top: 10px;
        border-radius: 3px;
        font-size: 18px;
    }

    main .mini_hero {
        height: 20vh;

        background-color: rgb(245, 245, 245);
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;

    }

    main .mini_hero p {
        color: #000;
        font-size: 26px;
        font-weight: bold;
        letter-spacing: 1px;
        font-family: Arial, Helvetica, sans-serif;
    }

    @media (max-width: 768px) {
        main .mini_hero p {
            font-size: 18px;
            text-align: center;
        }
    }

    main .mini_hero h3 {
        color: #b47f2f;
        font-weight: bold;
        font-size: 26px;
    }

    .filter {
        height: 20vh;

        margin: 20px 0;
        background-color: rgb(245, 245, 245);
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 8px;
        padding: 10px;
    }

    .filter select {
        background-color: #b47f2f;
        color: #fff;
        padding: 10px 40px;
        cursor: pointer;
        font-size: 22px;
        outline: none;
        border: none;
    }

    .fil {
        line-height: 5;
    }

    .buuton {
        color: #fff;
        background-color: #b47f2f;
        padding: 5px 20px;
        font-size: 18px;
        cursor: pointer;
        border-radius: 8px;
    }




    .fltres {
        background-color: rgb(245, 245, 245);
        padding: 30px 0;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    #fltres {
        display: none;
    }

    #vill {
        display: none;
    }
</style>

<body>
    <?php
    require("./includes/header.php");
    ?>
    <section class="hero_section">
        <div class="contenr">
            <p>Bienvenue sur YouBoking ! Découvrez un monde de réservations avec facilité et confort. Alors, commencez
                votre merveilleux voyage dès aujourd'hui !</p>
        </div>
    </section>
    <main>

        <div class="contenr">
            <div class="about">
                <div class="about_info">
                    <h3>À propos de YouBooking</h3>
                    <p>
                        Bienvenue sur YouBooking, votre plateforme de réservation d'hôtels de premier plan. Nous vous
                        offrons une expérience unique, alliant excellence et confort. Explorez une sélection d'hôtels
                        adaptés à tous les goûts et budgets, que vous recherchiez le luxe ou la tranquillité en pleine
                        nature. Avec YouBooking, profitez d'une réservation simple et fiable. Choisissez-nous pour un
                        voyage où beauté et confort se rencontrent à chaque instant. Merci de faire confiance à
                        YouBooking pour rendre chaque voyage exceptionnel
                    </p>
                </div>
                <div class="about_image">
                    <img src="./imag/img.jpg" alt="">
                </div>
            </div>
            <div class="mini_hero">
                <h3>Notre hoteles</h3>
                <p>Bienvenue dans les hôtels les plus raffinés YouBooking</p>
            </div>
            <div class="filter">
                <button id="pays" class="btn">Filtershing pour pays</button>
                <button id="city" class="btn">Filtershing pour villes</button>
            </div>

            <form action="" method="POST">
                <div class="fltres" id="fltres">
                    <?php
                    $sql = "SELECT DISTINCT `Pays`  FROM `localisation_hotels` WHERE 1";
                    $result = mysqli_query($con, $sql);
                    // echo "<pre>";
                    // print_r( mysqli_fetch_assoc($result));
                    // echo "</pre>";
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                                  <input type='submit' name='az' class='buuton' value=$row[Pays]>    
                                ";
                        }
                    }


                    if (isset($_POST["az"])) {
                        echo $_POST["az"];
                        $_SESSION["pays"] = $_POST["az"];
                    }

                    ?>
                </div>
                <div class="fltres" id="vill">
                    <?php
                    $sql = "SELECT DISTINCT `Ville`  FROM `localisation_hotels` WHERE 1";
                    $result = mysqli_query($con, $sql);
                    // echo "<pre>";
                    // print_r( mysqli_fetch_assoc($result));
                    // echo "</pre>";
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                                  <input type='submit' name='vill' class='buuton' value=$row[Ville]>    
                                ";
                        }
                    }

                    if (isset($_POST["vill"])) {
                        $_SESSION["vill"] = $_POST["vill"];
                    }


                    ?>
                </div>
            </form>



            <div class="hotels">

                <?php
                $er = $_SESSION["pays"];
                $vil = $_SESSION["vill"];
                if ($_SESSION["pays"] !== null) {
                    $sql = "SELECT * FROM localisation_hotels
                INNER JOIN hotels ON hotels.ID = localisation_hotels.hotel_id WHERE localisation_hotels.Pays =  '$er'";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                        <div class='cart'>
                    <div class='imageHotel'>
                        <img src='./imag/hero.jpg' alt='image'>
                    </div>
                    <div class='info'>
                        <p class='name'>$row[Nom_hotel]</p>
                        <p>Countery <span>$row[Pays]</span> </p>
                        <p>City <span>$row[Ville]</span> </p>
                        <a href='./detalise.php?id=$row[ID]' name='bilal'>Show more</a>
                    </div>
                </div>
                        
                        ";
                            $_SESSION["vill"] = null;
                        }
                    } else {
                        echo "0 results";
                    }
                } else if ($_SESSION["vill"] !== null) {
                    $sql = "SELECT * FROM localisation_hotels
                    INNER JOIN hotels ON hotels.ID = localisation_hotels.hotel_id WHERE localisation_hotels.Ville =  '$vil'";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                            <div class='cart'>
                        <div class='imageHotel'>
                            <img src='./imag/hero.jpg' alt='image'>
                        </div>
                        <div class='info'>
                        
                            <p class='name'>$row[Nom_hotel]</p>
                            <p>Countery <span>$row[Pays]</span> </p>
                            <p>City <span>$row[Ville]</span> </p>
                            <a href='./detalise.php?id=$row[ID]' name='bilal'>Show more</a>
                        </div>
                    </div>
                            
                            ";
                            $_SESSION["pays"] = null;
                        }
                    }
                } else {
                    $sql = "SELECT * FROM localisation_hotels
                INNER JOIN hotels ON hotels.ID = localisation_hotels.hotel_id";
                    $result = mysqli_query($con, $sql);

                    
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                        <div class='cart'>
                    <div class='imageHotel'>
                        <img src='./imag/hero.jpg' alt='image'>
                    </div>
                    <div class='info'>
                        <p class='name'>$row[Nom_hotel]</p>
                        <p>Countery <span>$row[Pays]</span> </p>
                        <p>City <span>$row[Ville]</span> </p>
                        <a href='./detalise.php?id=$row[ID]' name='bilal'>Show more</a>
                    </div>
                </div>
                        
                        ";
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($con);
                }

                ?>
            </div>
            <?php
            require("./includes/noterChompre.php");
            ?>
        </div>
    </main>
    <?php
    require("./includes/footer.php");
    ?>

    <script>
        let pays = document.getElementById("fltres");
        let vill = document.getElementById("vill");
        let pp = document.getElementById("pp");
        let btn = document.querySelectorAll(".filter .btn");
        console.log(pays);
        console.log(vill);
        btn[0].addEventListener("click", () => {
            fltres.style.display = "flex"
        })
        btn[1].addEventListener("click", () => {
            vill.style.display = "flex"
        })

        pays.addEventListener("click", () => {
            fltres.style.display = "flex"
        })
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>