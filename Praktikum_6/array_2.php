<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

        <h2>Data Dosen</h2>
        <?php 
            $Dosen = [ 
           'nama' => 'Junior12',
           'domisili' => 'Jepang',
           'jenis_kelamin' => 'Perempuan' ];

           echo "Nama : {$Dosen ['nama']}<br>";
           echo "domisili : {$Dosen ['domisili']}<br>";
           echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']}<br>";
           


        ?>
    </body>
</html>