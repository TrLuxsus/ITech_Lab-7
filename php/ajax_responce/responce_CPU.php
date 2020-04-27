<script type='text/javascript'>
alert("Hi server");
</script>
<?php
include '../connection.php'; 

$data = $_GET["select_CPU"];

$statement = $connection->prepare('SELECT netname FROM computer WHERE FID_Processor = :data');
$statement->execute(array(':data'=> $data[0]));
$result =$statement->fetchAll();

echo "<table>";
echo "<tr><th>Netname of PC's with selected CPU</th></tr>";
foreach($result as $item_row) {
    $item = $item_row[0];
    echo "<tr><td>$item</td></tr>";
}
echo "</table>";
?>