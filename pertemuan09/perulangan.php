<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping / Prulangan</title>
</head>
<body>
    <p>Perulangan adalah satu kode / sintax / perintah yang memungkin kan kita melakukan aksi atau state yang berulang kali tanpa menulis kode berulang kali</p>
    <p>berikut adalah contoh dari perulangan yang gua buat :</p>


    <!-- 1. for loop -->
    <?php 

        // for($a = 1; $a <=20; $a++){
        //     echo " Sekarang urutan ke - $a <br>";
        // }

        // maksud kode for () diatas adalah
        // a = 1 
        // jika a kurang dari sama dengan 20
        // eksekusi a++ atau a = increment(menambah / increse)
        // dengan begini gua cuma nulis 2 baris code, tp kalo di run ada 20 barus kode
    ?>

    <!-- 2.  while loop-->
    <?php 
        // $a = 0;
        // while($a <100){
        //     $a++;
        //     echo "Hari ke $a <br>";
        // }
        // dengan kode while parameter didalamnya langsung masukin kondisinya
        // jika a kurang dari 100 yang dimana a gua deklarasiin jadi 0 , menghasilkan nilai true
        // yang dimana jika true, maka kondisi akan di eksekusi
        // hasilnya akan merender 200 baris kalimat " hari ke - sekian "
    ?>


    <!-- contohForForm -->
    <!-- <form name="form1" method="post">
        <label for="tanggal">Tanggal</label>
        <select name="tanggal" >
            <?php 

                // for( $tanggal = 1 ;$tanggal <=31; $tanggal++){
                //     echo"         <option value='$tanggal'>$tanggal</option>";
                // }
            ?>
   
        </select>
    </form> -->
    

    <!-- contoh foreach -->
    <?php  
    
    $hari = array("Senin", "Selasa", "Rabu" , "Kamis", "Jumat", "Sabtu", "Minggu");
    foreach ($hari as $harihari) { 
        echo  "$harihari <br>";
    }
    
    ?>
    <!-- contoh penggunaan di select -->
    <select name="hari" id="hari">
    <?php  
    
    $hari = array("Senin", "Selasa", "Rabu" , "Kamis", "Jumat", "Sabtu", "Minggu");
    foreach ($hari as $harihari) { 
        echo  "    <option value='$harihari'>$harihari</option>";
    }

    ?>
    </select>

</body>
</html>