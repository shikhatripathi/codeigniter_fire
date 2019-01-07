
<!DOCTYPE html>
<html>
<head>
	<title>SignIn Form</title>

	<meta name="google-signin-client_id" content="1006866697646-vab4mv9glt5c5st94tfea4qub9coaied.apps.googleusercontent.com">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Acme|Exo|Lobster" rel="stylesheet">
 <script src="https://apis.google.com/js/platform.js" async defer></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="border :2px solid black;background-color:rgba(0,0,0,0.2);">

      <form  method="post" class="form-signin" action="<?php echo base_url();?>login/login_user">
        <h2 class="form-signin-heading" style="font-size:42px;color: #cc3300;">Please Login</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="user_email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="user_password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <div style="text-align: center;">
      	<h4>OR</h4>
  <hr>
  <div class="g-signin2" data-onsuccess="onSignIn">Signup<h3></h3></div>
     </div>
      </form>

    </div> <!-- /container -->
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>