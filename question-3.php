<?php
$bilangan = 5; // Ganti dengan bilangan yang ingin dihitung faktorialnya
$faktorial = 1;

for ($i = 1; $i <= $bilangan; $i++) {
    $faktorial *= $i;
}

echo "Faktorial dari $bilangan adalah $faktorial";
