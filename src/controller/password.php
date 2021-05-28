<?php
function showForm()
{
    require('../templates/changePasswordForm.php');
}

function setPassword()
{
    global $db;
    $nuovaPassword1 = md5($_REQUEST['newPassword_first']);
    $nuovaPassword2 = md5($_REQUEST['newPassword_second']);

    if ($nuovaPassword1 == $nuovaPassword2){
        $sql = "UPDATE User SET password='$nuovaPassword1' WHERE username='" . $_SESSION['username'] . "'";
        $rs = $db->execute($sql);
        header('Location: index.php');
    }else{
        header('Location: index.php?action=change-password');
    }


}

