<?php
session_start();
 if (!$_SESSION["Logged"]){
	
	 $_SESSION["message"] = " you need to log in to enter admin panal ";
	  header("Location:php.php");
 }
	
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="jquery/dist/jquery-1.11.1.js"></script>
<script src="js/bootstrap new.js"></script>
</head>

<body>
<div class="container">
  <!-- header begins here-->
  <div class="col-sm-12" style="text-align:center;"> <br/>
  <h1> 304 Card Game <br/>
  Admin View</h1>
    </div>
 <!-- header ends here-->  
 
 <!--buttons begins here-->
  <div class="col-sm-12">
  <div class="col-sm-3">
  <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dLabel">
 
</ul>
  </div>
  <div class="col-sm-6">
  <div class="jumbotron" >
  	<p>
    	<?php
	
  echo "Hello ".$_SESSION['user_name'];
  
  ?>
    
    </p>  
    <a href="#user"  data-toggle="modal" class="btn btn-info btn-lg" style="width:100%;">Select User</a> <br/>
    <br/>
    <!--dorpdown action-->
    
    <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    Action
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1"  data-toggle="modal" href="#delete">Delete User</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1"  data-toggle="modal" href="#reset">Reset User</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1"  data-toggle="modal" href="#block">Block User</a></li>
  </ul>
</div>
    <!--dropdown ends-->
   
    <a href="logout.php" class="btn-sm" style="width:100%;">Logout</a> <br/>
 
  </div>
  </div>
  <div class="col-sm-3">
  </div>
  </div>
  <!--buttons ends here-->
  <!--popup-->
  <div class="modal fade" id="user" role="dialog">
  <div class="modal-dialog">
        <div class="col-sm-12">
  <div class="jumbotron">
  
    <form role="form" action="selectuser.php" method="post">
      <div class="form-group" style="text-align:left; color:#2f4e84">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" >
      </div>
      <button type="submit" class="btn btn-default" value="submit" name="submit">Select</button>
    </form>
  </div>
   </div>
    </div>
</div>
  <!--popup end-->
  <!--Delete warning popup-->
  <div class="modal fade" id="delete" role="dialog">
  	<div class="modal-dialog">
  		<div class="col-sm-12">
 			 <div class="jumbotron">
  				<p>
                	<?php
					echo "Are you sure You want to delete ".$_SESSION["selecteduser"]." ? If yes, user will be delete permenently.";
					?>
				</p>
                <a href="deleteuser.php" class="btn btn-info btn-lg">Yes</a>
                <a href="adminui.php" class="btn btn-info btn-lg">No</a>
 			 </div>
   		</div>
    </div>
  </div>
  <!--popup end-->
  <!--Delete warning popup-->
  <div class="modal fade" id="reset" role="dialog">
  	<div class="modal-dialog">
  		<div class="col-sm-12">
 			 <div class="jumbotron">
  				<p>
                	<?php
					echo "Are you sure You want to reset ".$_SESSION["selecteduser"]." ?";
					?>
				</p>
                <a href="reset.php" class="btn btn-info btn-lg">Yes</a>
                <a href="adminui.php" class="btn btn-info btn-lg">No</a>
 			 </div>
   		</div>
    </div>
  </div>
  <!--popup end-->
  <!--Delete warning popup-->
  <div class="modal fade" id="block" role="dialog">
  	<div class="modal-dialog">
  		<div class="col-sm-12">
 			 <div class="jumbotron">
  				<p>
                	<?php
					echo "Are you sure You want to block ".$_SESSION["selecteduser"]." ?";
					?>
				</p>
                <a href="block.php" class="btn btn-info btn-lg">Yes</a>
                <a href="adminui.php" class="btn btn-info btn-lg">No</a>
 			 </div>
   		</div>
    </div>
  </div>
  <!--popup end-->
   
</div>

</body>
</html>