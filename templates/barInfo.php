<?php
require('../templates/header.php');
require('../templates/menu.php');
$bar = $_SESSION['idBar'];
?>
<div style="display: none">
<?php

    global $db;
    $Monday = 0;
    $Tuesday = 0;
    $Wednesday = 0;
    $Thursday = 0;
    $Friday = 0;
    $Saturday = 0;
    $Sunday = 0;

    $sql = "SELECT * FROM Bar;";
    $rs = $db->execute($sql);
    global $db;
    $sql="SELECT * FROM Bar WHERE id='$bar';";
    $rs = $db->execute($sql);

    $attualMounth = date("m");
    $sqlMonday = "SELECT AVG(used) FROM Report WHERE day='Monday' AND fullDate LIKE '%/$attualMounth/%' AND bar='$bar';";
    $rsMonday = $db->execute($sqlMonday);
    foreach ($rsMonday as $risultatoMonday){
        echo $risultatoMonday['AVG(used)'];
        $Monday = (int)$risultatoMonday['AVG(used)'];
    }

    $sqlTuesday = "SELECT AVG(used) FROM Report WHERE day='Tuesday' AND fullDate LIKE '%/$attualMounth/%';";
    $rsTuesday = $db->execute($sqlTuesday);
    foreach ($rsTuesday as $risultatoTuesday){
        $Tuesday = (int)$risultatoTuesday['AVG(used)'];
    }

    $sqlWednesday = "SELECT AVG(used) FROM Report WHERE day='Wednesday' AND fullDate LIKE '%/$attualMounth/%';";
    $rsWednesday = $db->execute($sqlWednesday);
    foreach ($rsWednesday as $risultatoWednesday){
        $Wednesday = (int)$risultatoWednesday['AVG(used)'];
    }

    $sqlThursday = "SELECT AVG(used) FROM Report WHERE day='Thursday' AND fullDate LIKE '%/$attualMounth/%';";
    $rsThursday = $db->execute($sqlThursday);
    foreach ($rsThursday as $risultatoThursday){
        $Thursday = (int)$risultatoThursday['AVG(used)'];
    }

    $sqlFriday = "SELECT AVG(used) FROM Report WHERE day='Friday' AND fullDate LIKE '%/$attualMounth/%';";
    $rsFriday = $db->execute($sqlFriday);
    foreach ($rsFriday as $risultatoFriday){
        $Friday = (int)$risultatoFriday['AVG(used)'];
    }

    $sqlSaturday = "SELECT used FROM Report WHERE day='Saturday' AND fullDate LIKE '%/$attualMounth/%';";
    $rsSaturday = $db->execute($sqlSaturday);
    foreach ($rsSaturday as $risultatoSaturday){
        $Saturday = (int)$risultatoSaturday['AVG(used)'];
    }

    $sqlSunday = "SELECT AVG(used) FROM Report WHERE day='Sunday' AND fullDate LIKE '%/$attualMounth/%';";
    $rsSunday = $db->execute($sqlSunday);
    foreach ($rsSunday as $risultatoSunday){
        $Sunday = (int)$risultatoSunday['AVG(used)'];
    }
?>

</div>
<?php
foreach ($rs as $risultato){
    $_SESSION['bar']=$risultato['name'];
    //https://www.chartjs.org/docs/latest/
?>
<body onload="graphic(<?php echo $Monday; ?>, <?php echo $Tuesday; ?>, <?php echo $Wednesday; ?>, <?php echo $Thursday; ?>, <?php echo $Friday; ?>, <?php echo $Saturday; ?>, <?php echo $Sunday; ?>)">
<div class="container">
    <br>
    <h1><?php echo $risultato['name']; ?></h1>
    <br>
    <iframe width="500" height="500" src="https://maps.google.com/maps?q=<?php echo $risultato['latitude']; ?>,<?php echo $risultato['longitude']; ?>&output=embed"></iframe>
    <div id="chart-area"></div>
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

<script src="../src/scripts/graphic.js"></script>

</body>


<?php
}
require('../templates/footer.php');
?>