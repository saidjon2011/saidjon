<?php
// abstract class animal{
//     abstract function makeSound();
//     public function yurish(){
//         echo "yuguradi";
//     }
// }
// class Dog extends animal{
//     public function makeSound(){
//         return " wow wow ";
//     }
// }
// class cat extends animal{
//     public function makeSound(){
//         return " miaw " ;
//     }
// }
// $a=new cat();
// echo $a->makeSound() ."<br>";
// $b=new Dog();
// echo $b->makeSound();


// abstract class pay{
//     abstract function pay($kirim);
// }
// class Сlik extends pay{
//     public function pay($kirim){
//         if($kirim>0){
//             return "clik:$kirim";
//         }
//     }
// }
// class payme extends pay{
//     public function pay($kirim){
//         if($kirim>0){
//             return "payme:$kirim";
//         }
//     }
// }
// $a=new Сlik();
// echo $a->pay(100000);


interface  Payment{
    public function pay($kirim);
}
class Clik implements Payment{
    public function pay($kirim){
        if($kirim>0){
            return "clik:$kirim";
        }
    }
}
class payme implements Payment{
    public function pay($kirim){
        if($kirim>0){
            return "payme:$kirim";
        }
    }
}
function makePay( Payment  $a, $money){
    return $a->pay($money);
};
echo makePay(new Clik(), 100000);

?>
