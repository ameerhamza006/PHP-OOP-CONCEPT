<?php


abstract class abc{

    //public $num = 10;

     abstract function fun1();


}


class class2 extends abc{

    function fun1(){
        echo "moiz class2";
    }

}


$obj2 = new class2();

$obj2->fun1();

class class3 extends abc{

    function fun1(){
        echo "ameer class2";
    }

}
echo "<br>";
$obj3 = new class3();

$obj3->fun1();

?>