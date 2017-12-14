<?php echo form_open("LoginController/cek_login"); ?> 

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/login/css/login.css') ?>">
</head>

<body>
  <div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
  </div>
  
    <script  src="<?php echo base_url('assets/login/js/login.js') ?>"></script>

</body>
</html>

<?php echo form_close(); ?>

