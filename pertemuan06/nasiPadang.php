<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pesan Nasi padang</title>
</head>
<body>
    
    <h1>pesen nasi padang</h1>
    <form action="nasiPadang02.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Meja</td>
                <td>
                <input type="number" name="meja">
                </td>
            </tr>
            <tr>
                <td>Menu makanan</td>
                <td>
                    <select name="menuMakanan" id="">
                        <option value="Ayam Bakar + Nasi">Ayam Bakar + Nasi</option>
                        <option value="Ikan Goreng + Nasi">Ikan Goreng + Nasi</option>
                        <option value="Rendang + Nasi">Rendang + Nasi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Minuman</td>
                <td>
                    <input type="radio" name="minuman" value="Es Teh">Es teh
                    <input type="radio" name="minuman" value="Air Mineral">Air Mineral
                </td>
            </tr>
            <tr>
                <td>jumlah pesanan</td>
                <td>
                    <input type="number" name="jumlah">
                </td>
            </tr>
            <tr>
                <td><i>take away ? </i></td>
                <td>
                    <select name="takeAway" id="">
                        <option value="ya">Ya</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>

        </table>

        <input type="submit" value="Kirim"> || <input type="reset" value="Batal">
    </form>

</body>
</html>