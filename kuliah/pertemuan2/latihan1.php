<?php 
// Pertemuan 2, belajar mengenai sintaks PHP
// echo untuk mencetak nilai ke layar
echo (1 + 2) * 3 / 4;
echo "<hr>";

// OPERATOR
// Aritmatika
// +, -, *, /, %
echo 5 % 2; // sisa bagi
echo "<hr>";
echo 10 + "10" + 10;
echo "<hr>";

// Perbandingan
// <, >, <=, >=, ==, !=
echo 10 != 20;
echo "<hr>";

// Variabel
// Tempat menampung nilai
// tidak boleh mengandung spasi
// boleh mengandung angka, tidak boleh di awal
// snake_case : $nama_depan_mahasiswa
// camelCase : namaDepanMahasiswa
// kebab-case : nama-depan-mahasiswa
$nama = 'sandhika';
echo $nama;
echo "<hr>";
$x = 1;
$y = 2;
$z = $x + $y;
echo $z;
echo "<hr>";


// Penugasan / Assignment
// =, +=, -=, *=, /=, %=
$a = 10;
$a += 20;
$a += 30;
echo $a;
echo "<hr>";

// Increment & Decrement
// ++, --
$b = 10;
echo ++$b;
echo "<br>";
echo $b--;
echo "<hr>";

// Identitas
// ===, !==
echo 10 === "10";
echo "<hr>";

// Komponen sintax PHP yang lain
echo "selesai mengerjakan tugas pertemuan 2";


?>