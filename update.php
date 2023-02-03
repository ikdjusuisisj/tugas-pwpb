<?php

include 'koneksi.php';

 echo $id = $_POST['NIS'];
 echo $Nama = $_POST['Nama'];
 echo $Kelas = $_POST['Kelas'];
 echo $Jurusan = $_POST['Jurusan'];

 $data = mysqli_query($Koneksi,"UPDATE `murid` SET
 `NIS`='$id', 
 `Kelas`='$Kelas',
 `Jurusan`='$Jurusan',
 `Nama`='$Nama' WHERE `NIS` =$id");
 header("location: tampil_data.php");
 