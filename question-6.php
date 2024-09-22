<?php
$batasBawah = 1;
$batasAtas = 10;

$jumlahGenap = 0;

for ($i = $batasBawah; $i <= $batasAtas; $i++) {
    if ($i % 2 == 0) {
        $jumlahGenap++;
    }
}

echo "Jumlah bilangan genap antara $batasBawah dan $batasAtas adalah $jumlahGenap.";
