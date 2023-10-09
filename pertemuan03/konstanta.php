<html>

<head>
    <title>Penggunaan konstanta</title>
</head>

<body>
    <h1>Pengunaan Konstanta</h1>
    <table>

        <?php

        define("siteName", "pura santoso");
        define("URL", "https://www.bsi.ad.id");
        define("version", "1.0.0");



        echo "
            <tr>
                <td>Site name</td>
                <td>    :</td>
                <td>". siteName ."</td>
            </tr>
            <tr>
                <td>URL</td>
                <td>    :</td>
                <td>". URL ."</td>
            </tr>
            <tr>
                <td>Version</td>
                <td>    :</td>
                <td>". version ."</td>
            </tr>";     
        ?>


    </table>
</body>

</html>