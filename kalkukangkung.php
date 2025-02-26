<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

  </head>



  <?php
    $bill1 = "";
    $bill2 = "";   
    $hasil = "";
    $operasi = ""; 

    if(isset($_POST['hitung'])){
        $bill1 = $_POST['bill1'];
        $bill2 = $_POST['bill2'];
        $operasi = $_POST['operasi'];
        
        switch($operasi){
            case "tambah":
                $hasil = $bill1 + $bill2;
                break;
            case "kurang":
                $hasil = $bill1 - $bill2;
                break;
            case "kali":
                $hasil = $bill1 * $bill2;
                break;
            case "bagi":
                $hasil = $bill1 / $bill2;
                break;
            case "mod":
                $hasil = $bill1 % $bill2;
                break;
        }
    }

    ?>




  <body class="bg-stone-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-semibold mb-5 text-center">kalkukakangngkung</h2>

        <form action="" method="POST">

        <input type="text" name="bill1"
        class="w-full p-3 mb-5 border 
        border-gray-300 rounded-md"
         autocomplete="off"
         placeholder="Asupkeun Bilangan Partama" value="<?php echo $bill1; ?>">


        <input type="text" name="bill2"
        class="w-full p-3 mb-5 border 
        border-gray-300 rounded-md"
         autocomplete="off"
         placeholder="Asupkeun Bilangan Kadua" value="<?php echo $bill2; ?>">


         <select name="operasi" id="" class="w-full p-3 mb-5 border 
         border-gray-300 rounded-md" value="<?php echo $bill2; ?>">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
            <option value="mod">%</option>
             </select>


             <input type="submit" name="hitung" value="Hitung"
             class="w-full p-3 mb-5 border bg-pink-500 hover:bg-stone-700 ...
             text-white rounded-md cursor-pointer" > 
                
             <input type="text" name="hasil bill" class="w-full p-3 mb-5 border 
             border-gray-300 rounded-md" 
             autocomplete="off" 
             placeholder="Hasil Bilangan"
             readonly value="<?php echo $hasil; ?>"
             >


        </form>
    </div>
    
  </body>

</html>