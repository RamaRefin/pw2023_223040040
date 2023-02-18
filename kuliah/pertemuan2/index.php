<?php
$nama = "Rama Refin";
?>
<?php
$mata_kuliah = "Pemograman web";
?>
<!-- $mata_kuliah_senin // Snake case -->
<!-- $mataKuliahUmum // Camel case -->
<!-- $MataKuliahUmum // Pascal case -->
<!-- $mata-kuliah-umum // Kebab Case -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan2</title>
</head>
<body>
    <h1> 
                <!-- string, variabel -->
        <?php echo "Welcome, $nama!"; ?>
</h1>

    <p><?php echo $mata_kuliah; ?></p>


   <p><?php echo 'Halo, Nama saya ' . $nama . ', saya sedang belajar" ' . $mata_kuliah . '"' ; ?></p>
   <p><?php echo 'Halo, Nama saya ' . $nama . ', saya sedang belajar" ' . $mata_kuliah . '"' ; ?></p>
</body>
</html>