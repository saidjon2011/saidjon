
<?php

class students{
    // property
    public $name;
    public $kurs;
    public $yosh;
    

}
$elbek=new students();
$elbek->name="elbek";
$elbek->kurs="0";
$elbek->yosh="15";

foreach($elbek as $key=>$value){
    echo $key."----" .$value."<br>";
}
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    