<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan array</title>
     <style>
       .kotak{
          width: 30px;
          height: 30px;
          background-color:green ;
          text-align:center;
          line-height:30 px;
          margin: 3px;
          float: left;
          transition:1s;
       }
      .kotak:hover{
        transform:rotate(360deg);

      }
     </style>
</head>
<body>
  <?php
   $angka =[1,2,3,4,5,6,7,8,9];
  ?>
  <?php foreach($angka as $a): ?>
    <div class ="kotak"> <?= $a; ?> 
  </div>
  <?php endforeach; ?>
</body>
</html>
