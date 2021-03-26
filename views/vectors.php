<style>

.tde-text {
    display:none;
}
.line-icon{
    display:none;
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
    padding-top: 20px;
   
}
div {
    display: block;
}
.hero-container {
    display: flex;
    justify-content: center;
    height: 500px;
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
    margin-top:50px;
    position: relative;
    width: 40%;
    
    min-width: 512px;
    pointer-events: none;
}

.colored-container:after {
    content: "";
    position: absolute;
    
    top: 0;
    right: 0;
    bottom: 0px;
    left: 0;
    background: linear-gradient(45deg,#19295a,#2ec3fb);
    z-index: -2;
}
.static-page__introduction-title {
    margin-bottom: 25px;
    color: #fff;
    font-size: 40px;
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
    width: 70%;
    height: 650px;
    display: flex;
    /* position: absolute; */
    right: 0;
    align-items: center;
}
.hero__iframe {
    width: 100%;
    position: absolute;
    right: -65px;
    height: 100%;
}
.static-page__container {
    margin: 0 auto;
    max-width: 1130px;
    width: calc(100% - 60px);
}
.enterprise__technology-container {
    padding: 48px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 11px 20px 0 rgba(97,108,121,.17);
}
.c-technology-details-container {
    display: flex;
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
    /* min-height: 100vh; */
    padding-top: 40px;
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
.vp-center {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-left:70px;
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
    min-width: 160px;
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
@media (max-width:700px) and (min-width:300px){
    .hero-container {
    display: flex;
    justify-content: center;
    height: 750px;
    /* background: linear-gradient(45deg,#19295a,#2ec3fb); */
}
    .hero__model {
    width: 100%;
    margin-top: -500px;
    height: 200px;
    display: flex;
    position: absolute;
     right: 30px; 
    align-items: center;
}
    .hero__text{
        width:100%;
        min-width:0px;
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
section.cont-intro-text {
    background: #e9e9ea;
    padding: 60px 0;
    margin:auto;
}
section{
    display: block;
}
@media (min-width: 1200px)
{
.containers {
    width: 1170px;
    margin:auto;
}
}
section.td-services {
    padding: 50px 0;
}

@media (min-width: 1200px){
.container_td {
    width: 1170px;
}
}
/* @media (min-width: 992px)
{
.container_td {
    width: 970px;
}
}
@media (min-width: 768px){
.container_td {
    width: 750px;
}
} */
.container_td {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.intro-main-headings {
    text-align: center;
}
h2 {
    font-size: 25px;
    line-height: 40px;
    margin-bottom: 20px;
    font-style: normal;
    font-weight: 300;
}
@media (min-width: 992px){
.col-md-4 {
    width: 33.33333333%;
}
}
.tdservices {
    position: relative;
    margin-bottom: 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.tdtext {
    padding: 12px;
    border-radius: 0 0 4px 4px;
    width: 89%;
    background: #ffffff;
    /* color: #ffffff; */
    padding: 12px;
    border-radius: 0 0 4px 4px;
    width: 89%;
    background: #ffffff;
    /* color: #ffffff; */
    text-align: center;
    margin-top: -40px;
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
    text-align: center;
    margin-top: -40px;
}
.tdservices :hover{
 background:#1caad9!important;
 color:#fff;
}
p {
    margin: 0 0 10px;
}
.line-icon {
    border-top:1px solid #ccc;
    margin-top:5px;
    margin-bottom:5px;
    color: #49b2e2;
    font-size: 11px;
    /* height: 20px;
    line-height: 18px; */
    margin: 9px auto;
    overflow: hidden;
    position: relative;
    text-align: center;
    width: 100%;
}
.rowss{
    display:flex;
}
@media (max-width:700px) and (min-width:300px){
    .rowss{
    display:block;
}
.containers{
    padding:10px;
}
}
p.td-title {
    font-size: 20px;
    font-family: sans-serif;
    font-weight:700;
    padding:3px;
}
a{
color: #1caad9;
}
.tilt-left {
    width: 100%;
}
.tilt-left, .tilt-right {
    background: #005092;
    position: relative;
    /* height: 120px; */
    width: 100%;
    float: left;
    display: flex;
    
    font-family: sans-serif;
    margin-bottom: 50px;
}
.out-p{
    color: #ffffff;
    font-size: 17px;
    padding: 2%;
    line-height: 25px;
    width: 75%;

}
.out-a{
    font-size: 17px;
    padding: 2%;
    line-height: 45px;
    width: 25%;
}
@media (max-width:700px) and (min-width:300px){
    .tilt-left, .tilt-right {
    background: #005092;
    position: relative;
    /* height: 120px; */
    width: 100%;
    float: left;
    display: block;
    
    font-family: sans-serif;
    margin-bottom: 50px;
}
    .out-p{
    color: #ffffff;
    font-size: 17px;
    padding: 2%;
    line-height: 25px;
    width: 100%;

}
.out-a{
    width: 50%;
    margin:auto;
    padding-bottom:20px;
}
}
section.td-text {
    background: #f9f8ff;
    padding: 50px 0;
}
.main-headings {
    text-align: center;
}
.td-icon-text {
    padding: 22px 20px 10px 20px;
    border: 1px solid #f1f1f1;
}
.td-icon-text p{
    line-height:1.5em;
}
.td-icon-text h3 {
    color:#666;
    font-size: 20px;
    margin-bottom: 5px;
}
.td-icon-text:hover{
    background:#fff!important;

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
ul {
    display: block;
}
ul.bullets {
    line-height: 1.8;
    margin-bottom: 0;
    padding-inline-start: 10px;
    margin-top: 10px;
}
ul {
    list-style-type: none;
}
.tde-text{
    line-height: 1.5em;
}
.static-page__section-background.--light-blue {
    background: #e8f7fb;
}
.static-page__content {
    padding: 70px 0 90px;
    /* margin-bottom: 56px; */
}
.static-page__content .static-page__introduction {
    width: 83.5%;
}
.static-page__content .static-page__introduction {
    width: 83.5%;
}
.static-page__introduction {
    width: 66.6%;
    margin: auto auto 50px;
    text-align: center;
}
.static-page .title {
    margin-bottom: 20px;
    font-size: 36px;
    font-weight: 300;
}
.static-page .subtitle, .static-page .title {
    line-height: 1.3;
    color: #1caad9;
    margin-bottom: 10px;
}
.quotes {
    display: flex;
}
.quote {
    position: relative;
    display: flex;
    /* flex: 1; */
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
.quote__description, .quote__image {
    box-shadow: 0 11px 20px 0 rgba(97,108,121,.17);
}
.quote__image {
    position: absolute;
    left: 50%;
    width: 155px;
    height: 155px;
    border: 10px solid #fff;
    /* border-radius: 50%; */
    transform: translateX(-50%);
    /* z-index: 1; */
}
.quote__description {
    padding: 137.3px 30px 46px;
    margin-top: 50.7px;
    font-size: 14px;
    color: #888;
    text-align: center;
    background: #fff;
    border-radius: 3px;
    flex: 1;
}
.quote__description .title {
    margin-bottom: 5px;
    font-size: 18px;
    font-weight: 600;
    color: #555;
}
.quote__description .subtitle {
    font-size: 12px;
    color: #999;
    text-transform: uppercase;
}
.quote__description q {
    font-style: italic;
}
.title {
    margin-bottom: 20px;
    font-size: 36px;
    font-weight: 300;
}
.title {
    line-height: 1.3;
    color: #1caad9;
    margin-bottom: 10px;
}
@media (max-width:700px) and (min-width:300px){
    .quotes {
    display: block;
}
.quote {
    margin-top: 30px;
}
.quote {
    position: relative;
    display: flex;
    /* flex: 1; */
    margin-left: auto;
    margin-right: auto;
    width: 100%;
}
}
.mySlides {display: none}
.prev .next{
  cursor: pointer;
  
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -42px;
  color: #aaa;
  font-weight: bold;
  font-size: 25px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.prev{
    float:left;
  left: 0;
  border-radius: 3px 0 0 3px;
  margin-top:200px;
  font-size:25px;
}
.next {
    float:right;
  right: 0;
  border-radius: 3px 0 0 3px;
  margin-top:200px;
  font-size:25px;
}
@media (max-width:700px) and (min-width:300px){
    .prev{
    float:left;
  left: 0;
  display:none;
  border-radius: 3px 0 0 3px;
  margin-top:0px;
  font-size:25px;
}
.next {
  display:none;
    float:right;
  right: 0;
  border-radius: 3px 0 0 3px;
  margin-top:0px;
  font-size:25px;
}
    
}
.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}
.active, .dot:hover {
  background-color: #717171;
}
.fa-star{
margin-right:5px;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    list-style: none;
    font-family: 'Montserrat', sans-serif;
}
.column {
    float: left;
    width: 50%;
    padding: 0px;
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
@media (max-width:700px) and (min-width:300px){
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
    height:900px;
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
    width: 100%;
    margin-top: 680px;
    height: 400px;
    display: flex;
    position: absolute;
     right: 0px; 
    align-items: center;
}
.vp-center {
    margin-left:0px;
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
.body_head{
    width:100%;
    display:flex;
    padding:35px 50px;

    background-image: linear-gradient(0deg, skyblue 0%, steelblue 100%);
    margin:0px;
}
.column_body{
    width:49%;
}
.col_img{
        margin-left:40px;
    }
@media (max-width:800px) and (min-width:300px){
    .body_head{
        padding:40px 15px;

        min-height:700px;
        display:block;
    }
    .column_body{
        width:100%;
    }
    .col_img{
        margin-left:0px;
        margin-top:50px;

    }
    .column_img{
        margin-top:50px;
    }
}
</style>
<div class="content">

     <div class="body_head" style="margin-top: 17px;">
          <div class="column_body" style="margin-top: -10px;">
          <p class="static-page__introduction-title" style="font-size:35px;margin-top:0px;text-transform:uppercase;font-weight:500;text-shadow: 0 1px 0 #ccc, 0 2px 0 #c5c5c5, 0 6px 0 transparent, 
                0 7px 0 transparent, 0 8px 0 transparent, 0 9px 0 transparent, 0 10px 10px rgba(0, 0, 0, 0.4);">Graphic Design Services</p>
                    <p class="static-page__introduction-subtitle">
                    There's no limit to what you can get designed at 3Dcopilot. Whether you're looking for a spectacular new logo or some stunning flyers, 
                    the talented global community of designers at 3Dcopilot can make it happen. <br/>3Dcopilot prides itself on it's high quality designers who 
                    deliver only the best graphic design services. Find the right design service for you below and get design you'll love today!
                    </p>
                    <div class="enterprise__intro-actions">
                        <a onclick="window.location.href='#popupcontactus'" class="button1 btn-full btn-huge btn-primary">Get in touch</a>
                    </div>
          </div>
          <div class="column_body  col_img">
                 <img style="width:100%;" src="<?php echo base_url('resources/images/des.jpg');?>" alt="made furniture as a 3D product">

          </div>
      </div>


</div>  
</div>
<section class="cont-intro-text">
				<div class="containers">
					<p style="line-height: 1.9em;">We deliver world-class graphic design services, combining creativity and modern graphic designing tools and 
                    creating unique, subtle as well as bolder graphics that can portray your brand’s voice in the most appropriate manner.
                    </p>
                    <p style="line-height: 1.9em;">3Dcopilot is among the most reputed graphic designing companies in India delivering superior quality graphic 
                    design services to individuals and businesses. We operate through a team of highly creative professionals who have thorough knowledge of modern
                     graphic design software such as Adobe Photoshop & Adobe Illustrator. We provide creative graphic design services online for supporting various
                      service categories such as logos, posters, brochures, web ads, business cards, banners, custom illustrations, etc. across the globe. Whether 
                      you are looking to get a custom logo created or you want assistance with respect to the creation of diverse marketing collateral including flyers, 
                      brochures, posters, banners, etc, we would ensure that we deliver value-added services, thereby helping you capitalize on your growth endeavors.</p>

                    <p style="line-height: 1.9em;">We work closely with our clients to understand their ideas and needs to give life to their vision. While designing the
                     graphics, we ensure that they stand out from the crowd and convey brand-messages in an appropriate manner. This eventually helps businesses to 
                     successfully promote their services, attract a large number of customers, and boost sales. If you are looking for the most competitive graphic 
                     design services price in the industry, do write to us and we would be happy to suggest you customized packages based on your specific requirements.</p>

                    </div>
			</section>

            <section class="td-services">
				<div class="container_td">
					<div class="intro-main-headings">
						<h2>Our custom Graphic Design services include</h2>
					</div>
					<br>
                    <div class="intro-main-headings">
						<h2>LOGO & BRANDING</h2>
                        <p>Need to make a lasting impression? The right combination of colors, shapes and words will define your brand. 
                        Get the perfect logo and ensure your branding hits the spot with these services.</p>
					</div>
					<br>
					<div class="rowss" style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
									<div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">LOGO DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We create professional logos for branding business and effectively communicate its message to the targeted audience.</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">BUSINESS CARD DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">Be it simple word-marks or completely illustrative logos, 3Dcopilot can create logos for you keeping in mind the 
                                    purpose they are expected to serve. The logo is what your clients and customers associate your business with.
                                     So logo designing demands a lot of attention & care. 3Dcopilot designed logos guarantee you get the results you desire.</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">LABEL DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rowss" style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">BANNER DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer creative banners to various businesses, helping them to boost their website traffic and sales conversion rates.</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">LETTERHEAD DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">NAME/ID CARD DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
                        
					</div>
                    <div style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4" style="margin:auto;">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">YARD/BILLBOARD DEISGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
                     </div>





                     <div class="intro-main-headings">
						<h2>PRINT DESIGN SERVICES</h2>
                        <p>Sending something to print can be so final! Don't make the mistake of having a mistake - get the design right 
                        the first time, whether it's a flyer, poster or sticker. Check out all our print design services.</p>
					</div>
					<br>
					<div class="rowss" style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
									<div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">FLYER DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">Our skilled artists can design professional flyers to help businesses effectively promote their brand, products, and services</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">BROCHURE DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We create high-quality and customized brochures to help businesses successfully market their products and services.</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">POSTER DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rowss" style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">ADVERTISEMENT DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">CALENDER DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">MENU DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
                        
					</div>
                    <div style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4" style="margin:auto;">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">STICKER DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
                     </div>




                     <div class="intro-main-headings">
						<h2>PACKAGING DESIGN SERVICES</h2>
                        <p>Need some walking advertising? A little promotional gear for the team manning the tradeshow booth? 
                        Get custom apparel, mugs or caps from our professional designers.</p>
					</div>
					<br>
					<div class="rowss" style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
									<div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">T-SHIRT DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">we offer</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">PACKAGING DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We create</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">BAG DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
					</div>
					
                    <div style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4" style="margin:auto;">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">CUP & MUG DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
                     </div>



                     <div class="intro-main-headings">
						<h2>ART & ILLUSTRATION</h2>
                        <p>Not everyone is an artist - but the designers at 3Dcopilot definitely are. Whether you need a mascot designed for your sporting team or a 
                        piece of custom wall art you'll find what you need with these design services.</p>
					</div>
					<br>
					<div class="rowss" style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
									<div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">ILLUSTRATION DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">Our illustration services are widely used for creating comic book characters, book covers, print designing, branding, etc.</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">BOOK COVER DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We create</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">ART DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rowss" style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">CARD DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">INVITATION DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 16px;font-family: sans-serif;font-weight: 700;">CHARACTER DESIGN</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer</div>
								</div>
							</div>
						</div>
                        
					</div>
                    





				</div>
			</section>


            <section class="cta-tilted">
				<div class="cta-tilt-div">
					<div class="tilt-left">
						<p class="out-p">Outsource your three-dimensional design requirements to us so that we can provide you with the complete 3D modeling, designing, or 
                        rendering support to address your varied business needs.</p>
						<p class="out-a"><a onclick="window.location.href='#popupcontactus'" class="button1 btn-full btn-huge btn-primary">Get in touch</a></p>
					</div>
					
				</div>
			</section>






            <section class="td-services">
				<div class="container_td">
					<div class="intro-main-headings">
						<h2>Why is 3Dcopilot one of the top graphic design companies in India?</h2>
					</div>
					<br>
                    <p style="width:89%;margin:auto;font-size:16px;">We pride ourselves on being a resourceful, reliable, and receptive graphic design company. 
                    If you already have an insight that you want to bring to reality, get in touch with us. We initiate from the scratch and follow standardized 
                    procedures to create optimal solutions that are perfectly aligned to suit your specific business needs.</p>

                    <p style="width:89%;margin:auto;font-size:16px;">Blending together our knowledge, inventiveness, and expertise, we promise to deliver exceptional
                     project experience. Our graphic design services are perfectly tailored to generate outcomes that businesses want to achieve.</p>

                    <div class="row" style="width:89%;margin:auto;padding-bottom:30px;">
                    <ul class="bullets">
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;As providing the best Graphic Design Services we have a proven track record of success and
                                 we have established our reputation.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;Our team of creative Graphic Designers can provide high-quality Designs that are tailored 
                                to meet the specific demands of our clients.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;From conceptualization to final output delivery, we make sure to meet every specific
                                 need of our client at every stages of a project.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;We understand our client’s concern and always make sure to keep them informed about their 
                                project status through timely reports.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;We provide cost-effective services and keep our workforce updated with the latest techniques and technology 
                                trends to help them accomplish the work on time.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;Our team has a high level of proficiency in completing even the most complex projects 
                                within tight deadlines.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;We ensure that we address the unique needs of each client and projects through the deployment 
                                of appropriate strategies.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;Our graphic designers have the ability to work consistently on print as well as web-based designs.</li>

								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;Our designers work as a team, ensuring the delivery of high-quality content to our clients.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;We offer customized and easy-to-understand graphic design pricing options that are
                                 based on the best possible market rates.</li>
								
							</ul>
                    </div>
                    <p style="width:89%;margin:auto;font-size:16px;">We employ the best resources to perfectly and precisely transform your ideas into Designs within the 
                    shortest turnaround time. Moreover, we continuously strive to be among the top companies offering the best Design-related services. Before outsourcing
                     to us, you may check out the client reviews section on our website.</p>
                </div>
            </section>

   <section class="static-page__section-background --light-blue">
        <div class="static-page__content">
            <div class="static-page__introduction">
                <h2 class="title">Happy Partners!</h2>
                <p>
                    Praise from our successful partners...
                </p>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div class="quotes">
            
            <?php 
      $this->db->select('*');
      $this->db->from('ratings');
      $this->db->where('Services', 'Design Services');
      $query = $this->db->get();
      

      if($query)
      {
        foreach($query->result() as $row)
        {
       
            // if($row->Services == '3D Services')
            // {
        
        echo '<div class="quote mySlides">';
        echo '<img class="quote__image" src='.$row->Path.'>';
        echo '<div class="quote__description">';
        echo '<div style="color:#1caad9;margin-bottom:5px;">';
        if($row->Rating == 'rating-input-1-1')
        {
        echo '<i class="fas fa-star"></i><i class="fas fa-star" style="color:#ccc;"></i><i class="fas fa-star" style="color:#ccc;"></i><i class="fas fa-star" style="color:#ccc;"></i><i class="fas fa-star" style="color:#ccc;"></i>';
        }
        if($row->Rating == 'rating-input-1-2')
        {
        echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" style="color:#ccc;"></i><i class="fas fa-star" style="color:#ccc;"></i><i class="fas fa-star" style="color:#ccc;"></i>';
        }
        if($row->Rating == 'rating-input-1-3')
        {
        echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" style="color:#ccc;"></i><i class="fas fa-star" style="color:#ccc;"></i>';
        }
        if($row->Rating == 'rating-input-1-4')
        {
        echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" style="color:#ccc;"></i>';
        }
        if($row->Rating == 'rating-input-1-5')
        {
        echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
        }
        echo '</div>';
           echo '<h3 class="title">'.$row->Name.'</h3>';
            echo '<div class="subtitle">'.$row->Position.'</div>';
            echo '<q><strong>'.$row->Comments.'</q>';
        echo '</div>';
    echo '</div>';
            
        }
      }
      
      ?>
              
                
            </div>
        <div style="text-align:center;margin-top:20px;">
        <?php 
        $count = $this->db->where('Services', 'Design Services')
        ->count_all_results('ratings');
        $n = $count;
        for($i = 0;$i < $count;$i++)
        {
            echo '<span class="dot" onclick='.$i.'></span>';
        }
        ?>
            
        </div>
        
    </section>

    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
    // var timer = null;
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
//   if (n===undefined){n= ++slideIndex;}
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
//   $(slides[slideIndex-1]).fadeIn(2000);
  slides[slideIndex-1].style.display = "flex";  
  dots[slideIndex-1].className += " active";
//   $(slides[slideIndex-1]).delay(3000);
//   $(slides[slideIndex-1]).fadeOut(1000);
//   timer = setTimeout(showSlides, 6000);
//   clearTimeout(timer);
}

</script>

<!-- 
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script> -->

<style>
.home__title {
    margin-bottom: 20px;
    color: #1caad9;
    font-size: 36px;
    font-weight: 300;
}
    </style>

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