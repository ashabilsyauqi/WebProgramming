<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];

    if (empty($nama) || empty($email)) {
        echo "<p text='#FF0000'>Silakan isi semua kolom yang diperlukan (Nama dan Email).</p>";
    } else {


        echo "<p>Data telah berhasil disubmit.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags, title, dan CSS lainnya -->
</head>

<body>
    <h1>Buku Tamu</h1>
    <br>
    <p>komentar dan saran anda sangat kami butuhkan untuk meningkatkan kualitas situs kami</p>
    <hr>
    <form action="latihanPart2.php" method="post">
        Masukan Nama Anda : <input type="text" name="nama"> 
        <br>
        Masukan Nama Anda : <input type="email" name="email">
        <br>
        Masukan Nama Anda : <textarea name="komentar" id="komentar" cols="50" rows="10"></textarea>
        <br>
        <input type="submit" value="Kirim">
        <input type="reset" value="Batal">
    </form>
</body>

</html>