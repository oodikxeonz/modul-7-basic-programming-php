<?php

$belanja = 1500000;
$status = "Member Gold";


if ($belanja >= 1500000  ) {
    $diskon = 20;
} elseif ( $belanja >= 1000000 && $belanja <= 1499999  ) {
    $diskon = 15;
} elseif ( $belanja < 1000000 ) {
    $diskon = 10;
}

if ($status == "Member Gold") {
    $pajak = $pajak  + 0 ;
}elseif ($status == "Member Silver") {
    $diskon = $diskon - 5;
}else {
    $pajak = $pajak + 0;
}