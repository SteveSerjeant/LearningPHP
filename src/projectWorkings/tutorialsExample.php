<?php

$file = simplexml_load_file("C:\Users\sarge\source\servicesFile.xml");

echo $file->hosthint[0]->address['addr'] . "<br>"; //output 192.168.0.11 - correct
echo $file->hosthint[1]->address['addr'] . "<br><br>"; //output 192.168.0.7 - correct

echo $file->host[0]->address['addr'] . "<br>"; //output 192.168.0.1 - correct
echo $file->host[0]->address[1]['addr'] . "<br><br>"; //output A0:BD:CD:6A:C9:19 - correct

echo $file->host[2]->address['addr'] . "<br>"; //output 192.168.0.4 - correct
echo $file->host[2]->hostnames->hostname['name'] . "<br>"; //SKY+HD - correct
echo $file->host[2]->address[1]['addr'] . "<br>"; //output D0:58:FC:4B:3E:0A - correct
echo $file->host[2]->ports->port['portid'] . "<br>"; //output 80 - correct
echo $file->host[2]->ports->port->state['state'] . "<br>"; //output closed - correct
echo $file->host[2]->ports->port->service['name'] . "<br><br>"; //output http - correct

echo $file->host[2]->ports->port[1]['portid'] . "<br>"; //output 5000 - correct
echo $file->host[2]->ports->port[1]->state['state'] . "<br>"; //output open - correct
echo $file->host[2]->ports->port[1]->service['name'] . "<br><br>"; //output rtsp - correct

echo $file->host[2]->ports->port[2]['portid'] . "<br>"; //output 5001 - correct
echo $file->host[2]->ports->port[2]->state['state'] . "<br>"; //output closed - correct
echo $file->host[2]->ports->port[2]->service['name'] . "<br><br>"; //output commplex-link - correct

echo $file->host[3]->address['addr'] . "<br>"; //output 192.168.0.7
echo $file->host[3]->hostnames->hostname['name'] . "<br>"; //SkyBooster2- correct
echo $file->host[3]->address[1]['addr'] . "<br>"; //output 24:A7:DC:F9:F7:A1 - correct
echo $file->host[3]->ports->port[0]['portid'] . "<br>"; //output 53 - correct
echo $file->host[3]->ports->port[0]->state['state'] . "<br>"; //output open- correct
echo $file->host[3]->ports->port[0]->service['name'] . "<br><br>"; //outputwrapped - correct
echo $file->host[3]->ports->port[1]['portid'] . "<br>"; //output 53 - correct
echo $file->host[3]->ports->port[1]->state['state'] . "<br>"; //output open- correct
echo $file->host[3]->ports->port[1]->service['name'] . "<br><br>"; //outputwrapped - correct
echo $file->host[3]->ports->port[2]['portid'] . "<br>"; //output 53 - correct
echo $file->host[3]->ports->port[2]->state['state'] . "<br>"; //output open- correct
echo $file->host[3]->ports->port[2]->service['name'] . "<br><br>"; //outputwrapped - correct

// output for following should match .11
echo $file->host[5]->address['addr'] . "<br>";
echo $file->host[5]->hostnames->hostname['name'] . "<br>";
echo $file->host[5]->address[1]['addr'] . "<br>";
echo $file->host[5]->ports->port[0]['portid'] . "<br>";
echo $file->host[5]->ports->port[0]->state['state'] . "<br>";
echo $file->host[5]->ports->port[0]->service['name'] . "<br><br>";
echo $file->host[5]->ports->port[1]['portid'] . "<br>";
echo $file->host[5]->ports->port[1]->state['state'] . "<br>";
echo $file->host[5]->ports->port[1]->service['name'] . "<br><br>";
echo $file->host[5]->ports->port[2]['portid'] . "<br>";
echo $file->host[5]->ports->port[2]->state['state'] . "<br>";
echo $file->host[5]->ports->port[2]->service['name'] . "<br><br>";

// which it does!
foreach ($file->host[2]->ports->port as $portid){

    echo $portid['portid'] . " " . $portid->state['state'] . " ".$portid->service['name'] . "<br>";
}



//foreach ($file->host[2]->ports->port['portid'] as $portid){
//    echo $portid . "<br>";
//}


print "<PRE>";
print_r($file);
print "</PRE>";


?>

