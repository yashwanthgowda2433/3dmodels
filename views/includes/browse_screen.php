<!DOCTYPE html>
<html lang="en">
<head>
<title>3Dcopilot</title>
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
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="icon" href="<?php echo base_url('resources/');?>icons/tabicon.jpg">


   <link rel="stylesheet" href="<?php echo base_url('resources/video/pannellum.css');?>" />
<script type="text/javascript" src="<?php echo base_url('resources/video/pannellum.js');?>"></script>

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

<style>
    .dropcon{background: steelblue;color:rgb(231, 230, 230);}

body {font: 14px "open-sans",sans-serif;
font-weight: 500;
width:100%;}
.mySlides {display: none}
.signup_pop-up{
  width:35%;height:98%;
}
.online-sign{
  width:30%;
  font-size: 20px;
}
.icons_width{
  width:15px;
}
.home_icon{
      padding:0px;
      margin-left:5px;
    }
@media (max-width:700px) and (min-width:300px){
  
  .home_icon{
      padding:0px;
      margin-left:-8px;
    }
  .signup_pop-up{
  width:95%;
  height:100%;
  overflow-y:scroll;

}
.upload-button1{
  display:none;
}
}
.dropdown-menu{
        min-width: 100%; /* Set width of the dropdown */
        background: linear-gradient(45deg,#1687ac,#41bde7);
        /* display: none; */
        position: relative;
        z-index: 999;
        left: 0;
        display:none;
    }
    .dropingdown-menus{
      cursor: auto;
    border: none;
    /* background-color: #fff; */
    display: none;
    position: absolute;
    min-width: 210px;
    margin-top: 0px;
    padding: 0;
    z-index: 1;
    /*  */
    right:18px;
    background-color: rgb(209, 204, 204);
    color: #000;
    padding-left:10px;
    padding-right:10px;
}
    }
    .dropdown{
      display:block;
      position:relative;
    }
    .dropingdown{
      display:block;
      /* position:relative; */
    }
    .extra_options{
      height: 29px;
    
    font-size: 18px;
    font-weight: 500;
    padding-left: 40px;
    }
@media (max-width:700px) and (min-width:300px){
  .upload-button1{
    display:none;
  }

  .dropingdown-menus{
      cursor: auto;
    border: none;
    background-color: #fff;
    display: none;
    position: absolute;
    width: 100%;
    margin-top: 0px;
    padding: 0;
    z-index: 1;
    /*  */
    right:1px;
    /* background-color: rgb(209, 204, 204); */
    color: #000;
    padding-left:10px;
    padding-right:10px;
    font-size:18px;
    font-weight:500;
  }

}

@media screen and (max-width:1100px){
    .responsive_search{
        width:200px;
    }
    .online-sign{
  width:30%;
  font-size: 10px;
}
}
.button_column{
  color: hsla(0,0%,100%,.75); 
 transition: color .25s ease;
  text-transform:uppercase;
  font-size: 12px;
    font-weight: 700;
    line-height: 17px;
}
.dropnew:hover{    
    color: steelblue!important;
}

.signup_button{
  margin-top:11px;
  color: hsla(0,0%,100%,.75);
    transition: color .25s ease;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
    text-align:center;
    padding:11px 14px;
}
.signup_button:hover{
  background:#3a3737!important;
  border-radius:5px;
}
.upload-button1{float:right;color:#999;background-color: transparent;border:2px solid #999;margin-top:11px;margin-right:10px;padding:10px 16px;font-weight:700px;text-decoration:none;border-radius:4px 4px 4px 4px;}
.upload-button1:hover{
  color:#fff!important;
  background-color: transparent!important;
  border:2px solid #fff!important;
    }
</style>
</head>
<body>
<!-- <script type="module"
    src="<?php echo base_url('resources/player/model-viewer.js');?>">
</script> -->

<!-- Loads <model-viewer> for old browsers like IE11: -->
<!-- <script nomodule
    src="<?php echo base_url('resources/player/model-viewer-legacy.js');?>">
</script> -->
<script type="module" src="<?php echo base_url('resources/uploadcss/model-viewer.min.js');?>"></script>
<script nomodule src="<?php echo base_url('resources/uploadcss/model-viewer-legacy.js');?>"></script>
<!-- Navbar -->
<div class="w3-top">

  <div class="w3-bar  w3-card" style="background :#000;height:57px;">
  
  <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-left toggle" href="javascript:void(0)" style="margin-top: 10px;" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars" id="x_mark"></i></a>
    <a href="<?php echo base_url('welcome/index');?>" class="w3-bar-item home_icon" style="padding:0px;"><img style="height:45px;margin-top:6px;" src="<?php echo base_url('resources/');?>icons/logos.png"></a>
    
    <div class="w3-dropdown-hover w3-hide-small droping">
        <button class="w3-padding-large w3-button button_column" title="3D Models" onclick="window.location.href='<?php echo base_url('welcome/ddd_models');?>'">3D Models <i class="fa fa-caret-down"></i></button>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4 dropcon" style="box-shadow: -11px 11px 11px 0 rgb(0 0 0 / 17%);z-index:1;">
          <a href="#" class="w3-bar-item w3-button"><i class="fas fa-medal icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Best selling</a>
          <a href="#" class="w3-bar-item w3-button"><i class="fas fa-photo-video icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Animated</a>
          <a href="#" class="w3-bar-item w3-button"><i class="fab fa-css3 icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;PBR</a>
          <a href="#" class="w3-bar-item w3-button"><i class="fas fa-low-vision icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Low poly</a>
          <a href="#" class="w3-bar-item w3-button"><i class="fas fa-snowplow icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;High poly</a>
          <a href="#" class="w3-bar-item w3-button"><i class="fas fa-print icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;3D Printable</a>
          <a href="#" class="w3-bar-item w3-button" style="padding-bottom:9px;"><i class="fas fa-photo-video icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;3D Scan</a>
          <!-- <h3 href="#" class="w3-bar-item " style="color:transparent;padding:20px;">a</h3> -->
          
          
        </div>
        <div class="w3-dropdown-content w3-bar-block w3-card-4" style="margin-left:210px;z-index:0;background-color: #fff;min-width: 210px;box-shadow: 0 0 11px 11px rgb(0 0 0 / 17%);"">
        <script src='<?php echo base_url('resources/icons_script.js');?>'></script>
          <a href="<?php echo site_url('welcome/animalsandpets');?>" value = "1" id="browse" class="w3-bar-item w3-button dropnew"><i class='fas fa-bug icons_width'></i>&nbsp;&nbsp;&nbsp;&nbsp;Animals & Pets</a>
          <a href="<?php echo site_url('welcome/architecture');?>" value = "2" id="browse" class="w3-bar-item w3-button dropnew"><i class="far fa-building icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Architecture</a>
          <a href="<?php echo site_url('welcome/artandabstract');?>" class="w3-bar-item w3-button dropnew" value="3"><i class="fab fa-500px icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Art & Abstract</a>
          <a href="<?php echo site_url('welcome/carsandvehicles');?>" class="w3-bar-item w3-button dropnew" value="4"><i class="fas fa-car-alt icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cars & vehicles</a>
          <a href="<?php echo site_url('welcome/charactersandcreatures');?>" class="w3-bar-item w3-button dropnew" value="5"><i class="fas fa-hiking icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Characters & Creatures</a>
          <a href="<?php echo site_url('welcome/culturalheritage');?>" class="w3-bar-item w3-button dropnew" value="6"><i class="fas fa-university icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cultural & Heritage&nbsp;</a>
          <a href="<?php echo site_url('welcome/electronicsandgadgets');?>" class="w3-bar-item w3-button dropnew" value="7"><i class="fas fa-calculator icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Electronics & Gadgets</a>
          <a href="<?php echo site_url('welcome/fashionandstyle');?>" class="w3-bar-item w3-button dropnew" value="8"><i class="fas fa-running icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Fashion & Style</a>
          <a href="<?php echo site_url('welcome/foodanddrink');?>" class="w3-bar-item w3-button dropnew" value="9" style="padding-bottom:9px;"><i class="fas fa-pizza-slice icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Food & Drink</a>
        </div>
        <div class="w3-dropdown-content w3-bar-block w3-card-4 " style="margin-left:420px;box-shadow: 11px 11px 11px 0 rgb(0 0 0 / 17%);">
          <a href="<?php echo site_url('welcome/furnitureandhome');?>" class="w3-bar-item w3-button dropnew" value="10"><i class="fas fa-bath icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Home Appliances</a>
          <a href="<?php echo site_url('welcome/newsandpolitics');?>" class="w3-bar-item w3-button dropnew" value="13"><i class="fab fa-algolia icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Jewellery</a>
          <a href="<?php echo site_url('welcome/people');?>" class="w3-bar-item w3-button dropnew" value="14"><i class="fas fa-briefcase-medical icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Medical</a>
          <a href="<?php echo site_url('welcome/music');?>" class="w3-bar-item w3-button dropnew" value="11"><i class="fas fa-music icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Musical Instruments</a>
          <a href="<?php echo site_url('welcome/natureandplants');?>" class="w3-bar-item w3-button dropnew" value="12"><i class="fas fa-cannabis icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nature & Plants</a>
          <a href="<?php echo site_url('welcome/placesandtravel');?>" class="w3-bar-item w3-button dropnew" value="15"><i class="fab fa-ussunnah icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Places & Travel</a>
          <a href="<?php echo site_url('welcome/scienceandtechnology');?>" class="w3-bar-item w3-button dropnew" value="16"><i class="fab fa-android icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Science & Technology</a>
          <a href="<?php echo site_url('welcome/sportsandfitness');?>" class="w3-bar-item w3-button dropnew" value="17"><i class="fas fa-baseball-ball icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sports & Fitness</a>
          <a href="<?php echo site_url('welcome/weaponsandmilitary');?>" class="w3-bar-item w3-button dropnew" value="18"  style="padding-bottom:9px;"><i class="icons_width fas fa-fire-extinguisher"></i>&nbsp;&nbsp;&nbsp;&nbsp;Weapons & Military</a>
        </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small droping">
        <button class="w3-padding-large w3-button button_column" title="Vectors" onclick="window.location.href='<?php echo base_url('welcome/vector_models');?>'">Vectors <i class="fa fa-caret-down"></i></button>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4 dropcon" style="box-shadow: -11px 11px 11px 0 rgb(0 0 0 / 17%);z-index:1;">
        <a href="#" class="w3-bar-item w3-button"><i class="fas fa-medal icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Popular</a>
          <a href="#" class="w3-bar-item w3-button" style="padding-bottom:9px;"><i class="far fa-eye icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Viewed</a>
          <!-- <h3 href="#" class="w3-bar-item " style="color:transparent;padding-bottom:408px;">a</h3> -->
          
        </div>
        <div class="w3-dropdown-content w3-bar-block w3-card-4" style="z-index:0;margin-left:210px;background-color: #fff;min-width: 210px;box-shadow: 0 0 11px 11px rgb(0 0 0 / 17%);">
        <a href="<?php echo site_url('welcome/v_advertisement');?>" class="w3-bar-item w3-button dropnew"><i class='fas fa-ad icons_width'></i>&nbsp;&nbsp;&nbsp;&nbsp;Advertisement Designs</a>
          <a href="<?php echo site_url('welcome/v_animals');?>" class="w3-bar-item w3-button dropnew"><i class='fas fa-bug icons_width'></i>&nbsp;&nbsp;&nbsp;&nbsp;Animals & Pets</a>
          <a href="<?php echo site_url('welcome/v_background');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-object-group icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Background</a>
          <a href="<?php echo site_url('welcome/v_banners');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-behance-square icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Banners</a>
          <a href="<?php echo site_url('welcome/v_birthday');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-birthday-cake icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Birthday</a>
          <a href="<?php echo site_url('welcome/v_brouchers');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-search-plus icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Brochures</a>
          <a href="<?php echo site_url('welcome/v_business');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-business-time icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Business</a>
          <a href="<?php echo site_url('welcome/v_business_cards');?>" class="w3-bar-item w3-button dropnew"><i class="far fa-address-card icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Business Cards</a>
          <a href="<?php echo site_url('welcome/v_buttons');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-buromobelexperte icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Buttons&nbsp;</a>
          <a href="<?php echo site_url('welcome/v_calender');?>" class="w3-bar-item w3-button dropnew"><i class="icons_width far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Calender</a>
          <a href="<?php echo site_url('welcome/v_cartoons');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-baby icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cartoon</a>
          <a href="<?php echo site_url('welcome/v_character_design');?>" class="w3-bar-item w3-button dropnew"><i class="material-icons icons_width" style="font-size:14px;font-weight:bold;">sort_by_alpha</i>&nbsp;&nbsp;&nbsp;&nbsp;Character Design</a>
          <a href="<?php echo site_url('welcome/v_concept_art');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-artstation icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Concept art</a>
          <a href="<?php echo site_url('welcome/v_country');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-flag-usa icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Country</a>
          <a href="<?php echo site_url('welcome/v_education');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-award icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Education</a>
        <a href="<?php echo site_url('welcome/v_gif');?>" class="w3-bar-item w3-button dropnew" style="padding-bottom:9px;"><i class="fas fa-calculator icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Electronics & Gadgets</a>

       
        </div>
        <div class="w3-dropdown-content w3-bar-block w3-card-4 " style="margin-left:420px;box-shadow: 11px 11px 11px 0 rgb(0 0 0 / 17%);min-width: 200px;">
        <a href="<?php echo site_url('welcome/v_ornaments');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-opencart icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Fashion & Jewellery</a>
        <a href="<?php echo site_url('welcome/v_flyers');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-fly icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Flyers</a>
        <a href="<?php echo site_url('welcome/v_food');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-pizza-slice icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Food</a>
        <a href="<?php echo site_url('welcome/v_christmas');?>" class="w3-bar-item w3-button dropnew"><i class="far fa-object-group icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Frames</a>
        <a href="<?php echo site_url('welcome/v_hallowen');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-pastafarianism icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Halloween</a>
        <a href="<?php echo site_url('welcome/v_health');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-biking icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Health</a>
        <a href="<?php echo site_url('welcome/v_human');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-snowman icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Human</a>
        <a href="<?php echo site_url('welcome/v_icons');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-icons icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Icons</a>
        <a href="<?php echo site_url('welcome/v_illustrations');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-accessible-icon icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Illustrations</a>
        <a href="<?php echo site_url('welcome/v_letterheads');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-align-center icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Letter Heads</a>
        <a href="<?php echo site_url('welcome/v_logo_templates');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-blog icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logo Templates</a>
        <a href="<?php echo site_url('welcome/v_map');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-map-marker-alt icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Map</a>
        <a href="<?php echo site_url('welcome/v_menu_designs');?>" class="w3-bar-item w3-button dropnew"><i class="material-icons icons_width" style="font-size:14px;">menu</i>&nbsp;&nbsp;&nbsp;&nbsp;Menu Designs</a>
        <a href="<?php echo site_url('welcome/v_music');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-music icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Music Instruments</a>
        <a href="<?php echo site_url('welcome/v_name');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-address-card icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Name/ID Cards</a>
        <a href="<?php echo site_url('welcome/v_nature');?>" class="w3-bar-item w3-button dropnew" style="padding-bottom:9px;"><i class="fas fa-cloud-sun-rain icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nature</a>
       
        </div>
        <div class="w3-dropdown-content w3-bar-block w3-card-4 " style="margin-left:620px;box-shadow: 11px 11px 11px 0 rgb(0 0 0 / 17%);">
        <a href="<?php echo site_url('welcome/v_packaging');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-alipay icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Packaging Designs</a>
        <a href="<?php echo site_url('welcome/v_posters');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-image icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Posters</a>
        <a href="<?php echo site_url('welcome/v_silhousettes');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-skiing icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Silhousettes</a>
        <a href="<?php echo site_url('welcome/v_social');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-whatsapp icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Social Media Ads</a>
        <a href="<?php echo site_url('welcome/v_sports');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-baseball-ball icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sports</a>
        <a href="<?php echo site_url('welcome/v_stickers');?>" class="w3-bar-item w3-button dropnew"><i class="material-icons icons_width" style="font-size:13px;">whatshot</i>&nbsp;&nbsp;&nbsp;&nbsp;Stickers</a>
        <a href="<?php echo site_url('welcome/v_summer');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-cloud-sun icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Summer</a>
        <a href="<?php echo site_url('welcome/v_textures');?>" class="w3-bar-item w3-button dropnew"><i class="icons_width fas fa-envelope-open-text"></i>&nbsp;&nbsp;&nbsp;&nbsp;Textures</a>
        <a href="<?php echo site_url('welcome/v_technology');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-android icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Technology</a>
        <a href="<?php echo site_url('welcome/v_transport');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-ambulance icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Transport</a>
        <a href="<?php echo site_url('welcome/v_travel');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-bus icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Travel</a>
        <a href="<?php echo site_url('welcome/v_ribbons');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-ribbon icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;UI wireframe</a>
        <a href="<?php echo site_url('welcome/v_valentine');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-hand-holding-heart icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Valentine</a>
        <a href="<?php echo site_url('welcome/v_water');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-water icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Water</a>
        <a href="<?php echo site_url('welcome/v_wedding');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-heart icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Wedding</a>
        <a href="<?php echo site_url('welcome/v_yard');?>" class="w3-bar-item w3-button dropnew" style="padding-bottom:10px;"><i class="material-icons icons_width" style="font-size:13px;">directions_boat</i>&nbsp;&nbsp;&nbsp;&nbsp;Yard/Billboard Designs</a>



       
        </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small droping">
        <button class="w3-padding-large w3-button button_column" title="Photos" onclick="window.location.href='<?php echo base_url('welcome/photo_models');?>'">Photos <i class="fa fa-caret-down"></i></button>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4 dropcon" style="box-shadow: -11px 11px 11px 0 rgb(0 0 0 / 17%);z-index:1;">
          <a href="#" class="w3-bar-item w3-button"><i class="fas fa-medal icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Popular</a>
          <a href="#" class="w3-bar-item w3-button" style="padding-bottom:9px;"><i class="far fa-eye icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Viewed</a>
          <!-- <h3 href="#" class="w3-bar-item " style="color:transparent;padding-bottom:191.5px;">a</h3> -->
          
        </div>
        <div class="w3-dropdown-content w3-bar-block w3-card-4" style="z-index:0;margin-left:210px;background-color: #fff;min-width: 170px;box-shadow: 0 0 11px 11px rgb(0 0 0 / 17%);">
          <a href="<?php echo site_url('welcome/p_animals');?>" class="w3-bar-item w3-button dropnew"><i class='fas fa-bug icons_width'></i>&nbsp;&nbsp;&nbsp;&nbsp;Animals & Pets</a>
          <a href="<?php echo site_url('welcome/p_architecture');?>" class="w3-bar-item w3-button dropnew"><i class="far fa-building icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Architecture</a>
          <a href="<?php echo site_url('welcome/p_baby');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-object-group icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Background</a>
          <a href="<?php echo site_url('welcome/p_business');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-business-time icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Business</a>
          <a href="<?php echo site_url('welcome/p_communication');?>" class="w3-bar-item w3-button dropnew"><i class="far fa-newspaper icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Communication</a>
          <a href="<?php echo site_url('welcome/p_dance');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-running icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dance</a>
          <a href="<?php echo site_url('welcome/p_education');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-award icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Education</a>
          <a href="<?php echo site_url('welcome/p_fashion');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-opencart icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Fashion</a>
          <a href="<?php echo site_url('welcome/p_flower');?>" class="w3-bar-item w3-button dropnew" style="padding-bottom:9px;"><i class="fas fa-cannabis icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Flower</a>
         
        </div>
        <div class="w3-dropdown-content w3-bar-block w3-card-4 " style="margin-left:380px;min-width: 150px;box-shadow: 11px 11px 11px 0 rgb(0 0 0 / 17%);">
        <a href="<?php echo site_url('welcome/p_food');?>" class="w3-bar-item w3-button dropnew"><i class="icons_width fas fa-pizza-slice"></i>&nbsp;&nbsp;&nbsp;&nbsp;Food</a>
           <a href="<?php echo site_url('welcome/p_gifts');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-gift icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Gifts</a>
          <a href="<?php echo site_url('welcome/p_health');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-medkit icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Health</a>
          <a href="<?php echo site_url('welcome/p_lifestyle');?>" class="w3-bar-item w3-button dropnew"><i class="far fa-life-ring icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;LifeStyle</a>
        <!-- <a href="<?php echo site_url('welcome/p_liquid');?>" class="w3-bar-item w3-button dropnew"><i class="far fa-map icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Liquid</a> -->
        <a href="<?php echo site_url('welcome/p_love');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-heartbeat icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Love</a>
          <a href="<?php echo site_url('welcome/p_music');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-music icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Music</a>
          <a href="<?php echo site_url('welcome/p_nature');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-cloud-sun-rain icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nature</a>
          <a href="<?php echo site_url('welcome/p_party');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-glass-cheers icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Party</a>
          <a href="<?php echo site_url('welcome/p_realestate');?>" class="w3-bar-item w3-button dropnew" style="padding-bottom:9px;"><i class="icons_width fas fa-laptop-house"></i>&nbsp;&nbsp;&nbsp;&nbsp;Real Estate</a>
         
        </div>
        <div class="w3-dropdown-content w3-bar-block w3-card-4 " style="margin-left:530px;box-shadow: 11px 11px 11px 0 rgb(0 0 0 / 17%);">
         <a href="<?php echo site_url('welcome/p_sales');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-book icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sales</a>
          <a href="<?php echo site_url('welcome/p_seasons');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-sun icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Seasons</a>
          <a href="<?php echo site_url('welcome/p_sky');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-skyatlas icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sky</a>
          <a href="<?php echo site_url('welcome/p_sports');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-skating icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sports & Fitness</a>
          <a href="<?php echo site_url('welcome/p_technology');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-android icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Technology</a>
          <a href="<?php echo site_url('welcome/p_textures');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-envelope-open-text icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Textures</a>
          <a href="<?php echo site_url('welcome/p_travel');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-bus icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Travel</a>
          <a href="<?php echo site_url('welcome/p_water');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-water icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Water</a>
          <a href="<?php echo site_url('welcome/p_wedding');?>" class="w3-bar-item w3-button dropnew" style="padding-bottom:9px;"><i class="fas fa-heart icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Wedding</a>
          
        </div>
        
      </div>
      <div class="w3-dropdown-hover w3-hide-small droping">
        <button class="w3-padding-large w3-button button_column" title="Video Templates" onclick="window.location.href='<?php echo base_url('welcome/videotemplates_models');?>'">Video Templates <i class="fa fa-caret-down"></i></button>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4 dropcon" style="box-shadow: -11px 11px 11px 0 rgb(0 0 0 / 17%);z-index:1;">
          <a href="#" class="w3-bar-item w3-button"><i class="fas fa-medal icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Popular</a>
          <a href="#" class="w3-bar-item w3-button" style="padding-bottom:9px;"><i class="far fa-eye icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Viewed</a>
          <!-- <a href="#" class="w3-bar-item "></a>
          <a href="#" class="w3-bar-item "></a>
          <a href="#" class="w3-bar-item " style="padding-bottom:213.5px;"></a> -->
          
        
         
          
          
        </div>
        <div class="w3-dropdown-content w3-bar-block w3-card-4" style="z-index:0;margin-left:210px;background-color: #fff;box-shadow: 0 0 11px 11px rgb(0 0 0 / 17%);">
        <a href="<?php echo site_url('welcome/vt_broadcast');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-blender-phone icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Broadcast Packages&nbsp;&nbsp;</a>
        <a href="<?php echo site_url('welcome/vt_element3d');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-photo-video icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Element 3D</a>
        <a href="<?php echo site_url('welcome/vt_elements');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-mendeley icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Elements</a>
        <a href="<?php echo site_url('welcome/w_animals');?>" class="w3-bar-item w3-button dropnew"><i class='fa fa-photo icons_width'></i>&nbsp;&nbsp;&nbsp;&nbsp;Green Screen Footages</a>
        <a href="<?php echo site_url('welcome/vt_infographics');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-digital-tachograph icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Infographics&nbsp;</a>
        <a href="<?php echo site_url('welcome/vt_logo_strings');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-blog icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logo Animations</a>
        <a href="<?php echo site_url('welcome/vt_openers');?>" class="w3-bar-item w3-button dropnew"><i class="fab fa-periscope icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Openers</a>
        <a href="<?php echo site_url('welcome/vt_productpromo');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-paragraph icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Product Promo</a>
        <a href="<?php echo site_url('welcome/vt_titles');?>" class="w3-bar-item w3-button dropnew"><i class="fas fa-file-prescription icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Titles</a>
        <a href="<?php echo site_url('welcome/vt_video_displays');?>" class="w3-bar-item w3-button dropnew" style="padding-bottom:9px;"><i class="fas fa-tablet icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Video Displays</a>
         
        </div>
      </div>
      
      <div class="w3-dropdown-hover w3-hide-small" style="margin-top: 10px;">
        <button class="w3-padding-large w3-button button_column" onclick="window.location.href='<?php echo base_url('welcome/assets_models');?>'" title="360° Assets">360° Assets <i class="fa fa-caret-down"></i></button>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4" style="box-shadow: 0 0 11px 11px rgb(0 0 0 / 17%);">
        <a href="<?php echo site_url('welcome/assets_photos');?>" class="w3-bar-item w3-button dropnew"><i class="icons_width material-icons" style="font-size:14px;font-weight:600;">rotate_90_degrees_ccw</i>&nbsp;&nbsp;&nbsp;&nbsp;360° Photos</a>

        <a href="<?php echo site_url('welcome/assets_videos');?>" class="w3-bar-item w3-button dropnew" style="padding-bottom:9px;"><i class="icons_width material-icons" style="font-size:14px;font-weight:600;">rotate_90_degrees_ccw</i>&nbsp;&nbsp;&nbsp;&nbsp;360° Videos</a>

        </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small" style="margin-top: 10px;">
        <button class="w3-padding-large w3-button button_column" onclick="window.location.href='<?php echo base_url('welcome/forbusiness');?>'" title="For Business">For Business <i class="fa fa-caret-down"></i></button>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4" style="box-shadow: 0 0 11px 11px rgb(0 0 0 / 17%);">
        <a href="#popuprequestform" class="w3-bar-item w3-button dropnew for-business">Request a Custom Assets</a>
          <a href="<?php echo base_url('welcome/ddd_services');?>" class="w3-bar-item w3-button dropnew for-business">3D Services</a>
          <a href="<?php echo base_url('welcome/graphic_design_services');?>" class="w3-bar-item w3-button dropnew for-business">Design Services</a>
          <a href="<?php echo base_url('welcome/video_services');?>" class="w3-bar-item w3-button dropnew for-business">Video Services</a>
          <a href="<?php echo base_url('welcome/vfx');?>" class="w3-bar-item w3-button dropnew for-business" style="padding-bottom:9px;">Visual Effects(VFX)</a>
    
        </div>
      </div>






   
      <a href="#" class="upload-button1" style="text-transform:uppercase;font-size:12px;font-weight:600;"></i>&nbsp;Become a Contributer</a>
      <a href="#popuplogin" class="w3-dropdown-hover signup_button" style="margin-right:10px;float:right;min-height:35px;color:#fff;"> Login</a>
     <a style="color:#fff;font-size:14px;float:right;margin-top:19px;margin-right:5px;">|</a>
    <a href="#popupsignup" class="w3-dropdown-hover signup_button" style="margin-right:5px;float:right;min-height:35px;color:#fff;">Sign up</a>

    <div class="cart1 cart-fixed">
      <?php if($cart_details == 0) 
      {
        echo '<span class="icon-circled icon-32" style="background-color:transparent;color:rgb(255, 249, 249);float:right;display:none;"></span>';
      }
      else{
        echo '<span class="icon-circled icon-32" style="background-color: rgb(243, 67, 67);color:rgb(255, 249, 249);float:right">';
             echo $cart_details; 
         echo '</span>';
      }
           ?>
          <div class="popupc">   
          <h4 class="shop-cart" style="border:none;">Shopping Cart</h4>
          <?php 
          if($cart_details == 0)
          {
            echo '<div class="row checkout" id="addtocart" style="margin-top:10px;margin-left:0px;">';
            echo '<a style="color: #666;">You have <span style="color: #41a48f;">'.$cart_details.'</span> items in your shopping cart</a>';

            echo '<p class="u-text-center" style="margin: 90px 0;text-align: center !important;opacity: 0.49;"><i class="fas fa-shopping-cart" style="display: block;
            margin: 0 auto 30px auto;color: #d5d5d5;font-size:50px;"></i>Your shopping cart is empty.</p>';

            echo '</div>'; 
          }
          else
          {
            $count = 0;
            $total=0;
            echo '<div class="row checkout" id="addtocart" style="margin:0px;margin-top:10px;margin-left:0px;max-height:400px;">';  
               echo '<a style="color: #666;">You have <span style="color: #41a48f;">'.$cart_details.'</span> items in your shopping cart</a>';
                foreach($cart_items as $row)
                {

                  $total += $row->Sale_count;


                  echo '<div class="row" style="width:100%;padding-top:15px;padding-bottom:15px;margin:0px;margin-bottom:0px;display:flex;float:left;border-bottom:2px solid #ddd;">';
				          echo '<div class="column" onclick="show_model_popup('.$row->No_of_models.')" style="width:20%">';
				            echo '<img style="width:100%;" src='.base_url($row->Model_path).'>';
				          echo '</div>';
				          echo '<div class="column" onclick="show_model_popup('.$row->No_of_models.')" style="margin-left:15px;font-size: 14px;font-weight: 600;height: max-content;margin-top: auto;margin-bottom: auto;flex:1;">';
				            echo '<a style="color:#666;">'.$row->Model_name.'</a>';
				          echo '</div>';
				          echo '<div class="column" style="width:max-content;height: max-content;margin-top: auto;font-size: 14px;font-weight: 600;margin-bottom: auto;">';
				            echo '<a style="color: #41a48f;">$'.$row->Sale_count.'</a>';
				          echo '</div>';
                  echo '<div class="column" onclick="delete_cart('.$row->Cart_id.')" style="width:max-content;margin-left:10px;height: max-content;margin-top: auto;margin-bottom: auto;">
                  <img src='.base_url('resources/close.png').' style="width:14px;margin-top:2px;">';
				
                  echo '</div>';
                  echo '</div>';
                }

               
               echo '</div>';
              echo '<div class="row" style="display:flex;width:100%;padding:0px;margin-left:0px;margin-bottom:10px;margin-top:15px;float:left;">';
				          echo '<div class="column" style="flex:1;color:#444;font-size:20px;"><p style="color:transparent;margin:0px;">Total</p>';
				             
				          echo '</div>';
				          echo '<div class="column" style="width:max-content;">';
				            echo '<a style="color:#888;font-size:16px;font-weight:600;">Total</a>';
                  echo '</div>';
                  echo '<div class="column" style="width:max-content;margin-left:10px;">';
				            echo '<a style="color:#888;font-size:16px;font-weight:600;">:</a>';
				          echo '</div>';
				          echo '<div class="column" style="width:max-content;margin-left:10px;margin-right:10px;">';
				            echo '<a style="color:#e54040;font-size:16px;font-weight:600;">$'.$total.'</a>';
				          echo '</div>';
				         
                  echo '</div>';

                  echo '<div class="row" style="display:flex;width:100%;padding:0px;margin-left:0px;margin-bottom:10px;float:left;">';
				          echo '<div class="column" style="flex:1;color:#444;font-size:20px;"><p style="color:transparent;margin:0px;">Total</p>';
				             
				          echo '</div>';
				          echo '<div class="column" style="width:max-content;">';
				            echo '<a style="color:#888;font-size:16px;font-weight:600;">Final price</a>';
                  echo '</div>';
                  echo '<div class="column" style="width:max-content;margin-left:10px;">';
				            echo '<a style="color:#888;font-size:16px;font-weight:600;">:</a>';
				          echo '</div>';
				          echo '<div class="column" style="width:max-content;margin-left:10px;margin-right:10px;">';
				            echo '<a style="color:#e54040;font-size:16px;font-weight:600;">$'.$total.'</a>';
				          echo '</div>';
				         
                  echo '</div>';

              
              

              echo '<div class="row" style="margin-left:0px;">';  
              echo '<span>';  
                  echo '<a class="button1 btn-primary btn-large" style="width:100%;" href='.site_url('welcome/billing').'>Proceed to CheckOut</a>';  
              echo '</span>';  
                
              echo '</div>';  
              // echo '</div>'; 
          }
          ?>
        </div>  
    </div>  
     <!-- <a href="#" style="float:right;padding:20px;"><i class="fa fa-search" Style="color:#fff"></i></a> -->
     <!-- <div class="search-column1" onclick="mysearch()" style="width:26%;font-size:14px;height:auto;float:right;overflow: hidden;">
     <form id="header_search">
     <input type="search" id="input_header_search" class="responsive_search" placeholder="Search" style="width:300px;padding:0pxfont-size:13px;height:10px;border:1px solid rgb(199, 199, 199);border-radius:4px 4px 4px 4px;-webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;">
    </form>
     </div>  -->
  </div>
  
  
  </div>
<script>
function userProfile(){
  window.location='<?php echo base_url('welcome/user_profile');?>';
}
</script>

<script>
          function delete_cart(cart_id)
          {
            //alert(cart_id);
            $.post("<?php echo base_url('index.php/welcome/delete')?>",
            {cart_id:cart_id}, function(data){
              $(".cart-fixed").html(data);
            });
          }

        </script>


     <!-- <a href="#" style="float:right;padding:20px;"><i class="fa fa-search" Style="color:#fff"></i></a> -->
  
  
  </div>
</div>

<!-- double click -->
<script>
function dddModels() {
    window.location='<?php echo base_url('welcome/ddd_models');?>';
}
function vectorModels(){
  window.location='<?php echo base_url('welcome/vector_models');?>';

}
function photoModels(){
  window.location='<?php echo base_url('welcome/Photo_models');?>';

}
function videotemplatesModels(){
  window.location='<?php echo base_url('welcome/videotemplates_models');?>';

}
function forBusiness()
{
  window.location='<?php echo base_url('welcome/forbusiness');?>';
}
</script>

<script>
    $(document).ready(function(){
        // Show hide popover
        $(".dropingdown").click(function(){
            $(this).find(".dropingdown-menus").slideToggle("fast");
        });
    });
    $(document).on("click", function(event){
        var $trigger = $(".dropingdown");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".dropingdown-menus").slideUp("fast");
        }            
    });
</script>

<script>
    $(document).ready(function(){
        // Show hide popover
        $(".dropdown").click(function(){
            $(this).find(".dropdown-menu").slideToggle("fast");
        });
    });
    $(document).on("click", function(event){
        var $trigger = $(".dropdown");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".dropdown-menu").slideUp("fast");
        }            
    });
</script>


<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-top nav-top" style="margin-top:57px;height:91%;overflow-y:scroll;background-color:steelblue;">
  <div class="dropdown" style="width:100%;">
        <button class="w3-padding-large w3-button button_column" ondblclick="dddModels()" title="3D Models" style="background-color:transparent;margin:0px;text-align:left;width:100.5%;">
        <a href="<?php echo base_url('welcome/ddd_models');?>" style="font-size:16px;" class="button_column">3D Models </a><i class="fa fa-caret-down" style="float:right;font-size:18px;"></i></button>     
    
    <div class="dropdown-menu w3-bar-block w3-card-4 dropcon" style="backrground-color:#fff;">
       <div style="width:100%;background: steelblue;">
          <a href="#" class="w3-button extra_options" style="display:flex;"><i class="fas fa-medal icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Best selling</a>
          <a href="#" class="w3-button extra_options" style="display:flex;"><i class="fas fa-photo-video icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Animated</a>
          <a href="#" class="w3-button extra_options" style="display:flex;"><i class="fab fa-css3 icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;PBR</a>
          <a href="#" class="w3-button extra_options" style="display:flex;"><i class="fas fa-low-vision icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Low poly</a>
          <a href="#" class="w3-button extra_options" style="display:flex;"><i class="fas fa-snowplow icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;High poly</a>
          <a href="#" class="w3-button extra_options" style="display:flex;"><i class="fas fa-print icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;3D&nbsp;Printable</a>
          <a href="#" class="w3-button extra_options" style="display:flex;padding-bottom:30px;"><i class="fas fa-photo-video icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;3D&nbsp;Scan</a>       
        </div>
        <div style="width:100%;background:#fff;">
        <a href="<?php echo site_url('welcome/animalsandpets');?>" class="w3-button dropnew extra_options"><i class='fas fa-bug icons_width'></i>&nbsp;&nbsp;&nbsp;&nbsp;Animals & Pets</a>
          <a href="<?php echo site_url('welcome/architecture');?>" class="w3-button dropnew extra_options"><i class="far fa-building icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Architecture</a>
          <a href="<?php echo site_url('welcome/artandabstract');?>" class="w3-button dropnew extra_options" value="3"><i class="fab fa-500px icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Art & Abstract</a>
          <a href="<?php echo site_url('welcome/carsandvehicles');?>" class="w3-button dropnew extra_options" value="4"><i class="fas fa-car-alt icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cars & vehicles</a>
          <a href="<?php echo site_url('welcome/charactersandcreatures');?>" class="w3-button dropnew extra_options" value="5"><i class="fas fa-hiking icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Characters & Creatures</a>
          <a href="<?php echo site_url('welcome/culturalheritage');?>" class="w3-button dropnew extra_options" value="6"><i class="fas fa-university icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cultural & Heritage&nbsp;</a>
          <a href="<?php echo site_url('welcome/electronicsandgadgets');?>" class="w3-button dropnew extra_options" value="7"><i class="fas fa-calculator icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Electronics & Gadgets</a>
          <a href="<?php echo site_url('welcome/fashionandstyle');?>" class="w3-button dropnew extra_options" value="8"><i class="fas fa-running icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Fashion & Style</a>
          <a href="<?php echo site_url('welcome/foodanddrink');?>" class="w3-button dropnew extra_options" value="9" style="padding-bottom:9px;"><i class="icons_width fas fa-pizza-slice"></i>&nbsp;&nbsp;&nbsp;&nbsp;Food & Drink</a>
       </div>
       <div style="width:100%;background:#fff;">
       <a href="<?php echo site_url('welcome/furnitureandhome');?>" class="w3-button dropnew extra_options" value="10"><i class="fas fa-bath icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Home Appliances</a>
          <a href="<?php echo site_url('welcome/newsandpolitics');?>" class="w3-button dropnew extra_options" value="13"><i class="fab fa-algolia icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Jewellery</a>
          <a href="<?php echo site_url('welcome/people');?>" class="w3-button dropnew extra_options" value="14"><i class="fas fa-briefcase-medical icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Medical</a>
          <a href="<?php echo site_url('welcome/music');?>" class="w3-button dropnew extra_options" value="11"><i class="fas fa-music icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Musical Instruments</a>
          <a href="<?php echo site_url('welcome/natureandplants');?>" class="w3-button dropnew extra_options" value="12"><i class="fas fa-cannabis icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nature & Plants</a>
          <a href="<?php echo site_url('welcome/placesandtravel');?>" class="w3-button dropnew extra_options" value="15"><i class="fab fa-ussunnah icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Places & Travel</a>
          <a href="<?php echo site_url('welcome/scienceandtechnology');?>" class="w3-button dropnew extra_options" value="16"><i class="fab fa-android icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Science & Technology</a>
          <a href="<?php echo site_url('welcome/sportsandfitness');?>" class="w3-button dropnew extra_options" value="17"><i class="fas fa-baseball-ball icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sports & Fitness</a>
          <a href="<?php echo site_url('welcome/weaponsandmilitary');?>" class="w3-button dropnew extra_options" value="18" style="padding-bottom:30px;"><i class="icons_width fas fa-fire-extinguisher"></i>&nbsp;&nbsp;&nbsp;&nbsp;Weapons & Military</a>
       </div>
      </div>
    </div>
    <div class="dropdown" style="width:100%;">
        <button class="w3-padding-large w3-button button_column" title="Vectors" ondblclick="vectorModels()" style="background-color:transparent;margin:0px;text-align:left;width:100.5%;">
        <a href="<?php echo base_url('welcome/vector_models');?>" style="font-size:16px;" class="button_column">Vectors </a><i class="fa fa-caret-down" style="float:right;font-size:18px;"></i></button>     
    
    <div class="dropdown-menu w3-bar-block w3-card-4 dropcon" style="backrground-color:#fff;">
       <div style="width:100%;background: steelblue;">
         <a href="#" class="w3-button extra_options" style="display:flex;"><i class="fas fa-medal icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Popular</a>
          <a href="#" class="w3-button extra_options" style="display:flex;"><i class="far fa-eye icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Viewed</a>
          <a href="#" class="w3-bar-item" style="color:transparent;font-size:0px;padding:1px;">a</a>

        
        </div>
        <div style="width:100%;background:#fff;">
        <a href="<?php echo site_url('welcome/v_advertisement');?>" class="w3-button dropnew extra_options"><i class='fas fa-ad icons_width'></i>&nbsp;&nbsp;&nbsp;&nbsp;Advertisement Designs</a>
          <a href="<?php echo site_url('welcome/v_animals');?>" class="w3-button dropnew extra_options"><i class='fas fa-bug icons_width'></i>&nbsp;&nbsp;&nbsp;&nbsp;Animals & Pets</a>
          <a href="<?php echo site_url('welcome/v_background');?>" class="w3-button dropnew extra_options"><i class="fas fa-object-group icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Background</a>
          <a href="<?php echo site_url('welcome/v_banners');?>" class="w3-button dropnew extra_options"><i class="fab fa-behance-square icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Banners</a>
          <a href="<?php echo site_url('welcome/v_birthday');?>" class="w3-button dropnew extra_options"><i class="fas fa-birthday-cake icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Birthday</a>
          <a href="<?php echo site_url('welcome/v_brouchers');?>" class="w3-button dropnew extra_options"><i class="fas fa-search-plus icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Brochures</a>
          <a href="<?php echo site_url('welcome/v_business');?>" class="w3-button dropnew extra_options"><i class="fas fa-business-time icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Business</a>
          <a href="<?php echo site_url('welcome/v_business_cards');?>" class="w3-button dropnew extra_options"><i class="far fa-address-card icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Business Cards</a>
          <a href="<?php echo site_url('welcome/v_buttons');?>" class="w3-button dropnew extra_options"><i class="fab fa-buromobelexperte icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Buttons&nbsp;</a>
          <a href="<?php echo site_url('welcome/v_calender');?>" class="w3-button dropnew extra_options"><i class="icons_width far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Calender</a>
          <a href="<?php echo site_url('welcome/v_cartoons');?>" class="w3-button dropnew extra_options"><i class="fas fa-baby icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cartoon</a>
          <a href="<?php echo site_url('welcome/v_character_design');?>" class="w3-button dropnew extra_options"><i class="material-icons icons_width" style="font-size:14px;font-weight:bold;">sort_by_alpha</i>&nbsp;&nbsp;&nbsp;&nbsp;Character Design</a>
          <a href="<?php echo site_url('welcome/v_concept_art');?>" class="w3-button dropnew extra_options"><i class="fab fa-artstation icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Concept art</a>
          <a href="<?php echo site_url('welcome/v_country');?>" class="w3-button dropnew extra_options"><i class="fas fa-flag-usa icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Country</a>
          <a href="<?php echo site_url('welcome/v_education');?>" class="w3-button dropnew extra_options"><i class="fas fa-award icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Education</a>
           <a href="<?php echo site_url('welcome/v_gif');?>" class="w3-button dropnew extra_options"><i class="fas fa-calculator icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Electronics & Gadgets</a>
          
        </div>


        <div style="width:100%;background:#fff;">
        <a href="<?php echo site_url('welcome/v_ornaments');?>" class="w3-button dropnew extra_options" style="padding-bottom:9px;"><i class="fab fa-opencart icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Fashion & Jewellery</a>
        <a href="<?php echo site_url('welcome/v_flyers');?>" class="w3-button dropnew extra_options"><i class="fab fa-fly icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Flyers</a>
        <a href="<?php echo site_url('welcome/v_food');?>" class="w3-button dropnew extra_options"><i class="fas fa-pizza-slice icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Food</a>
        <a href="<?php echo site_url('welcome/v_christmas');?>" class="w3-button dropnew extra_options"><i class="far fa-object-group icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Frames</a>
        <a href="<?php echo site_url('welcome/v_hallowen');?>" class="w3-button dropnew extra_options"><i class="fas fa-pastafarianism icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Halloween</a>
        <a href="<?php echo site_url('welcome/v_health');?>" class="w3-button dropnew extra_options"><i class="fas fa-biking icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Health</a>
        <a href="<?php echo site_url('welcome/v_human');?>" class="w3-button dropnew extra_options"><i class="fas fa-snowman icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Human</a>
        <a href="<?php echo site_url('welcome/v_icons');?>" class="w3-button dropnew extra_options"><i class="fas fa-icons icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Icons</a>
        <a href="<?php echo site_url('welcome/v_illustrations');?>" class="w3-button dropnew extra_options"><i class="fab fa-accessible-icon icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Illustrations</a>
        <a href="<?php echo site_url('welcome/v_letterheads');?>" class="w3-button dropnew extra_options"><i class="fas fa-align-center icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Letter Heads</a>
        <a href="<?php echo site_url('welcome/v_logo_templates');?>" class="w3-button dropnew extra_options"><i class="fas fa-blog icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logo Templates</a>
        <a href="<?php echo site_url('welcome/v_map');?>" class="w3-button dropnew extra_options"><i class="fas fa-map-marker-alt icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Map</a>
        <a href="<?php echo site_url('welcome/v_menu_designs');?>" class="w3-button dropnew extra_options"><i class="material-icons icons_width" style="font-size:14px;">menu</i>&nbsp;&nbsp;&nbsp;&nbsp;Menu Designs</a>
        <a href="<?php echo site_url('welcome/v_music');?>" class="w3-button dropnew extra_options"><i class="fas fa-music icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Music Instruments</a>
        <a href="<?php echo site_url('welcome/v_name');?>" class="w3-button dropnew extra_options"><i class="fas fa-address-card icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Name/ID Cards</a>
        <a href="<?php echo site_url('welcome/v_nature');?>" class="w3-button dropnew extra_options" style="padding-bottom:9px;"><i class="fas fa-cloud-sun-rain icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nature</a>
       </div>

        <div style="width:100%;background:#fff;">
        <a href="<?php echo site_url('welcome/v_packaging');?>" class="w3-button dropnew extra_options"><i class="fab fa-alipay icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Packaging Designs</a>
        <a href="<?php echo site_url('welcome/v_posters');?>" class="w3-button dropnew extra_options"><i class="fas fa-image icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Posters</a>
        <a href="<?php echo site_url('welcome/v_silhousettes');?>" class="w3-button dropnew extra_options"><i class="fas fa-skiing icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Silhousettes</a>
        <a href="<?php echo site_url('welcome/v_social');?>" class="w3-button dropnew extra_options"><i class="fab fa-whatsapp icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Social Media Ads</a>
        <a href="<?php echo site_url('welcome/v_sports');?>" class="w3-button dropnew extra_options"><i class="fas fa-baseball-ball icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sports</a>
        <a href="<?php echo site_url('welcome/v_stickers');?>" class="w3-button dropnew extra_options"><i class="material-icons icons_width" style="font-size:13px;">whatshot</i>&nbsp;&nbsp;&nbsp;&nbsp;Stickers</a>
        <a href="<?php echo site_url('welcome/v_summer');?>" class="w3-button dropnew extra_options"><i class="fas fa-cloud-sun icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Summer</a>
        <a href="<?php echo site_url('welcome/v_textures');?>" class="w3-button dropnew extra_options"><i class="icons_width fas fa-envelope-open-text"></i>&nbsp;&nbsp;&nbsp;&nbsp;Textures</a>
        <a href="<?php echo site_url('welcome/v_technology');?>" class="w3-button dropnew extra_options"><i class="fab fa-android icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Technology</a>
        <a href="<?php echo site_url('welcome/v_transport');?>" class="w3-button dropnew extra_options"><i class="fas fa-ambulance icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Transport</a>
        <a href="<?php echo site_url('welcome/v_travel');?>" class="w3-button dropnew extra_options"><i class="fas fa-bus icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Travel</a>
        <a href="<?php echo site_url('welcome/v_ribbons');?>" class="w3-button dropnew extra_options"><i class="fas fa-ribbon icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;UI wireframe</a>
        <a href="<?php echo site_url('welcome/v_valentine');?>" class="w3-button dropnew extra_options"><i class="fas fa-hand-holding-heart icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Valentine</a>
        <a href="<?php echo site_url('welcome/v_water');?>" class="w3-button dropnew extra_options"><i class="fas fa-water icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Water</a>
        <a href="<?php echo site_url('welcome/v_wedding');?>" class="w3-button dropnew extra_options"><i class="fas fa-heart icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Wedding</a>
        <a href="<?php echo site_url('welcome/v_yard');?>" class="w3-button dropnew extra_options" style="padding-bottom:30px;"><i class="material-icons icons_width" style="font-size:13px;">directions_boat</i>&nbsp;&nbsp;&nbsp;&nbsp;Yard/Billboard Designs</a>


       </div>
      </div>
    </div>
    <div class="dropdown" style="width:100%;">
        <button class="w3-padding-large w3-button button_column" title="Photos" ondblclick="photoModels()" style="background-color:transparent;margin:0px;text-align:left;width:100.5%;">
        <a href="<?php echo base_url('welcome/photo_models');?>" style="font-size:16px;" class="button_column">Photos </a><i class="fa fa-caret-down" style="float:right;font-size:18px;"></i></button>     
    
    <div class="dropdown-menu w3-bar-block w3-card-4 dropcon" style="backrground-color:#fff;">
       <div style="width:100%;background: steelblue;">
          <a href="#" class="w3-button extra_options" style="display:flex;"><i class="fas fa-medal icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Popular</a>
          <a href="#" class="w3-button extra_options" style="display:flex;"><i class="far fa-eye icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Viewed</a>
          <a href="#" class="w3-bar-item" style="color:transparent;font-size:0px;padding:1px;">a</a>

          
        </div>
        <div style="width:100%;background:#fff;">
        <a href="<?php echo site_url('welcome/p_animals');?>" class="w3-button dropnew extra_options"><i class='fas fa-bug icons_width'></i>&nbsp;&nbsp;&nbsp;&nbsp;Animal & Pets</a>
          <a href="<?php echo site_url('welcome/p_architecture');?>" class="w3-button dropnew extra_options"><i class="far fa-building icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Architecture</a>
          <a href="<?php echo site_url('welcome/p_baby');?>" class="w3-button dropnew extra_options"><i class="fas fa-object-group icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Background</a>
          <a href="<?php echo site_url('welcome/p_business');?>" class="w3-button dropnew extra_options"><i class="fas fa-business-time icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Business</a>
          <a href="<?php echo site_url('welcome/p_communication');?>" class="w3-button dropnew extra_options"><i class="far fa-newspaper icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Communication</a>
          <a href="<?php echo site_url('welcome/p_dance');?>" class="w3-button dropnew extra_options"><i class="fas fa-running icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dance</a>
          <a href="<?php echo site_url('welcome/p_education');?>" class="w3-button dropnew extra_options"><i class="fas fa-award icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Education</a>
          <a href="<?php echo site_url('welcome/p_fashion');?>" class="w3-button dropnew extra_options"><i class="fab fa-opencart icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Fashion</a>
          <a href="<?php echo site_url('welcome/p_flower');?>" class="w3-button dropnew extra_options"><i class="fas fa-cannabis icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Flower</a>
          <a href="<?php echo site_url('welcome/p_food');?>" class="w3-button dropnew extra_options" style="padding-bottom:9px;"><i class="icons_width fas fa-pizza-slice"></i>&nbsp;&nbsp;&nbsp;&nbsp;Food</a>
         
         </div>
        <div style="width:100%;background:#fff;">
        <a href="<?php echo site_url('welcome/p_gifts');?>" class="w3-button dropnew extra_options"><i class="fas fa-gift icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Gifts</a>
          <a href="<?php echo site_url('welcome/p_health');?>" class="w3-button dropnew extra_options"><i class="fas fa-medkit icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Health</a>
          <a href="<?php echo site_url('welcome/p_lifestyle');?>" class="w3-button dropnew extra_options"><i class="far fa-life-ring icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;LifeStyle</a>
        <a href="<?php echo site_url('welcome/p_love');?>" class="w3-button dropnew extra_options"><i class="fas fa-heartbeat icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Love</a>
          <a href="<?php echo site_url('welcome/p_music');?>" class="w3-button dropnew extra_options"><i class="fas fa-music icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Music</a>
          <a href="<?php echo site_url('welcome/p_nature');?>" class="w3-button dropnew extra_options"><i class="fas fa-cloud-sun-rain icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nature</a>
          <a href="<?php echo site_url('welcome/p_party');?>" class="w3-button dropnew extra_options"><i class="fas fa-glass-cheers icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Party</a>
          <a href="<?php echo site_url('welcome/p_realestate');?>" class="w3-button dropnew extra_options" style="padding-bottom:9px;"><i class="icons_width fas fa-laptop-house"></i>&nbsp;&nbsp;&nbsp;&nbsp;Real Estate</a>
         
      </div>
      <div style="width:100%;background:#fff;">
      <a href="<?php echo site_url('welcome/p_sales');?>" class="w3-button dropnew extra_options"><i class="fas fa-book icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sales</a>
          <a href="<?php echo site_url('welcome/p_seasons');?>" class="w3-button dropnew extra_options"><i class="fas fa-sun icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Seasons</a>
          <a href="<?php echo site_url('welcome/p_sky');?>" class="w3-button dropnew extra_options"><i class="fab fa-skyatlas icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sky</a>
          <a href="<?php echo site_url('welcome/p_sports');?>" class="w3-button dropnew extra_options"><i class="fas fa-skating icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sports & Fitness</a>
          <a href="<?php echo site_url('welcome/p_technology');?>" class="w3-button dropnew extra_options"><i class="fab fa-android icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Technology</a>
          <a href="<?php echo site_url('welcome/p_textures');?>" class="w3-button dropnew extra_options"><i class="fas fa-envelope-open-text icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Textures</a>
          <a href="<?php echo site_url('welcome/p_travel');?>" class="w3-button dropnew extra_options"><i class="fas fa-bus icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Travel</a>
          <a href="<?php echo site_url('welcome/p_water');?>" class="w3-button dropnew extra_options"><i class="fas fa-water icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Water</a>
          <a href="<?php echo site_url('welcome/p_wedding');?>" class="w3-button dropnew extra_options" style="padding-bottom:30px;"><i class="fas fa-heart icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Wedding</a>

      </div>
     
      </div>
    </div>
    <div class="dropdown" style="width:100%;">
        <button class="w3-padding-large w3-button button_column" title="Video Templates" ondblclick="videotemplatesModels()" style="background-color:transparent;margin:0px;text-align:left;width:100.5%;">
        <a href="<?php echo base_url('welcome/videotemplates_models');?>" style="font-size:16px;" class="button_column">Video Templates </a><i class="fa fa-caret-down" style="float:right;font-size:18px;"></i></button>     
    
    <div class="dropdown-menu w3-bar-block w3-card-4 dropcon" style="backrground-color:#fff;">
       <div style="width:100%;background: steelblue;">
          <a href="#" class="w3-button extra_options"><i class="fas fa-medal icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Popular</a>
          <a href="#" class="w3-button extra_options"><i class="far fa-eye icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Most Viewed</a>
          
          <a href="#" class="w3-bar-item" style="color:transparent;font-size:0px;padding:1px;">a</a>
      
          
       </div>
      <div style="width:100%;background:#fff;">
      <a href="<?php echo site_url('welcome/vt_broadcast');?>" class="w3-button dropnew extra_options"><i class="fas fa-blender-phone icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Broadcast Packages&nbsp;&nbsp;</a>
        <a href="<?php echo site_url('welcome/vt_element3d');?>" class="w3-button dropnew extra_options"><i class="fas fa-photo-video icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Element 3D</a>
        <a href="<?php echo site_url('welcome/vt_elements');?>" class="w3-button dropnew extra_options"><i class="fab fa-mendeley icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Elements</a>
        <a href="<?php echo site_url('welcome/w_animals');?>" class="w3-button dropnew extra_options"><i class='fa fa-photo icons_width'></i>&nbsp;&nbsp;&nbsp;&nbsp;Green Screen Footages</a>
        <a href="<?php echo site_url('welcome/vt_infographics');?>" class="w3-button dropnew extra_options"><i class="fas fa-digital-tachograph icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Infographics&nbsp;</a>
        <a href="<?php echo site_url('welcome/vt_logo_strings');?>" class="w3-button dropnew extra_options"><i class="fas fa-blog icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logo Animations</a>
        <a href="<?php echo site_url('welcome/vt_openers');?>" class="w3-button dropnew extra_options"><i class="fab fa-periscope icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Openers</a>
        <a href="<?php echo site_url('welcome/vt_productpromo');?>" class="w3-button dropnew extra_options"><i class="fas fa-paragraph icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Product Promo</a>
        <a href="<?php echo site_url('welcome/vt_titles');?>" class="w3-button dropnew extra_options"><i class="fas fa-file-prescription icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Titles</a>
        <a href="<?php echo site_url('welcome/vt_video_displays');?>" class="w3-button dropnew extra_options" style="padding-bottom:30px;"><i class="fas fa-tablet icons_width"></i>&nbsp;&nbsp;&nbsp;&nbsp;Video Displays</a>
         
      </div>
    </div>
  </div>
  

  <div class="dropdown" style="width:100%;">
        <button class="w3-padding-large w3-button button_column" title="For Business" style="background-color:transparent;margin:0px;text-align:left;width:100.5%;">
        <a href='<?php echo base_url('welcome/assets_models');?>' style="font-size:16px;" class="button_column">360° Assets </a><i class="fa fa-caret-down" style="float:right;font-size:18px;"></i></button>     
    
    <div class="dropdown-menu w3-bar-block w3-card-4 dropcon" style="backrground-color:#fff;">
       <div style="width:100%;background: #fff;">
       <a href="<?php echo site_url('welcome/assets_photos');?>" class="w3-button dropnew extra_options"><i class="material-icons icons_width" style="font-size:14px;font-weight:600;">rotate_90_degrees_ccw</i>&nbsp;&nbsp;&nbsp;&nbsp;360° Photos</a>
       <a href="<?php echo site_url('welcome/assets_videos');?>" class="w3-button dropnew extra_options" style="padding-bottom:30px;"><i class="icons_width material-icons" style="font-size:14px;font-weight:600;">rotate_90_degrees_ccw</i>&nbsp;&nbsp;&nbsp;&nbsp;360° Videos</a>

       </div>
    </div>
  </div>



    <div class="dropdown" style="width:100%;">
        <button class="w3-padding-large w3-button button_column" ondblclick="forBusiness()" title="For Business" style="background-color:transparent;margin:0px;text-align:left;width:100.5%;">
        <a href="<?php echo base_url('welcome/forbusiness');?>" style="font-size:16px;" class="button_column">For Business </a><i class="fa fa-caret-down" style="float:right;font-size:18px;"></i></button>     
    
    <div class="dropdown-menu w3-bar-block w3-card-4 dropcon" style="backrground-color:#fff;">
       <div style="width:100%;background: #fff;">
       <a href="#popuprequestform" class="w3-button dropnew for-business extra_options">Request a Custom Assets</a>
         <a href="<?php echo base_url('welcome/ddd_services');?>" class="w3-button dropnew for-business extra_options">3D Services</a>
          <a href="<?php echo base_url('welcome/graphic_design_services');?>" class="w3-button dropnew for-business extra_options">Design Services</a>
          <a href="<?php echo base_url('welcome/video_services');?>" class="w3-button dropnew for-business extra_options">Video Services</a>
          <a href="<?php echo base_url('welcome/vfx');?>" class="w3-button dropnew for-business extra_options" style="padding-bottom:30px;">Visual Effects(VFX)</a>
          
       </div>
    </div>
  </div>
</div>




<!-- popup signup -->
<div id="popupsignup" class="overlay" >
  <div class="popup signup_pop-up">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="content signup-body" style="padding-top:0px;">
      <a class="login-header" style="border-bottom:1px solid #999;color:#555;padding-bottom: 15px;">Signup</a>
      <div class="signup-form">

        <form method="post" action="<?php echo base_url('welcome/form_validation')?>" >

        <div class="form-group">
          <a style="color:#555;font-size: 15px;width:100%;">username</a>
          <input type="text" name="user_name" required/>
        </div>
        <div class="form-group">
          <p style="color:#555;font-size: 15px;width:100%;margin-left: 0px;margin-bottom: 0px;">Email</p>
          <input type="email" name="email" required>
        </div>
        <div class="form-group">
          <p style="color:#555;font-size: 15px;width:100%;margin: 0px;">Create password <a href="#" style="color:rgb(190, 190, 190);font-size: 13px;float:right">(8 characters minimum)</a></p>
          <input type="password" name="password" id="myPassword1" onmouseover="mouseoverPass1();" onmouseout="mouseoutPass1();" required>
        
        </div>
        <div class="form-group">
          <a>
            <label class="container" style="color:#555;margin-left: 2px;">I have read, understand, and agree to
              <input type="checkbox" name="checked" required>
              <span class="checkmark" style="background-color:#2ec3fb;"></span>
            </label>
          </a>
          <a href="#"> <span style="color:#2ec3fb;">3Dcopilot's privacy policy </span></a>
        </div>

          <input type="submit" class="button1 btn-primary btn-large signup-but" value="Sign-up" style="margin-left:auto;margin-right:auto" >
          <?php
          echo $this->session->flashdata("error");
          ?>
        </form>
          <p class="login-h5">Or sign up with</p>
          <div class="socialicons row" style="width:100%;margin-left: auto;margin-right: auto;margin-top:15px;margin-bottom: 15px;">

       



          <!-- login with google -->



          <?php 
          $output = '';
          include_once APPPATH . "libraries/google/vendor/autoload.php";
          $google_client = new Google_Client();
          $google_client->setClientId('121806368330-qs5klck5a22kkkjbkobad1qeo3befd7m.apps.googleusercontent.com');
          $google_client->setClientSecret('aduFwSlqKpeIn2A2XeB8RKlT');
          $google_client->setRedirectUri('http://3Dcopilot.com/welcome/index');
          $google_client->addScope('email');
          $google_client->addScope('profile');
          if(isset($_GET["code"]))
          {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
            if(!isset($token["error"]))
            {
              $google_client->setAccessToken($token['access_token']);
              $this->session->userdata('access_token',$token['access_token']);
              $google_service = new Google_Service_Oauth2($google_client);
              $data = $google_service->userinfo->get();
              $current_datetime = date('Y-m-d H:i:s');
              if($this->cart->isRegister($data['id']))
              {

                // update data
                $user_data = array(
                  
                  'First_name' => $data['given_name'],
                  'Last_name' => $data['family_name'],
                  'User_email' => $data['email'],
                  
                  'Time' => $current_datetime
                );
                $this->cart->update_isRegister($user_data, $data['id']);
              }
              else{
                // insert data
                $user_data = array(
                  'Social_id' => $data['id'],
                  'First_name' => $data['given_name'],
                  'Last_name' => $data['family_name'],
                  'User_name' => $data['given_name'],
                  'User_email' => $data['email'],
                  'Avatar' => 'profile/image_2020_09_15T05_44_26_466Z.png',
                  'Time' => $current_datetime
                );
              
              $this->cart->insert_isRegister($user_data);
              }
              $result = $this->cart->can_login($data['id']);
              // print_r($result);die;
              if($result)
			          {
                $session_data = array(
                  'social_id' => $result->Social_id,
                  'User_email' => $result->User_name,
                  'User_id' => $result->User_id,
                  'profile_pic'=>$result->Avatar					
                );
              //  print_r($session_data);die;
          $this->session->set_userdata($session_data);
          redirect(base_url(). 'welcome/index');
              }
            
              
              }
            }
            
            if(!$this->session->userdata('access_token'))
            {
             echo '<a href="'.$google_client->createAuthUrl().'" style="width:32%;"><img src='.base_url('resources/icons/google.png').' style="width:32%;"></a>';
            }
            else{
              echo '<a href="'.$google_client->createAuthUrl().'" style="width:32%;"><img src='.base_url('resources/icons/google.png').' style="width:32%;"></a>';
  
          }
            ?>
<!-- logi google -->



         

             <!-- login with facebook -->
             <?php 
                              include_once APPPATH."libraries/book/dor/autoload.php";  

          $facebook = new \Facebook\Facebook([
            'app_id' => '1031805903902546',
            'app_secret' => '788d7a830706b5fb16052e290321737c',
            'default_graph_version' => 'v2.10'
          ]);
          
          $facebook_output = '';
          $facebook_helper = $facebook->getRedirectLoginHelper();
          // $_SESSION['FBRLH_state']=$_GET['state'];
          if(isset($_GET['code']))
          {
            if(isset($_SESSION['access_token']))
            {
              $access_token = $_SESSION['access_token'];
            }
            else
            {
              $access_token = $facebook_helper->getAccessToken();
              $_SESSION['access_token'] = $access_token;
              $facebook->setDefaultAccessToken($_SESSION['access_token']);
            }
            $graph_response = $facebook->get("/me?fields=id,first_name,last_name,email", $access_token);
            $facebook_user_info = $graph_response->getGraphUser();
            if(!empty($facebook_user_info['id']))
            {
              $_SESSION['user_image'] = 'http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';

            }
            if(!empty($facebook_user_info['name']))
            {
              $_SESSION['user_name'] = $facebook_user_info['name'];
            }
            if(!empty($facebook_user_info['email']))
            {
              $_SESSION['user_email_address'] = $facebook_user_info['email'];
            }

            $current_datetime = date('Y-m-d H:i:s');
            if($this->cart->isRegister($user['id']))
              {

                // update data
                $user_data = array(
                  
                  'First_name' => $facebook_user_info['first_name'],
                  'Last_name' => $facebook_user_info['last_name'],
                  'user_name' => $_SESSION['user_name'],
                  'User_email' => $_SESSION['user_email_address'],
                  
                  'Time' => $current_datetime
                );
                $this->cart->update_isRegister($user_data, $data['id']);
              }
              else{
                // insert data
                $user_data = array(
                  'Social_id' => $facebook_user_info['id'],
                  'First_name' => $facebook_user_info['first_name'],
                  'Last_name' => $facebook_user_info['last_name'],
                  'user_name' => $_SESSION['user_name'],
                  'User_email' => $_SESSION['user_email_address'],
                  'Avatar' => 'profile/image_2020_09_15T05_44_26_466Z.png',
                  'Time' => $current_datetime
                );
              
              $this->cart->insert_isRegister($user_data);
              }

              $result = $this->cart->can_login($data['id']);
              // print_r($result);die;
              if($result)
			          {
                $session_data = array(
                  'social_id' => $result->Social_id,
                  'User_email' => $result->User_name,
                  'User_id' => $result->User_id,
                  'profile_pic'=>$result->Avatar					
                );
               print_r($session_data);die;
          $this->session->set_userdata($session_data);
          redirect(base_url(). 'welcome/index');
              }
          }


          else
          {
            $facebook_permissions = ['email'];
            $facebook_login_url = $facebook_helper->getLoginUrl('https://3Dcopilot.com/welcome/index', $facebook_permissions);
          }



          if(isset($facebook_login_url))
          {
            echo '<a href="'.$facebook_login_url.'" style="width:32.5%;"><img src='.base_url('resources/icons/facebook.png').' class="fb-style" style="width:32.5%;"></a>';

          }
          else
          {
            echo '<a href="'.$facebook_login_url.'" style="width:32.5%;"><img src='.base_url('resources/icons/facebook.png').' class="fb-style" style="width:32.5%;"></a>';

          }
          ?>
          <!-- <a href="#" style="width:30%;"><img src="<?php echo base_url('resources/icons/facebook.png')?>" style="width:33%;"></a> -->


          <!-- <a href="#" style="width:30%;"><img src="<?php echo base_url('resources/icons/facebook.png')?>" style="width:32%;"></a> -->
            <!-- loginwith twitter -->

            <!-- <a href="#" style="width:30%;"><img src="<?php echo base_url('resources/icons/twitter.png')?>" style="width:32%;"></a> -->

            <?php
            // session_start();
            // session_destroy();
               include_once APPPATH."libraries/Twitterapi/autoload.php";
               define('CONSUMER_KEY', 'mKspjZ68WN62uwNLhtPaeejVo');
               define('CONSUMER_SECRET', 'zMMe59eWhgENgLNptbVf8D5m5nteWZyr5AJDkzh0RGR1HqwnXY');
               define('OAUTH_CALLBACK', 'http://3dcopilot.com/welcome/index');

              //  helper
               use Abraham\TwitterOAuth\TwitterOAuth;


               if(isset($_SESSION['twitter_access_token']) && $_SESSION['twitter_access_token']){
                //  we have access token
                $isLoggedIn = true;

               }elseif(isset($_GET['oauth_verifier']) && isset($_GET['oauth_token']) && isset($_SESSION['oauth_token']) && $_GET['oauth_token'] == $_SESSION['oauth_token']){
                //  coming from twitter call back url
                $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
                $access_token = $connection->oauth('oauth/access_token', array('oauth_verifier' => $_GET['oauth_verifier']));
                $_SESSION['twitter_access_token'] = $access_token;
                $isLoggedIn = true;

               }else{
                //  not been authorized with our app, show login button
                $isLoggedIn = false;
                $twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
                $request_token = $twitter->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));

                $_SESSION['oauth_token'] = $request_token['oauth_token'];
                $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

                $isLoggedIn = false;

               }


               if($isLoggedIn)
               {
                //  the user is logged in, display their user info
                $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['twitter_access_token']['oauth_token'], $_SESSION['twitter_access_token']['oauth_token_secret']);
                $user = $connection->get('account/verify_credentials', ['include_email' => true]);

                if(property_exists($user, 'error'))
                {
                  // failed to get user data
                  $_SESSION = array();
                  header('Refresh:0');

                }else{
                  //  upload userinfo
                  // print_r($user);die;
                $name = explode(" ",$user->name);
                $first_name = isset($name[0])?$name[0]:'';
                $last_name = isset($name[1])?$name[1]:'';
                $current_datetime = date('Y-m-d H:i:s');
                if($this->cart->isRegister($user->id))
                  {
    
                    // update data
                    $user_data = array(
                      
                      'First_name' => $first_name,
                      'Last_name' => $last_name,
                      'user_name' => $user->screen_name,
                      'User_email' => 'tweet@twitter.com',
                      
                      'Your_location' => $user->location,
                      'Time' => $current_datetime
                    );
                    $this->cart->update_isRegister($user_data, $user->id);
                  }
                  else{

                    // insert data
                    $user_data = array(
                      'Social_id' => $user->id,
                      'First_name' => $first_name,
                      'Last_name' => $last_name,
                      'user_name' => $user->screen_name,
                      'User_email' => 'tweet@twitter.com',
                      'Avatar' => 'profile/image_2020_09_15T05_44_26_466Z.png',
                      'Your_location' => $user->location,
                      'Time' => $current_datetime
                    );
                    // print_r($user_data);die;
                  
                  $this->cart->insert_isRegister($user_data);
                  }
    
                  $result = $this->cart->can_login($user->id);
                  // print_r($result);die;
                  if($result)
                    {
                    $session_data = array(
                      'social_id' => $result->Social_id,
                      'User_email' => $result->User_name,
                      'User_id' => $result->User_id,
                      'profile_pic'=>$result->Avatar					
                    );
                  //  print_r($session_data);die;
              $this->session->set_userdata($session_data);
              // redirect(base_url(). 'welcome/index');
                  }

                }

               }else{
                 $url = $twitter->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
              echo '<a href="'.$url.'" style="width:32%;"><img src='.base_url('resources/icons/twitter.png').' style="width:32%;float:right;"></a>';

               }


            ?>

          </div>

        
      </div>

      <div class="row" style="width:61%;margin-left: auto;margin-right: auto;padding-top: 15px;">
        <a href="#popuplogin" style="color:#000;">Already have an account? <span style="color:#1CAAD9" >Log in here</span></a>
      </div>
    </div>
  </div>
</div>
<script>
function mouseoverPass1(obj) {
  var obj = document.getElementById('myPassword1');
  obj.type = "text";
}
function mouseoutPass1(obj) {
  var obj = document.getElementById('myPassword1');
  obj.type = "password";
}
</script>


<div id="popuplogin" class="overlay">
  <div class="popup signup_pop-up" style="height:fit-content;">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="login-content">
      <a class="login-header" style="border-bottom:1px solid #999;color:#555;padding-bottom: 15px;">Login</a>
      <div class="login-form">
        <form method="post" action="<?php echo base_url('welcome/login_validation')?>" >

        <div class="form-group">
          <a style="color:#555;font-size: 15px;width:100%;">Email-id</a>
          <input type="email" name="email" required>
        </div>

        <div class="form-group">
          <p style="color:#555;font-size: 15px;width:100%;margin: 0px;">Password <a href="#popupforgotpassword" style="color:rgb(190, 190, 190);font-size: 14px;float:right">Forgot Password?</a></p>
          <input type="password" name="password" id="myPassword" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();" required>
        </div>
          <Button class="button1 btn-primary btn-large login-but" >Login</Button>
          <?php
          echo $this->session->flashdata("error");
          ?>
        </form>
          <p class="login-h5">Or Login with</p>
          <div class="socialicons row" style="width:100%;margin-left: auto;margin-right: auto;margin-top:15px;margin-bottom: 15px;">
          <!-- login with google -->



          <?php 
          $output = '';
          include_once APPPATH . "libraries/google/vendor/autoload.php";
          $google_client = new Google_Client();
          $google_client->setClientId('121806368330-qs5klck5a22kkkjbkobad1qeo3befd7m.apps.googleusercontent.com');
          $google_client->setClientSecret('aduFwSlqKpeIn2A2XeB8RKlT');
          $google_client->setRedirectUri('http://3Dcopilot.com/welcome/index');
          $google_client->addScope('email');
          $google_client->addScope('profile');
          if(isset($_GET["code"]))
          {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
            if(!isset($token["error"]))
            {
              $google_client->setAccessToken($token['access_token']);
              $this->session->userdata('access_token',$token['access_token']);
              $google_service = new Google_Service_Oauth2($google_client);
              $data = $google_service->userinfo->get();
              $current_datetime = date('Y-m-d H:i:s');
              if($this->cart->isRegister($data['id']))
              {

                // update data
                $user_data = array(
                  
                  'First_name' => $data['given_name'],
                  'Last_name' => $data['family_name'],
                  'User_email' => $data['email'],
                  'Avatar' => $data['picture'],
                  'Time' => $current_datetime
                );
                $this->cart->update_isRegister($user_data, $data['id']);
              }
              else{
                // insert data
                $user_data = array(
                  'Social_id' => $data['id'],
                  'First_name' => $data['given_name'],
                  'Last_name' => $data['family_name'],
                  'User_name' => $data['given_name'],
                  'User_email' => $data['email'],
                  'Avatar' => $data['picture'],
                  'Time' => $current_datetime
                );
              
              $this->cart->insert_isRegister($user_data);
              }
              $result = $this->cart->can_login($data['id']);
              // print_r($result);die;
              if($result)
			          {
                $session_data = array(
                  'social_id' => $result->Social_id,
                  'User_email' => $result->User_name,
                  'User_id' => $result->User_id,
                  'profile_pic'=>$result->Avatar					
                );
              //  print_r($session_data);die;
          $this->session->set_userdata($session_data);
          redirect(base_url(). 'welcome/index');
              }
            
              
              }
            }
            
            if(!$this->session->userdata('access_token'))
            {
             echo '<a href="'.$google_client->createAuthUrl().'" style="width:30%;"><img src='.base_url('resources/icons/google.png').' style="width:32%;"></a>';
            }
            else{
              echo '<a href="'.$google_client->createAuthUrl().'" style="width:30%;"><img src='.base_url('resources/icons/google.png').' style="width:32%;"></a>';
  
          }
            ?>
<!-- logi google -->



         

             <!-- login with facebook -->
             <?php 
                     include_once APPPATH."libraries/book/dor/autoload.php";  

          $facebook = new \Facebook\Facebook([
            'app_id' => '1031805903902546',
            'app_secret' => '788d7a830706b5fb16052e290321737c',
            'default_graph_version' => 'v2.10'
          ]);
          
          $facebook_output = '';
          $facebook_helper = $facebook->getRedirectLoginHelper();
          // $_SESSION['FBRLH_state']=$_GET['state'];
          if(isset($_GET['code']))
          {
            if(isset($_SESSION['access_token']))
            {
              $access_token = $_SESSION['access_token'];
            }
            else
            {
              $access_token = $facebook_helper->getAccessToken();
              $_SESSION['access_token'] = $access_token;
              $facebook->setDefaultAccessToken($_SESSION['access_token']);
            }
            $graph_response = $facebook->get("/me?fields=id,first_name,last_name,email", $access_token);
            $facebook_user_info = $graph_response->getGraphUser();
            if(!empty($facebook_user_info['id']))
            {
              $_SESSION['user_image'] = 'http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';

            }
            if(!empty($facebook_user_info['name']))
            {
              $_SESSION['user_name'] = $facebook_user_info['name'];
            }
            if(!empty($facebook_user_info['email']))
            {
              $_SESSION['user_email_address'] = $facebook_user_info['email'];
            }

            $current_datetime = date('Y-m-d H:i:s');
            if($this->cart->isRegister($user['id']))
              {

                // update data
                $user_data = array(
                  
                  'First_name' => $facebook_user_info['first_name'],
                  'Last_name' => $facebook_user_info['last_name'],
                  'user_name' => $_SESSION['user_name'],
                  'User_email' => $_SESSION['user_email_address'],
                  'Avatar' => $_SESSION['user_image'],
                  'Time' => $current_datetime
                );
                $this->cart->update_isRegister($user_data, $data['id']);
              }
              else{
                // insert data
                $user_data = array(
                  'Social_id' => $facebook_user_info['id'],
                  'First_name' => $facebook_user_info['first_name'],
                  'Last_name' => $facebook_user_info['last_name'],
                  'user_name' => $_SESSION['user_name'],
                  'User_email' => $_SESSION['user_email_address'],
                  'Avatar' => $_SESSION['user_image'],
                  'Time' => $current_datetime
                );
              
              $this->cart->insert_isRegister($user_data);
              }

              $result = $this->cart->can_login($data['id']);
              // print_r($result);die;
              if($result)
			          {
                $session_data = array(
                  'social_id' => $result->Social_id,
                  'User_email' => $result->User_name,
                  'User_id' => $result->User_id,
                  'profile_pic'=>$result->Avatar					
                );
               print_r($session_data);die;
          $this->session->set_userdata($session_data);
          redirect(base_url(). 'welcome/index');
              }
          }


          else
          {
            $facebook_permissions = ['email'];
            $facebook_login_url = $facebook_helper->getLoginUrl('https://3Dcopilot.com/welcome/index', $facebook_permissions);
          }



          if(isset($facebook_login_url))
          {
            echo '<a href="'.$facebook_login_url.'" style="width:30%;"><img src='.base_url('resources/icons/facebook.png').' style="width:32.5%;"></a>';

          }
          else
          {
            echo '<a href="'.$facebook_login_url.'" style="width:30%;"><img src='.base_url('resources/icons/facebook.png').' style="width:32.5%;"></a>';

          }
          ?>
          <!-- <a href="#" style="width:30%;"><img src="<?php echo base_url('resources/icons/facebook.png')?>" style="width:33%;"></a> -->


          <!-- <a href="#" style="width:30%;"><img src="<?php echo base_url('resources/icons/facebook.png')?>" style="width:32%;"></a> -->
            <!-- loginwith twitter -->

            <!-- <a href="#" style="width:30%;"><img src="<?php echo base_url('resources/icons/twitter.png')?>" style="width:32%;"></a> -->

            <?php
            // session_start();
            // session_destroy();
              //  include_once APPPATH."libraries/Twitterapi/autoload.php";
              //  define('CONSUMER_KEY', 'mKspjZ68WN62uwNLhtPaeejVo');
              //  define('CONSUMER_SECRET', 'zMMe59eWhgENgLNptbVf8D5m5nteWZyr5AJDkzh0RGR1HqwnXY');
              //  define('OAUTH_CALLBACK', 'http://3dcopilot.com/welcome/index');

              //  helper
              //  use Abraham\TwitterOAuth\TwitterOAuth;


               if(isset($_SESSION['twitter_access_token']) && $_SESSION['twitter_access_token']){
                //  we have access token
                $isLoggedIn = true;

               }elseif(isset($_GET['oauth_verifier']) && isset($_GET['oauth_token']) && isset($_SESSION['oauth_token']) && $_GET['oauth_token'] == $_SESSION['oauth_token']){
                //  coming from twitter call back url
                $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
                $access_token = $connection->oauth('oauth/access_token', array('oauth_verifier' => $_GET['oauth_verifier']));
                $_SESSION['twitter_access_token'] = $access_token;
                $isLoggedIn = true;

               }else{
                //  not been authorized with our app, show login button
                $isLoggedIn = false;
                $twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
                $request_token = $twitter->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));

                $_SESSION['oauth_token'] = $request_token['oauth_token'];
                $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

                $isLoggedIn = false;

               }


               if($isLoggedIn)
               {
                //  the user is logged in, display their user info
                $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['twitter_access_token']['oauth_token'], $_SESSION['twitter_access_token']['oauth_token_secret']);
                $user = $connection->get('account/verify_credentials', ['include_email' => true]);

                if(property_exists($user, 'error'))
                {
                  // failed to get user data
                  $_SESSION = array();
                  header('Refresh:0');

                }else{
                  //  upload userinfo
                  // print_r($user);die;
                $name = explode(" ",$user->name);
                $first_name = isset($name[0])?$name[0]:'';
                $last_name = isset($name[1])?$name[1]:'';
                $current_datetime = date('Y-m-d H:i:s');
                if($this->cart->isRegister($user->id))
                  {
    
                    // update data
                    $user_data = array(
                      
                      'First_name' => $first_name,
                      'Last_name' => $last_name,
                      'user_name' => $user->screen_name,
                      'User_email' => 'tweet@twitter.com',
                      'Avatar' => $user->profile_image_url,
                      'Your_location' => $user->location,
                      'Time' => $current_datetime
                    );
                    $this->cart->update_isRegister($user_data, $user->id);
                  }
                  else{

                    // insert data
                    $user_data = array(
                      'Social_id' => $user->id,
                      'First_name' => $first_name,
                      'Last_name' => $last_name,
                      'user_name' => $user->screen_name,
                      'User_email' => 'tweet@twitter.com',
                      'Avatar' => $user->profile_image_url,
                      'Your_location' => $user->location,
                      'Time' => $current_datetime
                    );
                    // print_r($user_data);die;
                  
                  $this->cart->insert_isRegister($user_data);
                  }
    
                  $result = $this->cart->can_login($user->id);
                  // print_r($result);die;
                  if($result)
                    {
                    $session_data = array(
                      'social_id' => $result->Social_id,
                      'User_email' => $result->User_name,
                      'User_id' => $result->User_id,
                      'profile_pic'=>$result->Avatar					
                    );
                  //  print_r($session_data);die;
              $this->session->set_userdata($session_data);
              // redirect(base_url(). 'welcome/index');
                  }

                }

               }else{
                 $url = $twitter->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
              echo '<a href="'.$url.'" style="width:30%;"><img src='.base_url('resources/icons/twitter.png').' style="width:32%;"></a>';

               }


            ?>

          </div>
        
      </div>
      <div class="row" style="width:55%;margin-left: auto;margin-right: auto;padding-top: 15px;">
        <a href="#popupsignup" style="color:#000;">No Account ? <span style="color:#1CAAD9" >Signup for free!</span></a>
      </div>
    </div>
  </div>
</div>


<div id="popupforgotpassword" class="overlay">
  <div class="popup signup_pop-up" style="height:fit-content;margin-top:100px;">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="login-content">
      <a class="login-header" style="border-bottom:1px solid #999;color:#555;padding-bottom: 15px;">Forgot Password</a>
      <div class="login-form">
        <form method="post" action="<?php echo base_url('welcome/forgotpassword')?>" >

        <div class="form-group">
          <a style="color:#555;font-size: 15px;width:100%;">Registered Email-id</a>
          <input type="email" name="email" required>
        </div>
          <Button class="button1 btn-primary btn-large login-but" type="submit">Send</Button>
          <?php
          echo $this->session->flashdata("error_message");
          ?>
          <?php
          echo $this->session->flashdata("email_sent");
          ?>
        </form>
         
        
      </div>
     
    </div>
  </div>
</div>

<script>
function mouseoverPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "password";
}
</script>


<div id="popupforgotpassword" class="overlay">
  <div class="popup signup_pop-up">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="login-content">
      <a class="login-header" style="border-bottom:1px solid #999;color:#555;padding-bottom: 15px;">Forgot Password</a>
      <div class="login-form">
        <form method="post" action="<?php echo base_url('welcome/forgotpassword')?>" >

        <div class="form-group">
          <a style="color:#555;font-size: 15px;width:100%;">Registered Email-id</a>
          <input type="email" name="email" required>
        </div>
          <Button class="button login-but" type="submit">Send</Button>
          <?php
          echo $this->session->flashdata("error_message");
          ?>
          <?php
          echo $this->session->flashdata("email_sent");
          ?>
        </form>
         
        
      </div>
     
    </div>
  </div>
</div>

<script>
function mouseoverPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "password";
}
</script>
<!-- upload -->

<div id="popupupload" class="overlay">
  <div class="popup" style="width:30%;height:65%;">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="content upload-content">
      <a class="login-header" style="border-bottom:1px solid #999;color:#555;padding-bottom: 15px;padding-left: 0px;">Upload a new model</a>
      
        <form>
          <div class="upload-content1" style="margin-top: 15px;">
      <div class="row" style="width:40%;margin-left: auto;margin-right: auto;margin-top: 15px;">
        <select name="models" id="models" class="upload-select">
          <option value="">Select</option>
          
          <?php
          
          foreach($models as $row)
          {
            echo '<option value="'.$row->model_id.'">'.$row->model_name.'</option>';
          }
          ?>
          
        </select>
      </div>
      <div class="row" style="width:40%;margin-left: auto;margin-right: auto;margin-top: 15px;">
        <select name="models" id="models_categories" class="upload-select">
          <option value="">Select Models</option>
          
        </select>
      </div>
      <div class="row" style="width:90%;margin-left: auto;margin-right: auto;margin-top: 15px;">
        <div class="column" style="width:30%;margin-left: 20px;">
          <h3 style="color: #000;">File format</h3>
          <a><span id="3dmodels">.ma, .mb, .blend, .dae</span></a>
          
        </div>
        <div class="column" style="width:20%;margin-left: 20px;">
          <h3 style="padding:10px;color: #000;">OR</h3>
        </div>
        <div class="column" style="width:30%;margin-left: 20px;">
          <h3 style="color: #000;">File format</h3>
          <a><span id="3dmodels">.fbx, .3ds, .max, .obj, .stl </span></a>
        </div>
      </div>
      <div class="row" style="width:40%;margin-left: auto;margin-right: auto;margin-top: 15px;">
        <a href="#popupchoosefile" class="button" style="width:160px;text-align: center;">Choose File</a>
      </div>
    </div>
      <div class="row upload-lastrow">
        <a href="#popuptranfercomplete" class="button upload-continue">Continue</a>
        <a href="#" class="button upload-cancel" >Cancel</a>
      </div>
    </form>
  
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $('#models').change(function(){
    var model_id =this.value;
    console.log(this.value);
    if(model_id !='')
    {
    
      $.ajax({
        url:"<?php echo site_url();?>Welcome/fetch_models_categories",
        method:"POST",
        data:{model_id:model_id},
        success:function(data)
        {
          $('#models_categories').html(data);
        }
      });
    }
  });
});

</script>

<!-- tranfer complete -->

<div id="popuptranfercomplete" class="overlay" style="z-index:999">
  <div class="popup" style="width:60%;height:90%;">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="content transfer-content">
      <h2 class="transfer-h2">Transfer Complete</h2>
      
        <form>
          <div class="contentss" style="border:1px solid #000;">
            <div class="row" style="width:90%">
              <div class="column" style="width:20%">
                <h4>Model name</h4>
              </div>
            
            <div class="column" style="width:60%">
              <input type="text" id="name">
            </div>
          </div>
          
          <div class="row" style="width:90%">
            <div class="column" style="width:80%">
              <h4>Description</h4>
            </div>
          
          <div class="column" style="width:80%;margin-left:150px;">
            <textarea id="description" rows="4" cols="53" style="background-color: rgb(231, 231, 231);font-size: 16px;">
              
              </textarea>
          </div>
        </div>
        <div class="row" style="width:90%">
          <div class="column" style="width:20%">
            <h4>Categories</h4>
            <a>Max 2 Categories</a>
          </div>
        
        <div class="column" style="width:65%;">
          <select class="transfer-category">
            <option>1st Categories</option>
            <option>1st Categories</option>
            <option>1st Categories</option>
            <option>1st Categories</option>
          </select>
        </div>
      </div>
      <div class="row" style="width:90%">
        <div class="column" style="width:20%">
          <h4>Tag</h4>
        </div>
      
      <div class="column" style="width:60%">
        <input type="text" id="name">
      </div>
    </div>
      </div>
        
      <div class="row transfer-continue">
        <a href="<?php echo site_url('welcome/user_models');?>" class="button" style="width:160px;margin-left:auto;margin-top: 10px;width:100px;margin-right: auto;">Continue</a>
      </div>
    </form>
  
    </div>
  </div>
</div>

<!-- choose file -->
<div id="popupchoosefile" class="overlay" style="z-index:999">
  <div class="popup" style="width:30%;height:60%;">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="content choosefile-content">
      <h2 class="choosefile-h2">Choose your file</h2>
      
        <form>
          <div class="choosefile-form">
     
      <div class="row" style="width:40%;margin-left: auto;margin-right: auto;margin-top: 35px;">
        <input type="file" id="myfile" class="button" name="myfile" style="width:160px;text-align: center;padding: 10px;">
      </div>
      <div class="row" style="width:40%;margin-left: auto;margin-right: auto;margin-top: 35px;">
        <a style="width:160px;text-align: center;padding: 10px;">Drag and Drop your Files</a>
      </div>
    </div>
      <div class="row" style="border-top-style: solid;border-width: 1px;border-color: rgb(184, 179, 179);margin-top: 10px;margin-left: 0px;">
        <a href="#popupupload" class="button upload-continue" >Continue</a>
        <a href="#popupupload" class="button upload-cancel" >Cancel</a>
      </div>
    </form>
  
    </div>
  </div>
</div>