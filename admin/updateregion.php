<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
//$date = $_POST['created_at'];


// update data ke database
mysqli_query($koneksi,"UPDATE regions SET name='$name' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:regions.php");

?>