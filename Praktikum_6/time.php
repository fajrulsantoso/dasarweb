<!DOCTYPE html>
<html>
<head>
    <title>Tampilkan Waktu</title>
</head>
<body>
    <h3>Waktu</h3>
    <?php
    date_default_timezone_set("Asia/Jakarta");
    echo date("h:i:sa");
    ?>
</body>
</html>