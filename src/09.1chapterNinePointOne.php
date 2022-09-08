<?php

readfile('treasure-island.txt');

echo '<br>','<br>';
echo file_get_contents('treasure-island.txt');

$lines = file ('treasure-island.txt');

echo '<br>','<br>';
var_dump( $lines );

echo '<br>','<br>';
$casabona = file_get_contents( 'https://casabona.org');

var_dump( $casabona );
echo '<br>','<br>';

//string position method

if ( strpos ( $casabona, 'wp-content' ) ) {
    echo "<p>This website is using Wordpress!</p>";
}