<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

$d = mysqli_query($koneksi,"insert into tbdokter values('','$nama','$no_telp','$alamat')");

header("location:dokter.php");
?>