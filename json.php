<?php

$mysqli = new mysqli('localhost','root','','company');
$myArray = array();
if ($result = $mysqli->query("SELECT * FROM employee")) {

    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    }
    echo json_encode($myArray);
}

$result->close();
$mysqli->close();


 ?>
