<!DOCTYPE html>
<html lang="en">
<head>
<title>3D COPILOT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url('resources/');?>style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('resources/');?>w3new.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url('resources/');?>assets/css/elegant-icons.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/');?>assets/css/nouislider.min.css">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/');?>assets/css/main.css">

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

  <link href="<?php echo base_url('resources/');?>assets/css/bootstrap-responsive.css" rel="stylesheet">
  
  
  <link href="<?php echo base_url('resources/');?>assets/css/style.css" rel="stylesheet">
  
  
<style>
body {font: 14px "open-sans",sans-serif;
font-weight: 500;
width:100%;}
.mySlides {display: none}
</style>
</head>
<body>
  
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar  w3-card" style="background-color :#004d99;">
    <a href="<?php echo base_url('welcome/index');?>" class="w3-bar-item" style="padding: 0px;margin-left: 5px;"><img style="height:52px" src="<?php echo base_url('resources/');?>icons/logo.jpg"></a>
</div>
</div>

<div class="login-content" style="width:50%;">
      <a class="login-header" style="border-bottom:1px solid #999;color:#555;padding-bottom: 15px;">Reset Password</a>
      <div class="login-form">
        <form method="post" action="<?php echo base_url('welcome/resetpassword')?>" >

        <div class="form-group">
          <a style="color:#555;font-size: 15px;width:100%;">Password</a>
          <input type="Text" name="password" required>
        </div>
        <div class="form-group">
          <a style="color:#555;font-size: 15px;width:100%;">Confirm Password</a>
          <input type="password" name="cpassword" required>
        </div>
          <Button class="button login-but" type="submit">Reset</Button>
          <?php
          echo $this->session->flashdata("reseterror");
          ?>
        </form>
         
        
      </div>
     
    </div>
</body>
</html>