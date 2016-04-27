<!DOCTYPE html>
<html>
<head>
  <title>Portal Login</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
</head>
<body>

<?php echo validation_errors(); ?>
   <?php echo form_open('admin/veritylogin'); ?>
<div class="login-page">
  <div class="form">
    <form class="login-form">
      <h1>Portal Login </h1> </br>
      <h1>SMP MUHAMMADIYAH 10 SURAKARTA</h1>
      <input type="text" id="username" name="username"  placeholder="username"/>
      <input type="password" id="password" name="password" placeholder="password"/>
      <button>login</button>
      
    </form>
  </div>
</div>
</body>
</html>