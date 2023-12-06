<style>
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
</style>

<header class="header">
    <div class="contenr">
        <div class="logo">
            <a href="index.php">YouBooking</a>
        </div>
        <ul>
            <li> <a href="#"> home </a> </li>
            <li> <a href="./register.php"> register</a></li>
            <li> <a href="./login.php"> log in </a></li>
        </ul>
    </div>
</header>