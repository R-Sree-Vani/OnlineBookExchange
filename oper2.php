<?php 
require_once "db2.php";
require_once "component.php";
require_once "session.php";
require_once "db_connect.php"; 

$conne=Createdbase();

 if(isset($_POST['request'])){
 	createRequestData();
 }
 

function createRequestData(){
 	$bid=textboxValue(value:"book_id");
 	$username=textboxValue(value:"user_name");
 // 	$bookname=textboxValue(value:"book_name");
// 	$bookpublisher=textboxValue(value:"book_publisher");
// 	$bookprice=textboxValue(value:"book_price"); 

    if($bid && $username){
    	$sql="INSERT INTO bookrequest(id,user_name)
	VALUES('$bid','$username')";

if(mysqli_query($GLOBALS['conne'],$sql)){
			TextNode(classname:"success",msg:"Request Sucessfully Accepted....");
			//echo("HaHa working");
			
		}else{
			echo "error";
		}

    }else{
 		TextNode(classname:"error",msg:"Provide Data in the Textbox");
 		//echo("Hmm...Check again");
 	}

 }

  


 
?>

