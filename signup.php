<?php
session_start();

include("connect.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_id = random_num(10);
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $POST['user_type'];

    if(!empty($fullname) && !empty($email) && !empty($username) && !empty($password))
    {
        //save to database
        $query = "insert into signup(user_id,fullname,email,username,password,user_type) values ('$user_id', '$fullname', '$email', '$username', '$password','$user_type')";
        mysqli_query($conn, $query);
        header("Location: signin.php");
        die;
    }else
    {
        echo"Please enter some valid information!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="signin.css">
    <script src="animate.js"></script>
    <title>Library- Sign Up</title>
</head>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Low Battery Coffee</title>
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
                <a href="./index.php" class="navbar__links" id="home-page">Home</a>
            </li>
            <li class="navbar__item">
                <a href="./index.php#about" class="navbar__links" id="about-page">About</a>
            </li>
            <li class="navbar__item">
                <a href="./index.php#services" class="navbar__links" id="services-page">Drinks</a>
            </li>
            <li class="navbar__btn">
                <a href="signin.php" class="button" id="signup">Login</a>
            </li>
        </ul>
    </div>
</nav>

<body>
    <div class="container">
        <div class="form">
            <form action="" method = "post">
            <h1>Sign Up</h1>
            <input type="text" id="fullname" name="fullname" placeholder="Enter Fullname"><br>
            <input type="email" id="email" name="email" placeholder="Enter email"><br>
            <input type="text" id="username" name="username" placeholder="Enter Username"><br>
            <input type="password" id="password" name="password" placeholder="Enter Password"><br>
            <select id="user_type" name = "user_type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select><br><br>
            <input type="submit" id="signup" name="signup" class="sign-btn" value="Sign up"><br>
            </form>
            <p id="message"></p>
            <span>Already have an account? <a href="signin.php">Signin</a></span>
        
        </div>
    </div>
</body>

</html>