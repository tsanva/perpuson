<?php
$db_server = "localhost";
$db_user = "vasant";
$db_pass = "password";
$db_name = "perpuson";

$koneksi= mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if($koneksi->connect_error){
	die("error");
}
    ?>