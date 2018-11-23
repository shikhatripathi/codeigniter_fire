 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{background-attachment: fixed;background-image: url(../images/bg.jpg);background-size: cover;height: 4500px;font-family: 'Chakra Petch', sans-serif;}

body {color: orange}

	</style>
</head>
<body>
<?php $this->load->view('nav-view')?>
<?php echo modules::run($module_name); ?>
<?php $this->load->view('footer-view')?>

</body>
</html> 