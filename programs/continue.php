<?php
while (True) {
    fwrite(STDOUT, 'Enter something: ');
    $s = trim(fgets(STDIN));

    if ($s == 'quit') {
        break;
    }

    if (strlen($s) < 3) {
        echo 'Too small' . PHP_EOL;
        continue;
    }

    echo 'Input is of sufficient length' . PHP_EOL;
}