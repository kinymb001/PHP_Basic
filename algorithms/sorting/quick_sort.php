<?php

function swap(&$a,&$b)
{
    $c = $a;
    $a  = $b;
    $b = $c;
}
function print_array($array)
{
    foreach ($array as $val)
    {
        echo $val . " ";
    }
}
function partition(&$array, $low, $high)
{
    $pivot = $array[$high];
    $left = $low;
    $right = $high - 1;
    while(true) {
        while ($left <= $right && $array[$left] < $pivot) $left++;
        while ($right >= $left && $array[$right] > $pivot) $right--;
        if ($left >= $right) break;
        swap($array[$left], $array[$right]);
        $left++;
        $right--;

    }
    swap($array[$left],$array[$high]);
    return $left;
}
function quick_sort(&$array, $low,$high)
{
    if($low < $high)
    {
        $pi = partition($array,$low,$high);
        quick_sort($array,$low,$pi - 1);
        quick_sort($array,$pi + 1, $high);
    }
}
$array = [14, 22, 19, 33, 55, 20, 44, 89, 73];
quick_sort($array,0,5);
print_array($array);