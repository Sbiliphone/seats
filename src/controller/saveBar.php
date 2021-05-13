<?php


global $db;
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$latitude=$_REQUEST['latitude'];
$longitude=$_REQUEST['longitude'];
$seats=$_REQUEST['seats'];



$sql="INSERT INTO Bar (seats, name, city, address, latitude, longitude) VALUES ('$seats', '$name', '$city', '$address', '$latitude', '$longitude')";
$rs = $db->execute($sql);


header('Location:index.php?action=bar-list');

?>