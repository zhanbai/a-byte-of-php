<?php
$number = 23;
fwrite(STDOUT, 'Enter an integer: ');
$guess = (int)trim(fgets(STDIN));

if ($guess == $number) {
    echo 'Congratulations, you guessed it.' . PHP_EOL;
    echo '(but you do not win any prizes!)' . PHP_EOL;
} else if ($guess < $number) {
    echo 'No, it is a little higher than that' . PHP_EOL;
} else {
    echo 'No, it is a little lower than that' . PHP_EOL;
}

echo 'Done' . PHP_EOL;