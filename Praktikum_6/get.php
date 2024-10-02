<?php 

$nama = @$_GET['nama']; // Tanda @ untuk mencegah error jika 'nama' tidak ada
$usia = @$_GET['usia']; // Tanda @ untuk mencegah error jika 'usia' tidak ada

echo "Halo {$nama}! Apakah benar Anda berusia {$usia} tahun?";

?>