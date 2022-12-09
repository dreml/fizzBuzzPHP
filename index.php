<?php

for ($i = 1; $i <= 100; $i++) {
    $result = '';

    switch (true) {
        case $i % 15 == 0:
            $result = 'FizzBuzz';
            break;
        case $i % 3 == 0:
            $result = 'Fizz';
            break;
        case $i % 5 == 0:
            $result = 'Buzz';
            break;
        default:
            $result = $i;
    }

    echo $result . PHP_EOL;
}