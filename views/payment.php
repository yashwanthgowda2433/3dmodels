<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
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
    @media (max-width:700px) and (min-width:300px){
        .visa{
            display:none;
        }
    }
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
                        <a href="<?php echo site_url('welcome/billing');?>" class="icon-circled icon-200 icon-suitcase active" style="background-color: rgb(24, 252, 100);color:#000;">✓</a>
                        <h3 style="color:#fff; font-size: 14px;">Billing address</h3>
                    </div>
                    <div class="span3 features" style="width:100px">
                        <h3 style="color:#fff; font-size: 14px;">--------------------</h3>
                    </div>
                    <div class="span3 features" style="width:30px">
                        <a href="<?php echo site_url('welcome/payment');?>" class="icon-circled icon-200 " style="background-color: rgb(24, 252, 100);color:#000;">2</a>
                        <h3 style="color:#fff; font-size: 14px;">Payment</h3>
                    </div>
                    <div class="span3 features" style="width:100px">
                        <h3 style="color:#fff; font-size: 14px;">--------------------</h3>
                    </div>
                    <div class="span3 features" style="width:30px">
                        <a href="<?php echo site_url('welcome/validation');?>" class="icon-circled icon-200 icon-suitcase active" style="color:#000;">3</a>
                        <h3 style="color:#fff; font-size: 14px;">Validation</h3>
                    </div>

                </div>
              </div>
            </div>
        </div>
        <div class="content" style="width:80%;height:auto;margin-top: 165px;margin-left:auto;margin-bottom:30px;margin-right: auto;">
            <div class="row">
            <div class="column" style="width: 50%;margin-left: auto;margin-right: auto;border:1px solid rgb(194, 189, 189)">
                <div class="row" style="border-bottom-style: solid;border-color:  rgb(194, 189, 189);border-width:1px;padding-left: 0px;margin-left: 0px;margin-bottom: 2px;">
                    <div class="column" style="margin-left: 0px;width:80%">
                        <h3 style="margin-left: 0px;color:#000;margin-left:20px ;">Billing Address</h3>
                    </div>
                    <div class="column" style="float:right;margin-top: 10px;width:10%">
                        <a href="<?php echo site_url('welcome/billing');?>" style="color:blue; font-size: 17px;">Edit</a>
                    </div>
                </div>
                <?php
                
                echo '<div class="row" style="margin-left: 0px;margin-bottom: 0px;">';
                    echo '<p style="color:#000;margin-left: 30px;">First-Name &nbsp; : &nbsp '.$billing_address->First_name.'</p>';
                    
                echo '</div>';
                echo '<div class="row" style="margin-left: 0px;margin-bottom: 0px;">';
                    echo '<p style="color:#000;margin-left: 30px;">Last-Name &nbsp; : &nbsp '.$billing_address->Last_name.'</p>';
                echo '</div>';
                echo '<div class="row" style="margin-left: 0px;margin-bottom: 0px;">';
                    echo '<p style="color:#000;margin-left:30px;">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp '.$billing_address->Address_one.'&nbsp;'.$billing_address->Address_two.'</p>';
                echo '</div>';
                echo '<div class="row" style="margin-left: 0px;margin-bottom: 0px;">';
                    echo '<p style="color:#000;margin-left: 30px;">Country &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: &nbsp '.$billing_address->Country.'</p>';
                echo '</div>';
                echo '<div class="row" style="margin-left: 0px;margin-bottom: 0px;">';
                    echo '<p style="color:#000;margin-left: 30px;">State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: &nbsp '.$billing_address->State.'</p>';
                echo '</div>';
                echo '<div class="row" style="margin-left: 0px;margin-bottom: 0px;">';
                    echo '<p style="color:#000;margin-left: 30px;">Zip/Postal Code &nbsp;: &nbsp; '.$billing_address->Zip_code.'</p>';
                echo '</div>';
                
                ?>
            </div>
            <div class="column" style="width:40%;margin-left: 40px;">
                
                <div class="cart1" style="width:80%;right:60px;float:right;height:auto;border:1px solid #fff;">
                    
                    <div class="payment-cart" style="width:100%; border:1px solid rgb(211,211,211);">
                    <h2 style="border-bottom-style: solid;border-color:rgb(201, 196, 196);border-width:1px;padding:10px">Total</h2>
                    <div class="row sub-total" style="width:80%;border-bottom-style: solid;border-color:rgb(201, 196, 196);border-width:2px">
                        <div class="column" style="margin-left: 10px;width:30%">
                            <h3 style="color:#000">SUB Total</h3>
                        </div>
                        <div class="column" style="float:right;width:30%;margin-top: 20px;">
                            Rs.<a style="color:#000"><span style="color:red">
                            <?php 
                            $count = 0;
                            $total=0;
                            foreach ($cart_items as $row) 
                            {
                                //echo json_encode($row);
                                $total += $row->Sale_count;
                            }
                            echo $total;
                            ?></span></a>
                        </div>
                    </div>
                    <?php
                    $tax=00;
                    $total += $tax;
                    ?>

                    <div class="row sub-total" style="width:80%;border-bottom-style: solid;border-color:rgb(201, 196, 196);border-width:2px">
                        <div class="column" style="margin-left: 10px;width:30%">
                            <h3 style="color:#000">Tax</h3>
                        </div>
                        <div class="column" style="float:right;width:30%;margin-top: 20px;">
                            Rs.<a style="color:#000"><span style="color:red"><?php echo $tax; ?></span></a>
                        </div>
                    </div>
                    <div class="row sub-total" style="width:80%;">
                        <div class="column" style="margin-left: 10px;width:30%">
                            <h3 style="color:#000">Total</h3>
                        </div>
                        <div class="column" style="float:right;width:30%;margin-top: 20px;">
                            Rs.<a style="color:#000"><span style="color:red"><?php echo $total; ?></span></a>
                        </div>
                        
                    </div>
                    <button class="button" onclick="Validation.html" style="margin-top: 15px;margin-left: auto;margin-right: auto;width:80%;font-size: 20px;">Pay Online</button>
                    <div class="payment-methods"style="height:10%;width:220px;display:flex;margin-top: 30px;margin-left: auto;margin-right:auto;margin-bottom:20px;">
                      <a href="#" style="padding:2px;border:1px solid #000;border-radius:0px 0px 0px 0px;color:#000">&nbsp;&nbsp;visa&nbsp;&nbsp;</a>
                      <a href="#" style="padding:2px;margin-left:10px;border:1px solid #000;border-radius:0px 0px 0px 0px;color:#000">&nbsp;&nbsp;visa&nbsp;&nbsp;</a>
                      <a href="#" style="padding:2px;margin-left:10px;border:1px solid #000;border-radius:0px 0px 0px 0px;color:#000">&nbsp;&nbsp;visa&nbsp;&nbsp;</a>
                      <a href="#" class="visa" style="padding:2px;margin-left:10px;border:1px solid #000;border-radius:0px 0px 0px 0px;color:#000">&nbsp;&nbsp;visa&nbsp;&nbsp;</a>
                    </div>
                  </div>
            </div>
        </div>
        
        
        <div class="content" style="width:100%;height:auto;margin-top: 65px;margin-left:10px;margin-bottom:30px;">
            
            <div class="column" style="width: 50%;margin-left: auto;margin-right: auto;border:1px solid rgb(194, 189, 189)">
                <div class="row" style="border-bottom-style: solid;border-color:  rgb(194, 189, 189);border-width:1px;padding-left: 0px;margin-left: 0px;margin-bottom: 2px;">
                    <div class="column" style="margin-left: 20px;width:80%">
                        <h3 style="margin-left: 0px;color:#000">Shopping Cart</h3>
                    </div>
                    <div class="column" style="float:right;margin-top: 10px;width:10%">
                        <a href="index.html" style="color:blue; font-size: 17px;">Edit</a>
                    </div>
                </div>
                <?php
                        foreach($cart_items as $row)
                        {
                       echo '<div class="row" style="width:100%">';
                
                          echo '<div class="column" style="width:1px;">';
                            echo '<div class="name">';
                        
                              echo '<img style="width:70px;height:40px;margin-top: 10px;" src='.base_url($row->Model_path).'>';
                        
                            echo '</div>';
                         echo '</div>';
                        echo '<div class="column" style="width:20%;">';
                            echo '<div class="name">';
                              echo '<p style="color:#000;font-size: 16px;font-weight: 700;">'.$row->Model_name.'</p>';
                            echo '</div>';
                        echo '</div>';
                        echo '<div class="column" style="width:20%;float:right;margin-right:90px">';
                           echo '<div class="name">';
                             echo '<p style="color:#ccc;font-size: 16px;font-weight: 500;">'.$row->Sale_count.'</p>';
                           echo '</div>';
                        echo '</div>';
                        echo '</div>';
                }
                ?>
                
            </div>
        </div>
            </div>
            
        </div>