<?php
function say($message, $times = 1) {
    for ($i = 0; $i < $times; $i++) {
        echo $message;  
    }

    echo "\n";
}

say('Hello');
say('World', 5);