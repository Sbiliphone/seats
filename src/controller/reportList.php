<?php
function order($item){
    //echo "sono bar";
    //echo $item;
    $_SESSION['order']=$item;
    require('../templates/reportList.php');
}

