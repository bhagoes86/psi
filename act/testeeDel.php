<?php

include "../config.php";
$modal_id = $_GET['modal_id'];
$modal = mysql_query("Delete FROM testee WHERE id='$modal_id'");
header('location:../index.php?psi=testee');
