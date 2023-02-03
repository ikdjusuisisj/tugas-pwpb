<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($Koneksi,"SELECT * FROM `murid` WHERE `Nis` = $id");

$tampil = mysqli_fetch_array($data);


?>
<form action="update.php" method="POST">
    <input type ="number" name="NIS" value ="<?php
    echo $id; ?>"
    hidden><br>
    <input type ="text" name="Nama" value ="<?php
    echo $tampil['Nama']; ?>"><br>
    <input type ="text" name="Jurusan" value="<?php
    echo $tampil['Jurusan'];?>"><br>
    <input type ="text" name="Kelas" value="<?php
    echo $tampil['Kelas'];?>"><br>
    <input type ="submit" value = "kirim">
</form>