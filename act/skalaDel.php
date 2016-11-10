<?php

include "../config.php";
$modal_id = $_GET['skala_id'];
$modal = mysql_query("Delete FROM skala WHERE id='$modal_id'");
header('location:../index.php?psi=skala');
