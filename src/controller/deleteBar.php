<?php
$id=$_REQUEST['bar'];

global $db;
$sql="DELETE FROM Bar WHERE id='$id';";
$rs = $db->execute($sql);

header('Location: index.php?action=bar-list');
?>