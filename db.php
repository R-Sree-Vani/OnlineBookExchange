<?php
  function Createdb(){
  	$servername="localhost";
  	$username="root";
  	$password="";
  	$dbname="bookstore";

  	$con=mysqli_connect($servername,$username,$password);

  	if(!$con){
  		die("Connection Failed:".mysqli_connect_error());
  	}


  	$sql="CREATE DATABASE IF NOT EXISTS $dbname";
  	if(mysqli_query($con,$sql)){
  		$con=mysqli_connect($servername,$username,$password,$dbname);


  		$sql="
  		CREATE TABLE IF NOT EXISTS books(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  		user_name VARCHAR(30) NOT NULL,
  		user_mail VARCHAR(30) NOT NULL,
  		book_name VARCHAR(25) NOT NULL,
  		book_publisher VARCHAR(20),
  		book_price FLOAT
  		);
  		";
  		if(mysqli_query($con,$sql)){
  			return $con;
  		}else{
  			echo "Cannot Create table";
  		}

  		//....

  		// $sql="
  		// CREATE TABLE IF NOT EXISTS bookrequest(id INT(11) NOT NULL,
  		// user_name VARCHAR(30) NOT NULL,
  		// -- book_name VARCHAR(25) NOT NULL,
  		// -- book_publisher VARCHAR(20),
  		// -- book_price FLOAT
  		// );
  		// ";
  		// if(mysqli_query($con,$sql)){
  		// 	return $con;
  		// }else{
  		// 	echo "Cannot Create table";
  		// }


  		//....

  	}
  	else{
  		echo "Error while creating Database".mysqli_error($con);
  	}
  }
  ?>