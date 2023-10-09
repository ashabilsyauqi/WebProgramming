<?php 
    // contoh04
    echo "    <h1>Contoh04</h1> ";
    echo "Ini adalah code PHP poertama saya";
    echo "Saya sedang belajar PHP";
    echo "<br><br><br>";
    echo "<br><br><br>";
?>


<!-- contoh05 -->
<html>
<head>
    <title>Contoh05</title>
</head>
<body>
    <h1>Contoh05</h1>
    <!-- contoh-Modul -->
    <?php 
        $nim = 15220190;
        $nama = "Mohammad Ashabil Syauqi";
        $kelas = "15.3A.04";

        echo "Nim saya : $nim";
        echo "Nama saya : $nama";
        echo "Kelas saya : $kelas";
        echo "<br><br>";

    ?>

    <!-- tester -->
    <h1>Tester Sendiri</h1>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td>Kelas</td>
        </tr>
        <tr>
            <?php 
                echo "
                <td>$nama</td>
                <td>$nim</td>
                <td>$kelas</td>
                ";
            ?>
        
        </tr>
    </table>
    <br><br><br><br>




    <!-- contoh06 -->
    <h1>Contoh06</h1>
    <?php  

        $namaBarang = "Sajadah";
        $jumlah = 10;
        $harga = 120000;
        $total = $harga * $jumlah;


        echo "Nama Barang : $namaBarang <br>";
        echo "harga Barang : $harga  <br>";
        echo "Jumlah Barang : $jumlah <br>";
        echo "Total Bayar : $total <br>";
    ?>
<br><br><br><br>
<table border="1">
        <tr>
            <td>Nama</td>
            <td>Harga</td>
            <td>QTY</td>
            <td>Total</td>
        </tr>
        <tr>
            <?php 
                echo "
                <td>$namaBarang</td>
                <td>$harga</td>
                <td>$jumlah</td>
                <td>$total</td>
                ";
            ?>
        
        </tr>
    </table>

        <br><br><br>


    <h1>Konstanta</h1>
    <?php 
     define("sppSekolah", 150000);
    $jumlahMurid = 30;
    $totalBayarSpp = sppSekolah * $jumlahMurid;
    // pemanggilan cariable konstanta tidak memerlukan $

    echo "Besar SPP pada kelas TKJ 5 adalah $totalBayarSpp ";

    ?>

</body>
</html>