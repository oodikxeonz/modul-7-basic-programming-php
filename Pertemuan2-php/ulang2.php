<?php


echo"OPERATOR ARITMATIKA <br>";
echo "<hr>";


$bil1 = 5;
$bil2 = 10;
$bil3 = 15;
$bil4 = 20;


$hasil_penjumlahan = $bil1 + $bil2;
$hasil_pengurangan = $bil1 - $bil2;
$hasil_perkalian   = $bil1 * $bil2;
$hasil_pembagian   = $hasil_penjumlahan / $bil3;
$hasil_sisa_bagi   = $bil1 % $bil2;
$hasil_pangkat     = $bil1 ** $bil2;

echo "Hasil Penjumlahan $bil1 + $bil2 = " . $hasil_penjumlahan . "<br>" ;
echo "Hasil Pengurangan $bil1 - $bil2 = " . $hasil_pengurangan . "<br>";
echo "Hasil Perkalian  $bil1 * $bil2 = " . $hasil_perkalian . "<br>";
echo "Hasil Pembagian $hasil_penjumlahan / $bil3 = " . $hasil_pembagian . "<br>" ;
echo "Hasil Sisa Bagi $bil1 % $bil2 = " . $hasil_sisa_bagi . "<br>" ;
echo "Hasil Pangkat $bil1 ^ $bil2 = " . $hasil_pangkat . "<br>" ;

