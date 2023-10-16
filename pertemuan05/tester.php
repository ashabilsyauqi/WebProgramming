
<html>
<head>
    <title>Masukan Data Diri</title>
</head>
<body>
    <h1>Masukan Identitas Anda</h1>
    <?php // <form action="" method="post"></form> ?>
    <form action=" <?php echo $_SERVER['PHP_SELF'];?> " method="post">
    <pre>
        isikan Nama      :  <input type="text" name="nm_mhs">
        isikan No Telp   :  <input type="text" name="notelp">
        isikan Alamat    :  <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        <input type="submit" value="TAMPIL"> <input type="reset" value="BATAL">

    </pre>

    </form>

    <?php  
        error_reporting(0);

        $nama = $_POST['nm_mhs'];
        $telp = $_POST['notelp'];
        $alamat = $_POST['alamat'];

        if(!empty($nama)){
            echo "Nama  : $nama <br>"; 
        }
        if(!empty($telp)){
            echo "No Telp  : $telp <br>"; 
        }
        if(!empty($alamat)){
            echo "Alamat  : $alamat <br>"; 
        }

    
    ?>

</body>
</html>