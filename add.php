
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styleadd.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body bgcolor="#FAE4C4">
 <?php
// require_once("component.php"); 
require_once 'component.php' ;
@include 'operation.php';
?>

<main>
	<div class="container text-center">
		<h1 class="py-4 rounded" id="hid">Add Your Books</h1>
		<div class="d-flex justify-content-center">
			<form action="" method="post" class="w-50">
				<div class="pt-2">
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fa fa-id-badge"></i></div>
					</div>
					<input type="text" name="book_id" class="form-control" id="inlineFormInputGroup" placeholder="ID" autocomplete="off" value=<?php setID(); ?>  >
				</div>
				</div>
				<div class="pt-2">
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fa fa-user"></i></div>
					</div>
					<input type="text" name="user_name" class="form-control" id="inlineFormInputGroup" placeholder="User Name" autocomplete="off">
				</div>
				</div>
				<!-- ..................-->
                 <div class="pt-2">
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fa fa-envelope"></i></div>
					</div>
					<input type="text" name="user_mail" class="form-control" id="inlineFormInputGroup" placeholder="User Email" autocomplete="off">
				</div>
				</div>

				<!--........................-->
				<div class="pt-2">
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fa fa-book"></i></div>
					</div>
					<input type="text" name="book_name" class="form-control" id="inlineFormInputGroup" placeholder="Book Name" autocomplete="off">
				</div>
				</div>
				<div class="row pt-2">
					<div class="col">
						<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fa fa-id-card-o"></i></div>
					</div>
					<input type="text" name="book_publisher" class="form-control" id="inlineFormInputGroup" placeholder="Author" autocomplete="off">
				</div>
					</div>
					<div class="col">
						<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fa fa-inr"></i></div>
					</div>
					<input type="text" name="book_price" class="form-control" id="inlineFormInputGroup" placeholder="Book Price" autocomplete="off">
				</div>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<!-- <button>Create</button> -->
					<?php buttonElement(btnid:"btn-create",styleclass:"btn btn-success",text:"<i class='fa fa-plus'></i>",name:"create",attr:"dat-toggle='tooltip' data-placement='bottom' title='Create'")?>
					<?php buttonElement(btnid:"btn-read",styleclass:"btn btn-primary",text:"<i class='fa fa-refresh'></i>",name:"read",attr:"dat-toggle='tooltip' data-placement='bottom' title='Read'")?>
					<?php buttonElement(btnid:"btn-update",styleclass:"btn btn-light border",text:"<i class='fa fa-pencil'></i>",name:"update",attr:"dat-toggle='tooltip' data-placement='bottom' title='Update'")?>
					<?php buttonElement(btnid:"btn-delete",styleclass:"btn btn-danger",text:"<i class='fa fa-trash'></i>",name:"delete",attr:"dat-toggle='tooltip' data-placement='bottom' title='Delete'")?> 
					<?php deleteBtn(); ?>
					
				</div>
			</form>
		</div>
	</div>
<br>
		 <div class="d-flex table-data">
			<table class="table table-striped" id=tid>
				<thead class="thead">
					<tr>
						<th>ID</th>
						<th>Book Name</th>
						<th>Publisher</th>
						<th>Book Price</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php
					if(isset($_POST['read'])){
	                          $result=getData();

	                          if($result){
	                          	while($row=mysqli_fetch_assoc($result)){ ?>
	                          	  <tr>
	                          	  	<td data-id="<?php echo $row['id'] ?>"><?php echo $row['id']?></td>
	                          	  	<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_name']?></td>
	                          	  	<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_publisher']?></td>
	                          	  	<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_price']?></td>
	                          	  	<td><i class="fa fa-edit btnedit" data-id="<?php echo $row['id'] ?>"></td>
	                          	  </tr>



                                <?php
	                          	}
	                          }
                          }
					?>
					<!-- <tr>
						<td>1</td>
						<td>Book Name</td>
						<td>Daily Tution</td>
						<td>44.99</td>
						<td><i class="fa fa-edit btnedit"></td>
					</tr> -->
				</tbody>
			</table>
		</div> 


	</div>

</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script type="text/javascript" src="main.js"></script>
</body>
</html>