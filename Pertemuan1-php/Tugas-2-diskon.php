<?php
$member = "Non-Member"; //-Jenis Member nya : 'Member-Gold', 'Member-Silver', 'Non-Member'.
$Diskon = 0;
$totalBelanja = 1200000;

// =Logic nya============
if ($member == "Member-Gold") {
    if ($totalBelanja >= 1500000) {
        $Diskon = 20;
    } else if ($totalBelanja >= 1000000 && $totalBelanja <= 1499000) {
        $Diskon = 15;
    } else if ($totalBelanja < 1000000) {
        $Diskon = 10;
    }

} else if ($member == "Member-Silver") {
    if ($totalBelanja >= 1500000) {
        $Diskon = 15;
    } else if ($totalBelanja >= 1000000 && $totalBelanja <= 1500000) {
        $Diskon = 10;
    } else if ($totalBelanja < 1000000) {
        $Diskon = 5;
    }


} else if ($member == "Non-Member") {
    if ($totalBelanja >= 1500000) {
        $Diskon = 10;
    } else if ($totalBelanja >= 1000000 && $totalBelanja <= 1500000) {
        $Diskon = 5;
    } else if ($totalBelanja <= 1000000) {
        $Diskon = 0;
    }
}

// rumus=======
$potongan = ($Diskon / 100) * $totalBelanja;
$totalBayar = $totalBelanja - $potongan;

// hasil======
echo "==== Total Pembelanjaan ===<br>";
echo "Total Belanja : Rp " . $totalBelanja . "<br>";
echo "Jenis Member : " . $member . "<br>";
echo "Diskon : " . $Diskon . "%<br>";
echo "Potongan : Rp " . $potongan. "<br>";
echo "Total Bayar : Rp " . $totalBayar. "<br>";
?>