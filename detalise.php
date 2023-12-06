<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        main {
            min-height: 80vh;
        }

        main .contenr .touts {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }
        @media (max-width: 900px) {
            main .contenr .touts {
            display: flex;
            flex-wrap: wrap;
        }
    }


        main .contenr .touts .info {
            width: 300px;
            line-height: 3;
        }

        .imag {
            height: auto;
            width: 500px;

        }

        main .contenr .touts .detalisHotels .info {
            padding: 10px;
            line-height: 2;
        }

        main .contenr .touts .detalisHotels .info p {
            display: flex;
            width: 100%;
            justify-content: space-between;
            padding: 5px;
            font-weight: 600;
        }

        main .contenr .touts .detalisHotels .info span {
            width: 60%;
        }

        main .contenr .touts .detalisHotels .info .name {
            width: 100%;
            font-weight: 500;
            font-size: 22px;
        }

        main .contenr .touts .detalisHotels .info .name,
        main .contenr .touts .detalisHotels .info span {
            color: #b47f2f;
            font-weight: bold;
        }

        .detalisHotels {
            height: auto;

        }
        main .contenr .touts .cart{
            min-width: 200px;
            display: flex;
            flex-direction: column;
        }
        .infos p{
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .infos p span{
            font-size: 22px;
            color: #b47f2f; 
            font-weight: bold;
            margin-bottom: 20px;
        }
        .infos a{
            background-color: #b47f2f; 
            color: #fff;
            padding: 5px 20px;
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <?php
    require("./includes/header.php");
    ?>

    <main>
        <div class='contenr'>
            <div class='touts'>
            <?php
            include("./Config/cnx.php");
            $v = isset($_GET['id']) ? $_GET['id'] : null;
                
                    $sql = "SELECT * FROM localisation_hotels
                    INNER JOIN hotels ON hotels.ID = localisation_hotels.hotel_id  WHERE hotels.ID = $v";
                    $result = mysqli_query($con, $sql);


                    if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <div class='detalisHotels'>
                        <div class='imageHotel'>
                            <img src='./imag/hero.jpg' alt='image'>
                        </div>
                        <div class='info'>
                            <p class='name'>$row[Nom_hotel]</p>
                            <p>Countery <span>$row[Pays]</span> </p>
                            <p>City <span>$row[Ville]</span> </p>
                            <p>Email <span>$row[Email]</span> </p>
                            <p>Phone <span>$row[Phone]</span> </p>
                            <p>description <span>$row[Description]</span> </p>
                        </div>
                    </div>

                    ";
                    }
                    } else {
                    echo "0 results";
                    }
                

               
                
               
                if ($v !== null) {
                    $sql = "SELECT  chambres.Description  ,  chambres.Prix , chambres.Disponibilite , chambres.ID ,chambres.Type_chambre FROM chambres
                    INNER JOIN hotels ON hotels.ID = chambres.hotel_id WHERE hotels.ID = $v ";
                    $result = mysqli_query($con, $sql);


                    // $row = mysqli_fetch_assoc($result);
                    // print_r($row);
                

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                        <div class='cart'>
                    <div class='infos'>
                        <p class='name'>type : <span>  $row[Type_chambre] </span></p>
                        <p class='name'>Prix : <span> $row[Prix] </span></p>
                        <p class='name'>Description : <span> $row[Description] <span></p>
                        <a href='./chambre.php?id=$row[ID]' >reserve</a>
                    </div>
                </div>
                        
                        ";
                        }
                    }

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










    <!-- 
SELECT * FROM chambres
                INNER JOIN hotels ON hotels.ID = chambres.hotel_id WHERE hotels.ID=  1; -->

</body>

</html>