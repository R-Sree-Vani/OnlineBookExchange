<?php
include_once 'session.php';
include_once 'db_connect.php';
//require_once 'source/C:\xampp\htdocs\db_connect.php';


if(isset($_POST['login-btn'])){
	$user=$_POST['user-name'];
	$password=$_POST['user-pass'];

	try{
		$SQLQuerry="SELECT * FROM users WHERE username=:username";
		$statement=$conn->prepare($SQLQuerry);
		$statement->execute(array(':username'=>$user));

		while($row=$statement->fetch()){
			$id=$row['id'];
			$hashed_password=$row['password'];
			$username=$row['username'];

			if(password_verify($password,$hashed_password)){
				$_SESSION['id']=$id;
				$_SESSION['username']=$username;
				header('location:dashboard.php');
			}
			else{
				echo "Error:Invalid username or password";
			}
		}
	}
	catch(PDOException $e){
		echo "Error: " .$e->getMessage();
	}
}
?>