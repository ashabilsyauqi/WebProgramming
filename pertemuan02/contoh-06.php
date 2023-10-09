<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$namaBarang = "Buku";
$hargaBarang = 8500;
$jumlahBarang = 4;
$total = $hargaBarang * $jumlahBarang;

?>

<body>
    <table border="1">
        <tr>
            <td>Nama Barang</td>
            <td>Harga Barang</td>
            <td>Jumlah</td>
            <td>Total</td>
        </tr>
        <tr>
            <?php
            echo "
            <td>$namaBarang</td>
            <td>Rp.$hargaBarang</td>
            <td>$jumlahBarang</td>
            <td>Rp.$total</td>
            "
                ?>
        </tr>
    </table>
</body>

</html>