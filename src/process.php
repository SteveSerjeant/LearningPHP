<?php

// version from his video
//foreach ( $_POST as $name => $value){
//    if ( 'submit' != $name) {
//        echo "<p><b>" . ucfirst($name) . "</b> is $value</p>";
//    }
//}

//version from the exercise files
// not sure what the implode does
// from documentation is used to add separator, but does not seem to work
// from next video, adds the separator to an array output
foreach ($_POST as $name=> $value){
    if ('submit' != $name){
        if (is_array($value)){
            $value = implode(', ', $value);
        }
        echo "<p><b>" . ucfirst($name) . "</b> is $value.</p>";
    }
}