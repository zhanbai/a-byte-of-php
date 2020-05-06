<?php
$x = 50;

function func($x) {
    echo '$x is ' . $x . "\n";
    $x = 2;
    echo 'Changed local $x to ' . $x . "\n";
}

func($x);
echo '$x is still ' . $x . "\n";