<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style_1.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
                                                                                
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</head>
<body>
<form action="<?php echo base_url(); ?>index.php/Registration/register" method="post">
<table>
<tr><td>First Name</td><td><input type="text" name="sname"></td></tr>	
<tr><td>Last Name</td><td><input type="text" name="sage"></td></tr>	
<tr><td>DOB</td><td><input type="date" name="sroll"></td></tr>	
<tr><td>College Name</td><td><input type="text" name="sclass"></td></tr>	
<tr><td>Trade</td><td><input type="text" name="strade"></td></tr>	
<tr><td>Phone</td><td><input type="phone" name="sphone"></td></tr>	
<tr><td>Email</td><td><input type="email" name="semail"></td></tr>	
<tr><td>Address</td><td><input type="text" name="saddress"></td></tr>	



<tr><td><input type="submit" name=""></td></tr>
</table>	



</form>
</body>
</html>