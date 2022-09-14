<?php

$text = file_get_contents("C:\Users\sarge\source\xxxx.txt");
echo $text;
echo '<br><br>';

//$regexIP = '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(?:\/\d{2})?/';
$regexIP = '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/';

preg_match_all($regexIP, $text, $match);
var_dump($match);
?>

<pre>
    <?php print_r($match); ?>
</pre>
