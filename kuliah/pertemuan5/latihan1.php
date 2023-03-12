<?php
//ARRAY
// Array adalah variabel yang bisa menanmpung banyak nilai

//Membuat Array 


$hari = array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu');
$bulan = ['januari', 'februari', 'maret'];
$myArray = ['Refin', 22, false];
$binatang = ['kelinci🐇', 'monyet🐵', 'babi🐷', 'ayam🐔'];

var_dump($hari);
print_r($bulan);
var_dump($myArray);
var_dump($binatang[2]);


echo "<hr>";


// Manipulasi Array
// Menambah Elemen di akhir Array

$bulan[] = 'April';
$bulan[] = 'mei';
$bulan[] = 'juni';
print_r($bulan);


echo "<hr>";

//array_push($bulan), 'juli';

array_push($bulan, 'juli', 'agustus');
print_r($bulan);

echo "<hr>";

// MEANMBAH ELEMEN DI AWAL ARRAY

// array_unshift($binatang), 'bebek';

array_unshift($binatang, 'gajah', 'tomat');
print_r($binatang);

echo "<hr>";

// MENGHAPUS ELEMEN DI AKHIR ARRAY

array_pop($hari);
print_r($hari);


echo "<hr>";

//MENGHAPUS DI AWAL ARRAY

array_shift($hari);
print_r($hari);
