<?php
include 'config.php';
$sql = "select * from user";
$result = mysql_query($sql);

//create an array
$emparray = array();
while ($row = mysql_fetch_assoc($result)) {
    $emparray[] = $row;
}
echo json_encode($emparray);