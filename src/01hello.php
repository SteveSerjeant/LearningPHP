<!--<html>-->
<!--<head>-->
<!--    <title>Hello World Script</title>-->
<!--</head>-->
<!--<body>-->
<!--<p>--><?php //echo 'Hello World'; ?><!--</p>-->
<!--</body>-->
<!--</html>-->

<?php
echo 'Hello World!!';
echo '<br>';
?>

<!--1.3 Using variables-->

<?php
$age = 34;

echo $age;  //output = 34
echo '<br>';
$age = 35;
$double_age = $age * 2;
echo $double_age; //output = 70
echo '<br>';

define ('VERSION', 1.1);
echo VERSION; //output 1.1
echo '<br>';

//1.4 Single vs Double Quotes
$name = 'Steve';
echo "$name's Nickname was \"Lugs\"";
echo '<br>';

$name = 'Steve';
echo "Hello, $name!";
echo '<br>';

//String concatenation
$name = 'Terri';
echo 'Hello, ' . $name . '!';
echo '<br>';

echo 'Welcome Steve\'s family!';
echo '<br>';


//1.6 defining Arrays

//Indexable array
echo '<br>';
$colours = array('red','blue','green');

print_r($colours);

echo '<br>';
echo $colours[2];
echo '<br>';
echo '<p>' . $colours[0] . '</p>';
$colours[] = 'yellow';
echo '<br>';
print_r($colours);
echo '<br>';

//Associative Array
$home_towns = array(
        'Joe' => 'Middletown, NY',
        'Erin' =>   'West Chester, PA',
        'Dave' => 'Exton, PA',
        'Brian' => 'Grand Rapids, MI',
);

print_r($home_towns);
echo '<br>';

echo '<pre>';
print_r($home_towns);
echo '</pre>';
echo '<br>';

echo '<p>' . $home_towns['Dave'] . '</p>';
//output Exton, PA
echo '<br>';

//Multidimensional Array

$brothers = array(
        'Joe' => array(
                'age' => 34,
                'job' => 'Teacher',
                'state' => 'PA',
        ),
        'Phil' => array(
            'age' => 33,
            'job' => 'Photographer',
            'state' => 'NY',
        ),
        'Mike' => array(
            'age' => 32,
            'job' => 'Logistics',
            'state' => 'NY',
        ),
         'Rob' => array(
             'age' => 29,
             'job' => 'Manager',
             'state' => 'FL',
         ),
);

echo '<pre>';
print_r($brothers);
echo '</pre>';
echo '<br>';
echo '<br>';


//output array item
echo '<p>' . $brothers['Rob']['state'] . '</p>';
echo '<br>';

// 1.7 and 1.8 challenge and solution

$name = "Teresa"; // Heading 1
$city = "NYC";
$movie = "Star Wars"; //Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";

echo "<h1>Hello, $name!</h1>\n\n";

echo "<p>So glad you can join us in $city today! You will be <b>$friend</b>'s guide 
as you do a range of activities.</p>\n\n";

echo "<p>You will end your day by seeing <i>$movie</i> at 7:00pm. make sure to bring
the money you've been provided. The movie ticket is \$12. <br>$friend's favourite candy
is $candy, so grab some of those too,</p>\n\n";

echo "<p>... and of course, \"May the Force be With You!\"</p>";

//2.2 Logical Operators Examples
echo '<br>';
$a = 9 > 5;     //true
$b = 10 != 10;  //false
$c = $a && $b;  //false
$d = $a || $b;  //true
$e = $b && $c;  //false
$f = $a || $d;  //true

$logic = array($a, $b, $c, $d, $e, $f,);
echo '<pre>';
print_r($logic);    //using print_r only shows 1 for true, 0 is blank or null
echo '</pre>';
echo '<br>';

echo '<pre>';
var_dump($logic);    //shows both true and false
echo '</pre>';
echo '<br>';

$c = $a and $b; //is treated as ($c = $a) and $b which is true
var_dump($c);


//2.3 creating if/else statements

if (10 < 1) {
    echo '<p>we stopped at if</p>';
} else if (10 < 4) {
    echo '<p>we stopped at the first else if.</p>';
}else if (10<11) {
    echo '<p>we stopped at the second else if.</p>';
}else if (10 <20){
    echo '<p>we stopped at the 3rd else if.</p>';
}else {
    echo '<p>None of the conditions are true, we never stopped,
so this is the else</p>';
}

$i = 10;
if (11 == $i) {
    echo '<h3>Welcome back, user!</h3>';
}else {
    echo '<h3>Welcome back to the site!</h3>';
}

//2.4 Ternery Operators
$is_logged_in = true;

echo "Welcome" . ($is_logged_in ? " back!" : "!");

$name = null;
$name = $name ?: 'Joe';

echo '<br>';
echo $name;
echo '<br>';

//2.5 Switch statements

$total = 10;

switch ($total){
    case 1:
        echo '$total is 1';
        break;

    case 2:
        echo '$total is 2';
        break;

    default:
        echo '$total is more than 2.';

}
echo '<br>';

//his index for switch statements

//function add_to_x ($x){
//    return $x +5;
//}
//
//$x = 0;
//
//$result = match($x){
//    -2, -1, 0 => add_to_x($x),
//    1 => '$x is 1',
//    2 => '$x is 2',
//    default => '$x is neither 1 nor 2',
//};
//echo $result;
//echo '<br>';
//
//$result = match (true){
//    $x <= 0 => '$x is not positive',
//    $x == 1 => '$x is 1',
//    $x == 2 => '$x is 2',
//    default => '$x is neither 1 nor 2',
//};
//
//echo $result;
//echo '<br>';


$turtle = 'Leo';
$bandana = '';

switch ($turtle){

    case 'Leo':
        $bandana = 'blue';
        break;

    case 'Raph':
        $bandana = 'red';
        break;

    case 'Mike':
        $bandana = 'orange';
        break;

    case 'Don':
        $bandana = 'purple';
        break;
}

echo "<p>$bandana</p>";
echo '<br>';
//
//$turtle = 'Don';
//$bandana = match ($turtle){
//    'Leo' => 'blue',
//    'Raph' => 'red',
//    'Mikey' => 'orange',
//    'Don' => 'purple',
//    default => 'green',
//};
//
//echo $bandana;
//echo '<br>';


// 2.7 Challenge solution

$min = 1;
$max = 50;
$guess = 15;
//
$num = 15;

if ($guess < $min || $guess > $max){
    echo '<p>Your guess is out of range.</p>';
    exit();
}

if ($num == $guess){
    echo '<h3>That\'s Correct!</h3>';
} elseif ($num > $guess){
    echo '<p>Sorry - that guess is too low.</p>';
} else {
    echo '<p>Sorry - that guess is too high.</p>';
}

print_r($num);


