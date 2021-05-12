<?php
require('../templates/barInfo.php');
$bar = (isset($_REQUEST['bar'])) ? $_REQUEST['bar'] :  header('Location:index.php?action=homepage');
?>
