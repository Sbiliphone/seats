<?php
    global $db;
    $username=$_REQUEST['username'];
    $firstname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $email=$_REQUEST['email'];
    $role=$_REQUEST['roles'];
    $verified=$_REQUEST['verified'];
    $id=$_REQUEST['id'];

    $sql="UPDATE User SET email='$email', name='$firstname', lastname='$lastname', isAdmin='$role', isVerified='$verified' WHERE id='$id';";
    $rs = $db->execute($sql);

    header('Location:index.php?action=user-list');

?>


