<?php

include "../config.php";
$id = $_POST['modal_id'];
$nama = $_POST['nama'];
$modal = "UPDATE "
        . "skala "
        . "SET "
        . "nama = '$nama'"
        . "WHERE id = '$id'";
mysql_query($modal);
header('location:../index.php?psi=skala');
