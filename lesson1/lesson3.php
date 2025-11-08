<?php
$arr=array(
array(1,3,4,6,78,98,345),
array(1,3,4,6,78,98,14,54,7,345),
array(1,3,4,6,78,98,321,454,345)
);

$arr[2][]=7;
for($i=0; $i<count($arr); $i++){
    $u=count($arr[$i]);
    for($j=0; $j<$u; $j++)
    echo $arr[$i][$j].".";

}
echo "<br>"











?>   
