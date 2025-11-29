<?php

class Hayvon{
public function sound(){
    return "ovoz";
}
}
class cat extends Hayvon{
    public function sound(){
        return "mani ur";
    }
}
class Dog extends Hayvon{
       public function sound(){
        return "marufjon anime didi";
    }
}
class elbek extends Hayvon {
     public function sound(){
        return "ranaldo suuiiiii didi";
    }
}

$elbek = new elbek;
echo $elbek->sound();
echo "<br>";
$cat=  new cat;
echo $cat->sound();
echo "<br>";
$dog =  new dog;
echo $dog->sound();
echo "<br>";
?>