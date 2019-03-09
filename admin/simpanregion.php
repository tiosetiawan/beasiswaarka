<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form

$name = $_POST['name'];



// menginput data ke database
mysqli_query($koneksi,"INSERT INTO regions  VALUES('','$name', NOW())");

// mengalihkan halaman kembali ke index.php
header("location:regions.php");

?>