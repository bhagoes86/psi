<?php

include "../config.php";
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$deskripsi_high = $_POST['deskripsi_high'];
$deskripsi_low = $_POST['deskripsi_low'];
mysql_query("INSERT INTO kategori (nama_aspek, deskripsi_high, deskripsi_low, id_kategori)"
        . " VALUES ('$nama','$deskripsi_high','$deskripsi_low','$kategori')");
header('location:../index.php?psi=aspek');
