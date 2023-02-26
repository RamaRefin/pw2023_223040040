
<?php

/// 1. inisialisasi atau nilai awal
/// 2. kodnisi termniasi ( kapan pengulangannya berhenti )
/// 3. increment / decrement

///while (false) {
// echo "mulai. <br>";
///} = menjadi infinity loop


///while ($nilai_awal <= 10) {
/// echo "Mulai $nilai_awal <br>"; ($nilai_awal = untuk menambahkan 1 + 1 dan membuat perurutan 12345)
/// $nilai_awal = $nilai_awal + 1; /// increment
///}


//// While

$nilai_awal = 1; ///inisialisasi


while ($nilai_awal <= 10) {
    echo "Mulai $nilai_awal <br>";
    $nilai_awal = $nilai_awal + 1; /// increment
}
echo "Hello world. <br>";
echo "Selesai. <br>";


echo "<hr>";

//// FOR

echo "Mulai. <br>";
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
    echo "hello World $nilai_awal x. <br>";
}
?>











