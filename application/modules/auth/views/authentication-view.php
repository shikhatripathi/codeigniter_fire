<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	var base_url = '<?php echo base_url(); ?>';
  </script>
  <style type="text/css">
    body{
      
      text-align: center;   
    }
  </style>
<div>
<h1>	This is Authentication view! </h1>
</div>
<form id="auth_form" >
		<input type="text" name="username" placeholder="username"><br>
		<input type="text" name="password" placeholder="password"> <br>
		<input id="btn_submit"  type="button" value="Login" name="">
</form>
<label id="msg"></label>

<script type="text/javascript" src="<?php echo base_url() ?>js/auth.js"></script>
