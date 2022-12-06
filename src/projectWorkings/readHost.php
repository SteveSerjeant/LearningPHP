<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'mysql';
$DATABASE_NAME = 'securitydashboard';

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ($conn === false){

    die ("ERROR: Could not connect. " . mysqli_connect_error());
}

$mysqli = new mysqli("localhost","root","mysql","securitydashboard");

$file = file("C:\Users\sarge\source\servicesFile.xml");

$ip;
$hostname;
$mac;
$port;
$state;
$portArray = array();
$portList;
$timestamp;

foreach ($file as $line){

    if (strpos($line, '<host start') == 0){

        foreach ($file as $line){
            if (strpos($line, 'addrtype="ipv4"') == TRUE){
                preg_match('/addr=".* addrtype/',$line,$results);
                $ip = implode(" ",$results);
                $ip = ltrim($ip, 'addr="');
                $ip = rtrim($ip, '" addrtype');
                echo "<br><strong><u>Device</u></strong><br>";
//        print "IP Address:  $ip<br>";
                echo "IP Address: ".$ip."<br>";
            }
        }


    }
}