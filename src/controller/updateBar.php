<?php
global $db;
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$latitude=$_REQUEST['latitude'];
$longitude=$_REQUEST['longitude'];
$seats=$_REQUEST['seats'];
$id=$_REQUEST['id'];


$sql="UPDATE Bar SET seats='$seats', name='$name', city='$city', address='$address', longitude='$longitude', latitude='$latitude' WHERE id='$id';";

$rs = $db->execute($sql);

header('Location:index.php?action=bar-list');

$hella = false;
?>
