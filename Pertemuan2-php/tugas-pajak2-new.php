<?php

$jabatan = 1; 
$jamkerja = 222 ;


if ($jabatan == 1) {
    $jabatan = "Manager";
    $gaji = 7000000;
}elseif ($jabatan == 2) {
    $jabatan = "Supervisor";
    $gaji = 5000000;
}elseif ($jabatan == 3) {
    $jabatan = "Staff" ;
    $gaji = 3000000;
}


if ($gaji <= 3000000) {
    $pajak = 5;
}elseif ($gaji >= 3000000 && $gaji <= 5000000) {
   $pajak = 10;
}elseif ($gaji >= 5000000) {
    $pajak = 15;
}


$jam_bonus = $jamkerja - 200;

if ($jam_bonus >= 1) {
    $bonus = $jam_bonus * 20000;
    $ucapan_bonus = "Selamat Anda Mendapatkan Bonus Karena Jam Kerja Anda lebih $jam_bonus jam dari 200 jam kerja <br>";
} else{
    $bonus = 0;
    $ucapan_bonus = "Maaf Anda Belum Mendapatkan Bonus Karena Jam Kerja Anda Kurang Dari 200 Jam Kerja <br>";
}

$persenan = $pajak / 100 ;
$potongan = $gaji * $persenan;
$gaji_bersih = $gaji - $potongan + $bonus;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
};

echo "Jabatan :" . $jabatan . "<br>";
echo "Gaji Pokok :" . rupiah ($gaji) . "<br>";
echo "Pajak :" . rupiah ($potongan) . "<br>";
echo $ucapan_bonus;
echo "Bonus :" . rupiah ($bonus) . "<br>";
echo "Gaji Bersih :" . rupiah ($gaji_bersih) . "<br>";