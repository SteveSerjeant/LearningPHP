<?php

$text = file_get_contents("C:\Users\sarge\source\xxxx.txt");
//echo $text;
//echo '<br><br>';

if ($scan = fopen("C:\Users\sarge\source\xxxx.txt", "r")){
    while (!feof($scan)){
        $scanLine = fgets($scan);
        echo $scanLine, "<br>";
    }

}

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
//$regexIP = '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(?:\/\d{2})?/';
$regexIP = '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/';

preg_match_all($regexIP, $text, $match);
var_dump($match);
?>

<pre>
    <?php print_r($match); ?>
</pre>

<?php
$file = file("C:\Users\sarge\source\xxxx.xml");
foreach ($file as $line){

    //Get IP Address
    if (strpos($line, 'addrtype="ipv4"') == TRUE){
        preg_match('/addr=".* addrtype/',$line,$results);
        $ip = implode(" ",$results);
        $ip = ltrim($ip, 'addr="');
        $ip = rtrim($ip, '" addrtype');
        print "<br><strong><u>Device</u></strong><br>";
        print "IP Address:  $ip<br>";
    }

    //Get Hostname
    if (strpos($line, 'type="PTR"') == TRUE){
        preg_match('/name=".*" type/',$line,$results);
        $hostname = implode(" ",$results);
        $hostname = ltrim($hostname,'name="');
        $hostname = rtrim($hostname, ' type');
        $hostname = rtrim($hostname, '"');
        print "Hostname:  $hostname<br>";
    }
}
?>
