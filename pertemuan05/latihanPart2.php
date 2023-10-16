<html>

<head>
    <title>Komentar Tamu</title>
</head>

<body>
    <h1>Data Komentar Anda</h1>
    <hr>
    <?php

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    if(!empty($nama)) {
        echo "Nama Anda      : $nama <br>";
    } else {
        ?>
        <font color="red"> <?php
        die("<p style='color: #292929;' >Maaf. Anda harus mengisi Nama</p>  <br>    <a href='latihan.php'>Input Data lagi</a>");
    }

    if(!empty($email)) {
        echo "email Anda      : $email <br>";
    } else {
        ?> <font color="red"> <?php
        die("<p style='color: #292929;' >Maaf. Anda harus mengisi Nama</p>  <br>    <a href='latihan.php'>Input Data lagi</a>");
    }

    if(!empty($komentar)) {
        echo "komentar Anda      : $komentar <br>";
    } else {
        ?><font color="red"> <?php
        die("<p style='color: #292929;' >Maaf. Anda harus mengisi Nama</p>  <br>    <a href='latihan.php'>Input Data lagi</a>");
    }

    ?>
    <a href="latihan.php">Input Data lagi</a>

</body>

</html>