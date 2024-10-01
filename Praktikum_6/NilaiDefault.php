<?php 
 //membuat fungsi
   function perkenalan ($nama, $salam="Assalamuualaikum"){
    echo "Perkenalkan, nama saya  ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda <br/>";
   }

   //memangg fungsi yang sudah dibuat
   perkenalan("Hamdana", "Hallo");

   echo "<hr>";

   $saya = "elok";
   $ucapanSalam = "selamat pagi";
   perkenalan($saya, $ucapanSalam);
?>