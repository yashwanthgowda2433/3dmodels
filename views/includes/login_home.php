<!DOCTYPE html>
<html lang="en">
<title>3Dcopilot</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php 
if($this->input->get('search'))
{
$this->db->select("*"); 
$this->db->from("upload_table");
$this->db->where("Thumbnail", $this->input->get('search'));
    
    $query = $this->db->get();
    $qn = 1;
}else{$qn = 0;}
    
    ?>


<meta property="og:url" content="http://3dcopilot.com/welcome/sharelink?search=<?php echo $this->input->get('search');?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php if($qn == 0){ }else{foreach($query->result() as $row){echo $row->Model_name.' -'; }}?> 3Dcopilot" />
<meta name="description" property="og:description" content="Publish and find your Assets" />
<?php
if($this->input->get('search'))
{
  echo '<meta name="image" property="og:image" content='.base_url($this->input->get('search')).'>';
  
  
}else{
  echo '<link rel="apple-touch-icon" sizes="180x180" href='.base_url('resources/icons/tabicon.jpg').'>';
   echo '<link rel="icon" type="image/png" sizes="32x32" href='.base_url('resources/icons/tabicon.jpg').'>';
   echo '<link rel="icon" type="image/png" sizes="16x16" href='.base_url('resources/icons/tabicon.jpg').'>';
    echo '<link rel="shortcut icon" type="image/png" sizes="192x192" href='.base_url('resources/icons/tabicon.jpg').'>';
    echo '<link rel="mask-icon" href='.base_url('resources/icons/tabicon.jpg').' color="#5bbad5">';
   
}

?>

<link href="<?php echo base_url('resources/');?>style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('resources/');?>w3new.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url('resources/');?>assets/css/elegant-icons.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/');?>assets/css/nouislider.min.css">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/');?>assets/css/main.css">


  <link href="<?php echo base_url('resources/');?>assets/css/bootstrap-responsive.css" rel="stylesheet">
  
  
  <link href="<?php echo base_url('resources/');?>assets/css/style.css" rel="stylesheet">
  
  <!-- drag and drop -->
  <link href="<?php echo base_url(); ?>resources/min/dropzone.min.css" type="text/css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>resources/min/dropzone.min.js"></script>


		<!-- The following libraries and polyfills are recommended to maximize browser support -->
<!-- NOTE: you must adjust the paths as appropriate for your project -->
    
<!-- 🚨 REQUIRED: Web Components polyfill to support Edge and Firefox < 63 -->
<script src="<?php echo base_url('resources/player/webcomponents-loader.js');?>"></script>

<!-- 💁 OPTIONAL: Intersection Observer polyfill for better performance in Safari and IE11 -->
<script src="<?php echo base_url('resources/player/intersection-observer.js');?>"></script>

<!-- 💁 OPTIONAL: Resize Observer polyfill improves resize behavior in non-Chrome browsers -->
<script src="<?php echo base_url('resources/player/ResizeObserver.js');?>"></script>

<!-- 💁 OPTIONAL: Fullscreen polyfill is required for experimental AR features in Canary -->
<!--<script src="resources/player/fullscreen.polyfill.js"></script>-->

<!-- 💁 OPTIONAL: Include prismatic.js for Magic Leap support -->
<!--<script src="https://unpkg.com/@magicleap/prismatic@0.18.2/prismatic.min.js"></script>-->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- <link rel="icon" href="<?php echo base_url('resources/');?>icons/tabicon.jpg"> -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/uploadcss/assets/css/form-upload.css');?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/');?>uploadcss/edithtmls.css">

<!-- <link rel="stylesheet" href="<?php echo base_url('resources/');?>zip/demo.css"> -->
<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>



<!-- <link href="<?php echo base_url('resources/video/video-js.css');?>" rel="stylesheet">
   <link href="<?php echo base_url('resources/video/videojs-vr.css');?>" rel="stylesheet"> -->


  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

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


<!-- traingles -->

<!-- <script type="text/javascript" src="<?php echo base_url('resources/triangle/jsmodeler/three.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('resources/triangle/jsmodeler/jsmodeler.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('resources/triangle/jsmodeler/jsmodeler.ext.three.js');?>"></script>

	<script type="text/javascript" src="<?php echo base_url('resources/triangle/include/floatingdialog.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('resources/triangle/include/importerviewer.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('resources/triangle/include/importermenu.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('resources/triangle/include/importerapp.js');?>"></script> -->


<!-- triangles -->
   
<style>
    .dropcon{background: steelblue;color:rgb(231, 230, 230);}

body {font: 14px "open-sans",sans-serif;
font-weight: 500;
width:100%;}
.mySlides {display: none}
.signup_pop-up{
  width:35%;
  height: 90%;
    margin-top: 30px;
}
.online-sign{
  width:30%;
  font-size: 20px;
}
@media (max-width:700px) and (min-width:300px){
  .signup_pop-up{
  width:95%;
  height:100%;
  overflow-y:scroll;

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
    .icons_width{
  width:15px;
}

/* .checkout{
    scrollbar-width: thin;
  }
  .checkout::-webkit-scrollbar{
    width:5px;
  } */
  /* Track */
  /* .checkout::-webkit-scrollbar-track {
  background: #fff; 
} */
 
/* Handle */
/* .checkout::-webkit-scrollbar-thumb {
  background: #ddd; 
} */
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

.home_icon{
      padding:0px;
      margin-left:5px;
    }
@media (max-width:700px) and (min-width:300px){
  
  .home_icon{
      padding:0px;
      margin-left:-8px;
    }
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

.dropdown-menu{
        min-width: 100%; /* Set width of the dropdown */
        background: linear-gradient(45deg,#1687ac,#41bde7);
        /* display: none; */
        position: relative;
        z-index: 999;
        left: 0;
        display:none;
    }
    .icons_width{
  width:15px;
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
    .home_icon{
      padding:0px;
      margin-left:5px;
    }
@media (max-width:700px) and (min-width:300px){
  
  .home_icon{
      padding:0px;
      margin-left:-8px;
    }
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
.button_column{
  color: hsla(0,0%,100%,.75); 
 transition: color .25s ease;
  text-transform:uppercase;
  font-size: 12px;
    font-weight: 700;
    line-height: 17px;
}
.button1_column1{
  color: hsla(0,0%,100%,.75); 
 transition: color .25s ease;
  text-transform:uppercase;
  font-size: 12px;
    font-weight: 700;
    line-height: 17px;
}
.dropnew:hover{    
    color:steelblue!important;
}
.dropnew:hover{    
    color:steelblue!important;
}
#bararea{
	width:100%;
	height:40px;
	/* border:2px solid #FFFFFF; */
}
 
#bar{
	width:0%;
	margin:4px 0;
	height:32px;
	background-color:#1c88bb;
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






      <div class="dropingdown" style = "color:#fff; width:40px;margin-top: 4px;margin-right: 50px; float:right;">
      <button class=" w3-button"  ondblclick="userProfile()" title="profile" style="margin-bottom:5px;width:80px;padding:0px;color: #fff;">
        <?php if($this->session->userdata('profile_pic')!=""){ ?>
           <?php if($this->session->userdata('social_id')!= ""){?>
              <img  style="padding:1px;margin:0px;width:44px;height:44px;" class="icon-circled icon-64 icon-suitcase" src="<?php echo $this->session->userdata('profile_pic');?>"><i class="fa fa-caret-down"></i>     
           <?php }else{?>
              <img  style="padding:1px;margin:0px;width:44px;height:44px;" class="icon-circled icon-64 icon-suitcase" src="<?php echo base_url($this->session->userdata('profile_pic'));?>"><i class="fa fa-caret-down"></i>     
           <?php }?>
        <?php }else{ ?>
        <img  style="padding:1px;margin:0px;width:44px;height:44px;" class="icon-circled icon-64 icon-suitcase" src="<?php echo base_url('resources/icons/user.png');?>"><i class="fa fa-caret-down"></i>     

          <!-- <i class="icon-circled icon-64 icon-suitcase fa fa-user" style="font-size:36px;padding:0px;margin:0px;width:44px;height:44px;"></i><i class="fa fa-caret-down"></i> -->
        <?php } ?>
        </button>
        <div class="dropingdown-menus w3-bar-block w3-card-4" style="background:#fff;box-shadow: 0 1px 1px rgba(97,108,121,.1), 0 7px 18px 0 rgba(97,108,121,.13);">
         <a href="<?php echo site_url('welcome/user_profile');?>" class="w3-bar-item w3-button" style="border-bottom-style: solid;border-width: 1px;border-color: #000;padding: 10px;"><span style="font-size: 19px;font-weight:500;color:#444;">
         <?php
          echo $this->session->User_email;
          ?></span></a>
         <!-- <a href="<?php echo site_url('welcome/user_profile?tab=Newsfeed');?>" class="w3-bar-item w3-button for-business" style="padding:5px">News feed</a> -->
         <a href="<?php echo site_url('welcome/user_profile?tab=Models');?>" class="w3-bar-item w3-button for-business" style="padding:5px">Assets</a>
         
         <a href="<?php echo site_url('welcome/user_profile?tab=Collections');?>" class="w3-bar-item w3-button for-business" style="padding:5px">Collections</a>

         <a href="<?php echo site_url('welcome/user_profile?tab=Likes');?>" class="w3-bar-item w3-button for-business" style="padding:5px">Likes</a>
         <a href="<?php echo site_url('welcome/user_profile?tab=Comments');?>" class="w3-bar-item w3-button for-business" style="border-bottom-style: solid;border-width: 1px;border-color: #000;padding:5px">Comments</a>
         <a href="<?php echo site_url('welcome/user_profile?tab=Purchases');?>" class="w3-bar-item w3-button for-business" style="padding:5px">Purchases</a>
         <a href="<?php echo site_url('welcome/user_profile?tab=Sales');?>" class="w3-bar-item w3-button for-business" style="border-bottom-style: solid;border-width: 1px;border-color: #000;padding:5px">Sales</a>
         <a href="<?php echo site_url('welcome/user_profile');?>" class="w3-bar-item w3-button for-business" style="padding:5px">Settings</a>
         <a href="#popuphelp" class="w3-bar-item w3-button for-business" style="border-bottom-style: solid;border-width: 1px;border-color: #000;padding:5px">Help</a>
         <div class="b" style="margin-top:10px;margin-bottom: 10px;">
         <form method="post" action="<?php echo base_url('welcome/logout');?>">
        <button  type="submit" class="button1 btn-primary" style="padding: 3px;width:100%">Log out</button>
         </form>
         </div>
        </div>
      </div>
      <a href="#popup_new_upload" class="upload-button1" style="font-weight:600;font-size:12px;font-size:12px;color:#fff;"><i class="fa fa-upload"></i>&nbsp; UPLOAD</a>
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
          <div class="popupc" style="padding-right: 0px;">   
          <h4 class="shop-cart" style="border:none;margin-bottom:10px;">Shopping Cart</h4>
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
            echo '<a style="color: #666;">You have <span style="color: #41a48f;">'.$cart_details.'</span> items in your shopping cart</a>';

            echo '<div class="row checkout" id="addtocart" style="padding-right: 20px;margin:0px;margin-top:10px;margin-left:0px;max-height:300px;overflow-y:scroll;">';  
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
              echo '<div class="row" style="padding-right: 40px;display:flex;width:100%;margin-left:0px;margin-bottom:10px;margin-top:15px;float:left;">';
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

              
              

              echo '<div class="row" style="margin-left:0px;padding-right:20px;">';  
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
        <!-- <script>
          function delete_cart(cart_id)
          {
            //alert(cart_id);
            $.post("<?php echo base_url('index.php/welcome/delete')?>",
            {cart_id:cart_id}, function(data){
              $("#addtocart").html(data);
            });
          }

        </script> -->

<script>
$(document).ready(function(){
$('input[type="search"]').on('keyup', function(){
  var search = $(this).val();
  //alert(search);
  $.ajax({
        url:"<?php echo base_url('index.php/welcome/input_header_search')?>",
        method:"POST",
        data:{search:search},
        cache: false,
        success:function(data)
        {
          $('#load_data').html('');
          if(data == '')
          {
            $('#load_data_message').html('<h3>No More Result Found</h3>');
            action = 'active';
          }
          else
          {
           
            $('#load_data').append(data);
            $('#load_data_message').html("");
          }
        }
      });
    });
});


</script>



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




<script>
$(document).ready(function(){
    $("#models").change(function(){

            var optionValue = $(this).attr("value");
            
        });
    });

</script>


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
  <div class="popup" style="width:30%;height:45%;">
    
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
          <div class="1 ext"><strong>.ma, .mb, .blend, .dae</strong></div>
          <div class="2 ext"><strong>.psd, .ai</strong></div>
          <div class="3 ext"><strong>.raw, .jpg</strong></div>
          <div class="4 ext"><strong>.aep, .prproj</strong></div>
          <div class="5 ext"><strong>.html, .js, .exe</strong></div>
        </div>
        <div class="column" style="width:20%;margin-left: 20px;">
          <h3 style="padding:10px;color: #000;">OR</h3>
        </div>
        <div class="column" style="width:30%;margin-left: 20px;">
          <h3 style="color: #000;">File format</h3>
          <div class="1 ext"><strong>.3ds, .max, .obj, .stl, .fbx</strong></div>
          <div class="2 ext"><strong>.eps, .svg</strong></div>
          <div class="3 ext"><strong>.png</strong></div>
          <div class="4 ext"><strong>.drp</strong></div>
          <div class="5 ext"><strong>.zip, .7z, .rar</strong></div>
        </div>
      </div>
      <div class="row" style="width:40%;margin-left: auto;margin-right: auto;margin-top: 15px;">
        <a href="#popupchoosefile" class="button" style="width:160px;text-align: center;">Choose File</a>
        <?php
          echo $this->session->flashdata("filename");
          ?>
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
    $("#models").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".ext").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".ext").hide();
            }
        });
    }).change();
});
</script>

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

<div id="popuptranfercomplete" class="overlay">
  <div class="popup" style="width:60%;height:90%;">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="content transfer-content">
      <h2 class="transfer-h2">Transfer Complete</h2>
      
        <form method="post" action="<?php echo base_url('welcome/transfer_validation')?>" >
          <div class="contentss" style="border:1px solid #000;">
            <div class="row" style="width:90%">
              <div class="column" style="width:20%;">
                <h4 style="padding-top:10Px;bottom:0px;">Model name</h4>
              </div>
            
            <div class="column" style="width:60%">
              <input type="text" name="model_name" required>
            </div>
          </div>
          
          <div class="row" style="width:90%">
            <div class="column" style="width:80%">
              <h4>Description</h4>
            </div>
          
          <div class="column" style="width:80%;margin-left:150px;">
            <textarea id="description" name="model_description" rows="4" cols="53" style="background-color: rgb(231, 231, 231);font-size: 16px;" required>
              
              </textarea>
          </div>
        </div>
        <div class="row" style="width:90%">
          <div class="column" style="width:20%">
            <h4>Categories</h4>
            <a>Max 2 Categories</a>
          </div>
        
        <div class="column" style="width:65%;">
        <select name="select_cat" required id="models" class="upload-select transfer_category" style="width:90%;color:#000;background-color:#ddd;">
          <option value="">Select</option>
          
          <?php
          
          foreach($models as $row)
          {
            echo '<option value="'.$row->model_id.'">'.$row->model_name.'</option>';
          }
          ?>
          
        </select>
        </div>
      </div>
      <div class="row" style="width:90%">
        <div class="column" style="width:20%">
          <h4>Tag</h4>
        </div>
      
      <div class="column" style="width:60%">
        <input type="text" name="tag_name" required>
      </div>
    </div>
      </div>
        
      <div class="row transfer-continue">
        <input type="submit" value="continue" class="button" style="width:160px;margin-left:auto;margin-top: 10px;width:100px;margin-right: auto;">
      </div>
    </form>
  
    </div>
  </div>
</div>

<!-- choose file -->
<div id="popupchoosefile" class="overlay">
  <div class="popup" style="width:30%;height:60%;">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="content choosefile-content">
      <h2 class="choosefile-h2">Choose your file</h2>
          <div class="choosefile-form">
     
          <form action="<?php echo site_url('welcome/fileupload'); ?>" class="dropzone" style="margin-top:30px;" >
</form>

    </div>
  
      <div class="row" style="border-top-style: solid;border-width: 1px;border-color: rgb(184, 179, 179);margin-top: 10px;margin-left: 0px;">
        <a href="#popupupload" class="button upload-continue" >Continue</a>
        <a onclick="goBack()" class="button upload-cancel" >Cancel</a>
      </div>
    </div>
  </div>
</div>

<script>
Dropzone.options.fileupload={
  acceptedFiles: '3ds|zip|rar',
  maxFilesize: 100
}
</script>



<!-- Page content -->

<!-- 3D models content -->






<script>
$(document).ready(function(){
  $("#models_categories1").change(function(){
    var Categories_id = this.value;
    console.log(this.value);
    if(Categories_id!='')
    {
      $.ajax({
        url:"<?php echo site_url();?>Welcome/fetch_categories_id",
        method:"POST",
        data:{'Categories_id':Categories_id},
        success:function(data){

        }
      })
    }
    
  });
});

</script>

<script>
$(document).ready(function(){
    $("#models1").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".ext1").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".ext1").hide();
            }
        });
    }).change();
});
</script>

<script>
$(document).ready(function(){
  $('#models1').change(function(){
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
          $('#models_categories1').html(data);
        }
      });
    }
  });
});

</script>



<style>
ul li a{
  font-size:17px;
  font-weight:600;
  border: 1px solid #1caad9;
  min-height: 45px;
	overflow: auto;
  line-height: 45px;
  background: #e8f7fb;
  padding:10px;
}

.progresses {
    display: -ms-flexbox;
    display: none;
    height: 20px;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem;
    margin-top: 10px;
}
.progresses {
    height: 20px;
    margin-bottom: 20px;
    overflow: hidden;
    background-color: #f5f5f5;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}
.progresses-bar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #28a745;
    transition: width .6s ease;
    font-size: 16px;
    text-align: center;
}
.progresses-bar {
    float: left;
    width: 0;
    height: 100%;
    font-size: 12px;
    line-height: 20px;
    color: #fff;
    text-align: center;
    background-color: #428bca;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
    -webkit-transition: width .6s ease;
    transition: width .6s ease;
}
</style>
<div id="top" style="display:none;">
	</div>
	<div id="left" style="display:none;">
		<div id="menu"></div>
	</div>
<canvas id="modelcanvas" width="0" height="0" style="display:none;"></canvas>     

         <div id="popup_new_upload" class="overlay">
            <div class="popup" style="width: max-content;max-height: 95%;height: max-content;min-height: 300px;margin-top:40px;">
              
              <a onclick="goBack()" class="close" href="#">&times;</a>
              <div class="contentss" style="width:100%;max-height: max-content;margin-left: auto;margin-right: auto;padding-top:0px;">
                  <h2 style="color:#1caad9;font-size: 24px;font-weight: bold;border-bottom-style: solid;border-width:1px;border-color: rgb(170, 170, 170);text-align:center;">Upload</h2>
                
                 
                    <div class="contentss" style="width:100%;overflow-y:scroll;max-height:550px;margin:auto;border:1px solid #f1f1f1;background-color: #f1f1f1;">
<form method="POST" enctype="multipart/form-data" id="new_ac" action="<?php echo base_url('welcome/upload_user_mod')?>" >


                    <!-- <div class="progresses">
                    
				               <div class="progresses-bar"></div>
			              </div> -->
                    <!-- <div class="progresses">
                            <div class="progresses-bar"></div >
                            <div class="percent">0%</div >
                      </div>

                    <div id="status" style="width:fit-content;margin-left:auto;margin-right:auto;"></div>
			             -->
			              <!-- <div id='status'></div> -->
 <div class="row" style="width:160px;margin-left: auto;margin-right: auto;margin-top: 15px;">
        <select name="models_modid" id="models1" style="width:100%;padding:3px;font: 13px 'open-sans',sans-serif;" required>
          <option value="">Select Models</option>
          
          <?php
         // $this->session->unset_userdata('model_u_path');
          
          foreach($models as $row)
          {
            echo '<option value="'.$row->model_id.'">'.$row->model_name.'</option>';
          }
          ?>
          
        </select>
      </div>
      <div class="row" style="width:160px;margin-left: auto;margin-right: auto;margin-top: 15px;">
        <select name="models_categoryid" id="models_categories1" style="width:100%;padding:3px;font: 13px 'open-sans',sans-serif;" required>
          <option value="">Select Categories</option>
          
        </select>
      </div>
  <div class="c-popup__content" style="overflow:hidden;">
            
    <div class="c-popup__body">
        
        

        <label class="c-upload__drop" id="c-upload__drop" style="min-height:250px;;min-width:600px;">
            <input accept=".ai,.svg,.aep,.prproj,.mp4,.wrl,.obj,.3ds,.dae,.ply,.osg2,.osgt,.osgb,.osgx,.osgs,.gem,.rgb,.dxf,.tgz,.osgterrain,.zae,.stl,.osga,.osgtgz,
            .3dc,.asc,.lw,.gdal,.osg,.iv,.blend,.blend1,.fbx,.dwf,.zip,.7z,.rar,.gz,.kmz,.wrz,.q3d,.gltf,.glb,.iges,.igs,.abc,.las,.vox,.jpg,.jpeg,.png,.tga,.mtl,.psd,.bin" 
            class="c-upload__input" id="file-input" name="file" type="file" multiple>
            <div id="file2-input2"></div>
<div class="hide" style="color:transparent;">
            <li>
				<label>
					<!-- <span class="form-label">choose temporary storage</span> -->
					<select class="hide" id="creation-method-input">
						<option value="Blob" selected="selected">RAM</option>
						
					</select>
				</label>
			</li>
</div>
            <div class="selectors" id="selectors" style="margin-top:0px;">
                <div class="selection">
                <ul id="file-list">
				        </ul>
                    <div class="filename" id="filename"></div>
                    <div class="filelist"><ul></ul></div>
                </div>

                <div class="analyzing" style="display: none;">
                    <p><span class="spinner"></span> Checking your files. Hang on.</p>
                </div>

                <div class="warnings" style="display: none;">
                    <p>There might be <a class="show-warnings" href="#">issues</a> if you upload. Press continue to upload anyway.</p>
                </div>
            </div>

            <div class="filename">
            <ul id="listing" style="color:#000;"></ul>
            </div>

            <div class="progress">
            <div class="prog_upload"></div>
              <div class="progress-bar" style="margin-left:auto;margin-right:auto;width:30px;"></div>
           </div>
           <div id="uploadStatus"></div>

            <h2 class="c-upload__title" style="margin-top: 40px;margin-bottom: 40px;">
                Drag &amp; Drop or <a class="skfb-link">browse</a>
            </h2>

            <div class="c-upload__hints skfb-links" id="c-upload__hints" style="margin-top:auto;margin-bottom:50px;">
            <div class="1 ext1"> <p>
                    We support <strong>FBX</strong>, <strong>OBJ</strong>, <strong>DAE</strong>, <strong>BLEND</strong>, <strong>STL</strong>, and <a class="skfb-link" href="" rel="noreferrer noopener" target="_blank">many others</a>.
                </p></div>
                <div class="2 ext1"> <p>
                    We support <strong>EPS</strong>, <strong>PSD</strong>, <strong>SVG</strong>, <strong>AI</strong>.
                </p></div>
                <div class="3 ext1"> <p>
                    We support <strong>RAW</strong>, <strong>JPG</strong>, <strong>PNG</strong>, <strong>JPEG</strong>.
                </p></div>
                <div class="4 ext1"> <p>
                    We support <strong>AEP</strong>, <strong>PRPROJ</strong>, <strong>DRP</strong>, <strong>MP4</strong>.
                </p></div>
                <div class="5 ext1"> <p>
                    We support <strong>PNG</strong>, <strong>JPG</strong>, <strong>HDR</strong>, <strong>MP4</strong>.
                </p></div>


                <p>
                    You can also upload an archive like <strong>ZIP</strong>, <strong>RAR</strong>, or <strong>7z</strong>, containing your textures,
                    materials, and mesh.
                </p>
                <p>
                    <span style="font-weight:bold;">Instructions:</span> Please… No Spaces and/or Special Characters in file naming; use a hyphen('-')/underscores('_') instead.
                </p>
                
            </div>
            <div class="c-upload__view-only-limit"></div>
        </label>
    </div>


        </div>
		
        <div class="progresses">
                            <div class="progresses-bar"></div >
                            <div class="percent">0%</div >
                      </div>

                    <div id="status" style="width:max-content;margin-left:auto;margin-right:auto;"></div>
			            
				  

        
       <footer class="c-popup__footer" id="id_popup__footer" style="display:none;">
                
          <button class="button1 btn-huge btn-tertiary cancel" onclick="goBack()" type="reset">cancel</button>
          <button class="button1 btn-huge btn-primary" id="elementupload" type="submit" style="float:right;">
              Upload files
              
          </button>

       </footer>
		
                    </div>
      </form>
</div>
              </div>
            </div>
          </div>

          <script>
          
 document.getElementById("file-input").addEventListener("change", function(event) {
  var size = document.getElementById("file-input").files[0].size;
    //  alert(size);
     if(size > 20894123)
     {
       return false;
     }
  document.getElementById("id_popup__footer").style.display = 'block';
  document.getElementById("file-list").innerHTML = "";
                document.getElementById("c-upload__hints").style.display = 'none';
                var models = $('#models1').val();
          var cat1 = $('#models_categories1').val();

         
          if($.trim(models).length == 0)
              {
              alert("Please Select Model");
               return false;
               }
           if($.trim(cat1).length == 0)
              {
                 alert("Please Select Categories");
               return false;
              }
 });
          </script>
<script type="text/javascript" src="<?php echo base_url('resources/zip/zip.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('resources/zip/zip-ext.js');?>"></script>
  <!-- <script type="text/javascript" src="<?php echo base_url('resources/zip/demo2.js');?>"></script> -->
<script>
  (function(obj) {

var requestFileSystem = obj.webkitRequestFileSystem || obj.mozRequestFileSystem || obj.requestFileSystem;

function onerror(message) {
  alert(message);
}

function createTempFile(callback) {
  var tmpFilename = "tmp.dat";
  requestFileSystem(TEMPORARY, 4 * 1024 * 1024 * 1024, function(filesystem) {
    function create() {
      filesystem.root.getFile(tmpFilename, {
        create : true
      }, function(zipFile) {
        callback(zipFile);
      });
    }

    filesystem.root.getFile(tmpFilename, null, function(entry) {
      entry.remove(create, create);
    }, create);
  });
}

var model = (function() {
  var URL = obj.webkitURL || obj.mozURL || obj.URL;

  return {
    getEntries : function(file, onend) {
      zip.createReader(new zip.BlobReader(file), function(zipReader) {
        zipReader.getEntries(onend);
      }, onerror);
    },
    getEntryFile : function(entry, creationMethod, onend, onprogress) {
      var writer, zipFileEntry;

      function getData() {
        entry.getData(writer, function(blob) {
          var blobURL = creationMethod == "Blob" ? URL.createObjectURL(blob) : zipFileEntry.toURL();
          onend(blobURL);
        }, onprogress);
      }

      if (creationMethod == "Blob") {
        writer = new zip.BlobWriter();
        getData();
      } else {
        createTempFile(function(fileEntry) {
          zipFileEntry = fileEntry;
          writer = new zip.FileWriter(zipFileEntry);
          getData();
        });
      }
    }
  };
})();

(function() {
  var fileInput = document.getElementById("file-input");
  var unzipProgress = document.createElement("progress");
  var fileList = document.getElementById("file-list");
  
  var creationMethodInput = document.getElementById("creation-method-input");

  function download(entry, li, a) {
    model.getEntryFile(entry, creationMethodInput.value, function(blobURL) {
      var clickEvent = document.createEvent("MouseEvent");
      if (unzipProgress.parentNode)
        unzipProgress.parentNode.removeChild(unzipProgress);
      unzipProgress.value = 0;
      unzipProgress.max = 0;
      clickEvent.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
      a.href = blobURL;
      a.download = entry.filename;
      a.dispatchEvent(clickEvent);
    }, function(current, total) {
      unzipProgress.value = current;
      unzipProgress.max = total;
      li.appendChild(unzipProgress);
    });
  }

  if (typeof requestFileSystem == "undefined")
    creationMethodInput.options.length = 1;
  fileInput.addEventListener('change', function() {
     //fileInput.disabled = true;
     var ext = fileInput.value.split('.')[1];
     var name = fileInput.files[0].name;
     var size = fileInput.files[0].size;
    //  alert(size);
     if(size <= 20894123)
     {
     
    //  alert(ext);
    if(ext == 'zip')
    {
    model.getEntries(fileInput.files[0], function(entries) {
      fileList.innerHTML = "";
      entries.forEach(function(entry) {
        var li = document.createElement("li");
        var a = document.createElement("a");
        a.textContent = entry.filename;
        a.href = "#";
        a.style="color:#000";
        a.addEventListener("click", function(event) {
          if (!a.download) {
            download(entry, li, a);
            event.preventDefault();
            return false;
          }
        }, false);
        li.appendChild(a);
        fileList.appendChild(li);
      });
    });
  }else{
        // alert(name);
        var li = document.createElement("li");
        var a = document.createElement("a");
        a.textContent = name;
        a.href = "#";
        a.style="color:#000";

        a.addEventListener("click", function(event) {
          if (!a.download) {
            download(entry, li, a);
            event.preventDefault();
            return false;
          }
        }, false);
        li.appendChild(a);
        fileList.appendChild(li);
    }


  }else{
    var li = document.createElement("li");
        var a = document.createElement("a");
        a.textContent = "File size exceeded! Maximum file size supported is 20mb.";
        a.style = "color:red;";
        a.href = "#";

        a.addEventListener("click", function(event) {
          if (!a.download) {
            download(entry, li, a);
            event.preventDefault();
            return false;
          }
        }, false);
        li.appendChild(a);
        fileList.appendChild(li);


  }
  
  }, false);
})();

})(this);

</script>


<!-- <script>
$(document).ready(function(){
  $('input[name="files"]').change(function(e){
  var $this = $(this), $clone = $this.clone();
  $this.after($clone).appendTo('#file2-input2');
  $this.after($clone).id = 'file-input';
});
});
</script> -->

<!-- <script type="text/javascript" src="<?php echo base_url('resources/js-unzip.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('resources/js-inflate.min.js');?>"></script>
 <script>
 document.getElementById("filepicker").addEventListener("change", function(event) {
var filesInput = document.getElementById("filepicker").files[0];
let output = document.getElementById("listing");
        var res;
        

        var reader = new FileReader();
        reader.readAsBinaryString(filesInput);

        reader.onloadend = function(e){
          alert('2');

            var myZip = e.target.result;                 
            var unzipper = new JSUnzip(myZip);

            unzipper.readEntries();    
            var myFiles = unzipper.entries;    

            for(var i=0; i<myFiles.length; i++) {
              alert('1');
              var item = document.createElement("li");
                var name = myFiles[i].fileName; // This is the file name
                var content = JSInflate.inflate(myFiles[i].data); // this is the content of the files within the zip file.
                item.innerHTML = content;
                if(output.appendChild(item))
                {
                  alert('ouptu');
                }
                document.getElementById("id_popup__footer").style.display = 'block';
                document.getElementById("c-upload__hints").style.display = 'none';
            }
           
        } 
      });  
 </script> -->

<script>
document.getElementById("filepicker").addEventListener("change", function(event) {
  let output = document.getElementById("listing");
  let files = event.target.files;

  for (let i=0; i<files.length; i++) {
    let item = document.createElement("li");
    item.innerHTML = files[i].webkitRelativePath;
    output.appendChild(item);
    document.getElementById("id_popup__footer").style.display = 'block';
    document.getElementById("c-upload__hints").style.display = 'none';

  };
}, false);
</script>

<!-- <script>
    $(document).ready(function(){
		$(".c-popup__footer").hide();
        $('input[type="file"]').change(function(e){
          e.preventDefault();
          var models = $('#models1').val();
          var cat1 = $('#models_categories1').val();
         
          if($.trim(models).length == 0)
              {
              alert("Please Select Model");
               return false;
               }
           if($.trim(cat1).length == 0)
              {
                 alert("Please Select Categories");
               return false;
              }
			var fd = new FormData();
            var files = e.target.files[0];
			      fd.append('file',files);
            
            $.ajax({
              xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        var x = percentComplete.toFixed(0);
                        // $(".progress-bar").width(x + '%');
                        $(".progress-bar").html(x +'%');
                    }
                }, false);
                return xhr;
            },
            url: '<?php echo base_url('welcome/new_uploading');?>',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            beforeSend: function(){
                // $(".progress-bar").width('0%');
                
                $('#uploadStatus').html('<img id="id_of_loader" src="<?php echo base_url('resources/uploadcss/assets/images/LoaderIcon.gif');?>"/>');
                $(".prog_upload").html('<a style="color:#000;">Checking files..</a>');

            },
            error:function(){
                $('#uploadStatus').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
            },
            success: function(response){
                if(response != 0){
                 $('#id_of_loader').hide();
                 $(".progress").hide();
					$(".c-upload__hints").hide();
					$(".c-upload__image").hide();
					
                    $(".filename").html(response); 
					$(".c-popup__footer").show();
					
                }else{
                    alert('file not uploaded');
                }
            },
        });
        });
    });
</script> -->


          <script type="text/javascript" src="<?php echo base_url('resources/zip/zip.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('resources/zip/zip-ext.js');?>"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url('resources/zip/demo2.js');?>"></script> -->
  
  <script src="<?php echo base_url('resources/jquery.form.js');?>"></script>
<script>


(function() {
    
    var bar = $('.progresses-bar');
    var percent = $('.percent');
    var status = $('#status');
       
    $('#new_ac').ajaxForm({
        beforeSend: function() {
          $('.progresses').show();
            status.html('Uploading...');
            var percentVal = '0%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            status.html('Upload Progressing...');
            var percentVal = percentComplete + '%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        success: function() {
          status.html('Upload Completed.');
            var percentVal = '100%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
      complete: function(xhr) {
        status.html('<a>Uploading Complete.</a>');
        window.location.href = "<?php echo base_url('welcome/user_models');?>";
      }
    }); 
    
    })();       

</script>
          <!-- <script>
		
   
      $(document).ready(function(){
        // $(document).on('click','#elementupload', function(e){
        $('input[type="file"]').change(function(e){
          e.preventDefault();
          // 
        var bar = $('#bar')
        var percent = $('#percent');
        var status = $('#status');
        
          var models = $('#models1').val();
          var cat1 = $('#models_categories1').val();

         $('.progresses').show();
          if($.trim(models).length == 0)
              {
              alert("Please Select Model");
               return false;
               }
           if($.trim(cat1).length == 0)
              {
                 alert("Please Select Categories");
               return false;
              }
              var fd = new FormData();
      var files = e.target.files[0];
      // sessionStorage.setItem('files', e.target.files[0]);
      // sessionStorage.setItem('models', models);
      // sessionStorage.setItem('cat1', cat1);

      
        // var fd = new FormData();
        // var files = sessionStorage.getItem('files'); 
        // alert(files);
        // var models = sessionStorage.getItem('models');
        // var cat1 = sessionStorage.getItem('cat1');
      fd.append('file',files);

			fd.append('models_modid',models);
			fd.append('models_categoryid',cat1);

    //   $("#elementupload").click(function(){
    //     alert('true');
    // $(this).data('clicked', true);
    //    });
      //  if(document.getElementById('elementupload').clicked == true) {
        $.ajax({
          xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        var x = percentComplete.toFixed(0);
                        $(".progresses-bar").width(x + '%');
                        $(".progresses-bar").html(x +'%');
                    }
                }, false);
                return xhr;
            },
          url: "<?php echo base_url('welcome/upload_user_mod');?>",
          type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            beforeSend: function(){
                $(".progresses-bar").width('0%');
                $(".prog_upload").html('<a style="color:#000;">Uploading..</a>');

            },
            error:function(){
                $('#status').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
            },
            success: function(data){
              sessionStorage.clear();
             window.location.href = data;
          }
        });
      //  }
      // });
        });
      });
    
  </script> -->

         