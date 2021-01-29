<!doctype html>
<?php require_once "database.php";

$obj = new database();

$obj2 = new abc();

#Insert users
$obj2->btn();

#update users
$obj2->ubtn();

#delete users
$obj2->get_delete();




?>

<html>
<head>
<meta charset="utf-8">
<title>OOP</title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>

<body>
	<h2 class="text-center text-info">Crud with OOP</h2>
	 <h5 class="text-center">go to  <a href="product.php" class="text-danger "> Products </a></h5>
	<br>
	<div class="container">
		<div class="col-lg-6">
			<?php if(isset($_GET['msg']) AND $_GET['msg'] == "success")
			
	              {
	                echo "<div class='alert alert-success'>
						  <strong>Insert!</strong> Successfully.
						  </div>";

                  }else if(isset($_GET['msg']) AND $_GET['msg'] == "error")
					   {
						  echo "<div class='alert alert-danger'>
						  <strong>Data!</strong> Not Insert.
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
				
				$view = $obj->view_by_id('*','users',$get_id);
				
			?>
			
			<form method="post" >
			<div class="form-group">
			<label>Name</label>
				<input type="text" name="name" value="<?php echo $view['name']; ?>" class="form-control" />
			</div>
			<div class="form-group">
			<label>email</label>
				<input type="text" name="email" value="<?php echo $view['email']; ?>"  class="form-control" />
			</div>
			<div class="form-group">
			<label>number</label>
				<input type="text" name="number" value="<?php echo $view['number']; ?>"  class="form-control" />
			</div>
			<div class="form-group">
			<label>password</label>
				<input type="text" name="password" value="<?php echo $view['password']; ?>"  class="form-control" />
			</div>
			<div class="col-lg-2">
			
				<input type="submit" name="ubtn" value="Update" class="btn btn-success" />
			</div>
		</form>
			
			
			
			<?php } else { ?>
		<form method="post" >
			<div class="form-group">
			<label>Name</label>
				<input type="text" name="name" class="form-control" />
			</div>
			<div class="form-group">
			<label>email</label>
				<input type="text" name="email" class="form-control" />
			</div>
			<div class="form-group">
			<label>number</label>
				<input type="text" name="number" class="form-control" />
			</div>
			<div class="form-group">
			<label>password</label>
				<input type="text" name="password" class="form-control" />
			</div>
			<div class="col-lg-2">
			
				<input type="submit" name="btn" value="Insert" class="btn btn-success" />
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
			<th>Name</th>
			<th>Email</th>
			<th>Number</th>
			<th>Password</th>
			<th>Edit</th>
			<th>Delete</th>
			</tr>
			<?php 
			$data = $obj->view('*','users','','ORDER BY id DESC');
			$sno =1;
			foreach($data as $value){ ?>
			<tr>
				<td><?php echo $sno++ ?></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td><?php echo $value['number']; ?></td>
			<td><?php echo $value['password']; ?></td>
			<td> <a href="Insert.php?Edit=<?php echo $value['id']; ?>">Edit</a> </td>
			<td> <a href="Insert.php?Delete=<?php echo $value['id']; ?>">Delete</a> </td>
			
			
			</tr>
			
			<?php } ?>
			
		
		
		
		</table>
	</div>
	</div>
	
	
	
</body>
</html>