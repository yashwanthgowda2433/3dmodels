<style>
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
    height: 360px;
    /* background: linear-gradient(45deg,#19295a,#2ec3fb); */
}
.hero__content {
    display: flex;
    position: relative;
    align-items: center;
}
.static-page__container {
    margin: 0 auto;
    max-width: 1130px;
    width: calc(100% - 60px);
}
.hero__text {
    position: relative;
    width: 40%;
    margin-top:-20px;
    min-width: 512px;
    pointer-events: none;
}

.colored-container:after {
    content: "";
    position: absolute;
    bottom:150px;
    top: 0;
    right: 0;
    
    left: 0;
    /* background: linear-gradient(45deg,#19295a,#2ec3fb); */
    background-image: linear-gradient(0deg, skyblue 0%, steelblue 100%);
    z-index: -2;
}
.static-page__introduction-title {
    text-transform:uppercase;
    text-shadow: 0 1px 0 #ccc, 0 2px 0 #c5c5c5, 0 6px 0 transparent, 
                0 7px 0 transparent, 0 8px 0 transparent, 0 9px 0 transparent, 0 10px 10px rgba(0, 0, 0, 0.4);
    margin-bottom: 25px;
    color: #fff;
    font-size: 35px;
    font-weight: 300;
    line-height: 1.325;
}
.static-page__introduction-subtitle {
    margin: 0 0 40px;
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
.button.btn-primary {
    position: relative;
    color: #fff;
    background-color: #1caad9;
    transition: background-color .15s ease;
    border: 0;
    border-color: "";
    border-style: solid;
    border-radius: 4px;
}
.button.btn-huge {
    min-height: 55px;
    font-size: 14px;
    padding: 0 24px;
}
.hero__text .button {
    pointer-events: auto;
}
.hero__model {
    width: 50%;
    height: 550px;
    display: flex;
    margin-top:-80px;
    position: absolute;
    right: 0;
    align-items: center;
}
.hero__iframe {
    width: 100%;
    position: absolute;
    right: -65px;
    height: 80%;
}
.static-page__container {
    margin: 0 auto;
    /* margin-bottom:30px; */
    max-width: 1130px;
    width: calc(100% - 60px);
}
.enterprise__technology-container {
    padding: 48px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 11px 20px 0 rgba(97,108,121,.17);
}
/* .c-technology-details-container {
    display: flex;
} */
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
.button.btn-primary:not(.active-popover):hover {
    background-color: #1c88bb;
}
.btn-container:hover .btn-primary.form-button, .btn-container:hover .button.btn-primary, .btn-primary.form-button:not(.active-popover):hover, .button.btn-primary:not(.active-popover):hover {
    background-color: #1c88bb;
}
.button.btn-primary:active {
    background-color: #1c88bb;
    box-shadow: inset 0 1px 4px 0 #0e5e79;
}
.button.btn-primary:hover {
    background-color: #1c88bb;
}
.btn-primary.form-button:active, .button.btn-primary:active {
    background-color: #1c88bb;
    box-shadow: inset 0 1px 4px 0 #0e5e79;
}
.btn-primary.form-button:hover, .button.btn-primary:hover {
    background-color: #1c88bb;
}
.button.btn-primary {
    position: relative;
    color: #fff;
    background-color: #1caad9;
    transition: background-color .15s ease;
    border: 0;
    border-color: "";
    border-style: solid;
    border-radius: 4px;
}
.button.btn-huge {
    min-height: 55px;
    font-size: 14px;
    padding: 0 24px;
}
.hero__text .button {
    pointer-events: auto;
}
.btn-primary.form-button, .button.btn-primary {
    position: relative;
    color: #fff;
    background-color: #1caad9;
    transition: background-color .15s ease;
    border: 0;
    border-color: "";
    border-style: solid;
    border-radius: 4px;
}
.btn-huge.form-button, .button.btn-huge {
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
.button {
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
.button, .form-button {
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
    min-height: 100vh;
    padding-top: 60px;
    /* padding-bottom: 405px; */
    overflow: hidden;
    -webkit-transform: translate(0);
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
    width: 75%;
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

.home__title {
    margin-bottom: 20px;
    color: #1caad9;
    font-size: 36px;
}
.home__title {
    margin-bottom: 20px;
    color: #1caad9;
    font-size: 36px;
    font-weight: 300;
    /* line-height: 1.2rem; */
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
    flex: 0.4333;
    line-height:2em;
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
@media (max-width: 800px){
.static-page__showcase.--center, .static-page__showcase.--left, .static-page__showcase.--right {
    flex-direction: column;
    /* margin-left:20px; */
}

}
@media (max-width: 800px){
.static-page__showcase.--center, .static-page__showcase.--left, .static-page__showcase.--right {
    flex-direction: column;
}
}
.c-store-features {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
section {
    display: block;
}
.c-store-features__feature {
    flex: 1;
    min-width: 200px;
    max-width: 280px;
    margin: 30px 20px;
    font-size: 14px;
    color: #555;
    text-align: center;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    list-style: none;
    font-family: 'Montserrat', sans-serif;
}
.contactforms{
    margin:auto;
    width:40%;
    background:#fff;
    margin-bottom:40px;
    border-radius:8px;
}
.contact-form{
    color:rgb(151, 149, 149);
    margin-left: 20px;
    margin-top: 40px;
}
.contact-textarea{
    border-radius:4px;
    background-color: rgb(231, 231, 231);
    font-size: 14px;
    
}
.span-logos{
    width:45%;
}
@media (max-width: 800px){
.static-page__showcase.--center, .static-page__showcase.--left, .static-page__showcase.--right {
    flex-direction: column;
}
}
@media (max-width: 800px){
.static-page__showcase.--center, .static-page__showcase.--left, .static-page__showcase.--right {
    flex-direction: column;
}
}
.texts-cols{
    width:93%;
    margin-top: 5px;
    margin-left: 20px;
    margin-right:20px;
}
.texts-cols1{
    width:44%;
    float:left;
    margin-left:20px;
}
.texts-cols2{
    width:44%;
    float:right;
    margin-right:20px;
}
@media (max-width:700px) and (min-width:300px){
    .c-technology-detail__subtitle, .c-technology-detail__title {
        padding-top:0px;
    }

    .contact-form{
        padding-left:10px;
    }
    .texts-cols1{
    width:44%;
    float:left;
    margin-left:10px;
}
.texts-cols2{
    width:44%;
    float:right;
    margin-right:10px;
}
    .texts-cols{
    width:93%;
    margin-top: 5px;
    margin-left: 10px;
    margin-right:10px;
}
    .hero-container {
    height:640px;
    }
    .static-page__showcase-button{
        width:50%;
    margin: auto;
    display: flex;
    }
    .static-page__showcase.\--left .static-page__showcase-details {
    margin-left: 0px;
}
    .hero__model {
    width: 70%;
    margin-top: 250px;
    height: 200px;
    display: flex;
    position: absolute;
     right: 100px; 
    align-items: center;
}
    .hero__text{
        width:100%;
        min-width:0px;
        margin-top:-200px;
    }
    .middle{
        padding:20px;
    }
    .span-logos{
    width:100%;
}
    textarea{
        max-width:100%;
    }
    .contactforms{
    margin:auto;
    width:90%;
    background:#fff;
    margin-bottom:40px;
    border-radius:8px;
}
.contact-form{
    color:rgb(151, 149, 149);
    margin-left: 0px;
    margin-top: 40px;
}
}
@media (max-width: 800px){
.static-page .title {
    margin-bottom: 20px;
    font-size: 26px;
}
h3{
    font-size:20px;
    padding:4px;
    color:#333;
}

}
@media (max-width: 480px){
.static-page__showcase.--center .static-page__showcase-details, .static-page__showcase.--left .static-page__showcase-details, .static-page__showcase.--right .static-page__showcase-details {
    margin: 0 0 30px;
}
}
@media (max-width: 800px){
.static-page__showcase.--center .static-page__showcase-details, .static-page__showcase.--left .static-page__showcase-details, .static-page__showcase.--right .static-page__showcase-details {
    width: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin: 0 30px 30px;
}
}
@media (max-width: 950px){
.static-page__showcase.--right .static-page__showcase-details {
    margin-right: 20px;
}
}
@media (max-width: 480px){
.static-page__showcase.--vertical-image-first .static-page__showcase-image {
    order: -1;
    margin-bottom: 20px;
}
}
@media (max-width: 800px){
.static-page__showcase.--vertical-image-first .static-page__showcase-image {
    order: -1;
    margin-bottom: 30px;
}
}
@media (max-width: 800px){
.static-page__showcase.--center .static-page__showcase-image, .static-page__showcase.--left .static-page__showcase-image, .static-page__showcase.--right .static-page__showcase-image {
    order: 1;
    width: 100%;
}

.static-page__showcase.--right .static-page__showcase-image {
    order: 1;
}
}
@media (max-width: 480px){
.static-page__showcase.--vertical-image-first .static-page__showcase-image {
    order: -1;
    margin-bottom: 20px;
}
}
@media (max-width: 800px){
.static-page__showcase.--vertical-image-first .static-page__showcase-image {
    order: -1;
    margin-bottom: 30px;
}
}
h3{
    color:#000;
}
.c-store-features__feature1 {
    flex: 1;
    min-width: 130px;
    max-width: 0px;
    margin: 30px 20px;
    font-size: 14px;
    color: #555;
    text-align: center;
}
.c-store-features__image {
  width:100%;
}
@media (max-width:700px) and (min-width:300px){
    .c-store-features__feature {
     margin: 0px 0px;
    }
}
</style>
<div class="content">
<div class="static-page">
<div class="colored-container">
        <div class="hero-container">
        
            <div class="static-page__container hero__content">
                <div class="hero__text">
                    <p class="static-page__introduction-title" style="margin-top: 0px;font-weight: 500;">3Dcopilot Solutions for Business</p>
                    <p class="static-page__introduction-subtitle">
                        3Dcopilot is one of the leading in Multimedia designing and one of the largest community of Artists.
                        Learn about our unique solutions for business
                    </p>
                    <div class="enterprise__intro-actions">
                        <a onclick="window.location.href='#popupcontactus'" class="button1 btn-primary btn-large">Get in touch</a>
                    </div>
                </div>
                <div class="hero__model">
                    
                        
   
                     <model-viewer class="hero__iframe" src="<?php echo base_url('resources/images/mc-laren/source/McLaren.glb');?>" style="background: transparent;"
              ar
              auto-rotate camera-controls
			  camera-orbit="-20deg 75deg 2m"
			  
              shadow-intensity="1"
              alt="A 3D model of an buster_drone">
          </model-viewer>
                </div>
            </div>
        </div>

        <div class=" static-page__container">
            <div class="c-technology-details-container enterprise__technology-container" style="margin-bottom: 40px;">
                
            <section class="c-store-features">
                   <article class="c-store-features__feature">
    <div class="c-technology-detail__image" title="3D Services" style="background-image: url('<?php echo base_url('resources/images/3dmodels.jpg');?>')">
    </div>
    <div class="c-technology-detail__info">
        <h3 class="c-technology-detail__title">3D Services</h3>
        <p class="c-technology-detail__subtitle">
            
        </p>
    </div>
</article>

                
<article class="c-store-features__feature">
    <div class="c-technology-detail__image" title="Design Services" style="background-image: url('<?php echo base_url('resources/images/des.jpg');?>')">
    </div>
    <div class="c-technology-detail__info">
        <h3 class="c-technology-detail__title">Design Services</h3>
        <p class="c-technology-detail__subtitle">
            
        </p>
    </div>
</article>

                
<article class="c-store-features__feature">
    <div class="c-technology-detail__image" title="Video Services" style="background-image: url('<?php echo base_url('resources/images/video_services.jpg');?>')">
    </div>
    <div class="c-technology-detail__info">
        <h3 class="c-technology-detail__title">Video Services</h3>
        <p class="c-technology-detail__subtitle">
            
        </p>
    </div>
</article>

                
<article class="c-store-features__feature">
    <div class="c-technology-detail__image" title="Visual Effects(VFX)" style="background-image: url('<?php echo base_url('resources/images/city.jpg');?>')">
    </div>
    <div class="c-technology-detail__info">
        <h3 class="c-technology-detail__title">Visual Effects(VFX)</h3>
        <p class="c-technology-detail__subtitle">
            
        </p>
    </div>
</article>



            </div>
        </div>
    </div>

</div>
</div>

    <section class="static-page__section-background">

        <div class="static-page__content static-page__showcase --left --vertical-image-first">
            <a target="_blank" href="/features/teams" class="static-page__showcase-image">
                <img src="<?php echo base_url('resources/images/3dmodels.jpg');?>"
                 style="width:100%;height:100%;">
            </a>
            <div class="static-page__showcase-details">
                <h3 class="title">
                3D Design Services
                </h3>
                <div class="static-page__showcase-text">
                We have created a prominent identity in the 3D Design landscape with our expert 3D designers adopting an attention-to-detail approach
                     to craft unique 3D models while taking key specifications into account.
                   
                </div>
                <a class="static-page__showcase-button button1 btn-large btn-primary" href="<?php echo base_url('welcome/ddd_services');?>">Learn&nbsp;more</a>
            </div>
        </div>

        <div class="static-page__content static-page__showcase --right --vertical-image-first">
            <div class="static-page__showcase-details">
                <h3 class="title">
                Graphic Design Services
                </h3>
                <div class="static-page__showcase-text">
                There's no limit to what you can get designed at 3Dcopilot. Whether you're looking for a spectacular new logo or some stunning flyers, 
                    the talented global community of designers at 3Dcopilot can make it happen.
        
               </div>
                <a class="static-page__showcase-button button1 btn-large btn-primary" href="<?php echo base_url('welcome/graphic_design_services');?>">Learn&nbsp;more</a>
            </div>
            <a target="_blank" href="" rel="noopener noreferrer nofollow" class="static-page__showcase-image">
                <img style="width:100%;height:100%;" src="<?php echo base_url('resources/images/des.jpg');?>" alt="made furniture as a 3D product">
            </a>
        </div>

        <div class="static-page__content static-page__showcase --left --vertical-image-first">
            <a target="_blank" href="" rel="noopener noreferrer nofollow" class="static-page__showcase-image">
                <img style="width:100%;" src="<?php echo base_url('resources/images/video_services.jpg');?>" alt="Zodica configurator">
            </a>
            <div class="static-page__showcase-details">
                <h3 class="title">
                Video Services
                </h3>
                <div class="static-page__showcase-text">
                Video has come a long way since killing the radio star. It accounts for 80% of all internet traffic and, every year, mobile video consumption increases by 100%. 
                    On average, users share video 1,200% more than links and text posts combined.
                </div>
                <a class="static-page__showcase-button button1 btn-large btn-primary" href="<?php echo base_url('welcome/video_services');?>">Learn&nbsp;more</a>
            </div>
        </div>

        <div class="static-page__content static-page__showcase --right --vertical-image-first">
            <div class="static-page__showcase-details">
                <h3 class="title">
                Visual Effects(VFX)
                </h3>
                <div class="static-page__showcase-text">
                Our VFX team develops high-quality visual effects for advertising agencies, videographers, film studios, individual filmmakers and many more businesses.
        
               </div>
                <a class="static-page__showcase-button button1 btn-large btn-primary" href="<?php echo base_url('welcome/vfx');?>">Learn&nbsp;more</a>
            </div>
            <a target="_blank" href="" rel="noopener noreferrer nofollow" class="static-page__showcase-image">
                <img style="width:100%;" src="<?php echo base_url('resources/images/city.jpg');?>" alt="made furniture as a 3D product">
            </a>
        </div>

       
    </section>


<!-- 
    <div style="width:100%;">
    <div class="middle" style="width:80%;background: linear-gradient(45deg,#19295a,#2ec3fb);margin-top:30px">
<div class="middle" style="width:84%;">
  <h2 class="banner-h2" style="color:#fff;text-align:center;font-size: 26px;margin-top: 0px;">Share and Embed 3D models anywhere online</h2>
  <div class="row" style="width:100%;padding-top:25px;padding-left:0px;">
    <div class="span3 features span-logos">
      <img class="icon-circled icon-128 icon-suitcase left" style="width:60px;height:60px;color:blue;padding:0px;" src="<?php echo base_url('resources/');?>icons/crown.png">
      <h4 style="color:#fff;font-weight: 100;">Market-leading 3D player for the web.</h4>  
    </div>
    <div class="span3 features span-logos">
      <img class="icon-circled icon-128 icon-suitcase left" style="width:60px;height:60px;color:blue;padding:0px;" src="<?php echo base_url('resources/');?>icons/crown.png">
      <h4 style="color:#fff;font-weight: 100;">Interactive and configurable VR and AR ready.</h4>  
    </div>
  </div>
  <div class="row" style="width:100%;padding:0px">
    <div class="span3 features span-logos">
      <img class="icon-circled icon-128 icon-suitcase left" style="width:60px;height:60px;color:blue;padding:0px;" src="<?php echo base_url('resources/');?>icons/crown.png">
      <h4 style="color:#fff;font-weight: 100;">Works with all operating systems, browsers and devices.</h4>  
    </div>
    <div class="span3 features span-logos">
      <img class="icon-circled icon-128 icon-suitcase left " style="width:60px;height:60px;color:blue;padding:0px;" src="<?php echo base_url('resources/');?>icons/crown.png">
      <h4 style="color:#fff;font-weight: 100;">Embeddable everywhere, for eCommerce, advertising and social media.</h4>  
    </div>
</div>
</div>
</div>
</div> -->


<div class="trusted-links" style="background:#e2f6fcf0;">
    <h2 class="trusted-header home__title" style="margin-bottom:0px;">Trusted by Leading Brands</h2>
    <div class="trusted-style" style="margin-top:0px;">
      <section class="c-store-features">

      <?php 
      $this->db->select('*');
      $this->db->from('partners');
      $query = $this->db->get();
      

      if($query)
      {
        foreach($query->result() as $row)
        {
       
        
        echo '<article class="c-store-features__feature1">
        <img class="c-store-features__image" src='.$row->path.' alt='.$row->alt.'>
    </article>';
        }
      }
      
      ?>
        
        <!-- <article class="c-store-features__feature1">
            <img class="c-store-features__image" src="<?php echo base_url('resources/icons/y8.png');?>">
        </article>
        <article class="c-store-features__feature1">
            <img class="c-store-features__image" src="<?php echo base_url('resources/icons/zenra.jpeg');?>">
        </article>
        <article class="c-store-features__feature1">
            <img class="c-store-features__image" src="<?php echo base_url('resources/icons/Digital.png');?>">
        </article>
        <article class="c-store-features__feature1">
            <img class="c-store-features__image" src="<?php echo base_url('resources/icons/highbrow.png');?>" style="margin-top:30px;">
        </article> -->
        <!-- <article class="c-store-features__feature1">
            <img class="c-store-features__image" src="<?php echo base_url('resources/icons/uom.png');?>" style="margin-top:-30px;">
        </article> -->
        <!-- <article class="c-store-features__feature1">
            <img class="c-store-features__image" src="<?php echo base_url('resources/icons/piyasol.png');?>">
        </article>
         <article class="c-store-features__feature1">
            <img class="c-store-features__image" src="<?php echo base_url('resources/icons/id.jpg');?>" style="margin-top:30px;">
        </article>
        <article class="c-store-features__feature1">
            <img class="c-store-features__image" src="<?php echo base_url('resources/icons/curexp.png');?>" style="margin-top:25px;">
        </article> -->
        
        
       </section>
      
   </div>
  
</div>

<!-- <div class="row" id="contact-form" style="margin:0px;width:100%;background: linear-gradient(45deg,#19295a,#2ec3fb);margin-bottom:-18px;">
            <div class="static-page__introduction">
                <h2 style="color:#fff;font-weight:300;font-size:36px;line-height:1.3;">Contact Us to Discuss 3D Solutions</h2>
            </div>
            <div class="row contactforms">
            <div class="signup-body">
                <form method="post" action="<?php echo base_url('welcome/contact_form');?>">

                <div class="row" style="margin: 0px;width:100%;">
                  <div class="row" style="margin-bottom: 0px;padding-top:20px;margin-left:20px;">
                      <a style="color:#333;">Name<span style="color:red">*</span></a>
                  </div>
                  <div class="row" style="margin:0px;width:100%;">
                  <div class="column texts-cols1">
                     <input type="text" name="first_name" style="border-radius:4px;margin-bottom:0px;" placeholder="First name" required>
                    
                   </div>
                   <div class="column texts-cols2">
                       <input type="text" name="last_name" style="border-radius:4px;margin-bottom:0px;" placeholder="Last name" required>
                      
                    </div>
                </div>
               
               </div>

               <div class="row" style="margin: 0px;width:100%;margin-top:15px;">
                  <div class="row" style="margin-bottom: 0px;margin: 0px;margin-left:20px;">
                      <a style="color:#333;">Interested in<span style="color:red">*</span></a>
                  </div>
                  <div class="column" style="width:30%;margin-top: 5px;">
                  <select name="select" style="margin-left: 20px;width:100%;height:30px;">
                     <option  id="myOption" label="select">select<i class="fa fa-caret-down"></i></option>   
                     <option value="3d models">3D models</option>
                     <option value="vectors">Vectors</option>
                    <option value="photos">Photos</option>
                    <option value="video templates">Video Templates</option>
                    <option value="360° Assets">360° Assets</option>
                    
                </select>
                  </div>
               </div>

               <div class="row" style="margin: 0px;width:100%;margin-top:15px;">
                  <div class="row" style="margin-bottom: 0px;">
                      <a style="color:#333;">Email<span style="color:red">*</span></a>
                  </div>
                  <div class="column texts-cols">
                     <input type="text" name="email" placeholder="what is your email address?" style="border-radius:4px;margin-bottom:0px;margin:0px;"required>
                  </div>
               </div>

               <div class="row" style="margin: 0px;width:100%;margin-top:15px;">
                  <div class="row" style="margin-bottom: 0px;">
                      <a style="color:#333;">Phone Number<span style="color:red">*</span></a>
                  </div>
                  <div class="column texts-cols">
                     <input type="text" name="phno" style="border-radius:4px;margin-bottom:0px;margin:0px;"required>
                  </div>
               </div>

               <div class="row" style="margin: 0px;width:100%;margin-top:15px;">
                  <div class="row" style="margin-bottom: 0px;">
                      <a style="color:#333;">Company<span style="color:red">*</span></a>
                  </div>
                  <div class="column texts-cols">
                     <input type="text" name="company" placeholder="what is the name of your company?" style="border-radius:4px;margin-bottom:0px;margin:0px;"required>
                  </div>
               </div>

               <div class="row" style="margin: 0px;width:100%;margin-top:15px;">
                  <div class="row" style="margin-bottom: 0px;">
                      <a style="color:#333;">Message<span style="color:red">*</span></a>
                  </div>
                  <div class="row texts-cols">
                      <textarea id="description" class="contact-textarea" spell-check="true" style="width:100%;margin-bottom:0px;resize:none" rows="5" cols="75" name="message" placeholder="Please let us know more about your project." required>
              
                      </textarea>
                  </div>
               </div>
               <div class="row" style="margin: 0px;width:100%;margin-bottom:20px;">
                  <div class="column texts-cols">
                      <button class="button1 btn-full btn-huge btn-primary" type="submit" style="width:100%;">submit</button>
                  </div>
               </div>
               <?php
                    echo $this->session->flashdata("contacterror");
               ?>
               </form>
        </div>
   </div>

    
</div>
    </div> -->
 

    <div class="home__section" id="contact-form" style="margin-bottom: -20px;text-align:center;padding: 70px 40px;margin-bottom:-18px;">
            <div class="static-page__container">
            <div class="parent_home">
           <!-- <h2 class="home__title">
           Contact Us to Discuss 3D Solutions
            </h2> -->
    
        </div>
        <!-- <p class="home__text">
       
                Get inspired. Showcase your skills. Learn from millions of community members.
            </p> -->
                <div class="parent">
        <a class="button1 btn-primary btn-large" onclick="window.location.href='#popupcontactus'"> Contact Us to Discuss 3D Solutions</a>
        </div>
            </div>
        </div>