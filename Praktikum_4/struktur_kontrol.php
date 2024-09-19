<?php 
// $nilaiNumerik = 92;
// if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
//     echo "Nilai huruf: A";
// } elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90) {
//     echo "Nilai huruf: B";
// } elseif ($nilaiNumerik >= 70 && $nilaiNumerik <80) {
//     echo "Nilai huruf: C";
// } elseif ($nilaiNumerik < 70) {
//     echo "Nilai huruf: D";
// }

//  $jarakSaatIni = 0;
// $jarakTarget = 500;
// $peningkatanHarian = 30;
// $hari = 0;

// while ($jarakSaatIni < $jarakTarget) {
//     $jarakSaatIni += $peningkatanHarian;
//     $hari++; 
// }


// echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer."

// $jumlahLahan = 10;
// $tanamanPerlahan = 5;
// $buahPerTanaman = 10;
// $jumlahBuah = 0;

// for ($i = 1; $i <= $jumlahLahan; $i++) {
//     $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
// }

// echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

// $skorUjian = [85, 92, 78, 96, 88];
// $totalSkor = 0;

// foreach ($skorUjian as $skor) {
//     $totalSkor += $skor;
// }

// $rataRataSkor = $totalSkor / count($skorUjian);

// echo "Total skor ujian adalah: $totalSkor" . PHP_EOL;
// echo "Rata-rata skor ujian adalah: $rataRataSkor";

// $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
// foreach ($nilaiSiswa as $nilai) {
//     if ($nilai <60 ) {
//         echo "Nilai: $nilai (Tidak lulus) <br>";
//         continue;
//     }
//     echo "Nilai: $nilai (lulus) <br>";
// }
//    echo "Jumlah siswa: " .count($nilaiSiswa) ;




// $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// sort($nilaiSiswa);

// array_shift($nilaiSiswa);
// array_shift($nilaiSiswa);
// array_pop($nilaiSiswa);
// array_pop($nilaiSiswa);

// $totalNilai = array_sum($nilaiSiswa);
// echo "Total nilai yang digunakan untuk menentukan nilai rata-rata: $totalNilai";

// $harga = 120000;
// $diskon = 0.20; 
// $diskon_nominal = $harga * $diskon;
// $harga_akhir = $harga - $diskon_nominal;
// echo "Harga sebelum diskon: Rp " . $harga . "\n";
// echo "Diskon: Rp " . $diskon_nominal . "\n";
// echo "Harga setelah diskon: Rp " . $harga_akhir . "\n";

$poin = 495;
$totalSkor = $poin;
$hadiahTambahan = ($totalSkor > 500) ? "YA" : "TIDAK";
echo "Total skor pemain adalah: " . $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan;
?>