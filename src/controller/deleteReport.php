<?php
$id=$_REQUEST['report'];

global $db;
$sql="DELETE FROM Report WHERE id='$id';";
$rs = $db->execute($sql);

header('Location: index.php?action=report-list-default');
?>