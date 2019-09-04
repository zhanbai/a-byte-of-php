<?php
fwrite(STDOUT, 'Enter something: ');
$i = trim(fgets(STDIN));

switch ($i) {
    case 0:
        echo 'i equals 0' . PHP_EOL;
        break;
    case 1:
        echo 'i equals 1' . PHP_EOL;
        break;
    case 'apple':
        echo 'i is apple' . PHP_EOL;
        break;
    case 'bar':
    case 'cake':
        echo 'i is bar or cake' . PHP_EOL;
        break;
    default:
        echo 'i is unknown' . PHP_EOL;
}

echo 'The switch loop is over' . PHP_EOL;