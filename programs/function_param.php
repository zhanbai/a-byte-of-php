<?php
function print_max($a, $b) {
    if ($a > $b) {
        echo $a . ' is maximum' . "\n";
    } elseif ($a == $b) {
        echo $a . ' is equal to ' . $b . "\n";
    } else {
        echo $b . ' is maximum' . "\n";
    }
}

// 直接传递字面值
print_max(3, 4);

$x = 5;
$y = 7;

// 以参数的形式传递变量
print_max($x, $y);