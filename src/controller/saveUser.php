<?php
    global $db;
     $username=$_REQUEST['username'];
     $password1=md5($_REQUEST['password1']);
     $password2=md5($_REQUEST['password2']);
     $firstname=$_REQUEST['firstname'];
     $lastname=$_REQUEST['lastname'];
     $email=$_REQUEST['email'];
if ($_SESSION['authorized']) {
    $role=$_REQUEST['roles'];

    if($role=='false'){
        $role=0;
    }else{
        $role=1;
    }
}else{
    $role=0;
}


     if($password1==$password2){

        $sql="INSERT INTO User (username, password, isAdmin, email, name, lastname, isVerified) VALUES ('$username', '$password2', '$role', '$email', '$firstname', '$lastname', 0)";
        $rs = $db->execute($sql);
     }else{

         header('Location:index.php?action=new-user');
     }

if ($_SESSION['authorized']) {
    header('Location:index.php?action=user-list');
}else{
    header('Location:index.php?action=login');
}
?>