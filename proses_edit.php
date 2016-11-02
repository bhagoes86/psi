<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
	include "koneksi.php";
	$modal_id=$_POST['modal_id'];
	$modal_name = $_POST['modal_name'];
	$description = $_POST['description'];
	$modal=mysql_query("UPDATE modal SET modal_name = '$modal_name',description = '$description' WHERE modal_id = '$modal_id'");
	header('location:index.php');
?>