<?php
    $id=$_REQUEST['user'];

    global $db;
    $sql="DELETE FROM User WHERE id='$id';";
    $rs = $db->execute($sql);

    header('Location: index.php?action=user-list');
?>