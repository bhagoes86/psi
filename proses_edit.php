<?php

include "config.php";
$id = $_POST['modal_id'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$pekerjaan = $_POST['pekerjaan'];
$pendidikan = $_POST['pendidikan'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$modal = "UPDATE "
        . "testee "
        . "SET "
        . "nama = '$nama',"
        . "tanggal_lahir = '$tanggal_lahir', "
        . "pekerjaan='$pekerjaan', "
        . "pendidikan='$pendidikan', "
        . "telp='$telp', "
        . "alamat='$alamat' "
        . "WHERE id = '$id'";
//echo $modal;
//die();
mysql_query($modal);
header('location:index.php?psi=testee');
