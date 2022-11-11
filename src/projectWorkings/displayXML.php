<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'mysql';
$DATABASE_NAME = 'securitydashboard';

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ($conn === false){

    die ("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($conn->connect_error) {
    die("Connection Error: ".$conn->connect_error);
}

$sql = "select * from log";
$result = $conn->query($sql);

$splitTrigger;

echo "<h1>NMAP Scan Report</h1>";

if ($result->num_rows > 0){
    echo "<table>";
    while($row = $result->fetch_assoc() ){
        if ($row["timestamp"] != $splitTrigger) {
            echo "<tr><td>Scan At: ".date("h:i:sa d-m-Y",$row['timestamp'])."</td></tr>";
            $splitTrigger = $row["timestamp"];
        }
        echo "<tr><td>".$row["ip"] ."</td><td>" .$row["mac"]."</td><td>" .$row["vendor"]."</td><td>" .$row["ports"]."</td><td>" .$row["timestamp"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 records";
}
$conn->close();

?>
