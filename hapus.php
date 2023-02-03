<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($Koneksi,"DELETE FROM `murid`
 WHERE `Nis` = $id");
if($data == TRUE){
header("location: tampil_data.php");
}else{
echo "gagal";
}
