<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "apg";

$con = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()) {
    die("koneksi gagal! : " . mysqli_connect_error());
}

?>