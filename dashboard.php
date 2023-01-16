<?php
 include_once 'session.php';
 include_once 'db.php';
 include_once 'db2.php';
 //require_once 'oper2.php';
 require_once 'operation.php';
 require_once 'db_connect.php';
 


 //include_once 'component.php'
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Dashboard</title>
 	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styledash.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
 <?php if(!isset($_SESSION['username'])):header("location : logout.php");?>

 	<?php else: ?>
    <?php endif ?>
  
    <?php echo "<center><h1 class='h11cls'>Welcome ".$_SESSION['username']." To Dashboard</h1></center>" ?>

   <!--  <h2><a href="logout.php" class="acls">Logout</a></h2> -->


<div class="container-fluid" >
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse show" style="background-color: brown;position: relative;top:-55px;height: 100vh;">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item" style="margin-bottom: 20px;">
            <a class="nav-link active" href="#" style="color: #FAE4C4;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add.php" style="color: #FAE4C4;">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> -->
              <i class="fa fa-plus" aria-hidden="true"></i>
              Add
            </a>
          </li><br>
         <!--  <li class="nav-item">
            <a class="nav-link" href="#" style="color: #FAE4C4;">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> 
             <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              Modify
            </a>
          </li><br> -->
          <li class="nav-item">
            <a class="nav-link" href="browseall.php" style="color: #FAE4C4;">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> -->
              <i class="fa fa-eye" aria-hidden="true"></i>
              Browse All
            </a>
          </li><br>
          <li class="nav-item">
            <a class="nav-link" href="borrow.php" style="color: #FAE4C4;">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg> -->
              <i class="fa fa-hourglass-half"></i>
              Borrow
            </a>
          </li><br>
          <li class="nav-item">
            <a class="nav-link" href="Referbooks.php" style="color: #FAE4C4;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              Refer Books
            </a>
          </li><br>
        </ul>

        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
          </a>
        </h6> -->
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="logout.php" style="color: #FAE4C4;">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> -->
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              Log Out
            </a>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              Year-end sale
            </a>
          </li> -->
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="padding-left: 100px;"><!-- Dashboard --> Your Profile</h1>
        
      </div>
      <center>
      <table border style="background-color: brown;color: #fae4c4;width: 70%;height: 100px;">
        	<tr>
        		<th><center>No.of Books Added</center></th>
        		<th><center>No. of Books Requested</center></th>
        	</tr>
          <?php 
global $us;

$s="SELECT * FROM books WHERE user_name='$us'";
$result=mysqli_query($GLOBALS['con'],$s);
$c=0;
  if(mysqli_num_rows($result)>0){
     if($result){
                              while($row=mysqli_fetch_assoc($result)){ ?>
                               
                                <?php $c=$c+1; ?>

                                <!-- <?php //echo $row['id']?> -->
                                <?php
    }}}?>
  <?php 
global $us;

$sb="SELECT * FROM bookrequest WHERE user_name='$us'";
$result=mysqli_query($GLOBALS['conne'],$sb);
$cb=0;
  if(mysqli_num_rows($result)>0){
     if($result){
                              while($row=mysqli_fetch_assoc($result)){ ?>
                               
                                <?php $cb=$cb+1; ?>

                                <!-- <?php //echo $row['id']?> -->
                                <?php
    }}}?>
    
    <!--  -->
<!-- echo $s;
echo $us; -->
    <tr>

<td><center><?php echo $c; ?></center></td>
<td><center><?php echo $cb; ?></center></td>
</tr>
<!-- ?>
         -->	
        <!-- 	<tr>
        		<td>
        			<?php echo "hii"; ?>
        		</td>
        	</tr> -->
        </table>
    </center>
       

      <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="1054" height="444" style="display: block; height: 296px; width: 703px;"></canvas>
    </main>
  </div>
</div>
<!-- <?php 
//global $us;

$s//="SELECT * FROM books WHERE user_name='$us'";
//$result//=mysqli_query($GLOBALS['con'],$s);
//$c//=0;
  //if(mysqli_num_rows($result)>0){
     //if($result){
                              //while($row=mysqli_fetch_assoc($result)){ ?>
                                <?php $c//=$c+1; ?>
                                <?php //echo $row['id']?>
                                <?php
    //}}}
//echo $s;
//echo $us;
//echo $c;
?> -->

<!-- <?php 
echo $us;

$sa="SELECT email FROM users WHERE username='$us'";
$r=mysqli_query($GLOBALS['cons'],$sa);

if(mysqli_num_rows($r)>0){
     if($r){
                              while($row=mysqli_fetch_assoc($r)){ ?>
                               
                                <?php echo $row['email']; ?>--?

                                <?php //echo $row['id']?> -->
                               <!--  <?php
    }}}?> --> 

<!-- ?> -->
<?php
global $oe;
//echo $us;
echo $oe;
?>

 </body>
 </html>