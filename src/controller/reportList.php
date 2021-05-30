<?php
function order($item){
    $_SESSION['order']=$item;
    require('../templates/reportList.php');
}

