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
  


    if(isset($_POST['nilai'])){
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

    ?>

  <body class="bg-pink-100 flex items-center justify-center min-h-screen">
    

    <div class="bapak grid grid-cols-2 ">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-semibold mb-5 text-center">Form Input Nilai Siswa</h2>

        <form action="" method="POST">
        <label>Nama Siswa</label>
        <input type="text" name="Namas"
        class="w-full p-3 mb-5 border 
        border-gray-300 rounded-md"
         autocomplete="off"
         >
         <form action="" method="POST">
        <label>Nilai Tugas</label>
        <input type="number" name="Nit"
        class="w-full p-3 mb-5 border 
        border-gray-300 rounded-md"
         autocomplete="off"
         >
         <form action="" method="POST">
        <label>Nilai UTS</label>
        <input type="number" name="Niu"
        class="w-full p-3 mb-5 border 
        border-gray-300 rounded-md"
         autocomplete="off"
         >
         <form action="" method="POST">
          <label>Nilai UAS</label>
        <input type="number" name="Niua"
        class="w-full p-3 mb-5 border 
        border-gray-300 rounded-md"
         autocomplete="off"
         placeholder="">


         


             <input type="submit" name="nilai" 
             class="w-full p-3 mb-5 border bg-pink-500 hover:bg-stone-700 ...
             text-white rounded-md cursor-pointer" > 
                
             

        </form>
    </div>
    
    <div class="bg-white p-8 rounded-lg shadow-lg w-129 h-62 ">
    <h2 class="text-2xl font-semibold mb-5 text-center">Hasil Penilaian</h2>
    <table class="w-full border-collapse border border-gray-400 ..." >
    
  <thead >
    <tr>
      <th class="bg-gray-500 text-white border border-gray-300 ...">Nama</th>
      <th class="bg-gray-500 text-white border border-gray-300 ...">Nilai Tugas</th>
      <th class="bg-gray-500 text-white border border-gray-300 ...">Nilai UTS</th>
      <th class="bg-gray-500 text-white border border-gray-300 ...">Nilai UAS</th>
      <th class="bg-gray-500 text-white border border-gray-300 ...">Nilai AKhir</th>
      <th class="bg-gray-500 text-white border border-gray-300 ... pl-5 pr-5">Kategori</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-gray-300 ... pl-5 pr-5 pt-2 pb-3" ><?php echo $Namas; ?></td>
      <td class="border border-gray-300 ... pl-5 pr-5" ><?php echo $Nit; ?></td>
      <td class="border border-gray-300 ... pl-5 pr-5" ><?php echo $Niu; ?></td>
      <td class="border border-gray-300 ... pl-5 pr-5" ><?php echo $Niua; ?></td>
      <td class="border border-gray-300 ... pl-5 pr-5"><?php echo $hasil; ?></td>
      <td class="border border-gray-300 ... pl-5 pr-5"><?php echo $predik; ?></td>
    </tr>
  </tbody>
      </table>
    </div>



    </div>


   

  </body>



</html>