<?php

// 5.1 Using Functions

function is_bigger(){
    return 10 >= 5;
}

$bigger = is_bigger();

if ($bigger){
    echo "The function returned true. <br>";
}else {
    echo "The function returned false.<br>";
}

// calling function within the if statement

if ( is_bigger()) {
    echo "The function returned true. <br>";
}else {
    echo "The function returned false.<br>";
}

// passing arguments
function is_larger($a, $b)
{
    return $a >= $b;
}

$bigger = is_larger(10, 5);
echo '<br>';
echo $bigger;
echo '<br>';

// 5.2 Using built-in functions

// date function
echo date('F d, Y'); //output current month, date, year e.g. August 31, 2022
echo '<br>';

//5.3 Writing custom functions

function is_palindrome ( $string ){

    $pal_check = ($string == strrev($string)); //check string against reverse of itself
    return $pal_check;
}

$check_string = 'wow';
if (is_palindrome($check_string)){
    echo "<p>$check_string is a palindrome</p><br>";
}else {
    echo "<p>$check_string is not a palindrome</p><br>";
}

// will now rewrite to include convert to lower case and remove spaces

function isPalindrome ($string){

//    $string = strtolower($string); //coverts to lower case
//    $string = str_replace(' ','', $string); //remove spaces

    // to optimise the above statements the stringtolower could be included within the string_replace
    $string = str_replace(' ', '', strtolower($string));

    $p_check = ($string == strrev($string)); //check string against reverse of itself
    return $p_check;

    // the previous two lines can be optimised like this;
//    return ($string == strrev($string));

}

$forChecking = 'Madam';
if(isPalindrome($forChecking)) {
    echo "<p>$forChecking is a palindrome</p><br>";
}else {
    echo "<p>$forChecking is not a palindrome</p><br>";
}

//5.4 Union typing variables - will not work until sort out issue with PHP 8.0

//function double (int|float|null $a) {
//    return $a * 2;
//}
//
//echo double (3.4);

// Named Arguments

function math ($a, $b = 2, $op = 'multiply'){

    if ('add' == $op){
        return $a + $b;
    }
    else if ('sub ' == $op){
        return $a - $b;
    }
    else if ('divide' == $op){
        return $a / $b;
    }

    return $a * $b;
}

echo math (4);
echo '<br>';
echo math (4, 3, 'add');
echo '<br>';

// the following will only work in PHP8
//echo math(12, op: 'add', b: 12);
//echo '<br>';

//5.6 Anonymous functions

$names = array('Joe', 'Erin', 'Teresa', 'Louis');
usort ( $names, function ($a, $b){
    return $a[1] <=> $b[1];
});
?>

<pre>
    <?php print_r($names);
    echo '<br>';
    ?>

</pre>


<?php
// 5.8 define a simple person class

class Person {
    var $name;
    var $age;
    var $birthday = false;

    function __construct ( $name, $age ){
        $this->name = $name;
        $this->age = $age;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_age() {
        return $this->age;
    }

    public function set_name($new_name) {
        $this->name = $new_name;
    }

    public function set_birthday($b) {
        $this->birthday = $b;
        $this->update_age ();
    }

    private function update_age() {
        $this->age = ($this->birthday) ? ++$this->age : $this->age;
    }

}

$joe = new Person('Joe', 35);
$rob = new Person('Rob', 30);

echo $joe->get_name() . '<br>';
echo $rob->get_name() . '<br>';

$joe->set_birthday(true);
echo $joe->get_age();
echo '<br>';

//5.10 and 5.11 challenge: sort an array of objects

class personForChallenge {
    var $first_name;
    var $last_name;

    function __construct ($fn, $ln) {
        $this->first_name = $fn;
        $this->last_name = $ln;
    }

    public function get_first_name() {
        return $this->first_name;
    }

    public function get_last_name (){
        return $this->last_name;
    }
}

$rob = new personForChallenge('Rob', 'Casabona');
$joe = new personForChallenge('Joe', 'Casabona');
$erin = new personForChallenge('Erin', 'Casabona');
$steve = new personForChallenge('Steve', 'Wozniack');
$bill = new personForChallenge('Bill', 'Gates');
$walt = new personForChallenge('Walt', 'Disney');
$bob = new personForChallenge('Bob', 'Iger');

// array for challenge
$people = array ($rob, $joe, $erin, $steve, $bill, $walt, $bob);

usort( $people, function ($a, $b) {
    return [$a->get_last_name(), $a->get_first_name()] <=> [$b->get_last_name(), $b->get_first_name()];
});

?>

<pre>
    <?php print_r($people) . '<br>'?>
</pre>










