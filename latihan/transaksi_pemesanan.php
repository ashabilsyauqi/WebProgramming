<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pemesanan Hotel</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh
        }
        .wrapper {
            width: 50%;
            border: 1px solid black
        }
        h1{
            text-align: center;
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="border">
            <h1>Form Pemesanan</h1>
            <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
                <table>
                    <tr>
                        <td>Tanggal Booking</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tanggalBooking" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="namaCustomer" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Identitas</td>
                        <td>:</td>
                        <td>
                            <input type="number" name="nomorIdentitas" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipe Kamar</td>
                        <td>:</td>
                        <td>
                            <select name="tipeKamar">
                                <option value="Kamar Deluxe">Kamar Deluxe</option>
                                <option value="Kamar Suprerior">Kamar Suprerior</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Durasi Menginap</td>
                        <td>:</td>
                        <td>
                            <input type="number" name="durasiMenginap" required> Malam
                        </td>
                    </tr>


                </table>
                <input type="submit" value="submit"> <input type="reset" value="reset">

            </form>
        </div>
    </div>



    <!-- programm -->
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tanggal = $_POST['tanggalBooking'];
        $nama = $_POST['namaCustomer'];
        $nomorIdentitas = $_POST['nomorIdentitas'];
        $tipeKamar = $_POST['tipeKamar'];
        $durasi = $_POST['durasiMenginap'];

        // ketentuan
        if ($tipeKamar == "Kamar Deluxe") {
            $harga = 850000;
        } else {
            $harga = 500000;
        }


        $bayar = $harga * $durasi;
        if ($bayar > 2000000) {
            $diskon = 0.20;
            $totalDiskon = "20%";
        } else {
            $diskon = 0.10;
            $totalDiskon = "10%";
        }
        $besarDiskon = $bayar * $diskon;
        $totalBayar = $bayar - $besarDiskon;


        echo "
        <div>
        <h3>Data Customer</h3>
        <pre>
Tanggal booking :   $tanggal
Nama Customer   :   $nama
Nomor Identitas :   $nomorIdentitas
Tipe Kamar      :   $tipeKamar
Durasi Menginap :   $durasi
Diskon          :   Potongan harga $totalDiskon
Durasi Menginap :   $totalBayar
        </pre>

    </div>
        <a href='transaksi_pemesanan.php'>Input lagi</a>
        ";
    }




    ?>





</body>

</html>