<?php

$total_belanja = 500;

echo "total belanja anda $total_belanja <br>";


if ($total_belanja >= 1000) {
    echo "Selamat anda mendapat dia";
} else {
    echo "Anda tidak mendapatkan dia <br><br><br>";
}


// HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH
$hari = "rabu";

if ($hari == "senin") {
    echo "Menggunakan Seragam Putih Abu";
} else if ($hari == "selasa") {
    echo "Menggunakan Seragam Pramuka";
}else if ($hari == "rabu") {
    echo "Menggunakan Seragam Produktif";
}else if ($hari == "kamis") {
    echo "Menggunakan Seragam Batik";
}else if ($hari == "jumat") {
    echo "Menggunakan Seragam Gamis";
}else {
    echo "Ya jangan ke sekolah";
}