<?php
while (True) {
    fwrite(STDOUT, 'Enter something: ');
    $s = trim(fgets(STDIN));

    if ($s == 'quit') {
        break;
    }

    echo 'Length of the string is ' . strlen($s) . PHP_EOL;
}

echo 'Done' . PHP_EOL;