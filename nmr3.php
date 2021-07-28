<?php
$A = "prpl2021.com";
$B = "Rumus Menghitung Volume Bangun Ruang";
function kubus(){
   $sisi = 12;
   $volume =$sisi*$sisi*$sisi;
   echo"<b>1. rumus Menghitung Volume Kubus </b><br>";
   echo"Rumus Volume : V = S<sup>3</sup><br>";
   echo"Hasil Volume adalah : $volume ";
}
 function kerucut(){
   $t = 1;
   $r = 7;
   $phi = 3.14;
   $volume =1/3*$phi*$r*$r*$t;
   echo"<b>2. rumus Menghitung Volume Kerucut</b><br>";
   echo"Rumus Volume : V = S<sup>3</sup><br>";
   echo"Hasil Volume adalah : $volume ";
}
 function bola(){
   $r = 7;
   $phi = 3.14;
   $volume =4/3*$phi*$r*$r*$r;
   echo"<b>3. rumus Menghitung Volume bola</b><br>";
   echo"Rumus Volume : V = S<sup>3</sup><br>";
   echo"Hasil Volume adalah : $volume ";
}
function persegipanjang(){
   $p = 5;
   $l = 3;
   $luas = $p*$l;
   echo"<b>4. rumus Menghitung Luas Persegi Panjang</b><br>";
   echo"Rumus Luas : L = S<sup>2</sup><br>";
   echo"Hasil Volume adalah : $luas ";
}
function lingkaran(){
   $r = 7;
   $phi = 3.14;
   $keliling = 2*$phi*$r;
   echo"<b>5. rumus Menghitung Keliling Lingkaran</b><br>";
   echo"Rumus Keliling : K = S<sup>3</sup><br>";
   echo"Hasil Keliling adalah : $keliling ";
}

kubus();
echo "<br><br><br>";
kerucut();
echo "<br><br><br>";
bola();
echo "<br><br><br>";
persegipanjang();
echo "<br><br><br>";
lingkaran();
echo "<br><br><br>";
echo "<i>$B</i> <br>";
echo " $A <br>";
?>