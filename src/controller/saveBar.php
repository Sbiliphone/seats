<?php


global $db;
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$latitude=$_REQUEST['latitude'];
$longitude=$_REQUEST['longitude'];
$seats=$_REQUEST['seats'];

$day= date("l");
$date = date("y-m-d h:i:s");
$user=$_SESSION['idUser'];


$sql="INSERT INTO Bar (seats, name, city, address, latitude, longitude) VALUES ('$seats', '$name', '$city', '$address', '$latitude', '$longitude')";
$rs = $db->execute($sql);

$sql2="SELECT id FROM Bar ar WHERE name='$name';";
$rs = $db->execute($sql2);
foreach ($rs as $risultato){
    $idBar=$risultato['id'];;
}

$sql3="INSERT INTO Report (used, day, bar, user, fullDate) VALUES (0, '$day', $idBar, '$user', '$date')";
$rs = $db->execute($sql3);

header('Location:index.php?action=bar-list');

?>