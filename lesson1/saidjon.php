<?php
class Car{
   public $name;  
   private $speed=0;
    public function speed_up($tez){
        if($tez>0){
            $this->speed+=$tez;
        }
    }
public function tormiz($a){
    if($a>0){
        $this->speed-=$a;
    }
}
public function getsped(){
    return $this->speed;
}
}

$damas = new Car();
$BMW = new Car();

$BMW->speed_up(300);
saidjon
