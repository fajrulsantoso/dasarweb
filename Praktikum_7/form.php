<!DOCTYPE html>
<html>
    <head>
        <title>form input php</title>
    </head>
    <body>
        <h2>Form input PHP</h2>
        <form method="post" action="proses_form.php">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>

            <input type="submit" name="submit"  value="Submit">
        </form>
    </body>
</html>