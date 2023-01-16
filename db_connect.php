<?php
$servername='localhost';
$username='root';
$password='';
$dsn='mysql:host=localhost; dbname=mydb';
$dbname='mydb';

try{
	$cons=mysqli_connect($servername,$username,$password,$dbname);
	$conn=new PDO($dsn,$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "Fail to connect to the database".$e->getMessage();
}

?>