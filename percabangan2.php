<?php

$uts = 92;
$uas = 93;
$tugas = 100;

 $status = "";//lulus atau perbaikan
$grade = " ";//a,b,c

$rata = ($uts + $uas + $tugas) /3;

if ($rata >= 70 && $rata <= 79) {
    $status="perbaikan";
    $grade="C";
}elseif ($rata >=80 && $rata <= 89) {
    $status="Lulus";
    $grade="B";
}else if ($rata >=90 && $rata <= 100) {
    $status="Lulus";
    $grade="A";
}else {
    $status="-";
    $grade="Big L";
}

echo "Nilai UTS =" . $uts . "<br>";
echo "Nilai UAS =" . $uas . "<br>";
echo "Nilai Tugas =" . $tugas . "<br>";

echo "Rata-Rata Anda =" . $rata . "<br>";
echo "Grade Anda=" . $grade . "<br>";
echo "Status Anda =" . $status . "<br>";
