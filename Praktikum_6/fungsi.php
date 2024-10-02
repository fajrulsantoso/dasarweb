<?php
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

// Memanggil fungsi perkenalan dengan salam "Hallo"
perkenalan("Hamdana", "Hallo");

echo "<hr>"; // Membuat garis pemisah

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

// Memanggil fungsi perkenalan tanpa mengisi parameter salam (akan menggunakan default "Assalamualaikum")
perkenalan($saya);
?>