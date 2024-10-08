<!DOCTYPE html>
<html>
    <head>
    <title>Form input php </title>
    </head>
    <body>
        <h2>Form input php</h2>
<?php 
/// inisialisasi variabel
 $namaErr = "";
 $nama = "";

 // Cek apakah form sudah disubmit

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi nama (contoh : pastikan nama tidak kosong)
    if(empty($_POST["nama"])) {
        $namaErr = "Nama harus diisi";
    } else {
        $nama = $_POST["nama"];
        echo "Data berhasil disimpat!";
    }
 }
?>
   <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">
      <label for="nama">Nama:</label>
      <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
      <span class="error"><?php echo $namaErr; ?></span><br><br>

      <input type="submit" name="submit" value="Submit">

   </form>

    </body>
</html>