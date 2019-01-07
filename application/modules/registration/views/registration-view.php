
<!DOCTYPE html>
<html>
<head>
	<title>SignIn Form</title>
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Anton|Arvo|Kosugi" rel="stylesheet">
 
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

      <form class="form-signin"  action="<?php echo base_url();?>registration/register_user"  method="post">
         <h1 class="form-signin-heading"> Register Here</h1>
      
         Full Name:
         <input type="text" id="inputEmail" class="form-control" name="user_name" placeholder="Enter Your Full Name" required autofocus>
      
         Mobile Number:
         <input type="number" id="inputPassword" class="form-control" name="user_mobile" placeholder="Enter Your mobile Number" required>
         <h3> Address</h3>
       
         <input type="text" id="inputPassword" class="form-control" name="user_address" placeholder="Enter your address" required>
         Email
         <input type="email" id="inputPassword" class="form-control" placeholder="Enter your email" name="user_email" required>
          Password
         <input type="password" id="inputPassword" class="form-control" placeholder="Enter your password" name="user_password" required>
        
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
           <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </div>
       
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets2/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>