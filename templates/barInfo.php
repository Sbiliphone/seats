<?php
require('../templates/header.php');
require('../templates/menu.php');
$bar = $_SESSION['bar'];
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
foreach ($rs as $risultato){
?>
<body>
<div class="container">
    <h1><?php echo $risultato['name']; ?></h1>
    <iframe width="500" height="500" src="https://maps.google.com/maps?q=<?php echo $risultato['latitude']; ?>,<?php echo $risultato['longitude']; ?>&output=embed"></iframe>
</div>
</body>



<?php
}
require('../templates/footer.php');
?>