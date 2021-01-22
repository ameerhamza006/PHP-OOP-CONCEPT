<!--Inheritance
Inheritance ka mtlb hota h k ksi ek class m dosry class ki proparty ko use krna
jesy many ek class banae or os m 2 function banay or phr many dosri class bane 
jis m mujy phly waly class ka function use krna h to isy Inheritance kehty h.
-->
<?php

class class1{
	
	function fun1(){
		echo "hello fun1 in class1";
	}
	
	function fun2(){
		echo "hello fun2 in class1";
	}
	
}

#inheritnce ko use krny ka tareka 
class class2 extends class1 {
	
	function fun3(){
		echo "hello fun3 in class2";
		
	}
}

#ab agr class2 ka obj banata hu or isi m sy m class1 ki promarty b call krwa skta hu.
$obj2 = new class2();

#ye m class1 ki proparty call krwa rha hu.
$obj2->fun1();
                                             echo "<br>";
#ye m class2 ki proparty call krwa rha hu.
$obj2->fun3();



?>