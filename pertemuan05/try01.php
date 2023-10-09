<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>percobaan01</title>
</head>
<?php

$listProduk = [
    ['nama' => "Avanza", 'harga' => 300000000],
    ['nama' => "Avanza", 'harga' => 300000000]
]

    ?>

<body>
    <h1>form pengisian data</h1>
    <form action="try02.php">
        <div>
            <label for="nama">Nama Anda</label>
            <input type="text" placeholder="input number">
        </div>
        <div>
            <label for="nama">Nama Anda</label>
            <select name="produk" id="produk">
                <?php
                foreach ($listProduk as $produk) {
                    echo "<option value='" . $produk['nama'] . "'>" . $produk['nama'] ." RP". $produk['harga']  . "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="jumlah">jumlah</label>
            <input type="number" placeholder="input number">
        </div>
    </form>
</body>

</html>