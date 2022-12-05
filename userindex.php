<?php
session_start();

    include("connect.php");
    include("function.php");

    $user_data = check_login($conn)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Low Battery Coffee</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
</head>

<!-- Navbar Section -->
<nav class="navbar">
    <div class="navbar__container">
        <a href="#home" id="navbar__logo">Low Battery Coffee</a>
        <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
            <li class="navbar__item">
                <a href="#home" class="navbar__links" id="home-page">Home</a>
            </li>
            <li class="navbar__item">
                <a href="#about" class="navbar__links" id="about-page">About</a>
            </li>
            <li class="navbar__item">
                <a href="#services" class="navbar__links" id="services-page">Drinks</a>
            </li>
            <li class="navbar__item">
            <li><a href="index.php" class="navbar__links" id="home-page">Logout
            <?php echo $user_data['username'];?><i
                        class="fa-solid fa-user-check"></i></a>
            </li>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero" id="home">
    <div class="hero__container">


        <button class="main__btn"><a href="#services">Recharge Yourself!!</a></button>
    </div>
</div>

<!-- About Section -->
<div class="main" id="about">
    <div class="main__container">
        <div class="main__img--container">
            <div class="main__img--card"><i class="fas fa-layer-group"></i></div>
        </div>
        <div class="main__content">
            <h1>Low Battery Coffee</h1>

            <h3>419 S Littler Ave, Edmond, OK 73034</h3>
            <h3>405-888-7128</h3>
            <p>Service options: Dine-in · Curbside pickup · No delivery</p>

        </div>
    </div>
</div>

<!-- Services Section -->
<div class="services" id="services">
    <h1>Our Drinks</h1>
    <div class="services__wrapper">
        <div class="services__card">
            <img style="object-fit: cover;" src="../images/Chai.jpeg" alt="">

            <h2>Chai Latte</h2>
            <p>15 Combinations</p>
            <div class="services__btn"> <button onclick="window.location.href='./chai.html';">
                    Start Order
                </button> </div>


        </div>
        <div class="services__card">
            <img src="../images/Green.jpeg" alt="">
            <h2>Green Tea</h2>
            <p>5 Combinations</p>
            <div class="services__btn"> <button onclick="window.location.href='./green.html';">
                    Start Order
                </button> </div>
        </div>
        <div class="services__card">
            <img src="../images/Cap.jpeg" alt="">
            <h2>Cappuccino</h2>
            <p>20 Combinations</p>
            <div class="services__btn"> <button onclick="window.location.href='./cap.html';">
                    Start Order
                </button> </div>
        </div>
        <div class="services__card">
            <img src="../images/Espresso.webp" alt="">
            <h2>Espresso</h2>
            <p>Choose your flavour</p>
            <div class="services__btn"> <button onclick="window.location.href='./esp.html';">
                    Start Order
                </button> </div>
        </div>
    </div>
</div>



<!-- Footer Section -->
<div class="footer__container">
    <div class="footer__links">
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2>About Us</h2>
                <a href="/sign__up">Aashri LLC.</a> <a href="/">Low Battery Inc.</a>

            </div>
            <div class="footer__link--items">
                <h2>Contact Us</h2>
                <a href="/">lowbattery@gmail.com</a> <a href="/">4058720976</a>

            </div>
        </div>

        <div class="footer__link--items">
            <h2>Follow Us</h2>
            <a href="https://www.instagram.com/lowbatterycoffee">Instagram</a> <a
                href="https://www.facebook.com/">Facebook</a>
            <a href="/">Youtube</a> <a href="/">Twitter</a>
        </div>
    </div>
</div>
<section class="social__media">
    <div class="social__media--wrap">
        <div class="footer__logo">
            <a href="/" id="footer__logo">Low Battery</a>
        </div>
        <p class="website__rights">© LOW BATTERY 2022. All rights reserved</p>
        <div class="social__icons">
            <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="/" class="social__icon--link"><i class="fab fa-instagram"></i></a>
            <a href="/" class="social__icon--link"><i class="fab fa-youtube"></i></a>
            <a href="/" class="social__icon--link"><i class="fab fa-linkedin"></i></a>
            <a href="/" class="social__icon--link"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</section>
</div>

<script src="app.js"></script>
</body>

</html>