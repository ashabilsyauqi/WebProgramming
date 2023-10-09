
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $panjangSisiKubus = 15;
    $Volume = $panjangSisiKubus * $panjangSisiKubus * $panjangSisiKubus ;
    $text1 = " belajar Menghitung ";
    $text2 = " Volume Kubus ";

    echo $text1 . $text2."<br/>";
    echo "Panjang Sisi Kubus = ". $panjangSisiKubus."<br/>";
    echo $text2. "=". $Volume . "cm3"."<br/>"

?>
<body>
    <div>
        <table>
            <tr>
                <th>Panjang sisi Kubus</th>
                <th>Volume</th>
            </tr>
        </table>
    </div>
</body>
</html>