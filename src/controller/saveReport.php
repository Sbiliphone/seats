<?php
function report($report){
    global $db;
    $day= date("l");
    $date = date("y-m-d h:i:s");
    $user=$_SESSION['idUser'];
    $bar=$_SESSION['idBar'];

    $sql="INSERT INTO Report (used, day, bar, user, fullDate) VALUES ('$report', '$day', '$bar', '$user', '$date')";
    $db->execute($sql);
    header('Location:index.php?action=bar'.$_SESSION['idBar']);
}

?>