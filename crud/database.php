<?php

#class for database connnection
class db{
	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "crud_oop";
	
	public $connect;
	
	#ye construct automatic har bar call hota h is liye connection kois m rakha h ta k har bar ye cll ho. 
	function __construct(){
		$this->connect = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
		
		if($this->connect->connect_error){
			echo "Connection Error";
		}else {
			return $this->connect;
		}
	}
	
}

#crud sb table isi sy create,read,update,delete ho gy 
class database extends db{
	
	
	#isi function sy sb table insert ho gy.
	function insert($table,$values,$redirect){
		
		$insert = "insert into $table values(Null,$values)";
		$run = $this->connect->query($insert); 
		
		if($run){
			
			echo "<script>location.href='$redirect?msg=success';</script>";
		}else{
			echo "<script>location.href='$redirect?msg=error';</script>";
		}
	}
	
	#isi function sy sb table view ho gy.
	function view($condition,$table,$wherefelid,$orderby){
		
		$select = "select $condition from $table $wherefelid $orderby";
		$runn = $this->connect->query($select);
		
		while($row = $runn->fetch_assoc()){
			
			$data[] = $row;
			
		} #while close
		return $data;
		
	} #view function close 
	
	#isi function sy sb table ki value form m ay gi update krny k liye.
	function view_by_id($condition,$table,$id){
	
	$select = "select $condition from $table where id='$id'";
	$run = $this->connect->query($select);
		
	if($run->num_rows == 1){
		$row = $run->fetch_assoc();
		return $row;
	}	
}

	#isi function sy sb table update ho gy.
	function update($table,$update_value,$id,$rediract){

		$update = "UPDATE $table SET $update_value where id='$id' ";
		$run = $this->connect->query($update);
		
		if($run){
			
			echo "<script>location.href='$rediract?msg=Update';</script>";
		}else{
			echo "<script>location.href='$rediract?msg=uerror';</script>";
		}
	}
	
	#isi function sy sb table delete ho gy.
	function delete($table,$id,$rediract){
		
		$delete = "DELETE FROM $table where id='$id'";
		$run = $this->connect->query($delete);
		
		if($run){
			
			echo "<script>location.href='$rediract?msg=Deleted';</script>";
		}else{
			echo "<script>location.href='$rediract?msg=derror';</script>";
		}
		
	}
	
} #database class close


class abc extends database{
	#insert users
	function btn(){
if(isset($_POST['btn'])){
	$values = "'".$_POST["name"]."','".$_POST["email"]."','".$_POST["number"]."','".$_POST["password"]."'";
	$this->insert('users',$values,'Insert.php');
	
}
	}
	
	#update users
	function ubtn(){
 if(isset($_POST['ubtn'])){
	$get_id = $_GET['Edit'];
	 $update_value = "name='".$_POST["name"]."',email='".$_POST["email"]."',number='".$_POST["number"]."',password='".$_POST["password"]."'";
	 
	 
	$this->update('users',$update_value,$get_id,'Insert.php');
}
	}

	#delete users
	function get_delete(){
if(isset($_GET['Delete'])){
	$get_id = $_GET['Delete'];
	$this->delete('users',$get_id,'Insert.php');
}
	}
	
	#insert products
	function btnp(){
	if(isset($_POST['btnp'])){

$values = "'".$_POST["title"]."','".$_POST["price"]."','".$_POST['bio']."'";
$this->insert('product',$values,'product.php');
}
	}

	#delete product
	function get_delete_pro(){
if(isset($_GET['Delete'])){
	$get_id = $_GET['Delete'];
	$this->delete('product',$get_id,'product.php');
}
	}
	
	#update product
	function ubtnp(){	
if(isset($_POST['ubtnp'])){
	$get_id = $_GET['Edit'];
	 $update_value = "title='".$_POST["title"]."',price='".$_POST["price"]."',bio='".$_POST["bio"]."'";
	$this->update('product',$update_value,$get_id,'product.php');
	
}
	}

	
} #abc class close








?>