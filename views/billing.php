<!DOCTYPE html>
<html>
    <head>
        <title>Billing</title>
        <link href="<?php echo base_url('resources/');?>style.css" rel="stylesheet">
        <!-- adds -->
<script data-ad-client="ca-pub-9183001561799680" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YY7W803LXQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YY7W803LXQ');
</script>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('resources/icons/tabicon.jpg');?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('resources/icons/tabicon.jpg');?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('resources/icons/tabicon.jpg');?>">
<link rel="shortcut icon" type="image/png" sizes="192x192" href="<?php echo base_url('resources/icons/tabicon.jpg');?>">
<link rel="mask-icon" href="<?php echo base_url('resources/icons/tabicon.jpg');?>" color="#5bbad5">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('resources/');?>assets/css/elegant-icons.css" type="text/css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="<?php echo base_url('resources/');?>w3new.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url('resources/');?>assets/css/elegant-icons.css" type="text/css">
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
        <div class="w3-top">
            <div class="w3-bar  w3-card" style="background-color :rgb(60, 95, 139);">
              <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-left" style="color:#fff;margin-top: 10px;" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
              <a href="<?php echo base_url('welcome/index');?>" class="w3-bar-item" style="padding: 0px;margin-left: 125px;margin-top: 25px;"><img style="height:72px" src="<?php echo base_url('resources/');?>icons/logos.png"></a>
              <div  style="width:40%;margin-left: auto;margin-right: auto;margin-top: 15px;">
                <div class="row" style="display:flex;">
                    <div class="span3 features" style="width:30px;">
                        <a href="<?php echo site_url('welcome/billing');?>" class="icon-circled icon-200 icon-suitcase active" style="background-color: rgb(24, 252, 100);color:#000;">1</a>
                        <h3 style="color:#fff; font-size: 14px;">Billing address</h3>
                    </div>
                    <div class="span3 features" style="width:100px">
                        <h3 style="color:#fff; font-size: 14px;">--------------------</h3>
                    </div>
                    <div class="span3 features" style="width:30px">
                        <a href="" class="icon-circled icon-200 " style="background-color: #fff;color:#000;">2</a>
                        <h3 style="color:#fff; font-size: 14px;">Payment</h3>
                    </div>
                    <div class="span3 features" style="width:100px">
                        <h3 style="color:#fff; font-size: 14px;">--------------------</h3>
                    </div>
                    <div class="span3 features" style="width:30px">
                        <a href="" class="icon-circled icon-200 icon-suitcase active" style="color:#000;">3</a>
                        <h3 style="color:#fff; font-size: 14px;">Validation</h3>
                    </div>

                </div>
              </div>
            </div>
        </div>
        
        <div class="content" style="width:60%;height:80%;margin-top: 165px;margin-left: auto;margin-right: auto;margin-bottom:30px;">
            <div class="forum" style="width: 76%;margin-left: auto;margin-right: auto;border:1px solid rgb(194, 189, 189)">
                <h2 style="border-bottom-style: solid;border-color:  rgb(194, 189, 189);margin-top:0px;border-width:1px;width:100%;margin-left: 0px;padding: 30px;">Billing Address</h2>
            <form method="POST" action="<?php echo base_url('welcome/billing_form')?> ">
                <div class="row">
                <div class="column fname" style="width:40%;margin-left: 20px;">
                  <h3 style="color:#000">FirstName</h3>
                   <input type="text" name="fname" required>
                </div>
                <div class="column lname" style="width:40%;margin-left: 20px;">
                    <h3 style="color:#000">LastName</h3>
                     <input type="text" name="lname" required>
                 </div>
                </div>
                <div class="row" style="width:80%;margin-left: 40px;">
                <h3 style="color:#000">Address Line 1</h3>
                <input type="text" name="add1" required>
                </div>
                <div class="row" style="width:80%;margin-left: 40px;">
                    <h3 style="color:#000">Address Line 2</h3>
                    <input type="text" name="add2" required>
                </div>
                <div class="row">
                    <div class="column fname" style="width:40%;margin-left: 20px;">
                      <h3 style="color:#000">Country</h3>
                       <input type="text" name="country" required>
                    </div>
                    <div class="column lname" style="width:40%;margin-left: 20px;">
                        <h3 style="color:#000">State/Provice/Region</h3>
                         <input type="text" name="state" required>
                     </div>
                </div>
                <div class="row">
                    <div class="column fname" style="width:40%;margin-left: 20px;">
                      <h3 style="color:#000">City</h3>
                       <input type="text" name="city" required>
                    </div>
                    <div class="column lname" style="width:40%;margin-left: 20px;">
                        <h3 style="color:#000">Zip/Postal Code</h3>
                         <input type="text" name="zip" required>
                     </div>
                </div>
                <a>
                  <label class="container" style="color:#000;margin-left: 40px;">Accept & Read
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </a>
                <a href="#"> <span style="color:blue"> Terms and conditions </span></a>
                <input type="submit" value="submit" class="button" style="margin-top: 15px;margin-left: auto;margin-right: auto;margin-bottom: 20px;">

                
            </form>
        </div>
        </div>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9183001561799680"
     data-ad-slot="2279486316"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

        