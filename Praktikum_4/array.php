<?php
$siswaNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

// Menghitung rata-rata nilai kelas
$totalNilai = 0;
$jumlahSiswa = count($siswaNilai);

// Menjumlahkan semua nilai
foreach ($siswaNilai as $siswa) {
    $totalNilai += $siswa[1];
}

// Menghitung rata-rata
$rataRataNilai = $totalNilai / $jumlahSiswa;

// Menampilkan rata-rata nilai kelas
echo "<h3>Rata-rata nilai kelas: $rataRataNilai</h3>";

// Menampilkan siswa dengan nilai di atas rata-rata
echo "<h3>Daftar siswa dengan nilai di atas rata-rata:</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";

foreach ($siswaNilai as $siswa) {
    if ($siswa[1] > $rataRataNilai) {
        echo "<tr><td>{$siswa[0]}</td><td>{$siswa[1]}</td></tr>";
    }
}

echo "</table>";
?>
