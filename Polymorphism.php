<!--
Polymorphism
same operation may be behave diffrently in diffrent class.
Polymorphism ka mtlb ye h k mera 1 function alag alag class m alag alag tareeky sy kam krta h.
Polymorphism ko krny k 2 tareeky h.
1-Abstract Class
2-Interface
-->

<?php

abstract class class1{
	
	abstract function fun1();
}

class class2 extends class1{
	
	#Abstrat waly function ko yaha m ksi or tra use kr rha hu mtlb kuch value is m add kr rha hu.
	function fun1(){
		echo "fun1 in class2";
	}
	
}

$obj2 = new class2();

#yaha jb m call krta hu to jo many class2 k ander function m likkha h wo ay ga.
$obj2->fun1();

class class3 extends class1{
	
	#Abstrat waly function ko yaha m ksi or tra use kr rha hu is m kuch or value add kr rha hu.
	function fun1(){
		echo "fun1 in class3";
	}
	
}

$obj3 = new class3();
                                           echo "<br>";
#yaha jb m call krta hu to jo many class3 k ander function m likkha h wo ay ga.
$obj3->fun1();

?>


