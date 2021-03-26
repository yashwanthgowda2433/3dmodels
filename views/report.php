<!DOCTYPE html>
<html lang="en">
<head>
<title>Report</title>
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
    <a href="#" class="w3-bar-item" style="padding: 0px;margin-left: 120px;"><img style="height:72px" src="<?php echo base_url('resources/');?>icons/logo.jpg"></a>
  </div>
</div>

<div class="content" style="margin-top: 90px;margin-left: 0px;">
    <div class="row" style="border-bottom-style: solid;border-width: 1px;border-color: lightgray;margin-left: 0px;">
        <p style="color:#999;font-size: 16px;padding:20px;padding-left:15px;">We’re always here to help. Feel free to ask your question below.</p>
    </div>
    <div class="row">
        <p style="color:#555;font-size: 32px;">Submit a Request</p>
    </div>

    <form method="post" action="<?php echo base_url('welcome/reporting_model')?>">
    <div class="row" style="margin-left: 120px;">
        <h5 style="color:#555;width:100%;font-size: 16px;">Your 3D COPILOT e-mail address</h5>
        <input type="email" name="emailaddress" id="name" style="border:1px solid lightgray;width:50%;float: left;">
    </div>
    <div class="row" style="margin-left: 120px;">
        <h5 style="color:#555;width:100%;font-size: 16px;">Request Type</h5>
        <input type="text" id="name" name="request_type"style="border:1px solid lightgray;width:50%;float: left;">
    </div>
    <div class="row" style="margin-left: 120px;">
        <h5 style="color:#555;width:100%;font-size: 16px;">Subject</h5>
        <input type="text" id="name" name="subject" style="border:1px solid lightgray;width:50%;float: left;">
    </div>
    <div class="row" style="margin-left: 120px;width:49%">
        <h5 style="color:#555;width:100%;font-size: 16px;">Description</h5>
        <textarea rows="10" cols="85" name="description" style="font-size: 16px;background-color: rgb(228, 228, 228);border:1px solid lightgray;" ></textarea>
        <a style="width: 100%;">Please enter the details of your request. A member of our support staff will respond as soon as possible</a>
    </div>
    <div class="row" style="margin-left: 120px;">
        <h5 style="color:#555;width:100%;font-size: 16px;">Attachments</h5>
        <input type="file" class="custom-file-input" name="file" style="color:blue;border:1px solid lightgray;width:50%;float: left;padding:10px">
    </div>
    <div class="row" style="margin-left: 120px;">
        <button type="submit" class="button" style="background-color: rgb(37, 176, 223);color: white;">Submit</button>
    </div>
    <div class="row" style="margin-left: 120px;">
    <?php
       echo $this->session->flashdata("reportsuccess");
        ?>
    </div>
</form>
</div>
<div class="w3-bottom" style="margin-left: 0px;">
    <div class="w3-bar  w3-card" style="margin-left: 0px;background-color :rgb(189, 189, 189);padding:6px;">
      <p href="#" class="w3-bar-item w3-button w3-padding-large" style=" font-size: 17px; color: #000;margin-top: 5px;">2020&nbsp; 3Dcopilot - All rights reserved</p>
      
    </div>
  </div>
</body>
</html>