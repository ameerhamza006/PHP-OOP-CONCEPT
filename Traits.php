<!--
Traits
traits ham is liye use krty h k agr ham ne class1 ko class2 sy inherit kiya or phr class3 ko class2 sy inherit kiya to sb kuch to thek hoga pr ham ne jb class2 ko class3 m inherit krwaya to hamy class1 ki b property mil gae q k class2 inherit huwa h class1 k sat pr ab ham ye chaty h k hamy class1 ki protery ni chaye class3 m tbi ham traits ka use krty h.
traits ka koe object ni banta ye srf dosri class m use ho skta h bs.
-->


<?php

#traits ko banany ka treeka.
trait trait1{
	
	function fun1(){
		echo "fun1";
	}
}

trait trait2{
	
	function fun2(){
		echo "fun2";
	}
}

class class1{
	#traits ko use ya extends krty ka tarika ksi dosri class m.
	use trait1,trait2; #ek sy ziyada traits ko use krny ka tareeka.
	
	
}

$obj = new class1();

#class1 k zariye traits 1 ko call krna.
$obj->fun1();


?>