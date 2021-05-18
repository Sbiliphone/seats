<?php
require('../templates/header.php');
require('../templates/menu.php');
$bar = $_SESSION['idBar'];
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
    $_SESSION['bar']=$risultato['name'];
    //https://www.chartjs.org/docs/latest/
?>
<body>
<div class="container">
    <br>
    <h1><?php echo $risultato['name']; ?></h1>
    <br>
    <iframe width="500" height="500" src="https://maps.google.com/maps?q=<?php echo $risultato['latitude']; ?>,<?php echo $risultato['longitude']; ?>&output=embed"></iframe>
    <?php
    if ($_SESSION['authorized']){
        ?>
    <form name="user" action="index.php?action=save-report" method="post">
        <div class="form-group"><label for="report">Quante persone ci sono secondo te? </label><input type="text" id="report" name="report"  maxlength="180" class="form-control"></div>
        <br>
        <button class="btn btn-primary">Invia</button>
        <input type="hidden" id="user__token" name="user[_token]" value="">
        <br>
    </form>

        <?php
    }else{
        ?>
        <p>Per inserire un commento bisogna registrarsi </p>
        <a href="index.php?action=login" class="btn btn-primary btn-sm ms-auto my-auto">Login</a>
        <?php
    }
    ?>

</div>
</body>



<?php
}
require('../templates/footer.php');
?>