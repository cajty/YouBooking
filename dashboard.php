<?php
session_start();
if ($_SESSION["typeUser_id"] === 'admin' || $_SESSION["typeUser_id"] === 'proprietaire de hotel') {
    
} else {
    header('location: ./login.php');
    exit(); 
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>c:\xampp\htdocs\problem_solving\offre.jpg c:\xampp\htdocs\problem_solving\client.jpg

<body>
    <div class="container">
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
                        <span class="title">Profile</span>
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
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="client.jpg" alt="">
                </div>
            </div>


            <h1>Hey Maryem</h1>
            <h2>Welcome back!</h2>

            <div class="best-offer-section">
                <h2>Best Offer</h2>
                
                <div class="offer-card">
                    <img src="./imag/offre.jpg" alt="Best Offer Image">
                    <div class="offer-details">
                        <h3>Special Deal</h3>
                        <p>Book now and get a special discount!</p>
                        <a href="#" class="btn">Book Now</a>
                    </div>
                </div>
                <div class="offer-card">
                    <img src="./imag/offre.jpg" alt="Best Offer Image">
                    <div class="offer-details">
                        <h3>Special Deal</h3>
                        <p>Book now and get a special discount!</p>
                        <a href="#" class="btn">Book Now</a>
                    </div>
                </div>
                <div class="offer-card">
                    <img src="./imag/offre.jpg" alt="Best Offer Image">
                    <div class="offer-details">
                        <h3>Special Deal</h3>
                        <p>Book now and get a special discount!</p>
                        <a href="#" class="btn">Book Now</a>
                    </div>
                </div>
                <div class="offer-card">
                    <img src="./imag/offre.jpg" alt="Best Offer Image">
                    <div class="offer-details">
                        <h3>Special Deal</h3>
                        <p>Book now and get a special discount!</p>
                        <a href="#" class="btn">Book Now</a>
                    </div>
                </div>
                <div class="offer-card">
                    <img src="./imag/offre.jpg" alt="Best Offer Image">
                    <div class="offer-details">
                        <h3>Special Deal</h3>
                        <p>Book now and get a special discount!</p>
                        <a href="#" class="btn">Book Now</a>
                    </div>
                </div>
            </div>
            

    <script src="assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>