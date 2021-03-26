<!DOCTYPE html>
<html>
    <head>
        <title>Validation page</title>
        <link href="<?php echo base_url('resources/');?>style.css" rel="stylesheet">
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
              <a href="#" class="w3-bar-item" style="padding: 0px;margin-left: 125px;margin-top: 25px;"><img style="height:72px" src="<?php echo base_url('resources/');?>icons/logo.jpg"></a>
              <div  style="width:40%;margin-left: auto;margin-right: auto;margin-top: 15px;">
                <div class="row">
                    <div class="span3 features" style="width:30px;">
                        <a href="<?php echo site_url('welcome/billing');?>" class="icon-circled icon-200" style="background-color: rgb(22, 241, 70);color:#000;">1</a>
                        <h3 style="color:#fff; font-size: 14px;">Billing address</h3>
                    </div>
                    <div class="span3 features" style="width:100px">
                        <h3 style="color:#fff; font-size: 14px;">--------------------</h3>
                    </div>
                    <div class="span3 features" style="width:30px">
                        <a href="<?php echo site_url('welcome/payment');?>" class="icon-circled icon-200 " style="color:#000;background-color: rgb(22, 241, 70);">2</a>
                        <h3 style="color:#fff; font-size: 14px;">Payment</h3>
                    </div>
                    <div class="span3 features" style="width:100px;">
                        <h3 style="color:#fff; font-size: 14px;">--------------------</h3>
                    </div>
                    <div class="span3 features" style="width:30px">
                        <a class="icon-circled icon-200 icon-suitcase active" style="background-color: pink;color:#000;">3</a>
                        <h3 style="color:#fff; font-size: 14px;">Validation</h3>
                    </div>

                </div>
              </div>
            </div>
        </div>
        <div class="content" style="width:40%;height:450px;margin-top: 165px;margin-left: auto;margin-right: auto;margin-bottom:30px;">
            <div class="forum" style="width: 76%;margin-left: auto;margin-right: auto;border:1px solid rgb(194, 189, 189)">
                <h2 style="border-bottom-style: solid;border-color:  rgb(194, 189, 189);border-width:1px;width:100%;margin-left: 0px;padding-left: 30px;padding-bottom: 10px;">Validation</h2>
                <div class="row">
                    <p style="color:red;font-size: 18px;">Your Payment has Successfull</p>
                </div>
            
                <div class="row">
                    <Button class="button" onclick="window.location.href='login-animals.html'" style="padding:15px;margin-top: 15px;width:70%;margin-left: auto;margin-right: auto;margin-bottom: 20px;">Click here to Download</Button>
                </div>
                
                
           </div>
        </div>