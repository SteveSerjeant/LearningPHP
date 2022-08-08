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




