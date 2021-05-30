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
    case 'bar-list':
        require('../src/controller/barList.php');
        break;
    case 'new-bar':
        require('../src/controller/newBar.php');
        break;
    case 'save-bar':
        require('../src/controller/saveBar.php');
        break;
    case 'delete-bar':
        require('../src/controller/deleteBar.php');
        break;
    case 'modify-bar':
        require('../src/controller/modifyBar.php');
        break;
    case 'update-bar':
        require('../src/controller/updateBar.php');
        break;
    case substr($action, 0, 11) == 'save-report':
        require('../src/controller/saveReport.php');
        global $report;
        $report =  substr($action, 12, strlen($action));
        report($report);

        break;
    case substr($action, 0, 11) == 'report-list':
        require('../src/controller/reportList.php');
        global $order;
        $order = substr($action, 12, strlen($action));
        order($order);
        break;
    case 'delete-report':
        require('../src/controller/deleteReport.php');
        break;
    case substr($action, 0, 3) == 'bar':
        require('../src/controller/barInfo.php');
        global $bar;
        $bar = substr($action, 3, strlen($action));
        bar($bar);
        break;

}


