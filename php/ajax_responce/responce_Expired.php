<?php

include '../connection.php'; 
header('Content-Type:application/json');

$date = date("Y/m/d");

$statement = $connection->prepare('SELECT netname FROM computer WHERE guarantee < :date');

$statement->execute(array(':date'=> $date));

$result =$statement->fetchAll(PDO::FETCH_OBJ);


echo json_encode($result);

?>