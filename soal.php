<?php
$x=1;
while($x<=100){
    echo "this is number $x\n";
    $x+=11;
}

$data_pengguna =[
    "nama" => "jhon doe",
    "umur" => 20,
    "hobi" => ["sepak bola", "mancing"],
    "akun_bank" => [
        "nama_bank" => "BNi",
        "no_rek" => "123123123"

    ]
];
foreach( $data_pengguna ["akun_bank"] as $key => $bank){
    echo "$key => $bank";
}

//switch case
$nilai = "d";
switch($nilai){
    case "A";
       echo "anda lulus sempurna";
      break;
    case "B";
    case "C";
       echo "anda lulus baik";
      break;
    default;
    echo "anda salah jurusan";
}

$angka= ["senin","selasa"];
