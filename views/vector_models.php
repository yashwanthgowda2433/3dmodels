<style>
.static-page__introduction-subtitle {
   
    color: #fff;
    opacity: .7;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.5;
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
.static-page {
    font-family: Open Sans,sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
    color: #555;
    
}
.enterprise .colored-container {
    position: relative;
    padding-top: 40px;
   
}
div {
    display: block;
}
.hero-container {
    display: flex;
    justify-content: center;
    height: 370px;
    /* background: linear-gradient(45deg,#19295a,#2ec3fb); */
}
.hero__content {
    display: flex;
    position: relative;
    align-items: center;
}
/* .static-page__container {
    padding-top:100px;
} */
.static-page__container {
    padding-top:80px;
    margin: 0 auto;
    max-width: 1130px;
    width: calc(100% - 60px);
}
.hero__text {
    text-align: center;
    position: relative;
    width: 100%;
    margin-top:-50px;
    /* min-width: 512px; */
    pointer-events: none;
}

.colored-container:after {
    position: relative;
    min-height: 540px;
    max-height: 1000px;
    padding-top: 0px;
    display: flex;
    flex-direction: column;
    background-color: rgba(0,0,0,.3);
    background: url('<?php echo base_url('uploads/temp/F_MED_Commando_01_baseColor.png');?>');
    /* z-index: -2; */
}
.static-page__introduction-title {
    margin-bottom: 25px;
    color: #fff;
    font-size: 40px;
    font-weight: 300;
    line-height: 1.325;
    text-transform:uppercase;
}

p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
.button1.btn-primary {
    position: relative;
    color: #fff;
    background-color: #1caad9;
    transition: background-color .15s ease;
    border: 0;
    border-color: "";
    border-style: solid;
    border-radius: 4px;
}
.button1.btn-huge {
    min-height: 55px;
    font-size: 14px;
    padding: 0 24px;
}
.hero__text .button1 {
    pointer-events: auto;
}
.hero__model {
    width: 70%;
    height: 650px;
    display: flex;
    position: absolute;
    right: 0;
    align-items: center;
}
.hero__iframe {
    width: 100%;
    position: absolute;
    right: -65px;
    height: 100%;
}

.enterprise__technology-container {
    padding: 48px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 11px 20px 0 rgba(97,108,121,.17);
}
.c-technology-details-container {
    display: flex;
    margin-bottom:40px;
}
.c-technology-detail {
    flex: 1;
}
.c-technology-detail__image {
    padding: 33%;
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: contain;
}
.c-technology-detail__title {
    font-size: 18px;
    padding: 20px 0 10px;
}
.c-technology-detail__subtitle, .c-technology-detail__title {
    color: #555;
    font-size: 14px;
    line-height: 1.35;
    text-align: center;
    margin: 0;
}
.button1.btn-primary:not(.active-popover):hover {
    background-color: #1c88bb;
}
.btn-container:hover .btn-primary.form-button1, .btn-container:hover .button1.btn-primary, .btn-primary.form-button1:not(.active-popover):hover, .button1.btn-primary:not(.active-popover):hover {
    background-color: #1c88bb;
}
.button1.btn-primary:active {
    background-color: #1c88bb;
    box-shadow: inset 0 1px 4px 0 #0e5e79;
}
.button1.btn-primary:hover {
    background-color: #1c88bb;
}
.btn-primary.form-button1:active, .button1.btn-primary:active {
    background-color: #1c88bb;
    box-shadow: inset 0 1px 4px 0 #0e5e79;
}
.btn-primary.form-button1:hover, .button1.btn-primary:hover {
    background-color: #1c88bb;
}
.butto1n.btn-primary {
    position: relative;
    color: #fff;
    background-color: #1caad9;
    transition: background-color .15s ease;
    border: 0;
    border-color: "";
    border-style: solid;
    border-radius: 4px;
}
.button1.btn-huge {
    min-height: 55px;
    font-size: 14px;
    padding: 0 24px;
}
.hero__text .button1 {
    pointer-events: auto;
}
.btn-primary.form-button1, .button1.btn-primary {
    position: relative;
    color: #fff;
    background-color: #1caad9;
    transition: background-color .15s ease;
    border: 0;
    border-color: "";
    border-style: solid;
    border-radius: 4px;
}
.btn-huge.form-button1, .button1.btn-huge {
    min-height: 55px;
    font-size: 14px;
    padding: 0 24px;
}
a:hover {
    color: #1caad9;
}
a:active, a:hover {
    outline: 0;
}
.button1 {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    position: relative;
    font-weight: 700;
    text-align: center;
    text-shadow: none;
    text-transform: uppercase;
    cursor: pointer;
    outline: none;
    transition: background .2s;
    line-height: normal;
    flex-shrink: 0;
}
.button1, .form-button1 {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    position: relative;
    font-weight: 700;
    text-align: center;
    text-shadow: none;
    text-transform: uppercase;
    cursor: pointer;
    outline: none;
    transition: background .2s;
    line-height: normal;
    flex-shrink: 0;
}
.top-transparent~.content {
    padding-top: 0;
}
.content {
    position: relative;
    width: 100%;
    /* min-height: 100vh; */
    padding-top: 56px;
    /* padding-bottom: 405px; */
    overflow: hidden;
    transform: translate(0);
}
.enterprise .static-page__showcase {
    display: flex;
    align-items: center;
}
.static-page__showcase {
    display: flex;
    align-items: center;
    padding-top: 60px;
}
.static-page__content {
    padding: 70px 0 90px;
    margin-bottom: 56px;
}
.static-page .static-page__showcase+.static-page__showcase {
    padding-top: 90px;
}
.enterprise .static-page__showcase {
    display: flex;
    align-items: center;
}
.static-page__showcase {
    display: flex;
    align-items: center;
    padding-top: 60px;
}
.static-page__content {
    padding: 70px 0 90px;
    margin-bottom: 56px;
}
.static-page__content {
    width: 88%;
    max-width: 1400px;
    margin: 0 auto;
}
.static-page__showcase.\--left .static-page__showcase-image {
    order: -1;
}
.enterprise .static-page__showcase-image {
    box-shadow: 0 11px 20px 0 rgba(97,108,121,.17);
}
.static-page__showcase .static-page__showcase-image {
    flex: 0.6666;
}

a {
    color: inherit;
    text-decoration: none;
    cursor: pointer;
}
a {
    background: transparent;
}


.static-page {
    font-family: Open Sans,sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
    color: #555;
}
.static-page__showcase.\--left .static-page__showcase-details {
    margin-left: 60px;
}
.static-page__showcase .static-page__showcase-details {
    flex: 0.3333;
}
.static-page .title {
    line-height: 1.3;
    color: #1caad9;
    margin-bottom: 10px;
}

.static-page__showcase-text {
    margin-bottom: 20px;
}
.enterprise .static-page__showcase .static-page__showcase-button {
    margin-top: 20px;
}
.static-page__content .static-page__introduction {
    width: 83.5%;
}
.static-page__introduction {
    padding-top:40px;
    width: 66.6%;
    margin: auto auto 50px;
    text-align: center;
}
.btn-primary {
    position: relative;
    color: #fff;
    background-color: #1caad9;
    transition: background-color .15s ease;
    border: 0;
    border-color: "";
    border-style: solid;
    border-radius: 4px;
}
.btn-large.form-button, .button1.btn-large {
    min-height: 45px;
    font-size: 12px;
    padding: 0 16px;
}
.parent{
  text-align:center;
}
.home__title {
    margin-bottom: 20px;
    color: #1caad9;
    font-size: 36px;
    font-weight:300;
    line-height:1.2rem;
}
.parent_home{
  margin-top:40px;
  text-align:center;
  margin-bottom:30px;
}
.home__text {
    margin: 0 auto 40px;
    font-size: 16px;
    color: #555;
    max-width: 600px;
}
.home__section {
    padding: 70px 40px;
    text-align: center;
}

.home__section {
    padding: 70px 40px;
    text-align: center;
}

.home__title.\--store {
    color: #df1660;
}
.home__title {
    margin-bottom: 20px;
    color: #1caad9;
    font-size: 36px;
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
.c-store-features {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
section {
    display: block;
}
.home-store__categories-container {
    margin: 20px 0 40px;
    display: flex;
    justify-content: center;
}
.c-store-features__feature {
    flex: 1;
    min-width: 160px;
    max-width: 280px;
    margin: 30px 20px;
    font-size: 14px;
    color: #555;
    text-align: center;
}
.c-store-features__image {
  width:100%;
}
.store-search-bar {
    display: flex;
    width: 100%;
    height: 50px;
    border-radius: 4px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,.1);
    pointer-events: all;
}
.store-search-bar__input {
    width: 100%;
    padding: 15px 30px;
    margin:0px;
    border: none;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    outline: none;
    flex: 1;
}
.store-search-bar__submit-button {
    display: flex;
    padding: 17px 30px;
    /* line-height: 36px; */
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    background-color: #1caad9;
    border: none;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    outline: none;
    transition: background-color .2s ease;
    justify-content: center;
}
.store-search-bar__submit-button:hover {

background-color: #1c88bb;

}
form {
    display: block;
    margin-top: 0em;
}
.store-intro__hero-viewer {
    position: absolute;
    top: 0;
    right: 0;
    width: 60%;
    height: 100%;
    max-height: 580px;
    background: transparent;
    z-index: 0;
    border: none;
    outline: none;
    background-color: hsla(0,0%,100%,.05);
    box-shadow: 0 0 15px hsla(0,0%,100%,.1);
    transition: all .3s ease-in-out;
}
.store-categories__filetypes {
    display: flex;
    margin-bottom: 10px;
    width: 55%;
    /* background: hsla(0,0%,100%,.1); */
    background: #1c88bb9e;
    border-radius: 3px;
    overflow: hidden;
    padding: 0 20px;
    position: absolute;
    top: -75px;
}
ul {
    padding: 0;
    margin: 0;
    list-style-type: none;
}
.store-categories__filetype {
    flex: 1;
    display: flex;
    padding-bottom:10px;
}
.store-categories__filetype p {
    
    margin:0px;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    position: relative;
    padding: 2px 5px 2px 2px;
}
.store-categories {
    z-index: 1;
    pointer-events: all;
    display: flex;
   
    position: absolute;
    bottom: 40px;
    left: 30%;
    width: 74%;
    /* transform: translateX(-50%); */
}
.store-categories__filetype span {
    display: block;
    font-weight: 400;
    font-size: 12px;
    color: #fff;
    white-space: nowrap;
}

.formats {
    opacity:0.7;
}
.formats:hover {
  opacity: 1;
}
.column {
    width:40%;
}
.store-intro {
    position: relative;
    min-height: 360px;
    max-height: 900px;
    padding-top: 0px;
    display: flex;
    flex-direction: column;
    background-image: linear-gradient(0deg, skyblue 0%, steelblue 100%);
    /* background-color: rgba(0,0,0,.3); */
    /* background: url('<?php echo base_url('uploads/temp/F_MED_Commando_01_baseColor.png');?>'); */
}
.disc_title{
    font-size:35px;
    font-weight:300;
    /* width:65%; */
    margin:auto;
    margin-bottom:35px;
}
.search-forms{
    width:70%;
    margin:auto;
}
@media (max-width:1130px) and (min-width:300px){
    .hero__text{
        margin-top:0px;
    }
    .static-page__container {
   padding-top:45px;
    }
    .search-forms{
    width:100%;
    margin:auto;
}
    .disc_title{
    font-size:35px;
    font-weight:300;
    width:100%;
    margin:auto;
    margin-bottom:30px;
}
  .dropdowns{
    display:none
  }
  .myforum{
  width:95%;
}
.banner-h21{
  width:36%;
  padding-top:0px;
  font-size:19px;
}
.home-header{
  width:90%;
  height:auto;
  margin-left:-1px;
  margin-right:-1px;
}
.banner-h21{
  width: 80%;
    margin-left: auto;
    margin-right: auto;
    font-size: 14px;
    color: rgb(248, 248, 248);
    line-height: 1.2;
}
.search-heading{
  margin-top:50px;
  width:90%;
  margin:auto;
}
.examples-row{
  margin-top:0px;
  width:70%;
  margin:auto;
  margin-bottom:30px;
  margin-top:10px;
}
.home__text{
  width:95%;
}
.tabs-home{
  width:100%;
  margin:auto;
  border:none;
}
.tab button{
  display:flex;
  font-size:10px;
  width:20%;
  height:40px;
}
.box{
  width:100%;
}
.span-logos{
  width:75%;
}
.middle{
  width:85%;
}
.hero__text{
    position: relative;
    width: 100%;
    min-width: 0px;
    pointer-events: none;
}
.store-categories {
    padding-bottom:40px;
    position: relative;
    width:100%;
    left: auto;
    transform: none;
    bottom: 0;
    margin-top: 20px;
    /* margin-bottom: -25px; */
}
.store-categories__filetypes {
    flex-wrap: wrap;
    margin-bottom: 20px;
    position: relative;
    top: 10px;
}
.hero__content {
    position:none;
    height:auto;
    /* background: linear-gradient(45deg,#19295a,#2ec3fb); */
}
.hero-container{
    /* display:block; */
}
.store-categories__filetypes{
    width:100%;
}
.store-intro {
    /* min-height: 850px; */
}
}
.but-class{
    position: relative;
    padding: 4px 4px 4px 6px;
    margin-left:20px;
}

}
</style>

<div class="content">
<div class="store-intro" style="background-image: linear-gradient(0deg, skyblue 0%, steelblue 100%);">
     
    
        <div class="static-page__container">
                <div class="hero__text">
                    <p class="static-page__introduction-title disc_title" style="font-weight: 500;font-size:35px;text-shadow: 0 1px 0 #ccc, 0 2px 0 #c5c5c5, 0 6px 0 transparent, 
                0 7px 0 transparent, 0 8px 0 transparent, 0 9px 0 transparent, 0 10px 10px rgba(0, 0, 0, 0.4);">Get high-quality vector backgrounds,<br/> clip art, icons, and illustrations in scalable format.</p>
                    <!-- <p class="static-page__introduction-subtitle">
                    High-quality Vectors for VFX, game development, VR/AR, architecture, and animation. Inspect every mesh and texture before you buy.
                    </p> -->
                    
                 <form class="store-search-bar js-search-form search-forms" action="<?php echo base_url('welcome/vector_home');?>" method="get">
                    <input class="store-search-bar__input" name="search" placeholder="Search Vectors">
                    <button class="store-search-bar__submit-button" type="submit">search</button>
                </form>
               
                
                </div>
                <!-- <iframe id="hero-viewer" class="store-intro__hero-viewer viewer --ready" src="https://sketchfab.com/models/c2f07e17772d46d89c9db508759744a9/embed?api_version=1.5.1&amp;api_id=1_hero-viewer&amp;autostart=1&amp;camera=0&amp;internal=1&amp;max_texture_size=1024&amp;preload=1&amp;scrollwheel=0&amp;sound_enable=0&amp;transparent=1&amp;ui_animations=0&amp;ui_annotations=0&amp;ui_controls=0&amp;ui_fadeout=0&amp;ui_fullscreen=0&amp;ui_help=0&amp;ui_infos=0&amp;ui_inspector=1&amp;ui_settings=0&amp;ui_snapshots=0&amp;ui_stop=0&amp;ui_theatre=0&amp;ui_watermark=0" data-files="1" data-src="https://sketchfab.com/models/c2f07e17772d46d89c9db508759744a9/embed?autostart=1&amp;camera=0&amp;internal=1&amp;max_texture_size=1024&amp;preload=1&amp;scrollwheel=0&amp;sound_enable=0&amp;transparent=1&amp;ui_animations=0&amp;ui_annotations=0&amp;ui_controls=0&amp;ui_fadeout=0&amp;ui_fullscreen=0&amp;ui_help=0&amp;ui_infos=0&amp;ui_inspector=1&amp;ui_settings=0&amp;ui_snapshots=0&amp;ui_stop=0&amp;ui_theatre=0&amp;ui_watermark=0" width="500" height="300" allowtransparency="true" allowvr="" allowfullscreen="" mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="" allow="vr; autoplay; fullscreen">
        </iframe> -->
        
        <script>
        $(document).ready(function(){
        $('#extx').on('click', function(){
            $('input:checkbox[id=fbx]').attr('checked',true);
            window.location = '<?php echo base_url('welcome/ddd_models_home');?>'
        });
    });
        </script>
        <div class="store-categories">
                <ul class="store-categories__filetypes">
                    
                    
                    <li class="store-categories__filetype --fbx">
                    <form action="<?php echo base_url('welcome/vector_home');?>" method="get">
                    <input type="hidden" value="psd" name="exts">
                    <button class="but-class" type="submit" style="text-align:center;width:90px;">
                    <div class="formats">
                    <div class="column" style="margin-top:5px;margin-right:5px;">
                     <img style="width:40px;height:40px;" src="<?php echo base_url('resources/icons/psdd.png');?>">
                    </div>
                     <div class="column" style="margin-top:10px;">
                        <p title="PSD Vectors" style="margin-left:-3px;"> 
                        &nbsp;&nbsp;PSD<span>&nbsp;&nbsp;Vectors&nbsp;&nbsp;</span></p>
                        </div>
                        </div>
                 </button>
                 </form>
                    </li>
                    
                    <li class="store-categories__filetype --fbx">
                    <form action="<?php echo base_url('welcome/vector_home');?>" method="get">
                    <input type="hidden" value="ai" name="exts">
                    <button class="but-class" type="submit" style="text-align:center;width:90px;">
                    <div class="formats">
                    <div class="column" style="margin-top:5px;margin-right:5px;">
                     <img style="width:40px;height:40px;" src="<?php echo base_url('resources/icons/aii.png');?>">
                    </div>
                     <div class="column" style="margin-top:10px;">
                        <p title="AI Vectors" style="margin-left:-3px;"> 
                        &nbsp;&nbsp;AI&nbsp;<span>&nbsp;&nbsp;Vectors&nbsp;&nbsp;</span></p>
                        </div>
                    </div>
                     </button>
                 </form>
                    </li>
                    
                    <li class="store-categories__filetype --fbx">
                    <form action="<?php echo base_url('welcome/vector_home');?>" method="get">
                    <input type="hidden" value="eps" name="exts">
                    <button class="but-class" type="submit" style="text-align:center;width:90px;">
                    <div class="formats">
                    <div class="column" style="margin-top:5px;margin-right:5px;">
                     <img style="width:40px;height:40px;" src="<?php echo base_url('resources/icons/epss.png');?>">
                    </div>
                     <div class="column" style="margin-top:10px;">
                        <p title="EPS Vectors" style="margin-left:-3px;"> 
                        &nbsp;&nbsp;EPS<span>&nbsp;&nbsp;Vectors&nbsp;&nbsp;</span></p>
                        </div>
                        </div>
                        </button>
                 </form>
                    </li>
                    
                    <li class="store-categories__filetype --fbx">
                    <form action="<?php echo base_url('welcome/vector_home');?>" method="get">
                    <input type="hidden" value="svg" name="exts">
                    <button class="but-class" type="submit" style="text-align:center;width:90px;">
                    <div class="formats">
                    <div class="column" style="margin-top:5px;margin-right:5px;">
                     <img style="width:40px;height:40px;" src="<?php echo base_url('resources/icons/svgg.png');?>">
                    </div>
                     <div class="column" style="margin-top:10px;">
                        <p title="SVG Vectors" style="margin-left:-3px;"> 
                        &nbsp;&nbsp;SVG<span>&nbsp;&nbsp;Vectors&nbsp;&nbsp;</span></p>
                        </div>
                        </div>
                        </button>
                 </form>
                    </li>
                    
                    
                    
                </ul>
             </div>
            </div>
            
        </div>
         
        
    </div>
</div>
</div>
<!-- <div class="banner" style="width:100%;margin-left:-1px;margin-right:-1px;border:1px solid #fff;background: linear-gradient(45deg,#19295a,#2ec3fb);">

 <h2 class="banner-h2">Publish & find 3D models online</h2>

<p class="banner-h21 static-page__introduction-subtitle" style="padding-top:20px;">Find everything Vectors, Video Templates, 3D Models Low poly assets to animated rigs, assets are ready for Virtual Reality and Augmented Reality projects and also Solutions for Business.
</p>
<p class="banner-h22 static-page__introduction-subtitle">Assets are FREE for Personal and Commercial Use.</p>
<p class="banner-h23 static-page__introduction-subtitle">Get inspired. Showcase your skills. Learn more from community members.</p> 
<button class="button banner-joinfree" onclick="window.location.href='#popupsignup'">Join for Free</button>
</div> -->

<!-- models -->
<div class="contents" style="background-color: #f2f2f2; padding:20px;margin-bottom:-18px;">
  
  <div class="wrapper">
        <!-- <div class="parent_home">
           <h2 class="home__title">
                Vectors
            </h2>
    
        </div> -->
       
  <section class="boxes" id="load_data1" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
      
        
       
        
  </section>
       
  </div>
 

  
  <div class="addcopilot" style="margin-top:20px;">
      <div class="parent">
        <a class="button1 btn-primary btn-large" onclick="window.location.href='#popupsignup'">
                    JOIN 3DCOPILOT
                </a>
        </div>
  </div>
</div>


<button id="popup_href" onclick="window.location.href='#popup_paid'"></button>
 <button id="popup_hrefs" onclick="window.location.href='#popup_free'"></button>
 <button id="popup_addto" onclick="window.location.href='#popupaddto'"></button>
 <button id="popup_download" onclick="window.location.href='#popupdownload'"></button>

 <input type="hidden" id="cat_id" name="cat_id" value="2">
 <script>
   
   $(document).ready(function(){
      
      var mod = $('#cat_id').val();
     
     var limit = 40;
     var start = 0;
     
     var action = 'inactive';
 
     function lazzy_loader(limit)
     {
       var output = '';
       for(var count=0; count<limit; count++)
       {
         output += '<div class="post_data" id="but_ton" >';
         output += '<a class="button" style="margin:0;border-radius:0px 0px 0px 0px; padding:80px;background:url();background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>';
         output += '<div class="our-models">';
         output += '<a class="model_name" style="color:#555; float:left;"></a>';
         output += '<a class="model_price" style="float:right;color:#555;"><span style="color: rgb(241, 57, 88);">&nbsp;/span></a>';
         output += '</div>';
         output += '</div>';
       }
       $('#load_data_message').html(output);
       
     }
 
     lazzy_loader(limit);
 
     function load_data(limit, start)
     {
       $.ajax({
         url:"<?php echo base_url(); ?>welcome/fetch_3dmodels",
         method:"POST",
         data:{limit:limit, start:start, mod:mod},
         cache: false,
         success:function(data)
         {
           if(data == '')
           {
             $('#load_data_message').html('<h3>No More Result Found</h3>');
             action = 'active';
           }
           else
           {
             $('#load_data1').append(data);
             $('#load_data_message').html("");
            //$('.post_data').click(function(){
               //$('#popup_href').trigger("click");
               //$('#display_model').replaceWith();
             //});
             
             action = 'inactive';
           }
         }
       });
      
     }
 
 
     
 
 
     if(action == 'inactive')
     {
       action = 'active';
       load_data(limit, start);
     }
 
     // $('#loadbtn').click( function(){
     //   if(action == 'inactive')
     //   {
     //     lazzy_loader(limit);
     //     action = 'active';
     //     start = start + limit;
     //     setTimeout(function(){
     //       load_data(limit, start);
     //     }, 1000);
     //   }
     // });
 
   });
 
   
 </script>



  
