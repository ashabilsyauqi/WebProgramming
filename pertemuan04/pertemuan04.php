<?php
    // contoh operator matematika
    $bilangan1 = 12;
    $bilangan2 = 19;

    $pertambahan = $bilangan1 + $bilangan2;
    $pembagian = $bilangan1 / $bilangan2;
    $pengurangan = $bilangan1 - $bilangan2;
    $perkalian = $bilangan1 * $bilangan2;

    echo "berikut macam macam operasiaritmatika <br><br>";
    echo "bilangam 1 = $bilangan1 <br>";
    echo "bilangam 2 = $bilangan2 <br> <br>";
    echo "Pertambahan = $pertambahan <br>";
    echo "pengurangan = $pengurangan <br>";
    echo "pembagian = $pembagian <br>";
    echo "perkalian = $pertambahan <br>";
?>

<br><br><br>

<?php 
    // operator pembandingan

    $bilangan_1 = 19 ;
    $bilangan_2 = 12 ;

    $text01 = "PHP";
    $text02 = "php";

    $hasil = $bilangan_1==$bilangan_2;
    echo "$bilangan_1 == $bilangan_2 = $hasil <br>" ;

    $hasil1 = $bilangan_1=$bilangan_2;
    echo "$bilangan_1 = $bilangan_2 = $hasil1 <br>" ;

    $hasil2 = $bilangan_1>=$bilangan_2;
    echo "$bilangan_1 >= $bilangan_2 = $hasil2 <br>" ;

    $hasil3 = $bilangan_1!=$bilangan_2;
    echo "$bilangan_1 != $bilangan_2 = $hasil3 <br>" ;

    $hasil4 = $text01=$text02;
    echo "$text01 = $text02 = $hasil4 <br>" ;


    // hasil gpt

    

?>

<br><br><br>

<?php
    // Operator pembandingan

    $bilangan_1 = 19;
    $bilangan_2 = 12;

    $text01 = "PHP";
    $text02 = "php";

    $hasil = $bilangan_1 == $bilangan_2;
    echo "$bilangan_1 == $bilangan_2 ? " . ($hasil ? 'True' : 'False') . "<br>";

    $hasil1 = $bilangan_1 === $bilangan_2; // Perhatikan operator perbandingan yang tepat
    echo "$bilangan_1 === $bilangan_2 ? " . ($hasil1 ? 'True' : 'False') . "<br>";

    $hasil2 = $bilangan_1 >= $bilangan_2;
    echo "$bilangan_1 >= $bilangan_2 ? " . ($hasil2 ? 'True' : 'False') . "<br>";

    $hasil3 = $bilangan_1 != $bilangan_2;
    echo "$bilangan_1 != $bilangan_2 ? " . ($hasil3 ? 'True' : 'False') . "<br>";

    $hasil4 = $text01 == $text02;
    echo "$text01 == $text02 ? " . ($hasil4 ? 'True' : 'False') . "<br>";
?>

<br><br><br>

<?php 
    // contoh operator Logika
    $bil01 = 19;
    $bil02 = 12;

    $teks01 = "PHP";
    $teks02 = "php";

    $hasil = !($teks01 == $teks02) or ($teks01 == $teks02);
    echo "bil1 = $bil01 <> $bil02 or $teks01 ==  $teks02 adalah $hasil <br>";

    $hasil = !($teks01 == $teks02);
    echo "!($teks01 == $teks02) adalah $hasil";
?>

<br><br><br>

<?php 
    // operator string
    $teks01 = "Aku sedang belajar ";
    $teks02 = "Pemrograman WEB ";
    $teks03 = "Menggunakan Bahasa PHP";
    $hasil = $teks01.$teks02.$teks03;
    echo $hasil;
?>

<br><br><br>
<h1>Latihan</h1>
<?php   

    $sisiKubus = 15; 
    $volumeKubus = $sisiKubus * $sisiKubus * $sisiKubus;

    $teks01 = "Belajar menghitung ";
    $teks02 = "Volume Kubus ";

    echo "$teks01.$teks02 <br> ";
    echo "Panjang Sisi Kubus = $sisiKubus cm <br>";
    echo "Volume Kubus = $volumeKubus cm <br>";  

?>



