<?php 
// koneksi database
include 'conf/db.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from category where name='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:kategori.php");
 
?>