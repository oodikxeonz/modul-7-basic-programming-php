<?php

$siswa = [
    ["nama" => "Rafay", "nilai" =>  85],
    ["nama" => "Panjul", "nilai" =>  65],
    ["nama" => "Faiz", "nilai" =>  0],
    ["nama" => "Bima", "nilai" =>  80],
    ["nama" => "Rapaka", "nilai" =>  5],
    ["nama" => "Aoddi", "nilai" =>  100]
];

// echo "<h2>"
echo "Tugas Array";
echo "<hr>";

echo "<center> <h2>Daftar Siswa</h2>";
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr><th>Nama</th><th>Nilai</th><th>Status</th></tr>';

foreach ($siswa as $s) {
    echo "<tr>";
    echo "<td>". $s['nama'] . "</td>";
    echo "<td>" .$s['nilai'] ."</td>";
    
    

    if ($s['nilai'] >= 70){
    $status = "<span style='color:green;'>Lulus</span>";
}elseif ($s["nilai"] >= 60) {
    $status = "<span style='color:orange;'>Remedial</span>";
}elseif ($s["nilai"] <= 50) {
    $status = "<span style='color:red;'>Tidak Lulus</span>";
}else {
    $status = "<span style='color:black;'>Bolos</span>";
}

echo "<td>" . $status . "</td>" ;
 echo "</tr>";
}

echo '</table>';






