<!--
How To Create Classes
How To Create function in class
How To Create Class Object  
How To Use Class Proparty with Object 
How To Use Variable With Object 
How To Use Function With Object 
What is constructer and how to use 
what is destructer and how to use 
-->

<?php


#class mtlb ek he cheez ki bhot sari categorys
#jesy hamary pass car h to har car m sets b hoti h, oska color b hota h,oski price b hoti hai,
#par har car ki alag alag ye chezy hoti h ksi m 4 sets hoti h ksi m 6 hoti h.
#isi tra car ek class h or os m alag alag kisam ki cars h
class class1{
	public $a=0;
	
	#class m constructer ek function h jo agr ham banay to sab sy phly wahi call hoga
	#phr baki function call ho gy. chahy ham constructer ko akhir m he q na banay pr ye call
	#phly he hoga.
	function __construct(){
		echo "__construct";
		
	}
	
	#class m destructer ek function h jo agr ham banay to sab sy end m wahi call hoga
	#jaha sb function end ho jay gy osi k bad ye function call ho ga. chahy ham destructer
	#ko shuru m he q na banay pr ye call
	#end m he hoga.
	function __destruct(){
		echo "__destruct";
	}
	
	#agr hamy function k ander ksi variable ko echo krna h jo function k bahar bana ho
	#to this ka use kr k krty h.  
	function fun1(){
		echo ++$this->a;
	}
	
	#agr hamy function k ander ksi variable ko echo krna h jo function k ander he bana ho
	#to is tra echo krty h simple
	function fun2(){
	 $b=2;
	 
		echo $b;
	}
	
	#agr ham chaty h k m phly variable ko echo kru or jab osy call kru to tb os m kuch
	#value dalu phly ni.
	#to wo asy bany ga or jb isy call krway gy to fun3(20) ander kuch b likh k use kr skty h.
	function fun3($c){
		echo $c;
	}
}

#agr hamy ksi b class k ander ki proparty use krni hoti h 
#to ham os class ka object banaty h or phr os object ko use kr k
#os class ki ander ki jo jo proparty hamy chaye hoti hai ham use krty h.

#object banany ka tareeka ye h.
$obj = new class1(); 
                               echo "<br>";

#object banany k bad os class ki proparty use karny ka tareeka ye h.

#variable ko call krwany ka tareeka.
echo $obj->a;

							echo "<br>";
#function ko call krwany ka tareeka.
$obj->fun1();

                           echo "<br>";

$obj->fun2();

                           echo "<br>";

$obj->fun3(5);

							echo "<br>";




?>