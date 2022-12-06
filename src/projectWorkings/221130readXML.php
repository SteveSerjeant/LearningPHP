<?php
//$xml=simplexml_load_file("C:\Users\sarge\source\servicesFile.xml") or die ("Error");
//echo $xml->port[1]->children(). "<br>";

//echo $xml->host[0]['starttime'];
//works! shows starttime for first host

//foreach ($xml->host[0]->address[1]['addr'] as $addr){
//    echo "$addr . '<br>'";
//}

//echo $xml->host[0]->port['portid'];

//echo $xml->host[0]->port['protocol'];
//
//foreach ($xml->host[0]->address[1]['addr'] as $addr) {
//    echo $addr . "<br>";
//
//}

//$xml = simplexml_load_string("C:\Users\sarge\source\servicesFile.xml", 'SimpleXMLElement', LIBXML_NOBLANKS) or die("ERROR: Cannot create object");
$xml = simplexml_load_file("C:\Users\sarge\source\servicesFile.xml", 'SimpleXMLElement');
echo $xml->scaninfo->attributes()->protocol; //output 'tcp'!
echo $xml->scaninfo->attributes()->state; // nothing

//echo $report->host[0]->address;

$nmap = simplexml_load_file("C:\Users\sarge\source\servicesFile.xml");
echo $nmap;