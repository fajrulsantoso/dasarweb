<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="proses_lanjut.php">
        <label for="buah">Pilih Buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>
        <label>Pilih Warna Favorit: </label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>
        <label>Pilih Jenis Kelamin: </label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Jika data dikirimkan menggunakan metode POST
    $selectedBuah = $_POST['buah']; // Ambil nilai buah yang dipilih
    
    if (isset($_POST['warna'])) {
        // Jika ada pilihan warna yang dipilih
        $selectedWarna = $_POST['warna']; // Ambil nilai warna yang dipilih
    } else {
        // Jika tidak ada pilihan warna yang dipilih
        $selectedWarna = []; // Inisialisasi array $selectedWarna sebagai array kosong
    }
    
    $selectedJenisKelamin = $_POST['jenis_kelamin']; // Ambil nilai jenis kelamin yang dipilih
    
    echo "Anda memilih buah: " . $selectedBuah . "<br>"; // Tampilkan buah yang dipilih
    
    if (empty($selectedWarna)) {
        // Jika tidak ada warna yang dipilih
        echo "Anda tidak memilih warna favorit.<br>";
    } else {
        // Jika ada warna yang dipilih
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>"; // Tampilkan warna yang dipilih, dipisahkan dengan koma
    }
    
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin; // Tampilkan jenis kelamin yang dipilih
}
?>