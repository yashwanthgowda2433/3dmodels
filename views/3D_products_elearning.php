<style>
.tde-text {
    display:none;
}
.line-icon{
    display:none;
}
.td-icon-text p{
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
    height: 450px;
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
    margin-top:-50px;
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
    /* background: linear-gradient(45deg,#19295a,#2ec3fb); */
    background-image: linear-gradient(0deg, skyblue 0%, steelblue 100%);

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
    margin-top: -200px;
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
    font-size: 35px;
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
.vp-center {
    margin-left:0px;
}
    .hero__model {
    width: 100%;
    margin-top: 400px;
    height: 400px;
    display: flex;
    position: absolute;
     right: 0px; 
    align-items: center;
}
    .hero__text{
        width:100%;
        min-width:0px;
        margin-top:-170px;
        
    }

    .static-page__introduction-title {
    
    font-size: 30px;
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
.col_img{
        margin-left:40px;
    }
@media (max-width:800px) and (min-width:300px){
    .body_head{
        padding:40px 15px;

        min-height:630px;
        display:block;
    }
    .column_body{
        width:100%;
    }
    .col_img{
        margin-left:0px;

    }
    .column_img{
        margin-top:50px;
    }
}
</style>
<div class="content">
    <div class="body_head" style="margin-top: 17px;">
          <div class="column_body" style="margin-top: -10px;">
                    <p class="static-page__introduction-title" style="font-size:35px;margin-top:0px;font-weight:500;text-transform:uppercase;text-shadow: 0 1px 0 #ccc, 0 2px 0 #c5c5c5, 0 6px 0 transparent, 
                0 7px 0 transparent, 0 8px 0 transparent, 0 9px 0 transparent, 0 10px 10px rgba(0, 0, 0, 0.4);">3D Design Services</p>
                    <p class="static-page__introduction-subtitle">
                    We have created a prominent identity in the 3D Design landscape with our expert 3D designers adopting an attention-to-detail approach
                     to craft unique 3D models while taking key specifications into account.
                    </p>
                    <div class="enterprise__intro-actions">
                        <a onclick="window.location.href='#popupcontactus'" class="button1 btn-full btn-huge btn-primary">Get in touch</a>
                    </div>
          </div>
          <div class="column_body  col_img">
                  <img style="width:100%;" src="<?php echo base_url('resources/images/3dmodels.jpg');?>" class="column_img" alt="made furniture as a 3D product">
                 
          </div>
      </div>
</div>  
</div>
<section class="cont-intro-text">
				<div class="containers">
					<p style="line-height: 1.9em;">Are you looking for high quality and customized 3D design services? If yes, we would say “Congrats”. You have already found one of the most 
                    recognized 3D service providers. We specialize in computer-generated imagery (CGI) services and have been helping global businesses with custom 
                    3D designs, allowing them to address their specific project needs. With years of experience in providing diverse 3D services to global clients, 
                    3Dcopilot provides a wide range of specialized services such as 3D animations, 3D visualization, etc. We, at 3Dcopilot, understand that diverse 
                    businesses in diverse industries rely on 3D services for product innovation, development, concept development, education, and marketing purposes 
                    and so we design personalized service packages for every client. Trends change and so do we. We keep ourselves updated about the latest design trends 
                    and advanced technologies. We use advanced 3D software to deliver world-class outcomes
                    </p>
                    </div>
			</section>

            <section class="td-services">
				<div class="container_td">
					<div class="intro-main-headings">
						<h2>Our custom 3D design services include</h2>
					</div>
					<br>
					<div class="rowss" style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
									<div class="td-title"style="font-size: 20px;font-family: sans-serif;font-weight: 700;">3D MODELING</div>
									<div class="line-icon"></div>
									<div class="tde-text">We offer 3D modeling services to various industries by creating 
                                    virtual prototypes that can help during the conceptualization or product development phase.</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 20px;font-family: sans-serif;font-weight: 700;">3D ARCHITECTURE</div>
									<div class="line-icon"></div>
									<div class="tde-text">Our 3D architecture services help in creating photorealistic 3D graphics to demonstrate 
                                    various products or architectural properties for attracting clients.</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 20px;font-family: sans-serif;font-weight: 700;">3D VISUALIZATION</div>
									<div class="line-icon"></div>
									<div class="tde-text">Our 3D visualization services help clients to showcase their architectural properties in a detailed manner 
                                    to attract potential prospects and increase sales.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rowss" style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 20px;font-family: sans-serif;font-weight: 700;">3D SCULPTING</div>
									<div class="line-icon"></div>
									<div class="tde-text">We create high-quality 3D sculpting designs from virtual objects, ideas, concepts, 2D sketches,
                                     and images to address the varied printing needs of clients.</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 20px;font-family: sans-serif;font-weight: 700;">WALKTHROUGH ANIMATION</div>
									<div class="line-icon"></div>
									<div class="tde-text">We develop awe-inspiring walkthrough animation helping real estate developers or architects 
                                    to get detailed project views and market their properties.</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 20px;font-family: sans-serif;font-weight: 700;">3D PRINTING</div>
									<div class="line-icon"></div>
									<div class="tde-text">We create precise 3D print-ready models of movie-props, eye-wear, archaeological artifacts, furniture,
                                     home decoration objects, prosthetics, and more. Ex. Biological specimens.</div>
								</div>
							</div>
						</div>
                        
					</div>
                    <div style="margin-right: -15px;margin-left: -15px;margin-top:40px;">
						<div class="col-md-4" style="margin:auto;">
							<div class="tdservices">
								
								<div class="tdtext">
                                <div class="td-title"style="font-size: 20px;font-family: sans-serif;font-weight: 700;">3D E-LEARNING</div>
									<div class="line-icon"></div>
									<div class="tde-text">3D E-Learning is an exciting, developing area of the eLearning industry. With the technology reaching maturity, 
                                    it’s easy to see that it won’t be long before 3D learning approaches, including gaming, virtual & augmented reality.</div>
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




            <section class="td-text">
				<div class="container_td">
					<div class="main-headings">
						<h2>Industries we support</h2>
					</div>
					<br>
					<div class="rowss">
						<div class="col-md-4">
							<div class="td-icon-text">
								
								<h3>ARCHITECTURE</h3>
								<p>3Dcopilot offers comprehensive and intricately-detailed architecture designs to clients based 
                                on their custom requirements with regard to architectural 3D modeling, visualization, 
                                floor plan designs, and architecture animation.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="td-icon-text">
								<h3>AUTOMOTIVE</h3>
								<p>We offer automotive design services, creating photorealistic renderings of component designs, three-dimensional models and prototypes, engine redesigns, 
                                & custom design frameworks, addressing the needs of automakers.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="td-icon-text">
								<h3>ADVERTISING</h3>
								<p>We provide visually- attractive and realistic product images, 3D models, and product animations to help the advertising companies in selling or 
                                promoting their products via different types of media.</p>
							</div>
						</div>
					</div>
					<br>
					<div class="rowss">
						<div class="col-md-4">
							<div class="td-icon-text">
								<h3>BRANDING</h3>
								<p>We help businesses to enhance their brand visibility and attract more clients by creating appealing, and interactive images, logos, concept designs, 
                                and product renderings depending on their service offerings.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="td-icon-text">
								<h3>ELECTRONICS & GADGETS</h3>
								<p>3Dcopilot provides 3D electronic design services. We offer custom design solutions, facilitating the creation of various types of
                                 hardware, printed circuit boards, & electronic and mechanical components.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="td-icon-text">
								<h3>ENTERTAINMENT</h3>
								<p>We use cutting-edge technology and software to create realistic 3D models for the entertainment industry. We can help in creating virtual props and sets,
                                 animated characters and objects as well as movie effects.</p>
							</div>
						</div>

					</div>
					<br>
					<div class="rowss">
						<div class="col-md-4">
							<div class="td-icon-text">
								<h3>FURNITURE</h3>
								<p>We provide professional 3D services, using the latest technology trends and techniques for furniture modeling and helping furniture manufacturers 
                                and designers to showcase models having high usability features.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="td-icon-text">
								<h3>GAMING</h3>
								<p>We offer services to game development companies and create high-quality concept designs, realistic background, objects, characters, level designs,
                                 and low poly game props to enhance user-experience.</p>
							</div>
						</div>
						
					</div>
				</div>
			</section>



            <section class="td-services">
				<div class="container_td">
					<div class="intro-main-headings">
						<h2>Benefits of hiring our 3D design firm</h2>
					</div>
					<br>
                    <p style="width:89%;margin:auto;font-size:16px;">When it comes to professional 3D services, you can rely on us knowing that we are a 
                    leading 3D services company and we would never let you down.</p>
                    <div class="row" style="width:89%;margin:auto;padding-bottom:30px;">
                    <ul class="bullets">
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;As providing the best 3D design services we have a proven track record of success and we have established our reputation.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;Our team of creative 3D designers and animators can provide high-quality 3D animations that are 
                                tailored to meet the specific demands of our clients.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;We support FBX, 3DS, 3DS MAX, BLEND, OBJ, C4D, MA, MB, DAE, STL 3d file formats.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;From conceptualization to final output delivery, we make sure to meet every specific
                                 need of our client at every stages of a project.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;We understand our client’s concern and always make sure to keep them informed about 
                                their project status through timely reports.</li>
								<li><i class='far fa-check-circle'></i>&nbsp;&nbsp;We provide cost-effective services and keep our workforce updated with the latest techniques and 
                                technology trends to help them accomplish the work on time.</li>

							</ul>
                    </div>
                    <p style="width:89%;margin:auto;font-size:16px;">We employ the best resources to perfectly and precisely transform your ideas into
                     3D computer-generated (CGI) images within the shortest turnaround time. Moreover, 
                    we continuously strive to be among the top companies offering the best 3D-related services. Before outsourcing to us, you may check 
                    out the client reviews section on our website.</p>
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
      $this->db->where('Services', '3D Services');
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
        $count = $this->db->where('Services', '3D Services')
        ->count_all_results('ratings');
        $n = $count;
        for($i = 0;$i < $count;$i++)
        {
            echo '<span class="dot" onclick='.$i.'></span>';
        }
        ?>

          <!-- <div class="quote mySlides">
                    <img class="quote__image" src="<?php echo base_url('uploads/JNIN3644.png');?>">
                    <div class="quote__description">
                    <div style="color:#1caad9;margin-bottom:5px;"><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i></div>
                        <h3 class="title">Murali Mohan</h3>
                        <div class="subtitle">Chief Digital Officer at Zodiac</div>
                        <q><strong>The configurator has increased sales of that particular model by 50%</strong> in 2 years (and that's our most expensive boat). So yeah we're happy with it!</q>
                    </div>
                </div>

                <div class="quote mySlides">
                    <img class="quote__image" src="<?php echo base_url('uploads/JNIN3644.png');?>">
                    <div class="quote__description">
                    <div style="color:#1caad9;margin-bottom:5px;"><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i></div>

                        <h3 class="title">Naveen</h3>
                        <div class="subtitle">Senior Ecommerce Product Manager at MADE.COM</div>
                        <q>Customers who viewed a 3D model are <strong>25% more likely to buy</strong></q>
                    </div>
                </div>
                <div class="quote mySlides">
                    <img class="quote__image" src="<?php echo base_url('uploads/JNIN3644.png');?>">
                    <div class="quote__description">
                    <div style="color:#1caad9;margin-bottom:5px;"><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i></div>

                        <h3 class="title">Manjunath</h3>
                        <div class="subtitle">Senior Ecommerce Product Manager at MADE.COM</div>
                        <q>Customers who viewed a 3D model are <strong>25% more likely to buy</strong></q>
                    </div>
                </div> -->
            <!-- <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span>  -->
         </div>
            
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