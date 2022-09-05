<?php
require_once 'inc1/functions.php';
require 'inc1/variables.php'; ?>

<html>
<head>
    <title><?php echo $title; ?></title>
</head>
    <body>
        <h1><?php echo $title; ?></h1>
        <?php para_print( $description ); ?>
        <small>By: <?php echo $author; ?></small>
    </body>
</html>

<?php
include 'learningphp.php';
function double ( $a ){
    return $a + 2;
}

echo '<p>' . double(5) . '</p>';

echo '<p>' . learningPHP\double(5) . '</p>';
