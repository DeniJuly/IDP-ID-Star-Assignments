<?php
// Buatlah sebuah algoritma dan kode program PHP 
// untuk menentukan apakah sebuah bilangan merupakan bilangan prima atau bukan. 
// Misal $bilangan = 17;

function checkIsPrimary($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$bilangan = 17;
if (checkIsPrimary($bilangan)) {
    echo "$bilangan adalah bilangan prima";
} else {
    echo "$bilangan bukan bilangan prima";
}
