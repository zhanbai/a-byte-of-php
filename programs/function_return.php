<?php
function maximum($x, $y) {
    if ($x > $y) {
        return $x;
    } elseif ($x == $y) {
        return 'The numbers are equal';
    } else {
        return $y;
    }
}

echo maximum(2, 3);