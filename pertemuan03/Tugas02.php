<?php

$nama = " Mohammad Ashabil Syauqi ";
$alamat = "jalan Jendral Soedirman";
$ttl = "Jakarta 19,Oktober 2002";
$telp = "6287871976694";

?>

<html>

<head>
    <title>Tugas 02</title>
    <style>
        .card{
            border: 1px solid #292929;
            /* border-radius: 10px; */
            width: 400px;
            padding: 20px;
            display: flex;
            justify-content: left;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="card center">
    <table>
        <?php
        echo "
                     <tr>
                         <td>Nama Saya</td>
                         <td> : </td>
                         <td>$nama</td>
                     </tr>
                     <tr>
                         <td>Alamat</td>
                         <td> : </td>
                         <td>$alamat</td>
                     </tr>
                     <tr>
                         <td>TTL</td>
                         <td> : </td>
                         <td>$ttl</td>
                     </tr>
                     <tr>
                         <td>Telp</td>
                         <td> : </td>
                         <td><a href='https://wa.me/$telp'>$telp</a></td>
                     </tr>
                     
                     ";

        ?>



    </table>
    </div>
  
</body>

</html>