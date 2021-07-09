<?php
include("function/functions.php");
session_start();
if(!isset($_SESSION['email'])){
    header("location:login1.php");
}
else{
    $ip_add = getIpAdd();
    $email = $_SESSION["email"];
    $idbuku = $_GET["idbuku"];
    mysqli_query($conn, "DELETE FROM cart WHERE bookid = '$idbuku' AND (email ='$email' OR email IS NULL)");
    header("location:cart.php");
}

?>