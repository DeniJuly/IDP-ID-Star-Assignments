<?php
$bilangan = [10, 5, 8, 12, 3];

$total = array_sum($bilangan);
$jumlahElemen = count($bilangan);

$rataRata = $jumlahElemen > 0 ? $total / $jumlahElemen : 0;

echo "Rata-rata dari bilangan tersebut adalah $rataRata.";
