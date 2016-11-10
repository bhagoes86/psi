<?php

include "../config.php";
$modal_id = $_GET['skala_id'];
$modal = mysql_query("Delete FROM subtest WHERE id='$modal_id'");
header('location:../index.php?psi=subtest');
