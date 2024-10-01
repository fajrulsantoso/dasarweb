<?php 
  function perkenalan($nama, $salam){
    echo $salam. ",";
    echo "Perkenalkan , nama saya ".$nama. "<br>";
    echo "Senang Berkenalan dengan Anda <br/>";
  }

  //memanggil fungsi yang sudah dibuat
  perkenalan("Hamdana","hallo");
  echo "<hr>";

  $saya = "Elok";
  $ucapanSalam = "selamat pagi";
  
  //memanggil lagi
  perkenalan ($saya, $ucapanSalam);
  
 ?>