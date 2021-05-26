<?php
require('../templates/header.php');
require('../templates/menu.php');
$bar = $_SESSION['idBar'];
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/css/ol.css" type="text/css">
    <style>
        .map {
            height: 500px;
            width: 500px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/build/ol.js"></script>
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
    $MondayS = 0;
    $TuesdayS = 0;
    $WednesdayS = 0;
    $ThursdayS = 0;
    $FridayS = 0;
    $SaturdayS = 0;
    $SundayS = 0;

    $sql="SELECT * FROM Bar WHERE id='$bar';";
    $rs = $db->execute($sql);

    $attualMounth = date("m");
    $sqlMonday = "SELECT AVG(used) FROM Report WHERE day='Monday' AND fullDate LIKE '%-%$attualMounth-%' AND bar='$bar';";
    $rsMonday = $db->execute($sqlMonday);
    foreach ($rsMonday as $risultatoMonday){
        echo $risultatoMonday['AVG(used)'];
        $Monday = (int)$risultatoMonday['AVG(used)'];
    }

    $sqlTuesday = "SELECT AVG(used) FROM Report WHERE day='Tuesday' AND fullDate LIKE '%-%$attualMounth-%' AND bar='$bar';";
    $rsTuesday = $db->execute($sqlTuesday);
    foreach ($rsTuesday as $risultatoTuesday){
        $Tuesday = (int)$risultatoTuesday['AVG(used)'];
    }

    $sqlWednesday = "SELECT AVG(used) FROM Report WHERE day='Wednesday' AND fullDate LIKE '%-%$attualMounth-%' AND bar='$bar';";
    $rsWednesday = $db->execute($sqlWednesday);
    foreach ($rsWednesday as $risultatoWednesday){
        $Wednesday = (int)$risultatoWednesday['AVG(used)'];
    }

    $sqlThursday = "SELECT AVG(used) FROM Report WHERE day='Thursday' AND fullDate LIKE '%-%$attualMounth-%' AND bar='$bar';";
    $rsThursday = $db->execute($sqlThursday);
    foreach ($rsThursday as $risultatoThursday){
        $Thursday = (int)$risultatoThursday['AVG(used)'];
    }

    $sqlFriday = "SELECT AVG(used) FROM Report WHERE day='Friday' AND fullDate LIKE '%-%%$attualMounth-%' AND bar='$bar';";
    $rsFriday = $db->execute($sqlFriday);
    foreach ($rsFriday as $risultatoFriday){
        $Friday = (int)$risultatoFriday['AVG(used)'];
    }

    $sqlSaturday = "SELECT AVG(used) FROM Report WHERE day='Saturday' AND fullDate LIKE '%-%$attualMounth-%' AND bar='$bar';";
    $rsSaturday = $db->execute($sqlSaturday);
    foreach ($rsSaturday as $risultatoSaturday){
        $Saturday = (int)$risultatoSaturday['AVG(used)'];
    }

    $sqlSunday = "SELECT AVG(used) FROM Report WHERE day='Sunday' AND fullDate LIKE '%-%$attualMounth-%' AND bar='$bar';";
    $rsSunday = $db->execute($sqlSunday);
    foreach ($rsSunday as $risultatoSunday){
        $Sunday = (int)$risultatoSunday['AVG(used)'];
    }

    $lastMounth = date("m")-1;

    $sqlMondayS = "SELECT AVG(used) FROM Report WHERE day='Monday' AND fullDate LIKE '%-%$lastMounth-%' AND bar='$bar';";
    $rsMondayS = $db->execute($sqlMondayS);
    foreach ($rsMondayS as $risultatoMondayS){
        echo $risultatoMondayS['AVG(used)'];
        $MondayS = (int)$risultatoMondayS['AVG(used)'];
    }

    $sqlTuesdayS = "SELECT AVG(used) FROM Report WHERE day='Tuesday' AND fullDate LIKE '%-%$lastMounth-%' AND bar='$bar';";
    $rsTuesdayS = $db->execute($sqlTuesdayS);
    foreach ($rsTuesdayS as $risultatoTuesdayS){
        $TuesdayS = (int)$risultatoTuesdayS['AVG(used)'];
    }

    $sqlWednesdayS = "SELECT AVG(used) FROM Report WHERE day='Wednesday' AND fullDate LIKE '%-%$lastMounth-%' AND bar='$bar';";
    $rsWednesdayS = $db->execute($sqlWednesdayS);
    foreach ($rsWednesdayS as $risultatoWednesdayS){
        $WednesdayS = (int)$risultatoWednesdayS['AVG(used)'];
    }

    $sqlThursdayS = "SELECT AVG(used) FROM Report WHERE day='Thursday' AND fullDate LIKE '%-%$lastMounth-%' AND bar='$bar';";
    $rsThursdayS = $db->execute($sqlThursdayS);
    foreach ($rsThursdayS as $risultatoThursdayS){
        $ThursdayS = (int)$risultatoThursdayS['AVG(used)'];
    }

    $sqlFridayS = "SELECT AVG(used) FROM Report WHERE day='Friday' AND fullDate LIKE '%-%$lastMounth-%' AND bar='$bar';";
    $rsFridayS = $db->execute($sqlFridayS);
    foreach ($rsFridayS as $risultatoFridayS){
        $FridayS = (int)$risultatoFridayS['AVG(used)'];
    }

    $sqlSaturdayS = "SELECT AVG(used) FROM Report WHERE day='Saturday' AND fullDate LIKE '%-%$lastMounth-%' AND bar='$bar';";
    $rsSaturdayS = $db->execute($sqlSaturdayS);
    foreach ($rsSaturdayS as $risultatoSaturdayS){
        $SaturdayS = (int)$risultatoSaturdayS['AVG(used)'];
    }

    $sqlSundayS = "SELECT AVG(used) FROM Report WHERE day='Sunday' AND fullDate LIKE '%-%$lastMounth-%' AND bar='$bar';";
    $rsSundayS = $db->execute($sqlSundayS);
    foreach ($rsSundayS as $risultatoSundayS){
        $SundayS = (int)$risultatoSundayS['AVG(used)'];
    }

    $sqlLastReport = "SELECT R1.used, R1.fullDate,
FROM Report R1 JOIN (SELECT bar, MAX(fullDate) AS fullDate
FROM Report
GROUP BY bar) R2 
ON R1.bar=R2.bar AND R1.fullDate=R2.fullDate JOIN Bar ON R1.bar=Bar.id
WHERE R1.bar='$bar'";
    $rsLastReport = $db->execute($sqlLastReport);
    foreach ($rsLastReport as $risultatoLastReport){
        $lastReport = $risultatoLastReport['R1.used'];
        $lastReportDate = $risultatoLastReport['R1.fullDate'];
    }
?>

</div>
<?php
foreach ($rs as $risultato){
    $_SESSION['bar']=$risultato['name'];
    //https://www.chartjs.org/docs/latest/
?>
<body onload="graphic(<?php echo $Monday; ?>, <?php echo $Tuesday; ?>, <?php echo $Wednesday; ?>, <?php echo $Thursday; ?>, <?php echo $Friday; ?>, <?php echo $Saturday; ?>, <?php echo $Sunday; ?>, <?php echo $MondayS; ?>, <?php echo $TuesdayS; ?>, <?php echo $WednesdayS; ?>, <?php echo $ThursdayS; ?>, <?php echo $FridayS; ?>, <?php echo $SaturdayS; ?>, <?php echo $SundayS; ?>)">
<div class="container">
    <br>
    <div class="col">
        <div class="container">
            <div class="col-4"><nobr><span class="h1"><?php echo $risultato['name']; ?> </span><img style="margin-bottom: 1%" src="https://img.icons8.com/windows/32/000000/martini-glass.png"/></nobr></div>
            <div class="col-4"><span class="h5">Posti attualmente occupati:</span><span class="h5"><?php echo $lastReport ?></span><span class="font-weight-normal"><?php echo $lastReportDate ?></span></div>
        </div>
        <i class="bi bi-clock"></i><span class="font-weight-normal">  Orari: <?php echo $risultato['timetables'];?></span><br>
        <i class="bi bi-geo-alt"></i><span class="font-weight-normal">  <?php echo $risultato['address']; echo ", "; echo $risultato['city']; ?></span><br><br>
        <p class="font-weight-normal">Posti a sedere totali: <b><?php echo $risultato['seats']; ?></b></p>
    </div>
    <div class="col">
        
    </div>
    <br>
    <div class="d-flex" style="display: flex;">
        <div class="col-1" ></div><div class="col-5"></div>
        <div class="col-1" ></div>
    </div>
    <div class="d-flex" style="display: flex;">
        <div id="chart-area" class="col-1" ></div><div class="col-5"></div>
        <div class="col-1" ><div id="map" class="map"></div></div>
</div>
<hr>

    <script type="text/javascript">

        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([<?php echo $risultato['longitude']; ?>, <?php echo $risultato['latitude']; ?>]),
                zoom: 17
            })
        });
    </script>
    <?php
    if ($_SESSION['authorized']){
        ?>

    <form name="user" action="javascript:validate(<?php echo $risultato['seats']?>)" method="post">
        <div class="form-group"><label for="report">Quante persone ci sono secondo te? </label><br><input type="number" id="report" name="report"  maxlength="180"  style="width: 5%" class="form-control" required ></div><br>

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
    <hr>
</div>
<br><br>

<script src="../src/scripts/graphic.js"></script>

</body>


<?php
}
require('../templates/footer.php');
?>