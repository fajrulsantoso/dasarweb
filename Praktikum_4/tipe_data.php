<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel d: {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;
echo "Matematika : {$nilaiMatematika} <br>";
echo "NilaiIpa : {$nilaiIPA} <br>";
echo "Bahasaindonesia : {$nilaiBahasaIndonesia} <br>";
echo "rataRata: {$rataRata}<br>";
var_dump($rataRata);

$ApakahSiswaLulus = false;
$ApakahSiswaSudahUjian = true;
 var_dump($ApakahSiswaLulus);
 echo '<br>'; 
 var_dump($ApakahSiswaSudahUjian);
 
 $namaDepan = "fajrul";
 $namaBelakang = "santososo";
 $namaLengkap = "{$namaDepan} {$namaBelakang}";
 $namaLengkap2 = $namaDepan . '' . $namaBelakang;

 echo "Nama Depan: {$namaDepan} <br>";
 echo 'Nama Belakang: '.$namaBelakang . '<br>';
 echo $namaLengkap;

 $listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
 echo $listMahasiswa[0];
 
?>
