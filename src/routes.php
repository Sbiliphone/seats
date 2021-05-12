<?php
$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : 'homepage';

switch ($action){
    case 'homepage':
        require('../src/controller/homepage.php');
        break;
    case 'login':
        require('../src/controller/access.php');
        login();
        break;
    case 'login-check':
        require('../src/controller/access.php');
        loginCheck();
        break;
    case 'logout':
        require('../src/controller/access.php');
        logout();
        break;
    case 'change-password':
        require('../src/controller/password.php');
        showForm();
        break;
    case 'set-password':
        require('../src/controller/password.php');
        setPassword();
        break;
    case 'user-list':
        require('../src/controller/userList.php');
        break;
    case 'new-user':
        require('../src/controller/newUser.php');
        break;
    case 'save-user':
        require('../src/controller/saveUser.php');
        break;
    case 'delete-user':
        require('../src/controller/deleteUser.php');
        break;
    case 'modify-user':
        require('../src/controller/modifyUser.php');
        break;
    case 'update-user':
        require('../src/controller/updateUser.php');
        break;
    case 'bar':
        require('../src/controller/barInfo.php');
        break;
}
