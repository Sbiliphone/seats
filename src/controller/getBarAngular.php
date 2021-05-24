<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'Seats');
if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
} else {
    //echo 'Connesso. ' . $mysqli->host_info . "\n";
}

/*
 SELECT Bar.name, Report.used, Bar.seats
FROM Bar JOIN Report ON Bar.id=Report.bar
WHERE Report.fullDate=(
    SELECT MAX(fullDate)
    FROM Report)
    AND Report.hour=(
        SELECT MAX(hour)
        FROM Report)
ORDER BY Bar.name
 */
//SELECT Bar.id, name, Bar.seats, Report.used FROM Bar JOIN Report ON Report.bar=Bar.id WHERE Report.hour=(SELECT MAX(hour) FROM Report JOIN Bar ON Bar.id=Report.bar WHERE Bar.id=2) AND Report.fullDate=(SELECT MAX(fullDate) FROM Report JOIN Bar ON Bar.id=Report.bar WHERE Bar.id=2)AND Bar.id=2


global $db;
$sql = "SELECT id FROM Bar";
$rs = $db->execute($sql);
foreach($rs as $risultato){
    array_push($mio_array, $risultato['id']);
}
global $db;
for ($i=0;$i<strlen($mio_array);$i++) {
    $sql = "SELECT Bar.id, name, Bar.seats, Report.used FROM Bar JOIN Report ON Report.bar=Bar.id WHERE Report.hour=(SELECT MAX(hour) FROM Report JOIN Bar ON Bar.id=Report.bar WHERE Bar.id='$mio_array[$i]') AND Report.fullDate=(SELECT MAX(fullDate) FROM Report JOIN Bar ON Bar.id=Report.bar WHERE Bar.id='$mio_array[$i]')AND Bar.id='$mio_array[$i]'";
    $rs = $db->execute($sql);
    foreach ($rs as $risultato) {
        array_push($arrayBar, $risultato['used']);
    }
}

echo json_encode($arrayBar);

