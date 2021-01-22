<!--
Interface ko ham multipal bar use kr skty h ksi b class m.
Interface ka koe object ni banta.
Interface m sary function/property abstract hoty h mtlb body ni hoti h.
Interface m sary function/property public hoty h.
Interface m Constructer ni hota.
-->

<?php

#inretface banany ka taareeka.
interface class1{
	
	#Interface m sary function/property abstract hoty h mtlb body ni hoti h.
	 function fun1();
	
	
}

#Interface ka object ni banta.
#$obj1 = new class1();

#inretface banany ka taareeka.
interface class2{
	
	#Interface m sary function/property abstract hoty h mtlb body ni hoti h.
	function fun2();
	
}

#Multipal interface use krny ka tareeka
class class3 implements class1,class2{
	
	#jb ham interface ko implemets kr lyty h to jo class ham ne
	#implements karwaya os m jo property bani huwi h os ko yaha dobara call krna zarori h.
	function fun1(){
		
		echo "fun1 from class1";
	}
	
	function fun2(){
		
		echo "fun2 from class2";
	}
}

$obj = new class3();

$obj->fun1();                               echo "<br>";
$obj->fun2();

?>