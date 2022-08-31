<?php

// 4.2 do/while loop
$i = 5;

do {
    echo "<p>$i</p>";
    $i++;
} while ($i < 10);

while ($i < 10 ) {
    echo "<p>$i</p>";
    $i++;
}

// 4.3 for loops

//turning while loop above into for loop

for ($i = 0; $i < 10; $i++){

    echo "<p>$i</p>";
}

// for loop through an array

$colours = array ('red', 'blue', 'green', 'yellow',);

for ( $i = 0; $i < sizeof($colours); $i++){
    echo '<pre><h2>' . $colours[$i] . '</pre></h2>';

}

// 4.4 foreach loops
// using foreach loop with colours array above

foreach ($colours as $colour){
    echo "<p>$colour</p>";
}

//Associative Array copied from 01hello.php for this example

$home_towns = array(
    'Joe' => 'Middletown, NY',
    'Erin' =>   'West Chester, PA',
    'Dave' => 'Exton, PA',
    'Brian' => 'Grand Rapids, MI',
);

foreach ($home_towns as $name => $town){
    echo "<p>$name lives in $town</p>";
}

//4.5 & 4.6 Fibonacci challenge solution

$current = 1;
$previous = 0;
$next = null;
$limit = 200;
$sequence = '';

while ( $current < $limit ) {

    $sequence .= $current . ',';
    $next = $current + $previous;
    $previous = $current;
    $current = $next;
}

$sequence = trim($sequence); // removes whitespace
$sequence = substr($sequence, 0, strlen($sequence) -1);  //removes last character - ,

echo $sequence;





