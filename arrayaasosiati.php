<?php

$mobil=[
    [
        "jenis" => "ferarri",
        "tahun" => "2015",
        "kecepatan" => "400m/s",
    ],
    [
        "jenis" => "lamborgini",
        "tahun" => "2017",
        "kecepatan" => "455m/s",

    ],
    [
        "jenis" => "red bull",
        "tahun" => " 2016",
        "kecepatan" => "469m/s",
    ]
   ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jenis-jenis mobil</title>
</head>
<body>
    <hi>Jenis-Jenis Mobil</hi>

    <?php foreach( $mobil as $mbl) :?>
    <ul> 
        <li>nama :<?= $mbl["jenis"];?></li>
        <li>nrp :<?= $mbl["tahun"];?></li>
        <li>Email: <?= $mbl["kecepatan"];?></li>
    </ul>
    <?php endforeach; ?>


</body>
</html>


