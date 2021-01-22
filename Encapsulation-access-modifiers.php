<!--Encapsulation / Access Modifair
Hamry pass 3 type k encapsulation hoty h:
1- Public
2- protected
3- Private

Public:
agr ham koe variable ya phr koe funcyion banaty h class k ander to wo public he rehta h
jb wo public rehta h to is ka mtlb ye h k os variable ya os function ko ham class k bahar b use kr skty h

Protected:
jb ham ksi variable ko ya function ko protected banaty h to wo class k bar na to call hota h or na he os k ander ki
Value ham class k bar change kr skty h osy agr class k bar call krna h to geter seter ka use krna pary ga mtlb 
phly osi class k ander ek os function banana pary ga or os m os variable ko retrun krwana pary ga or phr class k bar
os function ko call kr k os variable ko use kr skty h or isy dosri class b access kr skti h.

Private:
jb ham ksi variable ko ya function ko private banaty h to wo class k bar na to call hota h or na he os k ander ki
Value ham class k bar change kr skty h or na he wo ksi or class k sat extends/inheritance ho skta h.
-->
<?php

#public Encapsulation 
class class1{
	public $name = "Ameer";
	
	function fun1(){
		echo "class1 fun1";
	}
	
}

$obj1 = new class1();

#jb ham public variable ko call krwaty h to wo call ho jata h
echo $obj1->name;                                             echo "<br>";

#jb ham public function ko call krwaty h to wo call ho jata h
$obj1->fun1();                                                echo "<br>";


#protected Encapsulation
class class2{
	protected $fullname = "Hamza";
	
	protected function fun2(){
		echo "class2 fun2";
	}
	
	#protected variable ko call krwany k liye geter seter use kry h is tra
	function getname(){
		return $this->fullname;
	}
	
	#protected function ko call krwany k liye geter seter use kry h is tra
	function getfun(){
		return $this->fun2();
	}
}

$obj2 = new class2();
# echo $obj2->fullname;
# $obj2->fun2();

#protected variable ko gater sater sy call krwana
echo $obj2->getname();                                         echo "<br>";

#protected function ko gater sater sy call krwana
$obj2->getfun();                                               echo "<br>";



#Private Encapsulation
class class3{
	private $number=123456;
	
	private function fun3(){
		echo "class3 fun3";
	}
}

$obj3 = new class3();

#jb ham private variable ko call krty h to wo call ni hota
$obj3->number;

#jb ham private function ko call krty h to wo call ni hota
$obj3->fun3();



?>


