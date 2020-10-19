<?php

function appearFrequency(array $numbers, $value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] == $value) {
            ++$count;
        }
    }
    echo "The frequency of $value in this array is $count";
}

$arr1  = [1,3,2,1,4,5,3,6,8,5,3,6,3,6,3,5,3,5,3,7,8,0,5,5,7,4];
appearFrequency($arr1,3);
