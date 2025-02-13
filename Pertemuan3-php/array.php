<?php
// Array
// definisi array
// Index       0          1       2
echo "index Array";
echo "<hr>";
$produk = ["Monitor", "Mouse", "Cpu"];
echo $produk[0] . "<br>";
echo $produk[1] . "<br>";
echo $produk[2] . "<br>";   
echo "<hr>";

// array asosiatif
// kunci >= nilai 
echo "array asosiatif";
echo "<hr>";
$buah = [
    "nama" => " Apel",
    "warna" => " Hijau",
    "rasa" => " Manis"
];

echo "nama buah" . $buah['nama'] . "<br>";
echo "warna buah" . $buah['warna'] . "<br>";
echo "rasa buah" . $buah['rasa'] . "<br> <br>";


$produk2 = [
    ["nama" => "Laptop", "harga" =>  19000000, "stok" => 5],
    ["nama" => "Mouse", "harga" =>  2300000, "stok" => 10],
    ["nama" => "Monitor", "harga" =>  2000000, "stok" => 4]
];

foreach ($produk2 as $p){
    echo " Nama Produk " . $p['nama'] .
     ", Harga: Rp." . number_format ( $p[ 'harga'] ,0,",",".") .
      ", Stok " . $p['stok'] .
       "<br> <hr>";
}