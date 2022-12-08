<?php
//include database connection
include 'dbconn.php';
//load xml file

$file = simplexml_load_file("C:\Users\sarge\source\scanResults.xml");

$timestamp = $file['startstr'];
echo $timestamp;

//$stmt = $conn->prepare("CALL insertTimestamp(?)");
//$stmt->bind_param('s', $timestamp);
//$stmt->execute();

//print "<PRE>";
//print_r($file);
//print "</PRE>";

?>