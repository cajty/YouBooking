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
        }

        main .contenr .touts .info {
            width: 300px;
            line-height: 3;
        }

        .imag {
            height: auto;
            width: 500px;

        }

        main .contenr .touts .info {
            padding: 10px;
            line-height: 2;
        }

        main .contenr .touts .info p {
            display: flex;
            width: 100%;
            justify-content: space-between;
            padding: 5px;
            font-weight: 600;
        }

        main .contenr .touts .info span {
            width: 60%;
        }

        main .contenr .touts .info .name {
            width: 100%;
            font-weight: 500;
            font-size: 22px;
        }

        main .contenr .touts .info .name,
        main .contenr .touts .info span {
            color: #b47f2f;
            font-weight: bold;
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
                if ($v !== null) {
                    $sql = "SELECT * FROM chambres
                    INNER JOIN hotels ON hotels.ID = chambres.hotel_id WHERE hotels.ID = $v ";
                    $result = mysqli_query($con, $sql);


                    $row = mysqli_fetch_assoc($result);
                    print_r($row);
                    echo "
                    <div class='cart'>
                <div class='imageHotel'>
                    <img src='./imag/hero.jpg' alt='image'>
                </div>
                <div class='info'>
                    <p class='name'>$row[ID]</p>
                    <p class='name'>$row[Nom_hotel]</p>
                </div>
            </div>
                    
                    ";

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                        <div class='cart'>
                    <div class='imageHotel'>
                        <img src='./imag/hero.jpg' alt='image'>
                    </div>
                    <div class='info'>
                        <p class='name'>$row[ID]</p>
                        <p class='name'>$row[Nom_hotel]</p>
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