<?php
$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];
$newArray = array_values(array_unique(array_merge($array1, $array2)));
print_r($newArray);
