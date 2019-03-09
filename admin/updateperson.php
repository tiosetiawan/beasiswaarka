<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form
$id          = $_POST['id'];
$name        = $_POST['name'];
$region_id   = $_POST['region_id'];
$address     = $_POST['address'];
$income      = $_POST['income']; 


// update data ke database
mysqli_query($koneksi,"UPDATE person SET name='$name', region_id='$region_id', address='$address', income='$income' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:person.php");

?>