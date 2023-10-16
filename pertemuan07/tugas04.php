<html>

<head>
    <title>Tugas 04 | Ashabil</title>
</head>

<body>
    <h1>Rumus Rumus</h1>

    <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
        <table border="1">
            <tr>
                <td>Nilai 1</td>
                <td>
                    <input type="number" name="nilai01">
                </td>
            </tr>
            <tr>
                <td>Nilai 2</td>
                <td>
                    <input type="number" name="nilai02">
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2">
                    <input type="radio" name="rumus" value="segitiga"> Segitiga
                    <br>
                    <input type="radio" name="rumus" value="persegiPanjang"> Persegi Panjang
                </td>
            </tr>
        </table>
        <input type="submit" value="Submit"> || <input type="reset" value="Reset"> 
    </form>


<hr>

<?php 
    error_reporting(0);
    $nilai01 = $_POST['nilai01'];
    $nilai02 = $_POST['nilai02'];
    $rumus = $_POST['rumus'];
    $namaRumus = "";
    $hasilPerhitungan = "";

    // Fungsi isset() digunakan untuk memeriksa apakah suatu variabel telah didefinisikan dan memiliki nilai atau tidak. Dalam kode yang diperbaiki, isset() digunakan untuk memeriksa apakah variabel $_POST['rumus'] telah didefinisikan, yang menunjukkan apakah pengguna telah memilih salah satu opsi "segitiga" atau "persegiPanjang" dalam formulir HTML. Ini membantu menghindari kesalahan ketika kode dieksekusi tanpa pilihan yang dipilih.

    if(isset($_POST['rumus'])){
        if($rumus == "segitiga"){
            $namaRumus = "Segitiga";
            $hasilPerhitungan = 0.5 * $nilai01 * $nilai02;
        } elseif ($rumus == "persegiPanjang") {
            $namaRumus = "Persegi Panjang";
            $hasilPerhitungan = $nilai01 * $nilai02;
        }
    }
?>

<h1>Hasil hitung Rumus</h1>

<?php 
    // berikut ada percabangan untuk memvalidasi agar form diisi terlebih dahulu
    if (!empty($namaRumus) && !empty($hasilPerhitungan)) {
        echo "Nilai A = $nilai01 cm <br>";
        echo "Nilai B = $nilai02 cm <br>";
        echo "Rumus yang Dipilih adalah = $namaRumus <br>";
        echo "Hasil Perhitungan Rumus = $hasilPerhitungan cm <br>";
    } else {
        echo "Silakan pilih rumus terlebih dahulu dan masukkan nilai-nilai yang sesuai.";
    }
?>

</body>

</html>