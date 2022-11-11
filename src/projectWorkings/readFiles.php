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


//$DATABASE_HOST = 'localhost';
//$DATABASE_USER = 'root';
//$DATABASE_PASS = 'mysql';
//$DATABASE_NAME = 'securitydashboard';
//
//$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

//if ($conn === false){
//
//    die ("ERROR: Could not connect. " . mysqli_connect_error());
//}

$mysqli = new mysqli("localhost","root","mysql","securitydashboard");

$file

$ip;
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
        preg_match('/service name=".*port>/',$line, $services);
        $service = implode("", $services);
        $service = ltrim($service, 'service name= "');
        $service = rtrim($service, ' "/"..port>');
        echo "Port: ".$port." State: ".$state."<br>";
//        array_push($portArray, $port);
    }

    //Add Values to Database
    if (strpos($line, '/host>') == TRUE){
        $timestamp = date('Y-m-d');
//        $portList = implode(", ",$portArray);
//        $sql = "insert into ipAddresses(address,description, added) values ('$ip','$hostname','$timestamp')";
//        $stmt = $mysqli->prepare("INSERT INTO ipAddresses(address,description, added) VALUES (?,?,?)");
//        $stmt->bind_param("sss", $ip,$hostname,$timestamp);
//        $stmt->execute();

//        if ($mysqli->query($stmt) === TRUE) {
//            echo "Data Added: $ip  - $hostname - $timestamp <br>";
//        } else {
//            echo "Error: ".$stmt."<br>".$mysqli->error;
//        }

        $stmt2 = $mysqli->prepare("INSERT INTO ports(address, portid, state) VALUES (?,?,?)");
        foreach ($line as $stmt2){
            $stmt2->bind_param("sss",$ip, $port, $state);
            $stmt2->execute();
        }



//        $sql2 = "insert into ports(address, portid,state) values ('$ip','$port','$state')";
//
//        if ($conn->query($sql2) === TRUE) {
//            echo "Data Added: $ip - $port - $state <br>";
//        } else {
//            echo "Error: ".$sql."<br>".$conn->error;
//        }



        $ip = " ";
//        $mac = " ";
//        $vendor = " ";
        $hostname = " ";
        $port = " ";
        $state = " ";
//        unset($portArray);
//        $portArray = array();
//        $portList = " ";
    }

}

$mysqli->close();

?>