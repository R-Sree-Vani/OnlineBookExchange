<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styleadd.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.fa-envelope{
			color: white;
		}
	</style>
</head>
<body bgcolor="#FAE4C4">
 <?php
// require_once("component.php"); 
require_once 'component.php' ;
require_once 'operation.php';
//require_once 'oper2.php';
?>
<main>
	<div class="container text-center">
		<h1 class="py-4 rounded" id="hid">Borrow Books</h1>
		<div class="d-flex justify-content-center">

		<form action="" method="post" class="w-50">
				<div class="pt-2">
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fa fa-id-badge"></i></div>
					</div>
					<input type="text" name="book_id" class="form-control" id="inlineFormInputGroup" placeholder="Book ID" autocomplete="off" value="" >
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
				<div class="d-flex justify-content-center">
					<!-- <button>Create</button> -->
					<?php buttonElement(btnid:"btn-create",styleclass:"btn btn-primary",text:"<i class='fa fa-search'></i>",name:"search",attr:"dat-toggle='tooltip' data-placement='bottom' title='Search all books'")?>
					<?php buttonElement(btnid:"btn-read",styleclass:"btn btn-success",text:"<i class='fa fa-book'></i>",name:"request",attr:"dat-toggle='tooltip' data-placement='bottom' title='Request'")?>
					<?php buttonElement(btnid:"btn-contact",styleclass:"btn btn-warning",text:"<i class='fa fa-envelope'></i>",name:"contact",attr:"dat-toggle='tooltip' data-placement='bottom' title='Contact'")?>
				</div>
			</form>
		</div>

</div>
</main>

<?php

if(isset($_POST['search'])){
	header('location: browseall.php');
}
if(isset($_POST['contact'])){
	header('location: contact.php');
}


?>
</body>

</html>