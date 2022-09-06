<!--7.2 Types of errors-->

<h1>Types of Errors</h1>

<h3>Parse Errors</h3>
<!--caused by missing \ after I-->
<?php echo 'I\'ve been around the block!'; ?>

<p>Parse: Has code terminated?</p>

<h3>Warning Errors</h3>
<?php include 'variables.php'; ?>
<p>Warning: Has code terminated?</p>
<!--Code does not terminate but displays error message-->

<h3>Fatal Error</h3>
<?php //echo multiply(3, 2); ?>
<p>Fatal: Has code terminated?</p>
<!--Yes, code does terminate after fatal error, when commented out, code continues-->

<h3>Notice Errors</h3>
<?php $x = 2; ?>
<?php echo $x; ?>
<p>Notice: Has code terminated?</p>
<!--No, but shows error messages until variable defined in line above-->

<!--7.4 Common Parse Errors-->
<?php
$a = 45;
//error on line above, missing ;
echo "hello";
echo '<br>';
echo '<br>';
//syntax error on line above as no quotes

$b = array( 'red' => 'Stop',
//error on next line from missing ' before Slow
'yellow' => 'Slow',
'green' => 'Go',
);

// next error on line below from missing ) before curly brace
if ( empty( $a ) ) {
echo '$a is empty.';
}
// Variables
$name = "Joe";

// Try/catch statements

//must return positive integer
function multiply ($a, $b): float
{
    $x = $a * $b;
    if ( $x <0 ) {
        throw new Exception("The result is not positive!");
    }
    else {
        return $x;
    }
}

try {
    echo multiply (-5, 4);
}catch ( Exception $e){
    echo $e->getMessage();
}

//the following is the code above modified for PHP8.0 including a log message
//instead of the echo getMessage
//function multiply($a, $b) {
//    return ( ( $a * $b ) > 0 ) ? $a * $b : throw new Exception( "The result is not positive." );
//}
//try {
//    echo multiply( -5, 4 );
//} catch( Exception ) {
//    error_log( 'The result was not positive.' );
//}


