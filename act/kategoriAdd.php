<?php

include "../config.php";
$nama = $_POST['nama'];
mysql_query("INSERT INTO kategori (nama) VALUES ('$nama')");
header('location:../index.php?psi=kategori');
