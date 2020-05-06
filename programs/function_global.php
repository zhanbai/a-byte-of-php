<?php
$x = 50;

function func($x) {
    global $x;
    echo '$x is ' . $x . "\n";
    $x = 2;
    echo 'Changed global $x to ' . $x . "\n";
}

func($x);
echo 'Value of $x is ' . $x . "\n";