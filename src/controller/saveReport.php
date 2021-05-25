<?php
function report($report){
    echo "ciao";
    global $db;
    $day= date("l");
    $date = date("d-m-y h:i:s");
    $user=$_SESSION['idUser'];
    $bar=$_SESSION['idBar'];

    $sql="INSERT INTO Report (used, day, bar, user, fullDate) VALUES ('$report', '$day', '$bar', '$user', '$date')";
    $db->execute($sql);
    header('Location:index.php?action=bar'.$_SESSION['idBar']);
}

?>