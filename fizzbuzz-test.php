<?php

// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 3 === 0 &&  $i % 5 === 0) {
//         echo $i . " = FizzBuzz" . PHP_EOL;
//     } elseif ($i % 3 === 0) {
//         echo $i . " = Fizz" . PHP_EOL;
//     } elseif ($i % 5 === 0) {
//         echo $i . " = Buzz" . PHP_EOL;
//     } else {
//         echo $i . PHP_EOL;
//     }
// }

function FizzBuzz($first, $end)
{
    for ($first = 1; $first <= $end; $first++) {
        if ($first % 3 === 0 &&  $first % 5 === 0) {
            echo $first . " = FizzBuzz" . PHP_EOL;
        } elseif ($first % 3 === 0) {
            echo $first . " = Fizz" . PHP_EOL;
        } elseif ($first % 5 === 0) {
            echo $first . " = Buzz" . PHP_EOL;
        } else {
            echo $first . PHP_EOL;
        }
    }
}

FizzBuzz(1, 100);
