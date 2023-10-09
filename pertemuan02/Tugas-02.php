<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 02</title>
</head>
<?php
$nama = "Ashabil Syauqi";
$TTL = "Jakarta 19,Oktober 2002";
$alamat = "Kota Bekasi";
$noHp = "087871076693";
?>

<body>
    <div>
        <table border="1" celSpacing="2">
            <tr>
                <td>Nama</td>
                <td>TTD</td>
                <td>Alamat</td>
                <td>No HP</td>
            </tr>
            <tr>
                <?php
                echo "
                <td>$nama</td>
                <td>$TTL</td>
                <td>$alamat</td>
                <td>$noHp</td>" ?>
            </tr>
        </table>
    </div>
</body>

</html>