<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #292929;
        }

        .card {
            border-radius: 10px;
            padding: 20px;
            background-color: white;
            width: 30rem;
        }

        .nama {
            text-align: center;
        }
    </style>
</head>
<?php
$nama = "Ashabil Syauqi";
$TTL = "jakarta 19, Oktober 2002";
$alamat = "Kota Bekasi";
$noTelp = "087871976694"
    ?>

<body>
    <div class="card">

        <table>
            <tr>
                <td>Nama</td>
                <td>TTL</td>
                <td>Alamat</td>
                <td>No HP</td>
            </tr>
            <tr>
                <?php
                echo '
        <td >' . $nama . '</td>
        <td>' . $TTL . '</td>
        <td>' . $alamat . '</td>
        <td>' . $noTelp . '</td>
    ';
                ?>
            </tr>
        </table>
    </div>

</body>

</html>