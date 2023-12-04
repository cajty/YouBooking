<?php
include("./Config/cnx.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>youhotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    .header {

        height: 10vh;
        color: #000;
    }


    .header a {
        font-family: Arial, Helvetica, sans-serif;
    }

    .header .contenr .logo a {
        font-size: 36px;
        font-weight: bold;
        color: #b47f2f;
    }

    .header .contenr ul li a {
        font-size: 22px;
        font-weight: 500;
        transition: 1s;
    }

    .header .contenr ul li a:hover {
        color: #b47f2f;
    }

    .header .contenr ul li:first-child {
        color: #b47f2f;
    }

    @media (max-width: 768px) {
        .header .contenr ul {
            display: none;
        }
    }

    .hero_section {
        background-image: url(./imag/hotel.jpg);
        background-size: cover;
        position: relative;
        background-attachment: fixed;

    }

    /* .hero_section::before{
        content: " ";
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(97, 97, 97, 0.6);
        z-index: 1;
    } */
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

    main .mini_hero {
        height: 20vh;
        background-color: rgb(245, 245, 245);
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
    }

    main .mini_her {
        height: 10vh;
        background-color: rgb(245, 245, 245);
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    main .mini_hero h3,
    main .mini_her h3 {
        color: #b47f2f;
        font-weight: bold;
        font-size: 26px;
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

    main .contenr .chomber {
        padding: 40px 0;
        width: 100%;
        height: auto;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
    }
    .filter{
        height: 20vh;
        
        margin: 20px 0;
        background-color: rgb(245, 245, 245);
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 8px;
        padding: 10px;
    }
    .filter select{
        background-color: #b47f2f;
        color:#fff;
        padding: 10px 40px;
        cursor: pointer;
        font-size: 22px;
        outline: none;
        border: none;
    }
    .fil{
        line-height: 5;
    }
    footer {
        background-color: #b47f2f;
        color: #fff;
        display: flex;
    }
</style>

<body>
    <header class="header">
        <div class="contenr">
            <div class="logo">
                <a href="index.php">YouBooking</a>
            </div>
            <ul>
                <li> <a href="#"> home </a> </li>
                <li> <a href="./register.php"> register</a> </li>
                <li> <a href="./login.php"> log in </a></li>
            </ul>
        </div>
    </header>
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
                <div class="filter_pays fil">
                    <h4>Filtershing pour pays</h4>
                    <select name="select" id="vill">
                        <option value="maroc">maroc</option>
                        <option value="france">france</option>
                        <option value="USE">USE</option>
                        <option value="UAE">UAE</option>
                    </select>
                </div>
                <div class="filter_vill fil">
                    <h4>Filtershing pour villes</h4>
                    <select name="select" id="vill">
                        <option value="casa">casa</option>
                        <option value="agadir">agadir</option>
                        <option value="USE">USE</option>
                        <option value="UAE">UAE</option>
                    </select>
                </div>
            </div>
            <div class="hotels">
                <div class="cart">
                    <div class="imageHotel">
                        <img src="./imag/hero.jpg" alt="image">
                    </div>
                    <div class="info">
                        <p class='name'>name Hotel</p>
                        <p>Countery <span>Maroc</span> </p>
                        <p>City <span>Casa Blanca </span> </p>
                        <p>Prix ce soir <span> 100$ </span> </p>
                        <a>Show more</a>
                    </div>
                </div>
                <div class="cart">
                    <div class="imageHotel">
                        <img src="./imag/hero.jpg" alt="image">
                    </div>
                    <div class="info">
                        <p class='name'>name Hotel</p>
                        <p>Countery <span>Maroc</span> </p>
                        <p>City <span>Casa Blanca </span> </p>
                        <p>Prix ce soir <span> 100$ </span> </p>
                        <a>Show more</a>
                    </div>
                </div>
                <div class="cart">
                    <div class="imageHotel">
                        <img src="./imag/hero.jpg" alt="image">
                    </div>
                    <div class="info">
                        <p class='name'>name Hotel</p>
                        <p>Countery <span>Maroc</span> </p>
                        <p>City <span>Casa Blanca </span> </p>
                        <p>Prix ce soir <span> 100$ </span> </p>
                        <a>Show more</a>
                    </div>
                </div>
                <div class="cart">
                    <div class="imageHotel">
                        <img src="./imag/hero.jpg" alt="image">
                    </div>
                    <div class="info">
                        <p class='name'>name Hotel</p>
                        <p>Countery <span>Maroc</span> </p>
                        <p>City <span>Casa Blanca </span> </p>
                        <p>Prix ce soir <span> 100$ </span> </p>
                        <a>Show more</a>
                    </div>
                </div>
                <div class="cart">
                    <div class="imageHotel">
                        <img src="./imag/hero.jpg" alt="image">
                    </div>
                    <div class="info">
                        <p class='name'>name Hotel</p>
                        <p>Countery <span>Maroc</span> </p>
                        <p>City <span>Casa Blanca </span> </p>
                        <p>Prix ce soir <span> 100$ </span> </p>
                        <a>Show more</a>
                    </div>
                </div>
                <div class="cart">
                    <div class="imageHotel">
                        <img src="./imag/hero.jpg" alt="image">
                    </div>
                    <div class="info">
                        <p class='name'>name Hotel</p>
                        <p>Countery <span>Maroc</span> </p>
                        <p>City <span>Casa Blanca </span> </p>
                        <p>Prix ce soir <span> 100$ </span> </p>
                        <a>Show more</a>
                    </div>
                </div>
                <div class="cart">
                    <div class="imageHotel">
                        <img src="./imag/hero.jpg" alt="image">
                    </div>
                    <div class="info">
                        <p class='name'>name Hotel</p>
                        <p>Countery <span>Maroc</span> </p>
                        <p>City <span>Casa Blanca </span> </p>
                        <p>Prix ce soir <span> 100$ </span> </p>
                        <a>Show more</a>
                    </div>
                </div>
                <div class="cart">
                    <div class="imageHotel">
                        <img src="./imag/hero.jpg" alt="image">
                    </div>
                    <div class="info">
                        <p class='name'>name Hotel</p>
                        <p>Countery <span>Maroc</span> </p>
                        <p>City <span>Casa Blanca </span> </p>
                        <p>Prix ce soir <span> 100$ </span> </p>
                        <a>Show more</a>
                    </div>
                </div>
            </div>
            <div class="mini_her">
                <h3>Notre Chambre</h3>
            </div>
            <div class="chomber">
                <div class="imag_chomber">
                    <img src="./imag/room4.jpg">
                </div>
                <div class="imag_chomber">
                    <img src="./imag/room-4.jpg">
                </div>
                <div class="imag_chomber">
                    <img src="./imag/room-2.jpg">
                </div>
                <div class="imag_chomber">
                    <img src="./imag/room-3.jpg">
                </div>
                <div class="imag_chomber">
                    <img src="./imag/room6.jpg">
                </div>
                <div class="imag_chomber">
                    <img src="./imag/room5.jpg">
                </div>
                <div class="imag_chomber">
                    <img src="./imag/room6.jpg">
                </div>
                <div class="imag_chomber">
                    <img src="./imag/room5.jpg">
                </div>

            </div>
        </div>
    </main>
    <footer>
        <div class="contenr">
            <p>&copy; 2023 YouBoking All rights reserved.</p>
            <div class="social-icons">
                <a href="#" target="_blank">Facebook</a>
                <a href="#" target="_blank">Twitter</a>
                <a href="#" target="_blank">Instagram</a>
                <!-- Add more social icons as needed -->
            </div>
        </div>
    </footer>
</body>

</html>