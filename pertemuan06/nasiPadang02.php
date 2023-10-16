<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pesan Nasi padang</title>
</head>
<body>
    
    <h1></h1>

    <?php 
    $nama = $_POST['nama'];
    $meja = $_POST['meja'];
    $menuMakanan = $_POST['menuMakanan'];
    $minuman = $_POST['minuman'];
    $jumlah = $_POST['jumlah'];
    $takeAway = $_POST['takeAway'];
    

    if($menuMakanan == "Ayam Bakar + Nasi"){
        $harga = 20000;
    } elseif ($menuMakanan =="Ikan Goreng + Nasi"){
        $harga= 19000;
    } elseif($menuMakanan == "Rendang + Nasi"){
        $harga = 19500;
    } else{
        echo"tidak valid";
    }

    if($takeAway == "ya"){
        $biayaBungkus = 2000;
    } else {
        $biayaBungkus= 0;
    }

    $totalPesanan = $harga * $jumlah;
    $totalBayar = $totalPesanan + $biayaBungkus;
    
    echo"~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
    echo"~~~~~~~~~~LIST PESANAN~~~~~~~~~~<br>";
    echo"~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
    echo "
    <table>
    <tr>
        <td>nama Pembeli</td>
        <td>:</td>
        <td>$nama</td>
    </tr>
    <tr>
        <td>Meja</td>
        <td>:</td>
        <td>$meja</td>
    </tr>
    <tr>
        <td>Menu Makanan</td>
        <td>:</td>
        <td>$menuMakanan</td>
    </tr>
    <tr>
        <td>Minuman</td>
        <td>:</td>
        <td>$minuman</td>
    </tr>
    <tr>
        <td>Take Away ?</td>
        <td>:</td>
        <td>$takeAway</td>
    </tr>
    <tr>
        <td>Jumlah Pesanan</td>
        <td>:</td>
        <td>$jumlah</td>
    </tr>
    <tr>
        <td>Total Pesanan</td>
        <td>:</td>
        <td>Rp $totalPesanan</td>
    </tr>
    <tr>
        <td>Biaya Bungkus</td>
        <td>:</td>
        <td>Rp $biayaBungkus</td>
    </tr>
    <tr>
        <td>Total Bayar</td>
        <td>:</td>
        <td>Rp $totalBayar</td>
    </tr>
   </table>
   
    
    
    ";
    echo"~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
    
    
    ?>
    <br>
    <a href="nasiPadang.php">pesan lagi</a>
   

  

</body>
</html>