<?php
session_start();

    include("connect.php");
    include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password))
    {
        //read from database
        $query = "select * from signup where username = '$username' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] === $password)
                {
                    echo"Login sucessfull !";
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: userindex.php");
                    die;
                }
            }
            
        }
        echo"Wrong username or Password!!";
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
    <title>Library- Login</title>
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
                <a href="sighin.php" class="button" id="signup">Login</a>
            </li>
        </ul>
    </div>
</nav>


<body>
    <div class="container">
        <div class="form">
            <form action="" method = "post">
            <h1>Login</h1>
            <input type="text" id="username" name="username" placeholder="Enter Username"><br>
            <input type="password" id="password" name="password" placeholder="Enter Password"><br>
            <input type="submit" id="submit" name="submit" class="sign-btn" value="Login"><br>
            </form>
            <p id="message"></p>
            <span>Not have an account? <a href="signup.php">Signup</a></span>
        </div>
    </div>
    <script src="validate.js"></script>
</body>

</html>