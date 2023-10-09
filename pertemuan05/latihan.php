<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
</head>
<body>
    <h1>Buku Tamu</h1> 
    <br>
    <p>komentar dan saran anda sangat kami butuhkan untuk meningkatkan kulitas situs kami</p>
    <hr>
    <form action="latihanPart2.php" method="post">


        <table>
            <tr>
                <td>
                <label for="nama">Masukan Nama Anda</label>
                </td>
                <td>:</td>
                <td>
                <input type="text" name="nama" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Masukan Email</label>
                </td>
                <td>:</td>
                <td>
                    <input type="email" name="email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="komentar">Komentar</label>
                </td>
                <td>:</td>
                <td>
                    <textarea name="komentar" id="komentar" cols="50" rows="10"></textarea>
                </td>
            </tr>
        </table>

        <input type="submit" value="Kirim">
        <input type="reset" value="Batal">



       
     
    </form>
</body>
</html>