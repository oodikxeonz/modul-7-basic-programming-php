<?php
$Nama = " ";
$jabatan = ""; 
$jamkerja = "" ;
$gaji  = "";
$pajak = "";
$bonus = "";
$potongan = "";
$gaji_bersih = "";


// isset() memeriksa apakah variabel ada dan tidak bernilai null.
//         mengembalikan true jika variabel ada dan tidak bernilai null.
// !isset() memeriksa apakah variabel tidak ada atau bernilai null.
//         mengembalikan true jika variabel tidak ada atau null.
// session: digunakan untuk menyimpan data sementara yang dapat diakses oleh pengguna selama periode tertentu.

//inisialisasi sesi unt8uk menyimpan data siswa

session_start();
//memeriksa apakah $_SESSION['siswa'] sudah ada atau belum
//jika belum, maka inisialisasi $_SESSION['siswa'] sebagai array kosong
if (!isset($_SESSION['Karyawan'])) {//true
    $_SESSION['Karyawan'] = []; //jika kondisi true maka akan dibuatkan array kosong
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //cek apakah inputan form ada dan tidak kosong
    if(isset($_POST['jabatan']) && isset($_POST['jamkerja'])){
        //ambil input dari form
        $Nama = $_POST['Nama'];
        $jabatan = $_POST['jabatan'];
        $jamkerja = $_POST['jamkerja'];

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
        echo "Nama :" . $Nama . "<br>";
        echo "Jabatan :" . $jabatan . "<br>";
        echo "Gaji Pokok :" . rupiah ($gaji) . "<br>";
        echo "Pajak :" . rupiah ($potongan) . "<br>";
        echo $ucapan_bonus;
        echo "Bonus :" . rupiah ($bonus) . "<br>";
        echo "Gaji Bersih :" . rupiah ($gaji_bersih) . "<br>";

    }
}

//simpan data siswa ke dalam session
$_SESSION['Karyawan'][] = [
    'Nama' => $Nama,
    'jabatan' => $jabatan,
    'jamkerja' => $jamkerja,
    'gaji' => $gaji,
    'pajak' => $pajak,
    'bonus' => $bonus,
    'potongan' => $potongan,
    'gaji_bersih' => $gaji_bersih
];

if(isset($_POST['hapus_data'])){
    session_destroy(); //hapus semua data sesi

    session_start(); //buat sesi baru
    $_SESSION['Karyawan'] = []; //inisialisasi kembali data karyawan
}


?>
<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penilaian siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>


<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card shadow-lg p-4">
                            <h2 class="text-center mb-4">Form Input Nilai siswa</h2>
                            <h4 class="text-center mb-4">1 = Manager, 2 = Supervisor, 3 = Staff</h4>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Nama Karyawan</label>
                                    <input type="text" name="Nama" class="form-control" required>
                                <div class="mb-3">
                                    <label class="form-label">Jabatan</label>
                                    <select name="jabatan" id="" class="w-100 p-3 border border-gray-300 rounded-md">
                                        <option value="1">Manager</option>
                                        <option value="2">Supervisor</option>
                                        <option value="3">Staff</option>
                                    </select>
                                   
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jam Kerja</label>
                                    <input type="number" name="jamkerja" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Hitung Gaji</button>
                            </form>
                        </div>
                    </div>


                    <div class="col-md-8">
                        <div class="card shadow-lg p-4">
                            <h2 class="text-center mb-4">Hasil Penilaian</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover text-center">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Jam Kerja </th>
                                            <th>Gaji</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        foreach ($_SESSION['Karyawan'] as $Karyawan): {
                                            $Nama = $Karyawan['Nama'];
                                            $jabatan = $Karyawan['jabatan'];
                                            $jamkerja = $Karyawan['jamkerja'];
                                            $gaji_bersih = $Karyawan['gaji_bersih'];
                                        }
                                        ?>
                                

                                        <tr>
                                            <td><?= $Nama ?></td>
                                            <td><?= $jabatan ?></td>
                                            <td><?= $jamkerja ?></td>
                                            <td><?= $gaji_bersih ?></td>
                                        </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!-- Tombol untuk menghapus data sesi -->
                        <form method="POST">
                            <button type="submit" name="hapus_data" class="btn btn-danger w-100 mt-3">Hapus Semua Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>
