<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tbdokter where id='$id'");

header("location:dokter.php");

?>