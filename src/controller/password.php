<?php
function showForm()
{
    require('../templates/changePasswordForm.php');
}

function setPassword()
{
    global $db;
    $nuovaPassword = md5($_REQUEST['password']);

    $sql = "UPDATE User SET password='$nuovaPassword' WHERE username='" . $_SESSION['username'] . "'";
    $rs = $db->execute($sql);
    header('Location: index.php');
}

