<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'Seats');
if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
} else {
    //echo 'Connesso. ' . $mysqli->host_info . "\n";
}


$sql = "SELECT * FROM Bar ORDER BY name";
$result = mysqli_query($mysqli, $sql);

$mio_array = array();
while($row = mysqli_fetch_assoc($result)) {
    $mio_array[] = $row;
}
echo json_encode($mio_array);

