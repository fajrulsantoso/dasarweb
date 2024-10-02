<!DOCTYPE html>
<html>
<head>
    <title>Tampilkan Tanggal</title> </head>
<body>
    <h3>Tanggal</h3>
    <?php
    echo "Hari ini adalah " . date("Y/m/d") . "<br>";
    echo "Hari ini adalah " . date("Y.m.d") . "<br>";
    echo "Hari ini adalah " . date("Y-m-d") . "<br>";
    echo "Hari ini adalah " . date("l");
    ?>
</body>
</html>