<?php
echo "bubble sortn";
$data=array(58,857,364,8576,8675);
function bubble_sort($data){
  $n=count($data);
  for ($i = 0;$i<$n;$i++){ for ($j = $n-1;$j>$i;$j--){
          if ($data[$j] < $data[$j-1]){ 
              $dummy=$data[$j];
              $data[$j]=$data[$j-1];
              $data[$j-1]=$dummy;
          }
      }    
  }
  return $data;
}
var_dump(bubble_sort($data));