<!--
Abstraction class wo class wo class hoti h jo incomplete hoti h
jis ki proparty ki body ni bani huwi hoti h srf proparty bani huwi hoti h
Abstraction class ka koe object ni banta wo srf or srf dosry class k sat inherit
hoti h or jb inherit hoti h to os to os proparty ko dobara likhna hota h.
-->

<?php

#Abstract class banany ka tareeka.
abstract class class1{
	
	#abstract property banany ka tareeka.
	#abstract property jb banty h to os ki body ni banti
	abstract function fun1();
	
	abstract function fun1new();
	
}



#abstract class ka abject ni banta.
#$obj1 = new class1();




#abstract class ko class2 m inhert krny ka tareeka.
class class2 extends class1{
	
	#jb hamy abstract class ki property use krni hoti h to ham osy yaha dobara likhty h
	#phr is ki body yaha banaty h os jo kam krna h phr is m krty h.
	function fun1()
	{
		echo "fun1 from class1";
	}
	
	function fun1new(){
		echo "fun1new from class1";
	}
}


$obj = new class2();

$obj->fun1();                                echo "<br>";
$obj->fun1new();


?>