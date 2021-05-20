<?php
echo 'ciao';
if ($_SESSION['maxSeats'] < $_REQUEST['report']){
    header('Location:index.php?action=bar'.$_SESSION['idBar']);
}


global $db;
$used=$_REQUEST['report'];
$day= date("l");
$hour= date('H:i');
$date = date("d/m/y");
$user=$_SESSION['idUser'];
$bar=$_SESSION['idBar'];

$sql="INSERT INTO Report (used, day, hour, bar, user, fullDate) VALUES ('$used', '$day', '$hour', '$bar', '$user', '$date')";
$rs = $db->execute($sql);
header('Location:index.php?action=bar'.$_SESSION['idBar']);
?>