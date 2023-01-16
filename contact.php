<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styleadd.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<?php
require_once 'component.php' ;
require_once 'operation.php';
include_once 'session.php';



?>
<h1 style="color: brown;"><center>Find the Contact of the Lenders!!</center></h1><br>
	 <div class="d-flex table-data">
			<table class="table table-striped" id=tid>
				<thead class="thead">
					<tr>
						<th>ID</th>
						<!-- <th>Book Name</th>
						<th>Publisher</th> -->
						<th>Book Price</th>
						<th>Contact</th> 
					</tr>
				</thead>
				<tbody id="tbody">
					<?php
					//if(isset($_POST['read'])){
	                          $result=getsData();




	                          $sa="SELECT email FROM users WHERE username='$us'";
                              $r=mysqli_query($GLOBALS['cons'],$sa);

                          if(mysqli_num_rows($r)>0){
                             if($r){
                             	$ress=$r;
                             }
                             }




	                         

	                          if(($result)){
	                          	while(($row=mysqli_fetch_assoc($result))){ ?>
	                          	  <tr>
	                          	  	<td data-id="<?php echo $row['id'] ?>"><?php echo $row['id']?></td>
	                          	  	<!-- <td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_name']?></td>
	                          	  	<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_publisher']?></td> -->
	                          	  	<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_price']?></td>
	                          	  	    <td data-id="<?php echo $row['id'] ?>"><a class="ccls" style="color:  #FAE4C4;" href="mailto:"<?php $row['user_mail']?>><?php echo $row['user_mail']?></a></td>  
	                          	  	<!-- <td><i class="fa fa-edit btnedit" data-id="<?php echo $row['id'] ?>"></td> -->
	                          	  </tr>



                                <?php
	                          	}
	                          }
                         // }
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
		<!--  <?php
		 //echo $_SESSION['username'];
		 // $us=$_SESSION['username'];;
		// echo " $us";
        // global $us;
		 ?> -->

		
</body>
</html>

