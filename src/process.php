<?php


foreach ( $_POST as $name => $value){
    if ( 'submit' != $name) {
        echo "<p><b>" . ucfirst($name) . "</b> is $value</p>";
    }
}