<?php
require('../templates/header.php');
require('../templates/menu.php');
$bar = $_REQUEST['bar'];
//echo $bar;
?>
<div style="display: none">
<?php
    global $db;
    $sql = "SELECT * FROM Bar;";
    $rs = $db->execute($sql);
    global $db;
    $sql="SELECT * FROM Bar WHERE id='$bar';";
    $rs = $db->execute($sql);
?>
</div>
<?php
var_dump($rs)

?>
<body ng-app="app">
<div ng-controller="ctrl1">


    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo "15"; ?>,<?php echo "56"; ?>&output=embed"></iframe>
</div>
</body>



<?php
require('../templates/footer.php');
?>