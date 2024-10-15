<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>

    <form method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Inisialisasi array untuk menyimpan pesan error
    $errors = [];

    // Fungsi validasi nama
    function validasiNama($nama) {
        global $errors;
        if (empty($nama)) {
            $errors[] = "Nama harus diisi.";
        }
    }

    // Fungsi validasi email
    function validasiEmail($email) {
        global $errors;
        if (empty($email)) {
            $errors[] = "Email harus diisi.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid.";
        }
    }

    // Panggil fungsi validasi
    validasiNama($nama);
    validasiEmail($email);

    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Jika semua validasi berhasil, lanjutkan proses
        // Misalnya, simpan data ke database atau kirim email
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}
?>