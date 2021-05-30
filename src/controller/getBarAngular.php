<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'Seats');
if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
} else {

}


$sql = "SELECT R1.used, Bar.name, Bar.seats, Bar.id
FROM Report R1 JOIN (SELECT bar, MAX(fullDate) AS fullDate
FROM Report
GROUP BY bar) R2 
ON R1.bar=R2.bar AND R1.fullDate=R2.fullDate JOIN Bar ON R1.bar=Bar.id";
$result = mysqli_query($mysqli, $sql);

$mio_array = array();
while($row = mysqli_fetch_assoc($result)) {
    $mio_array[] = $row;
}
echo json_encode($mio_array);

