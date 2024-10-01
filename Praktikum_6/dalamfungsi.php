<?php 
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan ($nama, $salam="Assalamualaikum", $thn_lahir, $thn_sekarang) {
    echo $salam.",";
    echo "perkenalkan, nama saya ".$nama."<br/>";

    // memanggul fungsi lain
    echo "saya berusia ". hitungUmur($thn_lahir, $thn_sekarang) ."tahun<br/>";
    echo  "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan
   perkenalan("Eloj", "Hallo", 1988, 2023);
?>