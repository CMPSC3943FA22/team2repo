<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "test";

if(!$conn = mysqli_connect($host,$user,$pass,$name))
{
    die("Failed to Connect!");
}
?>