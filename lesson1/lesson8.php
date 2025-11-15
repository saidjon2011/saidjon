<?php
// $s=function($d,$m){
//     return $d*$m;
// };
// $d=10;
// $m=5;

// echo $s($d,$m);

function reKopaytma($n){
    if($n==1){
       return 1;
    }
    return $n*reKopaytma($n-1);
}

echo reKopaytma(9);


?>
