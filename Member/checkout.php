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
    $kuantitas = $_GET["kuantitas"];
    mysqli_query($conn, "INSERT INTO logs (id_buku, email, hari, jenis, banyak) VALUES ('$idbuku', '$email', DAYOFWEEK(NOW()), 'pinjam', '$kuantitas')");
    mysqli_query($conn, "UPDATE cart SET email = '$email' WHERE ip_add = '$ip_add'");
    mysqli_query($conn, "INSERT INTO dipinjam (bookid, ip_add, email) SELECT bookid, ip_add, email FROM cart WHERE bookid ='$idbuku'");
    mysqli_query($conn, "DELETE FROM cart WHERE bookid = '$idbuku' AND email ='$email'");
    header("location:cart.php");
}

?>