<?php
include("function/functions.php");
session_start();
if(!isset($_SESSION['email'])){
    header("location:login1.php");
}
else{
    $email = $_SESSION["email"];
    $idbuku = $_GET["idbuku"];
    $kuantitas = $_GET["kuantitas"];
    mysqli_query($conn, "INSERT INTO logs (id_buku, email, hari, jenis, banyak) VALUES ('$idbuku', '$email', DAYOFWEEK(NOW()), 'kembali', '$kuantitas')");
    mysqli_query($conn, "DELETE FROM dipinjam WHERE bookid = '$idbuku'");
    header("location:list_pinjam.php");
}


?>


