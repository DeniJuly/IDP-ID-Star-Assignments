<?php
$jumlahBaris = 5;
for ($i = $jumlahBaris; $i >= 1; $i--) {
    for ($j = 1; $j <= $jumlahBaris - $i; $j++) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*&nbsp;";
    }
    echo "<br>";
}
