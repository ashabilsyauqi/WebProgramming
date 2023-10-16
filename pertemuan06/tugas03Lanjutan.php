<!DOCTYPE html>
<html>

<head>
    <title>Form Registrasi</title>
</head>

<body>
    <p> Data Registrasi</p>
    <br>
    <table border="1" bgcolor="lightblue">
        <?php
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tempatLahir = $_POST['tempatLahir'];
        $tanggalLahir = $_POST['tanggalLahir'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $pendidikan = $_POST['pendidikan'];

        echo "
            <tr>
            <td>Nama</td>
            <td>$nama</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>$alamat</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>$tempatLahir</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>$tanggalLahir</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>$jenisKelamin</td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>$pendidikan</td>
            </tr>
            
            
            ";

        ?>

    </table>
    <br>
    <a href="tugas03.php">BACK TO HOME</a>

</body>

</html>