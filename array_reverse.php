<?php

/**
 * Author: Pavel Petrov <itnelo@gmail.com>
 * Date: 11.07.16 18:14
 */

$arr = [1,2,3,4,5];

print_r($arr);

$size = count($arr) - 1;
$half = $size / 2;
for ($index = 0; $index < $half; ++$index) {
    $temp = $arr[$index];
    $arr[$index] = $arr[$size - $index];
    $arr[$size - $index] = $temp;
}

print_r($arr);