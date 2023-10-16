<!DOCTYPE html>
<html>

<head>
    <title>Form Registrasi</title>
</head>

<body>
    <p>Isi Data Dibawah ini :</p>
    <br>
    <!-- perhatikan action -->
    <form action="tugas03Lanjutan.php" method="post">
        <pre>
            Nama Lengkap           <input type="text" name="nama">
            Alamat                 <textarea name="alamat" id="" cols="30" rows="10"></textarea>
            tempat Lahir           <input type="text" name="tempatLahir">
            Tanggal Lahir          <input type="date" name="tanggalLahir">
            Jenis  Kelamin         <input type="radio" name="jenisKelamin" value="PRIA"> PRIA <input type="radio" name="jenisKelamin" value="WANITA"> WANITA
            Pendidikan             <select name="pendidikan" id="pendidikan">
                                        <option value="SLTA">SLTA</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
            <input type="submit" value="Submit"> || <input type="reset" value="Cancel">
            <!-- jika submit tidak ditemukan atau notfound, cek action di tag form -->

        </pre>
    </form>
</body>
</html>