<?php 
//Penjumlahan
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan  $angka1 + $angka2 = $hasil <br>";

//benar salah
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah <br>" ; 

//mendefinisikan konstantan untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com <br>");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " .NAMA_SITUS . "
, situs yang didirikan pada tahun <br>" . TAHUN_PENDIRIAN .".";
?>