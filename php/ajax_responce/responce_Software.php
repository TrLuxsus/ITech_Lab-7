<?php

include '../connection.php';

header('Content-Type: text/xml');

$soft = $_GET['select_Software'];

$statement = $connection->prepare("SELECT netname FROM computer, computer_software WHERE FID_Software = :soft AND FID_Computer=ID_Computer");
$statement->execute(array(':soft' => $soft));
$result =$statement->fetchAll();

?>
<responce>
    <?php foreach ($result as $row): ?>
        <Netname><?=$row[0]?></Netname>
    <?php endforeach; ?>
</responce>