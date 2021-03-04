<!--
Static
static class ka object ni banta.
Static ham is liye use krty h k agr hamy ksi b variable ya function/Property k bina object osy use krna h to.
Agr hamy is ka constructer call ni krwana ho to tb b ham static ka use krty h.
-->


<?php



class class1{
	
	#static variable banay ka tareeka.
	static public $number=11;
	
	#static function banay ka tareeka.
	static function fun1(){
		#static variable ko function m call krwany ka tareeka.
		echo self::$number;
	}
	
	#static function m kuch likhny ka tareeka.
	static function fun2(){
		echo "fun 2";
	}
	
}

#static variable ko call krwany ka tareeka.
echo class1::$number;
                                                     echo "<br>";
#static function jis m static variable call h osy call krwany ka tareeka.
echo class1::fun1();
                                                     echo "<br>";
#static function jis m khud kuch likha huwa h osy call krny ka tareeka.
echo class1::fun2();


?>