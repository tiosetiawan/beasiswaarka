<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form

$name        = $_POST['name'];
$region_id   = $_POST['region_id'];
$address     = $_POST['address'];
$income      = $_POST['income']; 



// menginput data ke database
mysqli_query($koneksi,"INSERT INTO person  VALUES('','$name','$region_id', '$address', '$income', NOW())");

// mengalihkan halaman kembali ke index.php
header("location:person.php");

?>