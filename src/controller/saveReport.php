<?php
function report($report){
    echo "ciao";
    global $db;
    $day= date("l");
    $hour= date('H:i');
    $date = date("d/m/y");
    $user=$_SESSION['idUser'];
    $bar=$_SESSION['idBar'];

    $sql="INSERT INTO Report (used, day, hour, bar, user, fullDate) VALUES ('$report', '$day', '$hour', '$bar', '$user', '$date')";
    $db->execute($sql);
    header('Location:index.php?action=bar'.$_SESSION['idBar']);
}

?>