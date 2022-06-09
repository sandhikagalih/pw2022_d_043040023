<?php 
// Pertemuan 5 - ARRAY
// Array adalah variabel yang dapat menyimpan banyak nilai sekaligus

$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

// membuat array
$hari = ["Senin", "Selasa", "Rabu", "Kamis"]; // versi baru
$bulan = array("Januari", "Februari", "Maret"); // versi lama

// mencetak array
// menggunakan index, dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";

// menggunakan var_dump() atau print_r()
// hanya untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak untuk user
// menggunakan looping
for($i = 0; $i < count($hari); $i++) {
  echo $hari[$i];
  echo "<br>";
}
echo "<hr>";

// menggunakan foreach
// pengulangan khusus ARRAY
foreach($bulan as $bln) {
  echo $bln;
  echo "<br>";
}
echo "<hr>";

// memanipulasi array
// menambah 1 elemen di akhir
$hari[] = "Jum'at";
$hari[] = "Sabtu";
print_r($hari);
echo "<br>";
$bulan[] = "April";
$bulan[] = "Mei";
print_r($bulan);

?>





<div style="height: 1000px;"></div>