<?php

include "../config.php";
$nama = $_POST['nama'];
$skala = $_POST['skala'];
mysql_query("INSERT INTO subtest (nama,id_skala) VALUES ('$nama','$skala')");
header('location:../index.php?psi=subtest');