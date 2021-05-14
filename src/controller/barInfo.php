<?php

function bar($item){
    //echo "sono bar";
    //echo $item;
    $_SESSION['idBar']=$item;
    require('../templates/barInfo.php');
}

?>
