<?php


global $db;
$used=$_REQUEST['report'];
$day= date("l");
$hour= date('H:i');
$user=$_SESSION['idUser'];
$bar=$_SESSION['idBar'];

$sql="INSERT INTO Report (used, day, hour, bar, user) VALUES ('$used', '$day', '$hour', '$bar', '$user')";
$rs = $db->execute($sql);
header('Location:index.php?action=bar'.$_SESSION['idBar']);
?>