<?php

function bar($item){
    $_SESSION['idBar']=$item;
    require('../templates/barInfo.php');
}?>
