<?php

function bar($item){
    //echo "sono bar";
    //echo $item;
    $_SESSION['bar']=$item;
    require('../templates/barInfo.php');
}

?>
