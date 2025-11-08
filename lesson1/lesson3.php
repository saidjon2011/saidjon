<?php

$arr=array(
    array(2,6,74,34,-5,9,18,5),
    array(4,5,2,45,7,-7,8),
    array(2,4,5,1,-7)
);
$arr[2][]=17;

$b=0;

for($i=0; $i<count($arr); $i++){
  
    for($j=0; $j<count($arr[$i]); $j++){
       
               $b=$b+$arr[$i][$j];
        
        
    } 
   
}

      
        echo $b;


?>
