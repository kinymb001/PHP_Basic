<?php
function swap(&$a, &$b)
{
    $c = $a;
    $a = $b;
    $b = $c;
}

function print_array($array)
{
    foreach ($array as $val) {
        echo $val . " ";
    }
}

function selection_sort(&$array, $mode = 'ASC')
{
    $len = count($array);
    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = $i + 1; $j < $len; $j++) {

            if ($mode == "DES") {
                if ($array[$i] < $array[$j]) {
                    swap($array[$i], $array[$j]);
                }
            } else {
                if ($array[$i] > $array[$j]) {
                    swap($array[$i], $array[$j]);
                }
            }
        }
    }
}

$array = [14, 22, 19, 33, 55, 20, 44, 89, 73];
selection_sort($array, "ASC");
print_array($array);