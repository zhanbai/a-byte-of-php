<?php
$number = 23;
$running = False;

do {
    fwrite(STDOUT, 'Enter an integer: ');
    $guess = (int)trim(fgets(STDIN));

    if ($guess == $number) {
        echo 'Congratulations, you guessed it.' . PHP_EOL;
        // 使 while 循环终止
        $running = False;
    } elseif ($guess < $number) {
        echo 'No, it is a little higher than that' . PHP_EOL;
        // 使 do-while 循环继续
        $running = True;
    } else {
        echo 'No, it is a little lower than that' . PHP_EOL;
        // 使 do-while 循环继续
        $running = True;
    }
} while ($running);

// while 循环结束执行
echo 'The while loop is over.' . PHP_EOL;
echo 'Done' . PHP_EOL;