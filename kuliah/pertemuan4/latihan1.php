<?php
//mecengecek apakah sebuah bilangan itu GANJIL / GENAP

$x = 10;
function cek_ganjil_genap($angka) // parameter (wadah)


{



    // % persen karena hasil bagi
    // jika $angka dibagi 2, sisanya 1 maka ganjil
    if ($angka % 2 == 1) {
        echo "$angka adalah bilangan GANJIL!";
    } else { // selain dari itu
        echo "$angka adalah bilangan GENAP!";
    }
}

echo cek_ganjil_genap($x); // argument (nilai asli)
echo "<br>";
echo cek_ganjil_genap(5);
echo "<br>";
echo cek_ganjil_genap(500);

//tanpa memasukan variabel/hapus tetep akan bisa