<?php
$kata = "malam";

$kataBersih = strtolower(str_replace(' ', '', $kata));

$kataTerbalik = strrev($kataBersih);

if ($kataBersih === $kataTerbalik) {
    echo "$kata adalah palindrom.";
} else {
    echo "$kata bukan palindrom.";
}
