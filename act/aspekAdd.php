<?php

include "../config.php";
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$deskripsi_high = $_POST['deskripsi_high'];
$deskripsi_low = $_POST['deskripsi_low'];
$sql = "INSERT INTO aspek (nama_aspek, deskripsi_high, deskripsi_low, id_kategori)"
        . " VALUES ('$nama','$deskripsi_high','$deskripsi_low','$kategori')";
//echo $sql;
//die();
mysql_query($sql);
header('location:../index.php?psi=aspek');
