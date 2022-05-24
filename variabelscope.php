<?php
$mahasiswa=[
    [
        "nama" => "thomas",
        "nrp" => "05744",
        "email" => "thomas45@gmail.com",
        "jurusan" => "teknik sipil",
    ],
    [
        "nama" => "aldi",
        "nrp" => "05745",
        "email" => "aldi34@gmail.com",
        "jurusan" => "teknik informatika",
    ],
    [
        "nama" => "jeni",
        "nrp" => "05746",
        "email" => "jen55@gmail.com",
        "jurusan" => "teknik mesin",
    ],
            
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs) :?> 
        <li>
            <a haref="contoharrayassosiatif.php"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>   
</body>
</html>

