<?php

$a = 3;
$arr = [1, 43, 2, 32, 12, 2, 22, 2];

$length = count($arr);

for ($i = 0; $i < $length; $i++) {
     
     if (strrpos($arr[$i], "2") !== false) {
         
          $length++;
         
          for ($j = $length - 1; $j > $i; $j--){
                 $arr[$j] = $arr[$j-1];
         }        
         
         $i++;
         
         $arr[$i] = $a;
     }

 }
 
 print_r($arr);

?>