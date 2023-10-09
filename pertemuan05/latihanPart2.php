<html>

<head>
    <title>Komentar Tamu</title>
</head>

<body>
    <h1>Data Komentar Anda</h1>
    <hr>
    <?php

    echo "
        <table>
            <tr>
                <td>Nama Pengunjung</td>
                <td>:</td>
                <td>$_POST[nama]</td>
            </tr>
            <tr>
                <td>Email Pengunjung</td>
                <td>:</td>
                <td>$_POST[email]</td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td>$_POST[komentar]</td>
            </tr>
         </table>
        ";

    ?>
    <a href="latihan.php">Input Data lagi</a>

</body>

</html>