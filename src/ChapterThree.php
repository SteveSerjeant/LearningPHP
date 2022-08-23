<?php
// 3.1 Arithmetic Operators

echo 5 * 6 + 3 - 1 . '<br/>'; // output should be 32

echo 3 + 5 * 6 - 1 . '<br/>'; // output should still be 32

//exponents (power)
echo 5**2 . '<br/>'; // output should be 25

echo 5**2 * 6 + 3 - 1 . '<br/>'; // output should be 152, however

echo 5**2 * (6 + 3) - 1 . '<br/>'; // output should be 224

// 3.2 Modulus

$a = 2;
$b = 3;

echo $b % $a . '<br/>'; // = remainder of 3/2, should be 1
echo 15 % 9 . '<br/>'; // = remainder of 15/9, should be 6

$a = 5;
if ($a %2 == 0 ){
    echo "<p>$a is even.</p><br/>";
} else {
    echo "<p>$a is odd.</p><br/>";
}

$a = 15;
$b = 6;

echo ( $a % $b == 0 ) ? "<p>$b is a factor of $a</p><br/>" : "<p>$b is not a factor of $a</p><br/>";

echo -$a % 2 . '<br/>'; // output should be -1

// 3.3 Incrementing and decrementing variables

$a = 5;
echo 'The value of $a is ' .  ++$a . '<br/>'; // output should be The value of $a is 6

echo 'Now $a is ' . $a . '<br/>'; // output should be Now $a is 6

$a = 5;
echo 'The value of $a is ' . $a--. '<br/>'; // output should be The value of $a is 5
echo 'Now $a is ' . $a . '<br/>'; // output should be Now $a is 4

$a = 'A';
echo '$a is ' . ++$a . '<br/>'; // output should be $a is B

$a = 1;

$a /= 5;
echo $a . '<br/>'; // output should be 0.2
