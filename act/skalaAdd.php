<?php

include "../config.php";
$nama = $_POST['skala'];
mysql_query("INSERT INTO skala (nama) VALUES ('$nama')");
header('location:../index.php?psi=skala');
