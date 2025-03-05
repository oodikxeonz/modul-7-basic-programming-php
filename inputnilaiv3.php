<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>

  
  <?php
    $Namas = "";
    $Nit = "";
    $Niu = "";
    $Niua = "";
    $nilai = "";
    $hasil = "";
    $predik = "";
  
// isset() memeriksa apakah variabel ada dan tidak bernilai null.
//         mengembalikan true jika variabel ada dan tidak bernilai null.
// !isset() memeriksa apakah variabel tidak ada atau bernilai null.
//         mengembalikan true jika variabel tidak ada atau null.
// session: digunakan untuk menyimpan data sementara yang dapat diakses oleh pengguna selama periode tertentu.

//inisialisasi sesi unt8uk menyimpan data siswa

session_start();
//memeriksa apakah $_SESSION['siswa'] sudah ada atau belum
//jika belum, maka inisialisasi $_SESSION['siswa'] sebagai array kosong

if (!isset($_SESSION['siswaList'])) {//true
    $_SESSION['siswaList'] = []; //jika kondisi true maka akan dibuatkan array kosong
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //cek apakah inputan form ada dan tidak kosong
    if(isset($_POST['Namas']) && isset($_POST['Nit']) && isset($_POST['Niu']) && isset($_POST['Niua'])){
        //ambil input dari form
        $Namas = $_POST['Namas'];
        $Nit = $_POST['Nit'];
        $Niu = $_POST['Niu'];
        $Niua = $_POST['Niua'];
        $nilai = $_POST['nilai'];
        $hasil = ((30/100)* $Nit) + ((30/100)* $Niu) + ((40/100)* $Niua);
        
        switch($nilai){
            case $hasil >=85:
                $predik = "A"; ;
                break;
            case $hasil >=70:
                $predik = "B"; ;
                break;
            case $hasil >=60:
                $predik = "C"; ;
                break;
            case $hasil >=50:
                $predik = "D"; ;
                break;
            default:
                $predik = "E"; ;
                break;
        }
    }

    //simpan data siswa ke dalam session
    $_SESSION['siswaList'][] = [
        'Namas' => $Namas,
        'Nit' => $Nit,
        'Niu' => $Niu,
        'Niua' => $Niua,
        'nilai' => $nilai,
        'hasil' => $hasil,
        'predik' => $predik
    ];

}
if(isset($_POST['hapus_data'])){
    session_destroy(); //hapus semua data sesi

    session_start(); //buat sesi baru
    $_SESSION['siswaList'] = []; //inisialisasi kembali data siswa
}
    ?>


<body class="bg-pink-100 flex items-center justify-center min-h-screen">
    <div class="bapak grid grid-cols-2 ">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-semibold mb-5 text-center">Form Input Nilai Siswa</h2>
            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Nama siswa</label>
                                    <input type="text" name="Namas" class="w-full p-3 mb-5 border border-gray-300 rounded-md" autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Tugas</label>
                                    <input type="number" name="Nit" class="w-full p-3 mb-5 border border-gray-300 rounded-md" autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai UTS</label>
                                    <input type="number" name="Niu" class="w-full p-3 mb-5 border border-gray-300 rounded-md" autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai UAS</label>
                                    <input type="number" name="Niua" class="w-full p-3 mb-5 border border-gray-300 rounded-md" autocomplete="off" required>
                                </div>
                                <button type="submit" name="nilai" class="w-full p-3 mb-5 border bg-pink-500 hover:bg-stone-700 ...
                                text-white rounded-md cursor-pointer">Hitung Nilai</button>
                            </form>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-semibold mb-5 text-center">Hasil Penilaian</h2>
            <table class="w-full border-collapse border border-gray-400 ...">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Nilai Akhir</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                   
<?php
    foreach ($_SESSION['siswaList'] as $List): {
        $Namas = $List['Namas'];
        $Nit = $List['Nit'];
        $Niu = $List['Niu'];
        $Niua = $List['Niua'];
        $hasil = $List['hasil'];
        $predik = $List['predik'];
    }
?>
    <tr>
      <td class="border border-gray-300 ... pl-5 pr-5 pt-2 pb-3" ><?=  $Namas; ?></td>
      <td class="border border-gray-300 ... pl-5 pr-5" ><?= $Nit; ?></td>
      <td class="border border-gray-300 ... pl-5 pr-5" ><?=  $Niu; ?></td>
      <td class="border border-gray-300 ... pl-5 pr-5" ><?= $Niua; ?></td>
      <td class="border border-gray-300 ... pl-5 pr-5"><?= $hasil; ?></td>
      <td class="border border-gray-300 ... pl-5 pr-5"><?= $predik; ?></td>
    </tr>

    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <form method="POST">
        <button type="submit" name="hapus_data" class="w-full p-3 mb-5 border bg-pink-500 hover:bg-stone-700 ...
        text-white rounded-md cursor-pointer">Hapus Data</button>
    </div>
    
</body>