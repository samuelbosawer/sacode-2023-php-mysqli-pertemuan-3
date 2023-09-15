<?php 
    // Kata selamat datang
    $welcome = 'SELAMAT DATANG';

    // nama saya 
    $nama = 'SAMUEL';  

    $keterangan = ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi perspiciatis totam nam labore unde at facilis soluta magnam! Veritatis nihil odio, tempore mollitia ab eveniet porro corporis suscipit? Sint error saepe fugiat illo repudiandae odio provident atque enim asperiores! Aspernatur!';

    $footer = "copyrigt by Samuel";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>  <?= $welcome .' '. $nama  ?> </h1>
    <p> <?= $keterangan ?> </p>
    <p><?= $footer ?></p>
   
</body>
</html>