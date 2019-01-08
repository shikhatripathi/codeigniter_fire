<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	var base_url = '<?php echo base_url(); ?>';
  </script>
<div>
	This is auth view!
</div>
<form id="auth_form">
		<input type="text" name="username" placeholder="username">
		<input type="text" name="password" placeholder="password"> 
		<input id="btn_submit"  type="button" value="Login" name="">
</form>

<script type="text/javascript" src="<?php echo base_url() ?>js/auth.js"></script>
