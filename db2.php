<?php
  function Createdbase(){
  	$servername="localhost";
  	$username="root";
  	$password="";
  	$dbname="bookreq";

  	$conne=mysqli_connect($servername,$username,$password);

  	if(!$conne){
  		die("Connection Failed:".mysqli_connect_error());
  	}

  	$sql="CREATE DATABASE IF NOT EXISTS $dbname";
  	if(mysqli_query($conne,$sql)){
  		$conne=mysqli_connect($servername,$username,$password,$dbname);


  		$sql="
  		CREATE TABLE IF NOT EXISTS bookrequest(id INT(11) NOT NULL ,
  		user_name VARCHAR(30) NOT NULL
  		-- book_name VARCHAR(25) NOT NULL,
  		-- book_publisher VARCHAR(20),
  		-- book_price FLOAT
  		);
  		";
  		if(mysqli_query($conne,$sql)){
  			return $conne;
  		}else{
  			echo "Cannot Create table";
  		}

  		}
  	else{
  		echo "Error while creating Database".mysqli_error($conne);
  	}
  }
  ?>