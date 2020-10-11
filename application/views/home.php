<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home-custom.css">
</head>
<body>
	<?php if($this->session->flashdata('gagal')) { ?>
  		<div class="alert alert-danger" role="alert">Password Salah</div>
  	<?php } ?>
	<div class="kotak_login">
		<?php echo form_open(base_url('home/login')); ?>
		<div class="form">
    		<form class="login-form">
		      <input type="password" placeholder="Password" id="passwd" name="passwd">
		      <button>Login</button>
		    </form>
		</div>
		<?php echo form_close(); ?>
	</div>
</body>
</html>