<?php 
 //membuat fungsi 
   function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
   }

   echo "umur saya adalah ". hitungUmur(2005, 2024) . "tahun" 
?>