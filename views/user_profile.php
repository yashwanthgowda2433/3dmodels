<!-- <link rel="stylesheet" href="<?php echo base_url('resources/css/style.css');?>"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <script>

jQuery(function($) {

  $('#tags input[id=empty]').on('focusout', function() {
    var txt = this.value.replace(/[^a-zA-Z0-9\+\-\.\#]/g); // allowed characters list
    if (txt) $(this).before('<span class="tag">' + txt + '</span>');
	
    this.value = "";
    // this.focus();
    
  }).on('keyup', function(e) {
    // comma|enter (add more keyCodes delimited with | pipe)
    if (/(188|13)/.test(e.which)) $(this).trigger('focusout');
  });

  $('#tags').on('click', '.tag', function() {
	  
     $(this).remove();
	 
  });
 
//   $('input[id=empty]').val(function(){
// 	var text = this.value;
// 	var arr = text.split(',');
// 	if(arr)
// 	{
// 	for(var i=0; i< arr.length; i++){
		
// 		$(this).before('<span class="tag">' + arr[i] + '</span>');
// 		this.value = "";
//         this.focus();
// 	}
// 	}
	
// });
});

</script>

<style>
#tags {
  width:100%;
  float: left;
  border: 1px solid #ccc;
  padding: 4px;
  font-family: Arial;
}

#tags span.tag {
  cursor: pointer;
  display: block;
  border-radius: 3px;
  float: left;
  color: #555;
  background-color: rgb(228, 228, 228);
    background-image: -webkit-linear-gradient(top, rgb(244, 244, 244) 20%, rgb(240, 240, 240) 50%, rgb(232, 232, 232) 52%, rgb(238, 238, 238) 100%);
    box-shadow: 0 0 2px white inset, 0 1px 0 rgba(0, 0, 0, 0.05);
    color: rgb(51, 51, 51);
    border: 1px solid rgb(170, 170, 170);
  padding: 5px 10px;
  padding-right: 30px;
  margin: 4px;
}

#tags span.tag:hover {
  opacity: 0.7;
}

#tags span.tag:after {
  position: absolute;
  content: "x";
  /* border: 1px solid; */
  
  padding: 0 4px;
  margin: 0px 0 0px 10px;
  font-size: 14px;
}

#tags input {
  float:left;
  background: #eee;
  border: 0;
  margin: 4px;
  padding: 7px;
  width: auto;
}
</style>

<style>
.hide { position: absolute; top: -9999px; left: -9999px; }

#page-wrap { width: 440px; margin: 80px auto; }
/* Specific to example one */

#example-one { background: #eee; padding-bottom: 15px;width:100%; -moz-box-shadow: 0 0 5px #666; -webkit-box-shadow: 0 0 5px #666; }

#example-one .nav { overflow: hidden; margin: 0 0 10px 0; }
#example-one .nav li { padding:10px;width: 138.36px;height:56px; float: left; margin: 0 1px 0 0; }
#example-one .nav li.last { margin-right: 0; }
#example-one .nav li a { display: block; padding: 10px; background: transparent; color: #555; font-size: 15px; text-align: center; border-radius: 15px; }
#example-one .nav li a:hover { background-color: rgb(228, 228, 228); }

#example-one ul { list-style: none;position:unset; }
#example-one ul li a { padding: 4px; color: #666; }
#example-one ul li a:hover { background: #fe4902;  }
#example-one ul li:last-child a { border: none; }

#example-one ul li.nav-one a.current, #example-one ul#featured li a:hover { background-color: #4d98ee; color: white; }
#example-one ul li.nav-two a.current, #example-one ul#core li a:hover { background-color: #4d98ee; color: white; }
#example-one ul li.nav-three a.current, #example-one ul#jquerytuts li a:hover { background-color: #4d98ee; color: white; }
#example-one ul li.nav-four a.current, #example-one ul#classics li a:hover { background-color: #4d98ee; color: white; }
#example-one ul li.nav-five a.current, #example-one ul#jquerytuts li a:hover { background-color: #4d98ee; color: white; }
#example-one ul li.nav-six a.current, #example-one ul#classics li a:hover { background-color: #4d98ee; color: white; }

.conts-row{
  display:flex;
  width:80%;
  overflow: hidden;
  margin-left: auto;
  margin-right:auto;
  margin-bottom: 0px;
}
.nav_nevigation{
  width:80%;
  margin-left:auto;
  margin-right: auto;
}
.mod_les{
  width:80%;
  background-color: #f2f2f2; 
  padding:80px;
  margin-left: auto;
  margin-right:auto;
  margin-bottom: 0px;
}
.side_tabs{
  margin-left:20px;
  width:27%;
  background-color: #fff;
}
.mods-cols{
  width:70%;
  border:1px solid transparent;
  height: auto;
}
.mod_rows{
  width:90%;
  padding:0px;
  margin-left:0px;
  margin-bottom:0px;
  margin-top:5px;
  float:left;
  border-bottom:1px solid #aaa;
}
@media (max-width:700px) and (min-width:300px){
  .box{
    width:100%;
  }
  .mod_rows{
  width:100%;
  padding:0px;
  margin-left:0px;
  margin-bottom:0px;
  margin-top:5px;
  float:left;
  border-bottom:1px solid #aaa;
}
  .mods-cols{
  width:110%;
  border:1px solid transparent;
  height: auto;
}
  .side_tabs{
  margin-left:0px;
  margin-top:20px;
  width:100%;
  background-color: #fff;
}
  .mod_les{
    padding:0px;
  }
  .box{
    width:100%;
  }
  .nav_nevigation{
  width:100%;
  margin-left:auto;
  margin-right: auto;
}
#example-one .nav li a {
    display: block;
    padding: 5px;
    background: transparent;
    color: #555;
    font-size: 10px;
    text-align: center;
    border-radius: 15px;
}
.nav{
  margin-top:10px;
}
ul{
  padding-left:0px;
}
#example-one .nav li{
  /* margin-top:10px; */
    padding: 0px;
    width: 138.36px;
    height: 56px;
    float: left;
    margin: 0 1px 0 0;
}
}
.model_head {
    display: grid;
    grid-template-columns: 1fr 4fr 1fr;
    grid-column-gap: 24px;
    -moz-column-gap: 24px;
    column-gap: 24px;
    padding: 12px 32px;
    border-bottom: 1px solid #e7e7e7;
    background-color: #fff;
    color: #222;
    height: 48px;
}
.model_head-title {
    text-align: center;
    grid-column: 2;
    font-size: 16px;
    font-weight: 700;
}
.model_head__close {
    display: flex;
    justify-content: flex-end;
}
input[type=text], input[type=password], input[type=email], input[type=number], textarea{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
.form-input.--border {
    border: 1px solid #ccc;
}
.c-tag-input .form-input {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 4px 8px;
}
.form-input {
    display: block;
    /* height: 25px;
    box-sizing: content-box; */
    /* padding: 10px 15px; */
    font-family: sans-serif;
    font-size: 15px;
    /* line-height: 25px; */
    background: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    outline: none;
}
.c-tag-input__tag {
    display: flex;
    padding: 4px 8px;
    max-width: 100%;
    background-color: rgba(28,170,217,.1);
    color: #1caad9;
    border-radius: 3px;
    cursor: pointer;
}
.c-tag-input__tag-text {
    /* overflow: hidden; */
    text-overflow: ellipsis;
}
.c-tag-input__tag .icon {
    padding: 4px;
}
.c-tag-input__textarea {
    position: relative;
    min-width: 120px;
    height: 24px;
    padding: 4px 0;
    font-family: sans-serif;
    font-size: inherit;
    font-weight: inherit;
    line-height: 1;
    resize: none;
    background: transparent;
    border: 0;
    outline: none;
    flex-grow: 1;
}
textarea {
    overflow: auto;
    vertical-align: top;
}
.tags-wrapper li input {
	display:block;
	background:trasparent;
	outline:none;
	border:none;
	font-size:11px;
	height: auto;
	width:700px;
	margin: 4px;
}
.tags-secret{
  width:700px;
}
.tag{
  margin-top:10px;
}
.download__s {
    /* grid-row: 2;
    grid-column: 2; */
}
/* @media (min-width: 1280px){
.download__s {
    grid-row: 1;
    grid-column: 3;
}
} */

.right_settings {
    display: flex;
    flex-direction: column;
    border: 1px solid #e7e7e7;
    padding: 16px;
    background-color: #fff;
    border-radius: 4px;
}
.right_settings__flex {
    display: flex;
    justify-content: space-between;
}
.right-settings__status {
    flex: 1;
}
strong {
    font-weight: 700;
}

.right-settings__separator {
  margin-top:12px;
    border-bottom: 1px solid #e7e7e7;
}
.right_model__label {
  margin-top:12px;
    color: #222;
    font-size: 14px;
    font-weight: 600;
}
.form-label {
    display: block;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: left;
}
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width:fit-content;
  margin:auto;
  display:flex;

}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  height:60px;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 2px 16px;
  height:40px;
  transition: 0.3s;
  font-size: 17px;
  color:#a9a9a9;
}

/* Change background color of buttons on hover */
.tab button:hover {
  border-bottom: 1px solid #ddd;
  color:#000;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color:transparent;
  border-bottom: 1px solid #000;
  color:#000;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 40px 40px;
  border-top: 1px solid lightgray;
  /* border-top: none; */
}
 .settings__footer.--sticky {
    background-color: #fff;
    box-shadow: 0 7px 18px 0 rgba(97,108,121,.13);
    border-top: none;
    max-width: 100%;
    padding: 16px 0;
     }
     .settings_d-container {
    margin: 0 auto;
    border-top: none;
    max-width: 1920px;
    padding: 0 40px;
    display:flex;
}
.setting__footer-right {
    margin-left: auto;
}
.c-model-properties__buttons {
    display: flex;
}
.c-model-properties__delete {
    color: #f02624;
}
a {
    color: inherit;
    text-decoration: none;
    cursor: pointer;
}
.form_container {
    margin: 0 40px;
}
.model__container {
    padding: 0 40px 32px;
    max-width: 1920px;
    width: 100%;
    display: grid;
    grid-template-columns: minmax(0,2fr) 1fr;
    grid-template-rows: auto auto auto;
    grid-column-gap: 24px;
    -moz-column-gap: 24px;
    column-gap: 24px;
    grid-row-gap: 24px;
    row-gap: 24px;
}
@media (min-width: 1280px){
.model__container {
    max-width: 1920px;
    width: 100%;
    grid-template-columns: 340px minmax(0,2fr) 340px;
}

}
@media (min-width: 1280px){
.model-properties__container .model-properties__side.--left {
    grid-row: 1;
    grid-column: 1;
}
}
.model-properties__container .model-properties__side.--left {
    grid-row: 1;
    grid-column: 2;
}
@media (min-width: 1280px){
.model-properties__container .c-model-properties__side {
    grid-row: 1;
    grid-column: 3;
}
}
.model-properties__container .model-properties__side {
    grid-row: 2;
    grid-column: 2;
}
:first-child {
    margin-top: 0;
}
.model-properties__side {
    max-width: 100%;
    flex-basis: 350px;
}
.properties__viewer-container {
    display: flex;
    flex-direction: column;
}
.mod_viewer {
    position: relative;
    padding-top: 56.25%;
}
.mod_viewer {
    width: 100%;
}

.model_upload-status {
    padding: 8px;
    background-color: #fff;
    border-radius: 3px;
    border: 1px solid #e7e7e7;
    color: #222;
    font-size: 10px;
    font-weight: 700;
}

.model_row-upload-status {
	padding-top:10px;
    display: flex;
    align-items: center;
}
.model_upload-status.--green .upload_background {
    background-color: #1ac95d;
}
.upload_background {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 4px;
    border-radius: 100%;
    height: 16px;
    width: 16px;
    color: #fff;
    background-color: #1caad9;
}
.upload-status-title {
    text-transform: uppercase;
}

.finished {
    margin-left: auto;
}

input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
.middle_model{
	max-height: none;
    grid-row: 1;
    grid-column: 2;
}
.model_form-field {
    position: relative;
}
.form-label {
    display: block;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: left;
}
.forms__label {
    color: #222;
    font-size: 14px;
    font-weight: 600;
}
.thumbnails-compact-editor-uploader {
	
    position: relative;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    align-items: center;
    justify-content: center;
    align-self: stretch;
    padding: 0 8px;
    font-family: 'Roboto', 'Noto', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    letter-spacing: 0.011em;
    font-size: 12px;
    line-height: 16px;
    cursor: pointer;
    color: var(--ytcp-black-secondary);
    outline: none;
}

.remove-default-style {
    background: none;
    border: 1px solid #ccc;
	border-radius:4px;
    color: inherit;
    font: inherit;
    letter-spacing: inherit;
    margin: 0;
    padding: 0;
}
iron-icon {
    display: inline-flex;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    position: relative;
    vertical-align: middle;
    fill: var(--iron-icon-fill-color, currentcolor);
    stroke: none;
    width: var(--iron-icon-width, 24px);
    height: var(--iron-icon-height, 24px);
}
.popup-header {
    display: flex;
    height: 70px;
    padding: 0 25px;
    overflow: hidden;
    font-size: 21px;
    font-weight: 300;
    background: #fff;
    transition: height .5s;
    flex-wrap: wrap;
}
.popup-title {
    height: 70px;
    line-height: 70px;
    flex: 1;
}
.popup-content {
    position: relative;
    padding: 20px;
    font-size: 15px;
    color: #555;
    text-align: center;
}
.popup-content {
    line-height: 1.6em;
    
    border:1px solid #ccc;
    background:#eee;
}
.popup-footer {
    display: flex;
    padding: 20px 25px;
    font-size: 15px;
    font-weight: 300;
    background: #fff;
}
.actions {
    text-align: right;
    flex: 1 0 185px;
}
.btn-tertiary {
    position: relative;
    color: #1caad9;
    background-color: transparent;
    transition: background-color .15s ease;
    border: 1px;
    border-color: #1caad9;
    border-style: solid;
    border-radius: 4px;
}
.btn-medium.form-button, .button1.btn-medium {
    min-height: 32px;
    font-size: 12px;
    padding: 0 16px;
}
.button1.btn-tertiary {
    position: relative;
    color: #1caad9;
    background-color: transparent;
    transition: background-color .15s ease;
    border: 1px;
    border-color: #1caad9;
    border-style: solid;
    border-radius: 4px;
}

.button1.btn-danger {
    position: relative;
    color: #fff;
    background-color: #f02624;
    transition: background-color .15s ease;
    border: 0;
    border-color: "";
    border-style: solid;
    border-radius: 4px;
}
.btn-medium.form-button, .button1.btn-medium {
    min-height: 32px;
    font-size: 12px;
    padding: 0 16px;
}
.button1.btn-danger {
    position: relative;
    color: #fff;
    background-color: #f02624;
    transition: background-color .15s ease;
    border: 0;
    border-color: "";
    border-style: solid;
    border-radius: 4px;
}
.button1.btn-medium {
    min-height: 32px;
    font-size: 12px;
    padding: 0 16px;
}

.cat-dropdown {
    position: relative;
    width: 100%;
    padding: 5px 0;
    font-size: 14px;
    color: #555;
    white-space: nowrap;
}

.cat-dropdown.--white-background .cat-dropdown__label {
    padding: 8px 8px;
    background: #eee;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.cat-dropdown__label-title {
    color: #999;
    font-size: 10px;
    text-transform: uppercase;
    line-height: 1.2;
}

.c-dropdown__label-value.--placeholder {
    color: #888;
}
.c-dropdown__label-value {
    display: flex;
    position: relative;
    min-width: 0;
}
.c-dropdown__label-value__text {
  flex:1;
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    margin-top:2px;
}
.c-dropdown__label-value:after {
  float:right;
    display: inline-block;
    font-size: 10px;
    font-weight: 400;
    color: #ccc;
    text-transform: none;
    vertical-align: middle;
    content: "▼";
    transition: transform .5s cubic-bezier(.65,-.76,.09,1.1);
    transform: rotate(0deg) scaleY(.55);
    margin-left: 5px;
    line-height: 2.25;
}

.dropingdown-menus3{
      cursor: auto;
    border: none;
    /* background-color: #fff; */
    display: none;
    position: absolute;
    width: 100%;
    margin-top: 0px;
    padding: 0;
    z-index: 1;
    /*  */
    /* right:18px; */
    background-color: rgb(209, 204, 204);
    color: #000;
    padding-left:10px;
    padding-right:10px;
}
.dropingdown3{
      display:block;
      /* position:relative; */
    }

</style>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
<script src="<?php echo base_url('resources/');?>js/organictabs.jquery.js"></script>

<script>
  $(function() {
  
    // Calling the plugin
    $("#example-one").organicTabs();
    $("#example-two").organicTabs({
      "speed": 100,
      "param": "tab"
    });
    
  });
</script>

<script>
  function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    

    elmnt.style.backgroundColor = color;
  }
  
  // // Get the element with id="defaultOpen" and click on it
  // document.getElementById("defaultOpen");
  
  </script>

  
<div class="content" style="padding-top: 55px;margin-bottom:-34px;">
   <?php if($this->session->userdata('User_id')){
  
  ?>
    <div class="row conts-row">
        <div class="column1" style="display:flex;float:left;overflow: hidden;">
        <button class="profile_photo" title="More" style="margin-top:15px;padding:0px;color: #fff;border:1px solid #fff;width:100px;">
        <?php if($this->session->userdata('profile_pic')!=""){ ?>
           <?php if($this->session->userdata('social_id')!= ""){?>
                <img  style="height:100px;width:100px;" src="<?php echo $this->session->userdata('profile_pic');?>"><i class="fa fa-caret-down"></i>  
                
           <?php }else{ ?>
                 <img  style="height:100px;width:100px;" src="<?php echo base_url($this->session->userdata('profile_pic'));?>"><i class="fa fa-caret-down"></i>  
           <?php }?>   
        <?php }else{ ?>
          <i class="fa fa-user" style="font-size:80px;margin-left:0px;color:#555;padding:10px"></i>
        <?php } ?>
        </button>  
        </div>
        <div class="column" style="display:inline;margin-left: 20px;margin-top: 20px;">
            
                <p style="margin-left:0px;margin-bottom:10px;"><span style="color:#555;font-size: 22px;padding-top: 10px;"><?php
          echo $this->session->User_email;
          ?></span></p>
            
                <button class="button1 btn-primary" style="padding:5px;text-transform:none;" onclick="window.location.href='<?php echo site_url('welcome/edit_profile');?>'" >Edit Profile</button>
              
        </div>
       
    </div>

    <?php }else{
    redirect(base_url()."welcome/index#popuplogin");

  }?>


     <div class="row" style="margin:0px;padding:0px;width:100%;overflow: hidden;height:100%">
     <!-- <div id="tags">
			<input type="text" id="empty" value="car,tempo" placeholder="Add" />
			
			</div> -->
        <div id="example-one">
          <div class="new-navigation nav_nevigation">
          <ul class="nav" style="display:flex;">
            <!-- <li class="nav-one" style="padding-left: 1px;"><a href="#Newsfeed" class="current" >News&nbsp;Feed</a></li> -->
            <li class="nav-one"><a href="#Models" class="current">Assets</a></li>
            <li class="nav-two"><a href="#Purchases">Purchases</a></li>
            <li class="nav-three"><a href="#Collections">Collections</a></li>
            <li class="nav-four"><a href="#Sales">Sales</a></li>
            <li class="nav-five"><a href="#Likes">Likes</a></li>
            <li class="nav-six last"><a href="#Comments">Comments</a></li>
          </ul>
        </div>
          <div class="list-wrap">
          
          <!-- <ul id="Newsfeed" >
            <div class="contents row Newsfeed-row" style="margin-left: auto;margin-right:auto;margin-bottom: 0px;width: 80%;">
              <div class="column Newsfeed-column">
              <a>News feed Date Display with Sprites</a>
              </div>
            </div>
            
          </ul> -->
          
          <ul id="Models" style="width:100%;">
            <div class="contents row mod_les">
              <div class="column" style="width:70%;border:1px solid transparent">
              <div class="wrapper" style="min-height:200px;">
                <section class="boxes" id="load_data">
                  
                    <!-- <div id="load_data_message" style="margin:0px;padding:0;">
                      
                    </div>
                     -->
                    
                    
              </section>
            </div>
              <div class="addcopilot">
                <button class="button1 btn-primary btn-large" id="loadbtn" style="margin-left:auto; margin-right:auto; display:block; margin-top:30px;">Load More</button>
              </div>
            </div>

            <!-- <a class="button" href="#popup2" style="margin:0;border-radius:0px 0px 0px 0px; padding:80px;background:url(<?php echo base_url('resources/');?>icons/film.png);background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                      <div class="our-models">
                        <a style="color:#555; float:left;">Lio Model of Art</a>
                        <a href="" style="float:right;color:#555;"><span style="color: rgb(241, 57, 88);">Rs.1999</span></a>
                      </div>
 -->

<?php
$user_id = $this->session->userdata('User_id');
$this->db->select("*");
$this->db->from("upload_table");
$this->db->where("User_id", $user_id);
//$this->db->order_by("id", "DESC");
// $this->db->limit($limit, $start);
$this->db->order_by("No_of_models", "DESC");
$query = $this->db->get()->result();
;
?>
<!--  -->
 <div id="popup_edit_model" class="overlay" style="height:100%">
        <div class="popup models_pop-up">
              <a class="close" href="#">&times;</a>
              <div class="content popup-models edit-model_fetch" style="height:90%;padding-top:3px;">
  <!-- <link rel="stylesheet" href="<?php echo base_url('resources/uploadcss/edithtmls.css');?>"> -->

      <div class="model_head">
                  <span class="model_head-title">Edit model</span>
                  <div class="model_head__close"></div>
	</div>
	<!-- <div id = "progressbar-2" style="margin-top:10px;"></div> -->
  
  <div style="width:100%;background:#f9f9f9">
    <div class="model__container form_container" id="model__container" style="padding-top:50px;margin-left:0px;">
	    
      <!--open  -->
      <div class="model-properties__side --left">
		   <div class="properties__viewer-container">
        
        <div class="proper_edit-model-view"></div>
			    
			
			 <div class="model_upload-status">
			    <div class="model_row-upload-status --green">
			       <div class="upload_background" style="background-color: #1ac95d;">✓</div>
				   <span class="upload-status-title">upload</span>
				   <span class="finished">Finished</span>
			    </div>
				<div class="model_row-upload-status --green">
				   <div class="upload_background" style="background-color: #1ac95d;">✓</div>
				   <span class="upload-status-title">processed</span>
				   <span class="finished">Finished</span>
				</div>
				<div class="model_row-upload-status --green">
				   <div class="upload_background" style="background-color: #1ac95d;">✓</div>
				   <span class="upload-status-title">Published</span>
				</div>
			  </div>
		    </div>
		</div>
  <!-- close -->
  <!-- <form method="post" action="<?php echo base_url('welcome/form_save_model');?>"> -->
  <!-- open -->
	   <div class="middle_model">
       <div class="input_edit-models">
	       
        </div>
		      <div class="model_form-field" style="margin-top:20px;">
		            <label class="form-label forms__label">Upload Thumbnail</label>
                
                <div class="upload_thumb_edit">
                             
		                 
                 
               
              </div>
              <input type="file" id="inputfileid" accept=".jpg,.png,.jpeg" class="hide"/>
		        </div>
            <div class="model_form-field" style="margin-top:20px;display:flex;">
            <div class="w3-dropdown-hover cat-dropdown --white-background dropingdown3" style="background:transparent;">
                  <div class="cat-dropdown__label form-input --border">
                            <span class="cat-dropdown__label-title"></span>
                            <span class="c-dropdown__label-value --placeholder" style="">
                                 <span class="c-dropdown__label-value__text ">Select up to 2 categories</span>
                                 <span class="c-dropdown__label-value__hidden"></span>
                            </span>
                    </div>
                   
                    <div class="w3-dropdown-content dropingdown-menus3 w3-bar-block w3-card-4" id="checkboxgroup" style="height:200px;background:#fff;overflow:scroll">

                        
                        
                    
                    </div>
                    
              </div>
      </div>
      <script>
     
     $(document).click('.model-checks', function(){
       
         var val = [];
         var k = 0;
           $('.model-checks:checkbox').each(function(i){
             if($(this).is(':checked'))
             {
               $(this).attr('disabled', true);
               k++;
             }
             
           });

           if(k > 1)
           {
             $('model-checks:checkbox').each(function(i){
             
                 $(this).attr('disabled', true);
              
               //$(this).removeAttr('disabled');
               
             
             
           });
           }
           else{
             $('model-checks:checkbox').each(function(i){
               
                 $(this).attr('disabled', true);
              

              
           });
           }
   
       });
      
   </script>

        <div class="model_form-field tags_model-form" style="margin-top:20px;">
            <label class="form-label forms__label">Tags</label>
                <div id="tags">
		        	      <input type="text" id="empty" placeholder="Add"/>
			          </div>
         </div>
         <style>
#ck-button {
    margin:6px;
    background-color:#eee;
    border-radius:4px;
    box-shadow: 0 0 0 0.5px #aaa;
    overflow:auto;
    float:left;
}

#ck-button:hover {
    background:#fff;
}

#ck-button label {
    float:left;
    /* width:4.0em; */
}

#ck-button label span {
    text-align:center;
    padding:7px 10px;
    display:block;
    font-size:17px;
    cursor:pointer;
}

#ck-button label input {
    position:absolute;
    top:-20px;
}

#ck-button input:checked + span {
  
    background-color:#1caad9;
    color:#fff;
}
/* #2288a9 */
#ck-button input:checked + span:hover {
  
  background-color:#2288a9;
  color:#fff;
}

.separator {
    display: inline-block;
    height: 24.5px;
    margin: 7px 10px;
    border-left: 1px solid #d5d5d5;
    /* vertical-align: middle; */
}


#geo{
  /* width:90%; */
  padding:10px;
  font-size:15px;
  
  height:max-content;
}
#geo option{
  font-size:14px;
 
}
</style>
         
         <div class="model_form-field technical_details" style="margin-top: 80px;"></div>
    </div>
       
    <div class="download__s">
        <div class="right_settings">
            <div class="right_settings__flex">
                <div class="right-settings__status">Status: <strong>Published </strong></div>
                <button class="button1 btn-primary" style="font-size:10px;padding:5px;">
                  view my model
                </button>
              </div>
              <div class="right-settings__separator"></div>
              <div class="form-set forming_select_option" style="margin-top:24px">
                
              </div>
              <div class="right-settings__separator"></div>
              <div class="right_model__label">Download</div>
              <div class="tab">
			           <button class="tablinks" onclick="openCity(event, 'Free')" id="defaultOpen" style="border-right: 1px solid #ccc;">Free</button>
			           <button class="tablinks" onclick="openCity(event, 'Paid')">Paid</button>
		   
	            </div>
              <div id="Free" class="tabcontent">
			  
			             <p style="margin:0px;">The users can download Freely.</p>
		          </div>

		          <div id="Paid" class="tabcontent">
			 
			            <p style="margin:0px;">Enter the price($) you want to sell.</p> 
                  <div class="new_right_model_label">
                 

                  </div>
                </div>

            </div>
         </div>
     </div>
    <div class="settings__footer --sticky">
         <div class="settings_d-container">
              <div class="c-model-properties__links">
                  <div class="c-model-properties__link-container" style="margin-top:14px;">
                      
                    </div>
                    
                  </div>
                  <div class="c-model-properties__buttons setting__footer-right">
                    <!-- <div class="c-model-properties__actions">
                      <span class="help">
                        <button type="submit" class="button btn-primary btn-large">
                          <span class="button__text-container">Save</span>
                        </button>
                        <div class="tooltip tooltip-up">Save changes to your model</div>
                      </span>
                    </div> -->
                    <span class="help">
                      <button class="button1 btn-primary btn-large submiting__form" id="submiting__form" type="submit">
                        Save
                      </button>
                    </span>
                  </div>
                </div>
              </div>
         
    
      </div>
     </div>
  </div>
       
  </div>

      



  <div id="popup_delete_model" class="overlay">
        <div class="popup signup_pop-up" style="margin-top:200px;height:45%;">
    
             <a onclick="goBack()" class="close" href="#">&times;</a>
                <div class="login-content">
                  <header class="popup-header">
                      <div class="popup-title"> Delete model</div>
                          
                  </header>
                   <div class="pop-con">
                  
                     
                   
                    </div>

              </div>
        </div>

  </div>
    
 <button id="popup_href" onclick="window.location.href='#popup_paid'"></button>
 <button id="popup_hrefs" onclick="window.location.href='#popup_free'"></button>
 <button id="popup_edit_hrefs" onclick="window.location.href='#popup_edit_model'"></button>
 <button id="popup_delete_hrefs" onclick="window.location.href='#popup_delete_model'"></button>
 <button id="popup_addto" onclick="window.location.href='#popupaddto'"></button>
 <button id="popup_download" onclick="window.location.href='#popupdownload'"></button>


<script>
function show_delete_models_popup(model_id)
{
  $('#popup_delete_hrefs').trigger("click");
  $.post("<?php echo base_url('index.php/welcome/popupdeletemodfetch')?>",
       {model_id:model_id}, function(data){
           $(".pop-con").html(data);

       });


}
</script>
<script>
function mod_del_fun(model_id)
{
  $.post("<?php echo base_url('index.php/welcome/delete_model_fetch')?>",
       {model_id:model_id}, function(data){
       window.location = '<?php echo base_url('welcome/user_profile')?>';

       });
}

</script>
 
 <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>



<script>
function show_edit_models_popup(model_id)
{
  $('#popup_edit_hrefs').trigger("click");

  $(".proper_edit-model-view").html('');
  $.post("<?php echo base_url('index.php/welcome/popupeditmodelfetch')?>",
       {model_id:model_id}, function(data){
           $(".proper_edit-model-view").html(data);

       });

       $(".input_edit-models").html('');
       $.post("<?php echo base_url('index.php/welcome/popupinput_edit_models')?>",
       {model_id:model_id}, function(data){
           $(".input_edit-models").html(data);

       });

       $(".upload_thumb_edit").html('');
       $.post("<?php echo base_url('index.php/welcome/popupuploadthumb_edit_models')?>",
       {model_id:model_id}, function(data){
           $(".upload_thumb_edit").html(data);

       });

      //  $(".tags_model-form").html('');
       $.post("<?php echo base_url('index.php/welcome/popup_tags_editmodels')?>",
      //  $('#tags').html('');
       {model_id:model_id}, function(data){
        $('.tag').html('');
        var text = data;
        var arr = text.split(',');
	if(arr)
	{
	for(var i=0; i< arr.length; i++){
		
		$('input[id=empty]').before('<span class="tag">' + arr[i] + '</span>');
		$('input[id=empty]').value = "";
    // $('input[id=empty]').focus();
	}
	}
	else{
		$('input[id=empty]').before('<span class="tag">' + text + '</span>');
		$('input[id=empty]').value = "";
    // $('input[id=empty]').focus();

	}

       });

       $(".forming_select_option").html('');
       $.post("<?php echo base_url('index.php/welcome/popup_selectpublic_editmodels')?>",
       {model_id:model_id}, function(data){
           $(".forming_select_option").html(data);

       });

       $(".right_settings__flex").html('');
       $.post("<?php echo base_url('index.php/welcome/popup_rightview_editmodels')?>",
       {model_id:model_id}, function(data){
           $(".right_settings__flex").html(data);

       });
    
       $.post("<?php echo base_url('index.php/welcome/popup_rightinput_editmodels')?>",
       {model_id:model_id}, function(data){
           $(".new_right_model_label").replaceWith(data);

       });

       $(".c-model-properties__link-container").html('');
       $.post("<?php echo base_url('index.php/welcome/popup_deleteinput_editmodels')?>",
       {model_id:model_id}, function(data){
           $(".c-model-properties__link-container").html(data);

       });

       $(".dropingdown-menus3").html('');
       $.post("<?php echo base_url('index.php/welcome/popup_selectcat_editmodels')?>",
       {model_id:model_id}, function(data){
           $(".dropingdown-menus3").html(data);

       });

       $.post("<?php echo base_url('index.php/welcome/popup_technical_editmodels')?>",
       {model_id:model_id}, function(data){
           $(".technical_details").html(data);

       });
   
}
</script>


 
  <script>
   
  $(document).ready(function(){

    var limit = 1;
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
        url:"<?php echo base_url(); ?>welcome/fetch",
        method:"POST",
        data:{limit:limit, start:start},
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
            $('#load_data').append(data);
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


<script>
function delete_editThumb(thumbnail)
{
  $.post("<?php echo base_url('index.php/welcome/delete__Thumb')?>",
       {thumbnail:thumbnail}, function(data){
           
        $(".main_thumb_nail").replaceWith(data);
       });
}
</script>

<script>
function deletenl_editThumb(thumbnail)
{
  $.post("<?php echo base_url('index.php/welcome/delete__Thumb')?>",
       {thumbnail:thumbnail}, function(data){
           
        $(".input_delte_edit").replaceWith(data);
       });
}
</script>

<script>
function thumbfunction(model_id)
{
  
  $('#inputfileid').trigger("click");

  

$('input[type="file"]').change(function(e){
			var fd = new FormData();
            var files = e.target.files[0];
			
			fd.append('file',files);
      fd.append('model_id', model_id);
//alert(fd);
            $.ajax({
            url: '<?php echo base_url('welcome/thumbnail_add_buttons');?>',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                
             $(".remove-default-style").replaceWith(response);
          
				}
            },
        });
        });

}
</script>
<script>
function thumbnlfunction(model_id)
{
  
  $('#inputfileid').trigger("click");

  

$('input[type="file"]').change(function(e){
			var fd = new FormData();
            var files = e.target.files[0];
			
			fd.append('file',files);
      fd.append('model_id', model_id);
//alert(fd);
            $.ajax({
            url: '<?php echo base_url('welcome/thumbnail_add_buttons');?>',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                
             $(".remove-default-style").replaceWith(response);
          
				}
            },
        });
        });

}
</script>
    
<script>
$(document).ready(function(){
  $('.close').click(function(){
    $('#No_of_models').val('');
    $('#title_model').val('');
    $('#modsdescriptionss').val('');
    $('#model_thumnail').val('');
    $('#model_thumnail_update').val('');
    $('#model_thumnail_og').val('');
    var spans = document.getElementsByClassName("tag");
    for(i=0;i<spans.length;i++)
    {
        spans[i].remove();
    }
    var polygons = $('#polycount').val('');
  var vertices = $('#verticescount').val('');
  var geometry = $('#geo').val('');
  });
});
</script>

<script>
$(document).ready(function(){
 
 $('#submiting__form').click(function(){
  var row_id = $('#No_of_models').val();
  var title = $('#title_model').val();
  var description = $('#modsdescriptionss').val();
  var thumbnail = $('#model_thumnail').val();
  var thumbnail_og = $('#model_thumnail_og').val();
  var thumbnail_update = $('#model_thumnail_update').val();
  var spans = document.getElementsByClassName("tag");
 var tag = '';


 
for(i=0;i<spans.length;i++)
{
   tag += spans[i].innerHTML+',';
}
var tags = tag.replace(/^,|,$/g,'');
// alert(tags);test.replace(/^,|,$/g,'');

  var public = $('#mod_public').val();
  var price = $('#price_num').val();
  // alert(row_id); 
  // alert(title); 
  // alert(description); 
  // alert(thumbnail);
  // alert(public);
  // alert(thumbnail_update);
  if($.trim(title).length == 0)
  {
   alert("Please Enter Title");
   return false;
  }
  if($.trim(description).length == 0)
  {
   alert("Please Enter Description");
   return false;
  }
  if($.trim(thumbnail).length == 0)
  {
   alert("Please Select Thumbnail");
   return false;
  }
  var tech = '';
  $('.technical:checkbox').each(function(i){
              if($(this).is(':checked'))
              {
               tech += $(this).attr('value')+',';
              }
  });
  var technical = tech.replace(/^,|,$/g,'');
  var polygons = $('#polycount').val();
  var vertices = $('#verticescount').val();
  var geometry = $('#geo').val();


  if(typeof thumbnail_update !== 'undefined')
  {
  
    $.ajax({
        url:"<?php echo base_url('Welcome/edit_modelsave_validation');?>",
        method:"POST",
        data:{row_id:row_id, title:title, description:description, thumbnail:thumbnail_update, thumbnail_og:thumbnail_update, tags:tags, public:public, price:price, technical:technical, polygons:polygons, vertices:vertices, geometry:geometry},
        success:function(response)
        {
      
          window.location = '<?php echo base_url('welcome/user_profile')?>';
          
        }
      });
  }
  else{
    
    $.ajax({
        url:"<?php echo base_url('Welcome/edit_modelsave_validation');?>",
        method:"POST",
        data:{row_id:row_id, title:title, description:description, thumbnail:thumbnail, thumbnail_og:thumbnail_og, tags:tags, public:public, price:price, technical:technical, polygons:polygons, vertices:vertices, geometry:geometry},
        success:function(response)
        {
      
           window.location = '<?php echo base_url('welcome/user_profile')?>';
          
        }
      });
  }
  
  
 
  });
});
  
 
</script>




            <div class="column side_tabs">
              <div class="row" style="margin-left:20px;width: 100%;">
                  <div class="column" style="width:150px">
                      <h2>About</h2>
                      <a>Edit your biography</a>
                  </div>
                  <div class="column" style="float:right;width:90px">
                      <a href="#" style="color:blue;font-size: 19px;">Edit</a>
                  </div>
              </div>
                  <div class="row" style="width: 100%">
                      <div class="column" style="width:100%;float:left">
                          <h2>Category</h2>
                          <a>Edit your Category</a>
                      </div>
                  </div>
                  <div class="row" style="width: 100%">
                      <div class="column" style="width:100%;float:left">
                          <h2>Website</h2>
                          <a>Add Link</a>
                      </div>
                  </div>
             </div>
           </div>
          
          
          </ul>
          
          <ul id="Purchases" class="hide" style="position:unset;">
            <div class="contents row" style="width:80%;background-color: #f2f2f2; padding:80px;margin-left: auto;margin-right:auto;margin-bottom: 0px;">
              <div class="column" style="width:70%;border:1px solid transparent;height: 300px;">
              <a>No Purchases</a>
              </div>
            </div>
          </ul>
          
          <ul id="Collections" class="hide">
            <div class="contents row mod_les">
              <div class="column" style="width:100%;border:1px solid transparent;height:400px;">
              <div class="wrapper">
                <section class="boxes">
               
                  <?php
                //  if($addtocollect => 'Array')
                //  {
                //   echo '<h3 style="color:#ccc;bottom:300px;">No collections</h3>';
                //  }
                 foreach($addtocollect as $row)
                  {
                   if($row->Collection_id == '')
                   {
                     echo '<h3 style="color:#ccc;bottom:300px;">No collections</h3>';
                   }
                   else{
                    echo '<div class="box" style="margin:0px;padding:0;width:300px;height:230px;">';

                      echo '<div class="row" style="margin-left: 0px;margin-bottom: 0px;">';

                      foreach($addtocollections as $res)
                      {
                        if($row->Collection_id == $res->Collection_id)
                        {
                         echo '<a class="button" href="#popup2" style="width:149px;height:94px;margin:0;float:left;border-radius:0px 0px 0px 0px;  background:url('.base_url($res->Model_path).');background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>';

                        }
                     // echo '<a class="button" href="#popup2" style="width:174px;height:94px;margin:0;float:left;border-radius:0px 0px 0px 0px;  background:url('.base_url($row->Model_path).');background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>';
                      // <a class="button" href="#popup2" style="width:174px;height:94px;margin:0;float:right;border-radius:0px 0px 0px 0px;background-color: grey;background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                      }
                      echo '</div>';
                    
                      echo '<div class="row" style="margin:0;padding:0;width:100%;bottom:0px;background-color: #fff;margin-top: 8px;">';
                        echo '<a style="color:#555; float:left;"><i class="fa fa-user" style="border-radius:4px;font-size:16px;background-color: orange;width:20px;height:17px;"></i><span>&nbsp;&nbsp;'.$row->Collection_name.'</span></a>';
                        echo '<a href="" style="float:right">(<span>1</span>)</a>';
                      echo '</div>';
                    echo '</div>';
                   }    
                  }
                    ?>
                   
                </section>
              </div>
              </div>
            </div>
          </ul>


          <!-- sales -->
          <ul id="Sales" class="hide" style="position:unset;height:auto;">
          <div class="contents row" style="width:80%;background-color: #f2f2f2; padding:80px;margin-left: auto;margin-right:auto;margin-bottom: 0px;">
              <div class="column" style="width:70%;border:1px solid transparent;height: 300px;">
              <a>No Sales</a>
              </div>
            </div>
          </ul>


          <!-- sales -->
          <!-- likes -->
          <ul id="Likes" class="hide" style="position:unset;height:auto;">
            <div class="contents row mod_les">
            <div class="column mods-cols">
              <div class="row mod_rows">
               <div class="column" style="width:15%;">
						<a>User-Profile</a>
				
					</div>
					<div class="column" style="width:30%;">
						<a style="color:#000">User_name</a>
				
				    </div>
				    <div class="column" style="width:15%;">
						<a style="color:#000">Likes</a>
				
					</div>
					<div class="column" style="width:15%;">
					<a style="color:#000">Models</a>
				
					</div>
					<div class="column" style="width:25%;">
						<a style="color:#000">Model_name</a>
				
				    </div>
				</div>
              <div id="load_likes" style="height:auto"></div>
              </div>
            </div>
          </ul>

          <script>
   
  $(document).ready(function(){

    var limit = 10;
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
      $('#load_likes').html(output);
      
    }

    lazzy_loader(limit);

    function load_data(limit, start)
    {
      $.ajax({
        url:"<?php echo base_url(); ?>welcome/load_likes",
        method:"POST",
        data:{limit:limit, start:start},
        cache: false,
        success:function(data)
        {
          if(data == '')
          {
            $('#load_likes').html('<h3 style="margin-bottom:300px;color:#333;margin-top:30px;">No Likes</h3>');
            action = 'active';
          }
          else
          {
            $('#load_likes').html(data);
            
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




          <ul id="Comments" class="hide" style="position:unset;">
            <div class="contents row mod_les">
              <div class="column mods-cols">
              <div class="row mod_rows">
               <div class="column" style="width:12%;">
						<a>User-Profile</a>
				
					</div>
					<div class="column" style="width:23%;">
						<a style="color:#000">User_name</a>
				
				    </div>
				    <div class="column" style="width:25%;">
						<a style="color:#000">Comments</a>
				
					</div>
					<div class="column" style="width:15%;">
					<a style="color:#000">Models</a>
				
					</div>
					<div class="column" style="width:25%;">
						<a style="color:#000">Model_name</a>
				
				    </div>
				</div>
              <div id="load_comments"></div>
              </div>
            </div>
          </ul>
          

          <script>
   
  $(document).ready(function(){

    var limit = 10;
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
      $('#load_likes').html(output);
      
    }

    lazzy_loader(limit);

    function load_data(limit, start)
    {
      $.ajax({
        url:"<?php echo base_url(); ?>welcome/load_comments",
        method:"POST",
        data:{limit:limit, start:start},
        cache: false,
        success:function(data)
        {
          if(data == '')
          {
            $('#load_comments').html('<h3 style="margin-bottom:300px;color:#333;margin-top:30px;">No Comments</h3>');
            action = 'active';
          }
          else
          {
            $('#load_comments').html(data);
            
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
          </div> <!-- END List Wrap -->
        
        </div> <!-- END Organic Tabs (Example One) -->
        
      
       
     </div>

</div>


<button id="popup_href" onclick="window.location.href='#popup_paid'"></button>
 <button id="popup_hrefs" onclick="window.location.href='#popup_free'"></button>
 <button id="popup_addto" onclick="window.location.href='#popupaddto'"></button>
 <button id="popup_download" onclick="window.location.href='#popupdownload'"></button>
