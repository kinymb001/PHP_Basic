<?php
function insert_sort( &$array )
{
    $len  =  count($array);
    for ($i = 1; $i < $len; $i++)
    {
        $key = $array[$i];
        $j = $i - 1;
        while($j >= 0 && $array[$j] > $key ) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1]= $key;

    }
}
function print_array ($array)
{
    foreach ($array as $val)
    {
        echo $val . " ";
    }
}

$array = [14, 22, 19, 33, "kin", "l", 'as',55, 20, 44, 89, 73];
insert_sort($array);
print_array($array);
?>