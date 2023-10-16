<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rangkuman Percabangan</title>
</head>
<body>
    <!-- #1  -->
    <p>1.</p>
    <?php  

        $nilai = 50;
        if($nilai >= 60){
            echo "Nilai anda : $nilai, selamat Anda dinyatakan lulus";
        } else {
            echo "Nilai anda : $nilai, Mohon maaf anda gagal";
        }

        // note: variable nilai adalah nilai yang mempengaruhi keputusan dari percabanagn
        // jika lebih bisar dari 60 maka yang akan dieksekusi adalah echo yang pertama
    ?>
    <br><br><br>
    





    <!-- 2. -->
    <p>2.</p>
    <?php 
        $nilai = 80;
        if(($nilai >=0 ) && ($nilai <50)) {
            $grade = "E";
        }
        elseif(($nilai >=50 ) && ($nilai <60)) {
            $grade = "D";
        }
        elseif(($nilai >=60 ) && ($nilai <74)) {
            $grade = "C";
        }
        elseif(($nilai >=75 ) && ($nilai <85)) {
            $grade = "B";
        }
        elseif(($nilai >=85 ) && ($nilai <100)) {
            $grade = "A";
        } else {
            $grade="Nilai diluar Jangkauan";
         
        }

        echo "Nilai anda : $nilai, dikonversi menjadi = $grade "
    ?>
    <br><br><br>






    <!-- 3. (statement switch)-->
    <p>3.</p>
    <?php  
        $angka = 8; 
        // silahkan di coba mas ganti nilai $angkanya
        switch ($angka){
            case 0: $terbilang = "NOL"; break;
            case 1: $terbilang = "SATU"; break;
            case 2: $terbilang = "DUA"; break;
            case 3: $terbilang = "TIGA"; break;
            case 4: $terbilang = "EMPAT"; break;
            case 5: $terbilang = "LIMA"; break;
            case 6: $terbilang = "ENAM"; break;
            case 7: $terbilang = "TUJUH"; break;
            case 8: $terbilang = "DELAPAN"; break;
            case 9: $terbilang = "SEMBILAN"; break;
            default: $terbilang = "NIAI DILUAR JANGKAUAN"; break;
        // case => mirip kaya if tapi dia bacanya kasus, jika kasusnya seperti yang ada di statement maka eksekusi program yang di tentukan
        // kayanya wkkw
            
        }
        echo "Bentuk terbilang dari angka $angka adalah $terbilang";
    ?>



</body>
</html>