<?php
//array:
//$mahasiswa =[
  //  ["albert enstein", "094420", "enstein24@gmail.com", "tekhnik sipil"],
    //["thomas", "094421", "thomas23@gmail.com", "tekhnik informatika"],
    //["thom", "094422", "thom33@gmail.com", "tekhnik industri"]
//];

// menggunakan array asosiatif
$mahasiswa=[
[
    "nama" => "albert enstein",
    "nrp"  => "094420",
    "Email" => "enstein24@gmail.com",
    "Jurusan" => "Tekhnik Sipil",
],
[
    "nama" => "thomas",
    "nrp"  => "094421",
    "Email" => "thomas22@gmail.com",
    "Jurusan" => "Tekhnik industri",
],
[
    "nama" => "tom",
    "nrp" => "094422",
    "Email" => "tom44@gmail.com",
    "Jurusan" => "Tekhnik informatika",
]
];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) :?>
    <ul> <!--<php echo bisa diganti dengan--> 
        <!--dan jika pakai array assosiatif diganti key nya menjadi string-->
        <li>nama :<?= $mhs["nama"];?></li>
        <li>nrp : <?= $mhs["nrp"];?></li>
        <li>Email: <?= $mhs["Email"];?></li>
        <li>Jurusan: <?= $mhs["Jurusan"];?></li>
    </ul>
    <?php endforeach; ?>
   
</body>
</html>