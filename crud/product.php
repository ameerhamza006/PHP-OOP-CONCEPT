<!doctype html>

<?php

require_once "database.php";

$obj = new database();

$obj2 = new abc();

#Insert products
$obj2->btnp();

#update users
$obj2->ubtnp();

#delete product
$obj2->get_delete_pro();



?>

<html>
<head>
<meta charset="utf-8">
<title>OOP Product</title>
	
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	
</head>

<body>
	
		<h2 class="text-center text-info">Crud with OOP</h2>
	 <h5 class="text-center">go to  <a href="Insert.php" class="text-danger "> Users </a></h5>
	<br>
	<div class="container">
		<div class="col-lg-6">
			<?php if(isset($_GET['msg']) AND $_GET['msg'] == "success")
			
	              {
	                echo "<div class='alert alert-success'>
						  <strong>Product!</strong> Add Successfully.
						  </div>";

                  }else if(isset($_GET['msg']) AND $_GET['msg'] == "error")
					   {
						  echo "<div class='alert alert-danger'>
						  <strong>Product!</strong> Not Add.
						  </div>";
					   }else if(isset($_GET['msg']) AND $_GET['msg'] == "Update")
			
							  {
								echo "<div class='alert alert-success'>
									  <strong>Update!</strong> Successfully.
									  </div>";

							  }else if(isset($_GET['msg']) AND $_GET['msg'] == "uerror")
					   {
						  echo "<div class='alert alert-danger'>
						  <strong>Data!</strong> Not Update.
						  </div>";
					   }
			
			if(isset($_GET['Edit'])){
				$get_id = $_GET['Edit'];
				
				$value = $obj->view_by_id('*','product',$get_id);
			
			
			?>
			<form method="post" >
			<div class="form-group">
			<label>Title</label>
				<input type="text" name="title" value="<?php echo $value['title']; ?>" class="form-control" />
			</div>
			<div class="form-group">
			<label>price</label>
				<input type="text" name="price" value="<?php echo $value['price']; ?>" class="form-control" />
			</div>
			<div class="form-group">
			<label>bio</label>
				<input type="text" name="bio" value="<?php echo $value['bio']; ?>" class="form-control" />
			</div>
			
			<div class="col-lg-2">
			
				<input type="submit" name="ubtnp" value="Update Product" class="btn btn-success" />
			</div>
		</form>
			
			<?php }else { ?>

			<form method="post" >
			<div class="form-group">
			<label>Title</label>
				<input type="text" name="title" class="form-control" />
			</div>
			<div class="form-group">
			<label>price</label>
				<input type="text" name="price" class="form-control" />
			</div>
			<div class="form-group">
			<label>bio</label>
				<input type="text" name="bio" class="form-control" />
			</div>
			
			<div class="col-lg-2">
			
				<input type="submit" name="btnp" value="Add Product" class="btn btn-success" />
			</div>
		</form>
			<?php } ?>
			<br>
			<br>
			<?php
			
			if(isset($_GET['msg']) AND $_GET['msg'] == "Deleted")
			
	              {
	                echo "<div class='alert alert-success'>
						  <strong>Deleete!</strong> Successfully.
						  </div>";

                  }else if(isset($_GET['msg']) AND $_GET['msg'] == "derror")
			
	              {
	                echo "<div class='alert alert-danger'>
						  <strong>Data!</strong> Not Delete.
						  </div>";

                  }
			
			?>
			<h4 class="text-center text-danger">All Record</h4>
		<table class="table table-bordered">
		<tr class="bg-primary text-center">
		
			<th>S/No</th>
			<th>Title</th>
			<th>Price</th>
			<th>Bio</th>
			
			<th>Edit</th>
			<th>Delete</th>
			</tr>
			<?php
			$data = $obj->view('*','product','','ORDER BY id DESC');
			
			$Sno = 1;
			foreach($data as $value){
				?>
			<tr>
			<td><?php echo $Sno++ ?></td>
			<td><?php echo $value['title']; ?></td>
			<td><?php echo $value['price'] ?></td>
			<td><?php echo $value['bio'] ?></td>
			<td> <a href="product.php?Edit=<?php echo $value['id']; ?>" >Edit</a> </td>
			<td><a href="product.php?Delete=<?php echo $value['id']; ?>" >Delete</a></td>
			</tr>
			
			<?php 
			}
			?>
			
			
			</table>
		</div>
		</div>
</body>
</html>