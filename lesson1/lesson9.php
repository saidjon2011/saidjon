<?php


function tub($n){
    $k=0;

    for($i=2; $i<=sqrt($n); $i++){
        if($n% $i==0){
            return $k++;
            break;
        }
    }
    if($k==0){
    return true;
    }
    else {
        return false;
    }
}
$n=10;
$m=50;
$k=0;
if($n==2){
    echo 1;
}
else{
    for($i=$n; $i<=$m; $i++)
        if(tub($i)){
            $k++;
        }
   echo $k;

}





?>
