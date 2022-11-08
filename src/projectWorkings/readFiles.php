<?php



if ($file = fopen("C:\Users\sarge\source\xxxx.txt", "r")){
    while (!feof($file)){
        $line = fgets($file);
//        echo $line, "<br>";
        if (stristr($line, 'Nmap scan report')) {
            $output = str_replace('Nmap scan report for', '', $line);
            $output = str_replace('(', '', $output);
            $output = str_replace(')', '', $output);
            echo $output, "<br>";


        }


    }

    fclose($file);
}

echo '<br><br>';

//$scan = file('C:\Users\sarge\source\servicesFile.xml');
//
//$ip;
//$mac;
//$vendor;
//$hostname;
//$port;
//$state;
//$service;
//$portArray = array();
//$portList;
//$timestamp;
//
//
//$scanFile = file('C:\Users\sarge\source\servicesFile.xml');
//foreach ($scanFile as $fileLine){
//    if (strpos($fileLine, '<host start') == TRUE){
//        print "hello";
//    }
//
//
//}
//
//
//foreach($scan as $line){
//
//
//        if (strpos($line, 'addrtype="ipv4"') == TRUE){
//            preg_match('/addr=".* addrtype/',$line,$results);
//            $ip = implode(" ",$results);
//            $ip = ltrim($ip, 'addr="');
//            $ip = rtrim($ip, '" addrtype');
//            print "<br><strong><u>Device</u></strong><br>";
//            print "IP Address:  $ip<br>";
//
//
//    }
//
//    //Get IP Address
//    if (strpos($line, 'addrtype="ipv4"') == TRUE){
//        preg_match('/addr=".* addrtype/',$line,$results);
//        $ip = implode(" ",$results);
//        $ip = ltrim($ip, 'addr="');
//        $ip = rtrim($ip, '" addrtype');
//        print "<br><strong><u>Device</u></strong><br>";
//        print "IP Address:  $ip<br>";
//    }
//
////    //Get Vendor
////    if (strpos($line, 'addrtype="mac"') == TRUE){
////        preg_match('/vendor=".*"/',$line,$results);
////        $vendor = implode(" ",$results);
////        $vendor = ltrim($vendor,'vendor="');
////        $vendor = rtrim($vendor, '"');
////        print "Vendor: $vendor<br>";
////    }
////
////    //Get MAC Address
////    if (strpos($line, 'addrtype="mac"') == TRUE){
////        preg_match('/addr=".*" addrtype/',$line,$results);
////        $mac = implode(" ",$results);
////        $mac = ltrim($mac,'addr="');
////        $mac = rtrim($mac, '" addrtype');
////        print "MAC Address: $mac<br>";
////    }
//
//    //Get Hostname
//    if (strpos($line, 'type="PTR"') == TRUE){
//        preg_match('/name=".*" type/',$line,$results);
//        $hostname = implode(" ",$results);
//        $hostname = ltrim($hostname,'name="');
//        $hostname = rtrim($hostname, ' type');
//        $hostname = rtrim($hostname, '"');
//        print "Hostname:  $hostname<br>";
//    }
//
//    //Get Ports
//    if (strpos($line, 'portid="') == TRUE){
//        preg_match('/portid=".*><state/',$line,$results);
//        $port = implode(" ",$results);
//        $port = ltrim($port,'portid="');
//        $port = rtrim($port, '"><state');
//        preg_match('/state=".*" reason=/', $line, $matches);
//        $state = implode(" ", $matches);
//        $state = ltrim($state, 'state=');
//        $state = rtrim($state,'reason=');
//        $state = ltrim($state, '"');
//        $state = rtrim($state,'" ');
////        preg_match('/service name=".*"/',$line, $services);
////        preg_match('/service name=".*" product=|service name=".*" method=|service name=".*" servicefp=/',$line, $services);
////        preg_match('/service name=".*" method=/',$line, $services);
////        preg_match('/service name=".*" servicefp/',$line, $services);
////        $service = implode(" ", $services);
////        $service = ltrim($services,'service name=');
//
//        print "Port: $port<br>";
//        print "State: $state<br>";
////        print "Service: $service<br>";
//        array_push($portArray, $port);
//    }
//
//    //Add Values to Database
////    if (strpos($line, '/host>') == TRUE){
////        $timestamp = time();
////        $portList = implode(", ",$portArray);
////        $sql = "insert into log(ip,mac,vendor,hostname,ports,timestamp) values ('$ip','$mac','$vendor','$hostname','$portList','$timestamp')";
////
////        if ($conn->query($sql) === TRUE) {
////            echo "Data Added: $ip  - $mac - $vendor - $hostname - $portList - $timestamp <br>";
////        } else {
////            echo "Error: ".$sql."<br>".$conn->error;
////        }
////        $ip = " ";
////        $mac = " ";
////        $vendor = " ";
////        $hostname = " ";
////        unset($portArray);
////        $portArray = array();
////        $portList = " ";
//
//
//}
//
////$conn->close();
////$scan = file("C:\Users\sarge\source\xxxx.txt");
////foreach ($scan as $line){
////
////    //Get IP Address
////    if (strpos($line, 'addrtype="ipv4"') == TRUE){
////        preg_match('/addr=".* addrtype/',$line,$results);
////        $ip = implode(" ",$results);
////        $ip = ltrim($ip, 'addr="');
////        $ip = rtrim($ip, '" addrtype');
////        print "<br><strong><u>Device</u></strong><br>";
////        print "IP Address:  $ip<br>";
////    }
////
////    //Get Hostname
////    if (strpos($line, 'type="PTR"') == TRUE){
////        preg_match('/name=".*" type/',$line,$results);
////        $hostname = implode(" ",$results);
////        $hostname = ltrim($hostname,'name="');
////        $hostname = rtrim($hostname, ' type');
////        $hostname = rtrim($hostname, '"');
////        print "Hostname:  $hostname<br>";
////    }
////}
//
////fclose($scan);
////
////$DATABASE_HOST = 'localhost';
////$DATABASE_USER = 'root';
////$DATABASE_PASS = 'mysql';
////$DATABASE_NAME = 'securitydashboard';
////
////$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
////
////if ($conn === false)
////
////    die("ERROR: Could Not Connect. " . mysqli_connect_error());
////
////$ipAddr;
////$hostName;
////$timeStamp;
////
////foreach ($file as $line) {
////    //Get IP Address
////    if (strpos($line, 'addrtype="ipv4"') == TRUE) {
////        preg_match('/addr=".* addrtype/', $line, $results);
////        $ipAddr = implode(" ", $results);
////        $ipAddr = ltrim($ipAddr, 'addr="');
////        $ipAddr = rtrim($ipAddr, '" addrtype');
////        print "<br><strong><u>Device</u></strong><br>";
////        print "IP Address:  $ipAddr<br>";
////    }
////
////    //Get Hostname
////    if (strpos($line, 'type="PTR"') == TRUE) {
////        preg_match('/name=".*" type/', $line, $results);
////        $hostName = implode(" ", $results);
////        $hostName = ltrim($hostName, 'name="');
////        $hostName = rtrim($hostName, ' type');
////        $hostName = rtrim($hostName, '"');
////        print "Hostname:  $hostName<br>";
////    }
//
////Add Values to Database
////    if (strpos($line, '/host>') == TRUE) {
////        $timeStamp = date('Y-m-d H:i:s');
////        $sql = "insert into ipaddresses(address,description, added) values ('$ipAddr','$hostName', '$timeStamp')";
////
////        if ($conn->query($sql) === TRUE){
////            echo "DATA Added: $ipAddr - $hostName<br>";
////        }
////        else {
////            echo "ERROR: ".$sql."<br>".$conn->error;
////        }
////        $ipAddr = " ";
////        $hostName = " ";
////    }
//
////}
////
////$conn->close();
//
//
//$file = file('C:\Users\sarge\source\servicesFile.xml');

//$file = file('nmapTest.xml');

//$servername = "localhost";
//$username = "nmap_user";
//$password = "123456";
//$db = "nmap";
//
//$conn = new mysqli($servername, $username, $password, $db);
//
//if ($conn->connect_error){
//    die("Connection failed: ". $conn->connect_error);
//}
//
//$ip;
//$mac;
//$vendor;
//$hostname;
//$port;
//$portArray = array();
//$portList;
//$timestamp;

//foreach($file as $line){
//
//    //Get IP Address
//    if (strpos($line, 'addrtype="ipv4"') == TRUE){
//        preg_match('/addr=".* addrtype/',$line,$results);
//        $ip = implode(" ",$results);
//        $ip = ltrim($ip, 'addr="');
//        $ip = rtrim($ip, '" addrtype');
//        print "<br><strong><u>Device</u></strong><br>";
//        print "IP Address:  $ip<br>";
//    }
//
//    //Get Vendor
//    if (strpos($line, 'addrtype="mac"') == TRUE){
//        preg_match('/vendor=".*"/',$line,$results);
//        $vendor = implode(" ",$results);
//        $vendor = ltrim($vendor,'vendor="');
//        $vendor = rtrim($vendor, '"');
//        print "Vendor: $vendor<br>";
//    }
//
//    //Get MAC Address
//    if (strpos($line, 'addrtype="mac"') == TRUE){
//        preg_match('/addr=".*" addrtype/',$line,$results);
//        $mac = implode(" ",$results);
//        $mac = ltrim($mac,'addr="');
//        $mac = rtrim($mac, '" addrtype');
//        print "MAC Address: $mac<br>";
//    }
//
//    //Get Hostname
//    if (strpos($line, 'type="PTR"') == TRUE){
//        preg_match('/name=".*" type/',$line,$results);
//        $hostname = implode(" ",$results);
//        $hostname = ltrim($hostname,'name="');
//        $hostname = rtrim($hostname, ' type');
//        $hostname = rtrim($hostname, '"');
//        print "Hostname:  $hostname<br>";
//    }
//
//    //Get Ports
//    if (strpos($line, 'portid="') == TRUE){
//        preg_match('/portid=".*><state/',$line,$results);
//        $port = implode(" ",$results);
//        $port = ltrim($port,'portid="');
//        $port = rtrim($port, '"><state');
//        print "Port: $port<br>";
//        array_push($portArray, $port);
//    }

    //Add Values to Database
//    if (strpos($line, '/host>') == TRUE){
//        $timestamp = time();
//        $portList = implode(", ",$portArray);
//        $sql = "insert into log(ip,mac,vendor,hostname,ports,timestamp) values ('$ip','$mac','$vendor','$hostname','$portList','$timestamp')";
//
//        if ($conn->query($sql) === TRUE) {
//            echo "Data Added: $ip  - $mac - $vendor - $hostname - $portList - $timestamp <br>";
//        } else {
//            echo "Error: ".$sql."<br>".$conn->error;
//        }
//        $ip = " ";
//        $mac = " ";
//        $vendor = " ";
//        $hostname = " ";
//        unset($portArray);
//        $portArray = array();
//        $portList = " ";
//    }
//
//}

//$conn->close();
$file = file('C:\Users\sarge\source\servicesFile.xml');
$ip;
$mac;
$vendor;
$hostname;
$port;
$state;
$portArray = array();
$portList;
$timestamp;

foreach($file as $line){

    //Get IP Address
    if (strpos($line, 'addrtype="ipv4"') == TRUE){
        preg_match('/addr=".* addrtype/',$line,$results);
        $ip = implode(" ",$results);
        $ip = ltrim($ip, 'addr="');
        $ip = rtrim($ip, '" addrtype');
        echo "<br><strong><u>Device</u></strong><br>";
//        print "IP Address:  $ip<br>";
        echo "IP Address: ".$ip."<br>";
    }

//    //Get Vendor
//    if (strpos($line, 'addrtype="mac"') == TRUE){
//        preg_match('/vendor=".*"/',$line,$results);
//        $vendor = implode(" ",$results);
//        $vendor = ltrim($vendor,'vendor="');
//        $vendor = rtrim($vendor, '"');
//        print "Vendor: $vendor<br>";
//    }
//
//    //Get MAC Address
//    if (strpos($line, 'addrtype="mac"') == TRUE){
//        preg_match('/addr=".*" addrtype/',$line,$results);
//        $mac = implode(" ",$results);
//        $mac = ltrim($mac,'addr="');
//        $mac = rtrim($mac, '" addrtype');
//        print "MAC Address: $mac<br>";
//    }

    //Get Hostname
    if (strpos($line, 'type="PTR"') == TRUE){
        preg_match('/name=".*" type/',$line,$results);
        $hostname = implode(" ",$results);
        $hostname = ltrim($hostname,'name="');
        $hostname = rtrim($hostname, ' type');
        $hostname = rtrim($hostname, '"');
//        print "Hostname:  $hostname<br>";
        echo "Hostname: ".$hostname."<br>";
    }

    //Get Ports
    if (strpos($line, 'portid="') == TRUE){
        preg_match('/portid=".*><state/',$line,$results);
        $port = implode(" ",$results);
        $port = ltrim($port,'portid="');
        $port = rtrim($port, '"><state');
        preg_match('/state=".*" reason=/', $line, $matches);
        $state = implode(" ", $matches);
        $state = ltrim($state, 'state=');
        $state = rtrim($state,'reason=');
        $state = ltrim($state, '"');
        $state = rtrim($state,'" ');
//        print "Port: $port State: $state<br>";
//        print "State: $state<br>"
        echo "Port: ".$port." State: ".$state."<br>";
        array_push($portArray, $port);
    }

    //Add Values to Database
//    if (strpos($line, '/host>') == TRUE){
//        $timestamp = time();
//        $portList = implode(", ",$portArray);
//        $sql = "insert into log(ip,mac,vendor,hostname,ports,timestamp) values ('$ip','$mac','$vendor','$hostname','$portList','$timestamp')";
//
//        if ($conn->query($sql) === TRUE) {
//            echo "Data Added: $ip  - $mac - $vendor - $hostname - $portList - $timestamp <br>";
//        } else {
//            echo "Error: ".$sql."<br>".$conn->error;
//        }
//        $ip = " ";
//        $mac = " ";
//        $vendor = " ";
//        $hostname = " ";
//        unset($portArray);
//        $portArray = array();
//        $portList = " ";
//    }

}

//$conn->close();

?>