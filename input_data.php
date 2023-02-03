<?php
include 'koneksi.php';
$nama = $_POST['Nis'];
$kelas = $_POST['Kelas'];
$nis = $_POST['Jurusan'];
$jurusan = $_POST['Nama'];
$data = mysqli_query($Koneksi,"INSERT INTO `murid`(`NIS`,`kelas`,`Jurusan`,`Nama`) VALUES ('$nis','$kelas','$jurusan',
'$nama')");
header("location: tampil_data.php");    