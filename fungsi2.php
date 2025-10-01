<?php
// 1. Fungsi bilangan terbesar
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$bil1 = 100;
$bil2 = 150;
echo "Bilangan terbesar dari $bil1 dan $bil2 adalah: " . terbesar($bil1, $bil2);
echo "<br><br>";

// 2. Tanggal dengan getdate()
$sekarang = getdate();
echo "Tanggal sekarang (getdate): " . $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"];
echo "<br><br>";

// 3. Tanggal dengan fungsi date()
echo "Tanggal sekarang (date): " . date('d-F-Y');
?>