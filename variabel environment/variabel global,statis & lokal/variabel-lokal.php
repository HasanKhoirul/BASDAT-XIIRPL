<?php

$nama = "Hasan Khoirul Ari Setiyawan"; /* variabel global */

function haloDunia () {
  $nama = "Erlangga Prayoga Maulana Putra"; # variabel lokal
  echo $nama . '<br>'; # Wahid Abdullah
}

haloDunia();

echo $nama; # Nurul Huda