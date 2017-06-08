<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<meta charset="utf-8">
</head>



<body>


<div class="container">
<!-- header begins here-->
  <div class="col-sm-12" style="text-align:center;"> <br/>
  <h1> 304 Card Game <br/>
  Admin login</h1>
    </div>
 <!-- header ends here-->  
    
     <!-- Login form begins here-->
     
  <div class="col-sm-12">
  <div class="col-sm-3">
  </div>
  <div class="col-sm-6">
  <div class="jumbotron">
 
    <form role="form" action="http://localhost/Droiderz304/adminloginauth.php" method="post">
      <div class="form-group" style="text-align:left; color:#2f4e84">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" >
      </div>
      <div class="form-group" style="text-align:left; color:#2f4e84">
        <label for="pwd" >Password:</label>
        
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
      </div>
      <button type="submit" class="btn btn-default" value="login" name="submit">Log In</button>
    </form>
  </div>
   </div>
   <div class="col-sm-3">
   </div>
   </div>
<!-- Login form ends here-->
</div>
  <p style=" position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">304 DroiderZ&#8482 | 2014</p>
  <!-- footer ends here-->
  
</div>


</body>
</html>