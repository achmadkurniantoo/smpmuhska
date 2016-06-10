<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif"  >
  <title>Portal Login</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
  <style type="text/css">
  .redd{
    color: red;

  }

  </style>
</head>
<body>


   <?php echo form_open('admin/veritylogin'); ?>
<div class="login-page">
  <div class="form">
    <form class="login-form">
      <h1>Portal Login </h1> </br>
      <h1>SMP MUHAMMADIYAH 10 SURAKARTA</h1>
      <div class="redd"><?php echo validation_errors(); ?></div>
      <input type="text" id="username" name="username"  placeholder="username"/>

      <input type="password" id="password" name="password" placeholder="password"/>
      <button>login</button>
      
    </form>
  </div>
</div>
</body>
</html>