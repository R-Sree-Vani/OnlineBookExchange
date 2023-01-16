
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadd.css">
<style type="text/css">
	.success{
		background-color: #90EE90;
	padding: 1em;
	}
	.error{
		background-color: #FF6347;
	padding: 1em;
	}
</style>
</head>
</html>
<?php
require_once "db2.php";
require_once "db.php";
require_once "component.php";
include_once "session.php";
include_once "db_connect.php";

//include_once "browseall.php";
//require_once("component.php"); 

$con=Createdb();
$conne=Createdbase();
//....
//$conn=Createdbase();
//....

if(isset($_POST['create'])){
	createData();
}


if(isset($_POST['update'])){
	UpdateData();
}

if(isset($_POST['delete'])){
	deleteRecord();
}

if(isset($_POST['deleteall'])){
	deleteAll();
}

//....
// if(isset($_POST['request'])){
//  	createRequestData();
//  }

//  function createRequestData(){
//  	$bid=textboxValuea(value:"id");
//  	$username=textboxValuea(value:"user_name");
// // 	$bookname=textboxValue(value:"book_name");
// // 	$bookpublisher=textboxValue(value:"book_publisher");
// // 	$bookprice=textboxValue(value:"book_price");

//     if($bid && $username){
//     	$sql="INSERT INTO bookrequest(id,user_name)
// 	VALUES('$bid','$username')";

// if(mysqli_query($GLOBALS['conn'],$sql)){
// 			TextNodeb(classname:"success",msg:"Request Sucessfully Accepted....");
			
// 		}else{
// 			echo "error";
// 		}

//     }else{
//  		TextNodeb(classname:"error",msg:"Provide Data in the Textbox");
//  	}

//  }
// // 	if($username && $bookname && $bookpublisher && $bookprice  ){
// // 		$sql="INSERT INTO bookrequest(user_name,book_name,book_publisher,book_price)
// // 		VALUES('$username','$bookname','$bookpublisher','$bookprice')";

// // 		if(mysqli_query($GLOBALS['con'],$sql)){
// // 			TextNode(classname:"success",msg:"Request Sucessfully Accepted....");
			
// // 		}else{
// // 			echo "error";
// // 		}
// // 	}else{
// // 		TextNode(classname:"error",msg:"Provide Data in the Textbox");
// // 	}

// // }

//  function textboxValuea($value){
// 	$textbox=mysqli_real_escape_string($GLOBALS['conn'],trim($_POST[$value]));
// 	if(empty($textbox)){
// 		return false;
// 	}else{
// 		return $textbox;
// 	}
// }


// function TextNodeb($classname,$msg){
// 	$element="<h6 class='$classname'>$msg</h6>";
// 	echo $element;
// }

//....


function createData(){
$username=textboxValue(value:"user_name");
$usermail=textboxValue(value:"user_mail");
	$bookname=textboxValue(value:"book_name");
	$bookpublisher=textboxValue(value:"book_publisher");
	$bookprice=textboxValue(value:"book_price");

	

	if($username && $usermail && $bookname && $bookpublisher && $bookprice  ){
		$sql="INSERT INTO books(user_name,user_mail,book_name,book_publisher,book_price)
		VALUES('$username','$usermail', '$bookname','$bookpublisher','$bookprice')";

		if(mysqli_query($GLOBALS['con'],$sql)){
			TextNode(classname:"success",msg:"Record Sucessfully inserted....");
			
		}else{
			echo "error";
		}
	}else{
		TextNode(classname:"error",msg:"Provide Data in the Textbox");
	}
}

function textboxValue($value){
	$textbox=mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
	if(empty($textbox)){
		return false;
	}else{
		return $textbox;
	}
}


function TextNode($classname,$msg){
	$element="<h6 class='$classname'>$msg</h6>";
	echo $element;
}

function getData(){
 global $us;
//$sql="SELECT * FROM bookstore.books INNER JOIN users ON mydb.users.username=bookstore.books.user_name;";
	
	$sql="SELECT * FROM books WHERE user_name='$us'";

	$result=mysqli_query($GLOBALS['con'],$sql);

	if(mysqli_num_rows($result)>0){
		return $result;
		// while($row=mysqli_fetch_assoc($result)){
		// 	echo "Id:".$row['id']."-Book Name:".$row['book_name'];
		// }
	}
}

function getsData(){
 //global $us;
//$sql="SELECT * FROM bookstore.books INNER JOIN users ON mydb.users.username=bookstore.books.user_name;";
	
	$sql="SELECT * FROM books"; 

	$result=mysqli_query($GLOBALS['con'],$sql);

	if(mysqli_num_rows($result)>0){
		return $result;
		// while($row=mysqli_fetch_assoc($result)){
		// 	echo "Id:".$row['id']."-Book Name:".$row['book_name'];
		// }
	}
}

// function getCountAdd(){
// 	global $us;
// 	$sql="SELECT COUNT(*) FROM books WHERE user_name='$us'";
// 	$result=mysqli_query($GLOBALS['con'],$sql);
// 	if(mysqli_num_rows($result)>0){
// 		return $result;
		
// 	}

// }

//....

// function getCountBorr(){
// 	global $us;
// 	$sql="SELECT COUNT(*) FROM bookrequest WHERE user_name='$us'";
// 	$result=mysqli_query($GLOBALS['conne'],$sql);
// 	if(mysqli_num_rows($result)>0){
// 		return $result;
		
// 	}

//}

//....


function UpdateData(){
	$bookid=textboxValue(value:"book_id");

$username=textboxValue(value:"user_name");

	$bookname=textboxValue(value:"book_name");
	$bookpublisher=textboxValue(value:"book_publisher");
	$bookprice=textboxValue(value:"book_price");

	


	if( $username && $bookname && $bookpublisher  && $bookprice ){
		$sql=
		"UPDATE books SET user_name='$username', book_name='$bookname',book_publisher='$bookpublisher',book_price='$bookprice' WHERE id='$bookid'
		";

		if(mysqli_query($GLOBALS['con'],$sql)){
			TextNode(classname:"success",msg:"Data successfully updated");
		}
		else{
		TextNode(classname:"error",msg:"Unable to update data");
	}

	}
    else{
    	TextNode(classname:"error",msg:"Select data using Edit icon");
    }
	
}


function deleteRecord(){
	$bookid=(int)textboxValue(value:"book_id");
	$sql="DELETE FROM books WHERE id=$bookid";

	if(mysqli_query($GLOBALS['con'],$sql)){
		TextNode(classname:"success",msg:"Record Deleted Succesfully");
	}else{
		TextNode(classname:"error",msg:"Unable to delete the record");
	}


}


function deleteBtn(){
	$result=getData();
	$i=0;

	if($result){
		while($row=mysqli_fetch_assoc($result)){
			$i++;

			if($i>3){
				buttonElement(btnid:"btn-deleteall",styleclass:"btn btn-danger",text: "<i class=f'fa fa-trash'></i>Delete All",name:"deleteall",attr:"");
				return;
			}

		}
	}

}



function deleteAll(){
	$sql="DROP TABLE books";

	if(mysqli_query($GLOBALS['con'],$sql)){
		TextNode(classname:"success",msg:"All Record deleted successfully");
		Createdb();
	}else{
		TextNode(classname:"error",msg:"Something went wrong.... Record cannot be deleted");
	}
}


function setID(){
	$getid=getData();
	$id=0;
	if($getid){
		while($row=mysqli_fetch_assoc($getid)){
			$id=$row['id'];
		}
	}
	return($id+1);
}



//....


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


	// s$ce="SELECT user_mail FROM books WHERE $bid=$bookid";
	#$oe=mysqli_query($GLOBALS['con'],$ce);



			TextNode(classname:"success",msg:"Request Sucessfully Accepted....");
			TextNode(classname:"success",msg:"click on contact icon to contact the lender");

			
			
		}else{
			echo "error";
		}

    }else{
 		TextNode(classname:"error",msg:"Provide Data in the Textbox");
 		//echo("Hmm...Check again");
 	}

 }




 
?>








