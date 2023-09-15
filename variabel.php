<?php

// String 
$string = "Tipe data string digunakan untuk menampilkan karakter ";

$namaDepan = 'Samuel ';
$namaBelakang = 'Bosawer';
$alamat = 'Sentani';


var_dump($alamat);
//  Integer/int

$integer = "Tipe data integer digunakan untuk menyimpan data bilangan bulat";

$x = 7;
$y = 9;

var_dump($x);

$tambah = $x + $y;
$kurang = $x - $y;
$kali = $x * $y;
$bagi = $x / $y;

// Float 
$float = 'Tipe data float digunakan untuk menyimpan bilangan pecahan';

$pecahan = 10.4;
$pecahan_dua = 22.7;

var_dump($pecahan);

// Boolean 
$boolean = 'Tipe Boolean hanya berisi dua nilai yaitu true atau false';
$satu = true;
$nol = false;
var_dump($satu);

// AND = X
$and  = $satu && $nol;

// OR = +
$or = $satu || $nol;


// null 
$null = 'Tipe null biasa digunakan untuk mengantikan variabel yang kosong';

$r = ' ';
$r = null;
var_dump($r);


// Array 
$array = 'Tipe data array di gunakan untuk menyimpan banyak data dalam satu variabel';

$nama = ['Samuel', 'Billy' ,'Acho','Calvin','Agus'];

var_dump($nama);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Menampilkan variabel string -->
    <p> <?= $string ?> </p>
    <p> Nama Saya <?= $namaDepan . $namaBelakang?>. saya tinggal di <?= $alamat ?> </p>

    <br>
    <br>
    <p><?= $integer?>  </p>

    <p> <?= $x ?>  + <?= $y ?>  = <?= $tambah ?>  </p>
    <p> <?= $x ?>  - <?= $y ?>  = <?= $kurang ?>  </p>
    <p> <?= $x ?>  x  <?= $y ?>  = <?= $kali ?>  </p>
    <p> <?= $x ?>  :  <?= $y ?>  = <?= $bagi ?>  </p>


    <br>
    <br>

    <p><?= $float ?></p>
    <p> <?= $pecahan ?>  </p>
    <p> <?= $pecahan_dua ?>  </p>


    <br>
    <br>
    <p><?= $boolean ?></p>
    <p><?php var_dump($and) ?></p>
    <p><?php var_dump($or) ?></p>

    <br>
    <br>

    <p> <?= $null?> </p>
    <p> <?php var_dump($r) ?> </p>


    <br>
    <br>
    <p><?= $array ?></p>


    <?php foreach($nama as $n) :  ?>
        <p> <?= $n ?> </p>
    <?php endforeach; ?>
</body>
</html>