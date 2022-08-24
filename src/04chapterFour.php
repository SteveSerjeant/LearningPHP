<?php

// do/while loop
$i = 5;

do {
    echo "<p>$i</p>";
    $i++;
} while ($i < 10);

while ($i < 10 ) {
    echo "<p>$i</p>";
    $i++;
}

// for loops

//turning while loop above into for loop

for ($i = 0; $i < 10; $i++){

    echo "<p>$i</p>";
}

// for loop through an array

$colours = array ('red', 'blue', 'green', 'yellow',);

for ( $i = 0; $i < sizeof($colours); $i++){
    echo '<pre><h2>' . $colours[$i] . '</pre></h2>';

}



