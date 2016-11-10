<?php

include "../config.php";
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$pekerjaan = $_POST['pekerjaan'];
$pendidikan = $_POST['pendidikan'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
mysql_query("INSERT INTO testee (nama,tanggal_lahir,pekerjaan,pendidikan,telp,alamat) VALUES ('$nama','$tanggal_lahir','$pekerjaan','$pendidikan','$telp','$alamat')");
header('location:../index.php?psi=testee');
