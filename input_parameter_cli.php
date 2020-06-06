<?php 

echo " contoh 5956560159466056 \n" ;
echo " Masukan bilangan : ";
$bilangan = fopen("php://stdin","r");

$bil = fgets($bilangan);

$hasil = preg_replace("/[0]/", "", $bil);
echo $hasil;