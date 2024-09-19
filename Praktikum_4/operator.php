<?php 
// $a = 10;
// $b = 5;

// $hasilTambah = $a + $b;
// $hasilKurang = $a - $b;
// $hasilKali = $a * $b;
// $hasilBagi = $a / $b;
// $sisaBagi = $a % $b;
// $pangkat = $a ** $b;

// echo "Hasil Tambah: $hasilTambah<br>";
// echo "Hasil Kurang: $hasilKurang<br>";
// echo "Hasil Kali: $hasilKali<br>";
// echo "Hasil Bagi: $hasilBagi<br>";
// echo "Sisa Bagi: $sisaBagi<br>";
// echo "pangkat: $pangkat<br>";

// $hasilSama = $a == $b;
// $hasilTidakSama = $a != $b;
// $hasilLebihKecil = $a < $b;
// $hasilLebihBesar = $a > $b;
// $hasilLebihKecilSama = $a <= $b;
// $hasilLebihBesarSama = $a >= $b;

//  echo "Hasil Sama: ";
//  if ($hasilSama) {
//     echo "benar";
//  } else {
//     echo "salah";
//  }
//  echo "<br>";
 
//  //
//  echo "HasilTidakSama: ";
//  if ($hasilTidakSama){
//     echo "benar";
//  } else {
//     echo "salah";
//  }
//  echo "<br>";

//  //
//  echo "hasilLebihKecil: ";
//  if ($hasilLebihKecil){
//     echo "benar";
//  } else {
//     echo "salah";
//  }
//  echo "<br>";

// //
// echo "hasilLebihBesar: ";
// if ($hasilLebihBesar){
//    echo "benar";
// } else {
//    echo "salah";
// }
// echo "<br>";

// //
// echo "hasilLebihKecilSama: ";
// if ($hasilLebihKecilSama){
//    echo "benar";
// } else {
//    echo "salah";
// }
// echo "<br>";

// //
// echo "hasilLebihBesarSama: ";
// if ($hasilLebihBesarSama){
//    echo "benar";
// } else {
//    echo "salah";
// }
// echo "<br>";


// $hasilAnd = $a && $b;
// $hasilOr = $a || $b;
// $hasilNotA = !$a;
// $hasilNotB = !$b;
// echo "Hasil And: " . ($hasilAnd ? "benar" : "salah") . "\n <br>" ;
// echo "Hasil Or: " . ($hasilOr ? "benar" : "salah") . "\n <br>";
// echo "Hasil Not A: " . ($hasilNotA ? "benar" : "salah") . "\n <br>";
// echo "Hasil Not B :" .($hasilNotB ? "benar" : "salah") . "\n <br>";


// $a = 10;
// $b = 15;

// $a += $b;
// echo "Hasil tambah assign: $a <br>";

// $a -= $b;
// echo "Hasil kurang assign: $a <br>";

// $a *= $b;
// echo "Hasil kali assign: $a <br>";

// $a /= $b;
// echo "Hasil bagi assign: $a <br>";

// $a %= $b;
// echo "Hasil modulo assign: $a <br>";

// $hasilIdentik = $a === $b;
// $hasilTidakIdentik = $a !== $b;

// echo "Apakah $a identik dengan $b? : " . ($hasilIdentik ? 'Ya' : 'Tidak') . "<br>";
// echo "Apakah $a tidak identik dengan $b? : " . ($hasilTidakIdentik ? 'Ya' : 'Tidak') . "<br>";

$totalKursi = 45;
$kursiDitempati = 28;

$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi kosong: $kursiKosong<br>";
echo "Persentase kursi kosong: " . number_format($persentaseKosong, 2) . "%";

?>