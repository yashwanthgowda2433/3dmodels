<script>
  function mysearch()
  {
    window.location = '<?php echo base_url('welcome/search_page')?>';
  }

  </script>

<!-- <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> -->

<!-- <script>
var vid = document.getElementById('vid');

document.getElementById('play-button').addEventListener("click", function(e){
  this.style.display = 'none';
  vid.play();
}, false);
</script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.5.0/jszip.min.js" integrity="sha512-y3o0Z5TJF1UsKjs/jS2CDkeHN538bWsftxO9nctODL5W40nyXIbs0Pgyu7//icrQY9m6475gLaVr39i/uh/nLA==" crossorigin="anonymous"></script>
  <script src="http://cdn.jsdelivr.net/g/filesaver.js"></script>
  <script>
   $(document.body).on('click', '.download_ing-model' ,function(){
    var model_id = $(this).attr('data-url');
    $.ajax({
     url:"<?php echo base_url('welcome/ajax');?>",
     data:{model_id:model_id},
     type: 'POST',
     cache: false,
     success: function(data){
      // alert(data);
     }
   });

  });
  </script>
  <script>
   $(document.body).on('click', '.download_ing-model_pop' ,function(){
    var model_id = $(this).attr('data-url');
    $.ajax({
     url:"<?php echo base_url('welcome/ajax');?>",
     data:{model_id:model_id},
     type: 'POST',
     cache: false,
     success: function(response){
      //  window.location = response;
     }
   });

  });
  </script>
  <style>

.head_name{
  font-size:15px;
   font-weight:600;
   color:#666;
}
.ans_name{
  font-size:15px;
   font-weight:600;
   color:#444;
}
  #moreinfo{
    width:400px;
  }
  .columns_more{
    margin-top:10px;
    margin-bottom:10px;
    margin-right: 10px;
    margin-left:10px;
  }
  .download-content{
    width:400px;
  }
  @media (max-width:800px) and (min-width:300px){
    .download-content{
    width:250px;
  }
    #moreinfo {
    width: 250px;
}
  }
  .signup-form{width:90%;}
  .box{
  height:240px;
}
.popupc{
  width:350px;
}
    .model-player{
      width:69%;
      height:500px;
      float:left;
      background:#ccc;
     }
     .suggested-model{
  margin:0px;
  /* padding:0; */
  width:100%;
  height:94px;
  padding:2px;
  box-shadow: none;
}
.model-img{
        margin:0;
        border-radius:0px 0px 0px 0px; 
        padding:44px;
      }
      .pops-name{
        float: left;
        margin-top:20px;
        width:69%;
      }
      .model-name-free{
        margin-bottom:0px;
      }
      .reporting{
    font-size: 15px;
    float:right;
   } 
   .model-features{
  display:flex;
}
.new_cat_of_disp{
  line-height:1.5em;
}
.cat_disp_two{
    
     margin-bottom:30px;
  }
  .fb-style{
    margin-left:2.8px;
  }
@media (max-width:800px) and (min-width:300px){
  .fb-style{
    margin-left:0.5px;
  }
  .cat_disp_two{
    display: flex; 
    line-height: 1.2em;
     width: fit-content;
     margin-bottom:0px;
  }
  .image-container__image {
    position: absolute;
    top: 10px;
    left: 0;
    opacity: 1;
    transition: opacity .25s ease;
}
  .new_cat_of_disp{
  line-height:2.5em;
}
  .model-features{
  display:block;
}
}
   .popadd-to{
    width:40%;
    height:75%;
   }
   .popup-addto{
    width:25%;
    height:60%;
   }

   .popup-downloaded{
    width:40%;
    height:55%;
   }
   .pop-embed{
    width:40%;
    height:55%;
   }
   .pop-share{
    width:30%;
    height:82%;
   }
   .pop-collections{
    width:30%;
    height:45%;
   }
   .pop-requestform{
    width:40%;
    height:90%;
    margin-top:40px;
   }
   
   .pop-requestform-col{
    width:80%;
    /* margin-left:150px; */
   }
    @media (max-width:700px) and (min-width:300px){
      .pop-requestform-col{
    width:60%;
    margin-left:10px;
   }
      .popadd-to{
    width:100%;
    height:auto;
   }
      .paid-pops-free{
        display:none;
      }
  .models_pop-up{
  width:95%;
  height:98%;
     }
     .model-player{
      width:69%;
      height:500px;
      float:left;
      background:#ccc;
     }
     
     .model-player{
      width:100%;
      height:200px;
      float:left;
      background:#ccc;
     }
     .popup-free-download{
       display:none;
      width:28%;
      /* right:10px; */
      float:right;
      height:auto;
      margin: 0px;
     }
     .popup{
       width:100%;
       height:95%;
     }
     .features-free-download
     {
       width:100%;
       /* right:60px; */
       margin-top:0px;
       height:auto;
      }
      .model-img{
        margin:0;
        border-radius:0px 0px 0px 0px; 
        padding:20px;
      }
      .suggested-model{
  margin:0px;
  width:30%;
  height:44px;
  padding:2px;
  box-shadow: none;
}
.features-list-free-download{
   height:55px;

}
.pops-name{
        float: left;
        margin-top:20px;
        width:100%;
      }
      
      .reporting{
    font-size: 15px;
    float:left;
   } 
   .model-features-column1
   {
     display:grid;
    border:1px solid #ccc;
    margin-left:10px;
     width:90%;
   }
   .embed-feature{
     float:left;
   }
   .model-features-column1 a{
     padding:4px;
    
   }
   .model-features-column{
     margin-left:10px;
     display:grid;
     border:1px solid #ccc;
     width:90%;
     

   }
   .model-features-column a{
     
     padding:5px;

   }
   #addtoc{
     font-size:14px;
   }
   .comment-box-section{
     height:auto;
   }
   .popup-model-cart{
     width:100%;
   }
   .popupc{
    padding: 10px;
    visibility: hidden;
    opacity: 0;
    pointer-events: none;
    position: absolute;
    top: 100%;
    width: 220px;
    margin-left: -100px;
   }
   .popupc:before{
     left:112px;
   }
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
footer{
	position: none;
	bottom: 0;
}
.footer-distributed{
	background-color: #ccc;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: 16px sans-serif;
  font-weight:500;
	padding:30px;
  padding-bottom:2px;
  padding-top:2px;
  /* height:57px; */
	/* margin-top: 10px; */
}
 
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	/* vertical-align: top; */
}
 
.footer-distributed .footer-left{
	width: 25%;
}
 
.footer-distributed h3{
	color: #444;
	font: normal 36px;
  margin: 0;
  margin-top: 12px;
    font-size: 16px;
    font-weight: 500;
}
 
.footer-distributed h3 span{
	color:  #5383d3;
}
 
 
.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}
 
.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1;
	text-decoration: none;
	color:  inherit;
}
 
.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}
 
 
.footer-distributed .footer-center{
	width: 50%;
}
 
.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 18px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}
 
.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 18px;
}
 
.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
  margin:10px;
  font-size:15px;
  font-weight:500;
}
 
.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:1;
}
 
.footer-distributed .footer-center p a{
	color: #444;
	text-decoration: none;;
}
.footer-center p a:hover{
  color:rgb(21, 181, 245)!important;
}
.footer-distributed .footer-right{
	width: 20%;
}
 
.footer-distributed .footer-company-about{
	line-height: 1;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0px;
}
 
.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: 500;
	margin-bottom: 20px;
}
 
.footer-distributed .footer-icons{
	margin-top: 18px;
}
 
.footer-distributed .footer-icons a{
  font-size:15px;
  font-weight:100;
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	/* background-color:  #33383b; */
	border-radius: 2px;
  color: #444;
  
	color: #ffffff;
	text-align: center;
	line-height: 1;
 margin-top:-10px;
	margin-right: 3px;
	/* margin-bottom: 5px; */
}
 .fabi{
   color:#444;
 }
 .fabi:hover{
  color:rgb(21, 181, 245)!important;
 }
 
@media (max-width: 880px) {
 
	.footer-distributed{
		font: 14px sans-serif;
	
	}
 
	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 10px;
		text-align: center;
	}
 
	.footer-distributed .footer-center i{
		margin-left: 0;
	}
	.main {
		line-height: normal;
		font-size: auto;
	}
 
}

  </style>


  <script>
 function maDownloads(No_of_models)
 {
  $.post("<?php echo base_url('index.php/welcome/count_download')?>",
       {No_of_models:No_of_models}, function(data){
          //  $("#displays_image").html(data);

       });
 }
  </script>

<div id="popup_free" class="overlay" style="height:100%">
            <div class="popup models_pop-up" style="margin-top:0px;height:100%;">
              <a class="close closure" href="#">&times;</a>
              <div class="content popup-models" style="height:100%;padding-top:3px;padding-bottom:150px;">
              <div class="display-images" id="display_image">
              <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9183001561799680"
     data-ad-slot="2279486316"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> -->
                </div>
                <div class="cart2 popup-free-download" >
                 <div class="features-free-download">
                  <h5 class="free-download-h5">SUGGESTED 3D MODELS</h5>
                  <div id="load-suggests-free"></div>
                  
                  
                  <div class="load-more" style="display:flex;width:70%;margin-left: auto;margin-right: auto;">
                      <button class="button1 btn-primary btn-large" id="suggestmore-free" style="margin-left: auto;margin-right: auto;margin-top: 20px;">Load More</button>
                    </div>
                  
                </div>
              </div>
              <div class="additonal-viewer pops-name">
                <div class="name" style="margin-left: 0px;">
                <h1 class="model-name-free" itemprop="name">
                  <span class="model-name">
                    <span class="model-name__label" id="display_name"></span>
                  </span>
                  
                </h1>
                
              </div>
              <div class="user-proof" style="width:100%;">
                <div class="user-pic-free">
                  <div class="container" style="width:100%;">
                  <div class="image-container__image fa fa-user"  id="user_model_image" style="padding: 10px;width:35px;border-radius: 4px;"></div>
                  <div id="user_model_name"></div>
                </div>
                <!-- <a href="#"class="username far fa-eye" style="float:right;font-size: 18px;padding: 10px;color:#999;">&nbsp;<span class="count">0</span></a>
                  <a href="#"class="username far fa-thumbs-up" style="float:right;font-size: 18px;padding: 10px;color:#999 ">&nbsp;<span>0</span></a>
                   -->
                </div>
                
              </div>
              <div class="row" style="width:100%;margin-left: 0px;">
                
              <div id="comments"></div>
              </div>
              <!-- comments -->
              <div id="comment_text">
              
              </div>

              <!-- comments -->
              <div class="load-more" style="margin-bottom:100px;display:flex;width:70%;margin-left: auto;margin-right: auto;">
                      <button class="button1 btn-primary btn-large" style="margin-left: auto;margin-right: auto;margin-top: 20px;">Load More</button>
                    </div>
              </div>
  <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 3d horizontal unit 
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9183001561799680"
     data-ad-slot="2279486316"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> -->
              </div>
            </div>
          </div> 




          <!-- script -->
<script>
   
   $(document).ready(function(){
      
     var limit = 6;
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
         url:"<?php echo base_url(); ?>welcome/fetch_suggests_free",
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
             $('#load-suggests-free').append(data);
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
 
     $('#suggestmore-free').click( function(){
       if(action == 'inactive')
       {
         lazzy_loader(limit);
         action = 'active';
         start = start + limit;
         setTimeout(function(){
           load_data(limit, start);
         }, 1000);
       }
     });
 
   });
 
   
 </script>
 
 <!-- <div id="moreinfo"></div> -->
 

    <div id="popupmoreinfo" class="overlay">
        <div class="popup pop-requestform" style="max-height: 100%;height: max-content;overflow: auto;margin-top:40px;width:max-content;">
    
             <a onclick="goBack()" class="close" href="#">&times;</a>
            <div class="contentss signup-body" style="padding-top: 0px;max-height: max-content;overflow: auto;">
                 <h2 class="transfer-h2" style="padding-top:0px;font-size: 18px;">More Information</h2>
                  <div class="contentss">
                       <div id="moreinfo"></div>
                  </div>
             </div>
         </div>
      </div>
 <button id="popupinfo" onclick="window.location.href='#popupmoreinfo'"></button>

        <script>
$(document).on('click','#popupmoreinformation' ,function(){
  $('#popupinfo').trigger("click");
  var model_id = $(this).attr('data');
  $.ajax({
        url:"<?php echo base_url(); ?>welcome/popup_moreinfo",
        method:"GET",
        data:{model_id:model_id},
        cache: false,
        success:function(data)
        {
          $('#moreinfo').html(data);
        }
  });


});
</script>
        <!-- download popup -->
        <div id="popupdownload" class="overlay">
            <div class="popup pop-requestform" style="max-height: 100%;height: max-content;overflow: auto;margin-top:100px;width:max-content;">
                  <a onclick="goBack()" class="close" href="#">&times;</a>
                <div class="contentss signup-body" style="padding-top: 0px;max-height: max-content;overflow: auto;">
                  <h2 class="transfer-h2" style="padding-top:0px;font-size: 18px;">Download</h2>
                     <div class="contentss">
                          <div class="download-content" id="download_contents">
                
                           </div>
                       </div>
                 </div>
             </div>
         </div>
<!-- popup embed -->
        <div id="popupembed" class="overlay">
        
          <div class="popup pop-embed" style="height:90%;">
            
            <a onclick="goBack()" class="close" href="#">&times;</a>
            <div class="content" style="position:relative;over-y:scroll;padding-bottom:200px;height: 100%;padding-top: 3px;">
              <h3 style="color:#000;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);font-size: 24px;">Embed Models</h3>
              <div class="download-content">
                
                <div class="column" style="margin-left:0px;margin-right: 0px;margin-top:15px;">
                  
                    <a style="color:#000;font-weight: bold;float: left;margin-left: 0px;">Preview&nbsp;:</a>
                    <p class="preview_embed" style="margin:0px;"></p>
                  
                </div>
                
                <div class="column" style="width:90%;">
                <h3><span style="color:#000;">Embed code :</span></h3>
                 <textarea id="html" name="html" class="w3-bar-item" rows="5" cols="78" style="resize:none;padding-left:0px;background-color: rgb(231, 231, 231);">
                
                 
                    </textarea>
                   
                    <button class="button1 btn-primary btn-large" onclick="copy_to_clipboard('html');" style="float:left;">Click to Copy</button>
                    </div>   
                    <div class="script_show column" style="width:90%;margin-top:15px;">
                    <p style="display:flex;margin:0px;">
                    <a style="color:#000;font-weight: bold;float: left;margin-left: 0px;">Instructions&nbsp;:</a>
                    <a style="background-color:lightgray;">Copy Script & paste it in the html body</a>
                    </p>
                    <h3><span style="color:#000;">Script :</span></h3>
                    <textarea id="scripthtml_l" rows="5" cols="78" style="resize:none;padding-left:0px;background-color: rgb(231, 231, 231);"><script type="module" src="<?php echo base_url('resources/uploadcss/model-viewer.min.js');?>"></script>
<script nomodule src="<?php echo base_url('resources/uploadcss/model-viewer-legacy.js');?>"></script></textarea>
<button class="button1 btn-primary btn-large" onclick="copy_to_script('scripthtml_l');" style="float:left;">Click to Copy Script</button>
</div>
                </div>
              </div>
            </div>
          </div>
          <script>
  function copy_to_script(id)
  { 
    html.setAttribute('readonly', '');
      document.getElementById('scripthtml_l').select();
      document.execCommand('copy');
      
      
  }
  </script> 
          <button id="popup_emb" onclick="window.location.href='#popupembed'"></button>
          <script>
$(document).on('click','#popembeding' ,function(){
  $('#popup_emb').trigger("click");
  $('.script_show').hide();
  var data = $(this).attr('data');
  var data_path = $(this).attr('data-path');
  var data_ext = $(this).attr('data-ext');

  if(data_ext == 'mp4')
  {
    $('#html').html('<a href="'+data_path+'" title="" target="_blank"><video class="model-player" controls style="width:100%;height:auto;background: #ccc;"><source src="'+data_path+'" type="video/mp4">Your browser does not support HTML video.</video></a>');
    $('.preview_embed').html('<a href="'+data_path+'" title="" target="_blank"><video class="model-player" controls style="width:100%;height:auto;background: #ccc;"><source src="'+data_path+'" type="video/mp4">Your browser does not support HTML video.</video></a>');
  }else if(data_ext == 'glb' || data_ext == 'gltf'){
    $('#html').html('<a title="" target="_blank"><model-viewer style="width:500px;height:500px;" src="'+data_path+'" ar auto-rotate camera-controls shadow-intensity="1" alt="A 3D model of an buster_drone"></model-viewer></a>');
  $('.script_show').show();
  $('.preview_embed').html('<a title="" target="_blank"><model-viewer style="width:250px;height:150px;" src="'+data_path+'" ar auto-rotate camera-controls shadow-intensity="1" alt="A 3D model of an buster_drone"></model-viewer></a>');

      
  }else{
         $('#html').html('<a href="'+data+'" title="" target="_blank"><img src="'+data+'" width="100%" style="max-width: 850px;margin-left:auto;margin-right:auto;" alt=""></a>');
         $('.preview_embed').html('<a href="'+data+'" title="" target="_blank"><img src="'+data+'" width="100%" style="max-width: 250px;margin-left:auto;margin-right:auto;" alt=""></a>');
  
  }
});
</script>





<!-- share -->
<div id="popupshare" class="overlay">
              <div class="popup pop-share" style="height:62%;margin-top:100px;">
    
                 <a onclick="goBack()" class="close" href="#">&times;</a>
                 <div class="share-content">
      <h2 class="share-h2">Share</h2>
      <div class="share-form">
        
          <h5>Direct Link</h5>
          <div class="sharelinkinghtml"></div>
          <button class="button1 btn-primary btn-large share-button" onclick="copy_to_sharelink('sharelinkhtml')" style="float:left;">Click to Copy link</button>
           <h5 style="margin-top: 15px;">Share to</h5>
          <?php if($this->session->userdata('User_id')){ ?>
          <div class="socialicons-share">
          
          <!-- <div class="fb-share-button" data-href="http://3dcopilot.com/welcome/sharelink?search=uploads/1601098217/thumbnails/83815091_10162938626140109_7636703460062134272_o.jpg" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F3dcopilot.com%2F%23&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"></a></div>
            -->
            <!-- <a class="fab face-shareb"></a> -->
            <div class="row" style="width:240px;margin-left:auto;margin-right:auto;">
            <a class="fab face-sharefa"></a>

            <a class="share-twit twitter-share_t"></a> 
            
            <a class="share-linkedin linkedin_share"></a>
            
            
            <a class="share-whatsapp whats_app-share"></a>
            <a class="share-google mail_to-google" style="background-color: red;"></a>
            </div>
          </div>
         <?php }else{?>
         <div class="socialicons-share">
         <div class="row" style="width:240px;margin-left:auto;margin-right:auto;">
            <a href="#popuplogin" class="fab fa-facebook-f share-fb"></a>
            <a href="#popuplogin" class="fab fa-twitter share-twit"></a>
            
            <a href="#popuplogin" class="fab fa-linkedin-in share-linkedin"></a>
            
            
            <a href="#popuplogin" class="fab fa-whatsapp share-whatsapp"></a>
            <a href="#popuplogin" class="fas fa-envelope share-google" style="background-color: red;"></a>
           </div>
          </div>
          <?php }?>
       
      </div>
     </div>
    </div>
         </div>


         

         <button id="popup_shar" onclick="window.location.href='#popupshare'"></button>
         <script>
          function copy_to_sharelink(id)
              { 
                 html.setAttribute('readonly', '');
                 document.getElementById('sharelinkhtml').select();
                 document.execCommand('copy');
      
      
              }
          </script>

<script>
$(document).on('click','#popemb_share_link' ,function(){
  $('#popup_shar').trigger("click");
  $('.script_show').hide();
  
  var data_path = $(this).attr('data-path');
  var data_link = $(this).attr('data-link');
  var data_name = $(this).attr('data-name');
  
  
        $('.sharelinkinghtml').replaceWith('<textarea id="sharelinkhtml" readonly class="w3-bar-item" rows="3" cols="60" style="width:100%;resize:none;padding-left:0px;background-color: rgb(231, 231, 231);">'+data_path+'</textarea>');
        // $('.face-shareb').html('<iframe src="https://www.facebook.com/plugins/share_button.php?href='+data_path+'&layout=button&size=large&appId=1031805903902546&width=150&height=22"width="100" height="35" style="border:none;overflow:hidden" scrolling="no"frameborder="0" allowTransparency="true" allow="encrypted-media">></iframe>');
        
        $('.face-sharefa').html('<a class="share-f fb-share share-fb fab fa-facebook-f" data-network="facebook" href="https://www.facebook.com/sharer/sharer.php?u='+data_path+'" rel="nofollow noopener noreferrer" target="_blank"></a>');
        $('.twitter-share_t').html('<a target="_blank" class="share-f twitter-share-button fab fa-twitter" data-network="twitter" href="https://twitter.com/intent/tweet?url='+data_path+'" data-size="large"></a>');
        $('.linkedin_share').html('<a target="_blank" class="share-f fab fa-linkedin-in" data-network="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url='+data_path+'"></a>');
        $('.whats_app-share').html('<a class="fab fa-whatsapp" href="whatsapp://send?text='+data_path+'" data-action="share/whatsapp/share"></a>');
        $('.mail_to-google').html('<a class="fas fa-envelope" href="mailto:?subject=I want to Share '+data_name+' &amp;body=Check out this '+data_path+'."title="Share by Email"></a>');
  });
</script>

<script>
$(document.body).on('click', '.share-f', function(e){
e.preventDefault();

var $link   = $(this);
var href    = $link.attr('href');
var network = $link.attr('data-network');

var networks = {
    facebook : { width : 600, height : 300 },
    twitter  : { width : 600, height : 354 },
    linkedin : { width : 600, height : 473 }
};

var popup = function(network){
    var options = 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,';
    window.open(href, '', options+'height='+networks[network].height+',width='+networks[network].width);
}

popup(network);
});
</script>
          <!-- popup add to -->
          <div id="popupaddto" class="overlay">
          <div class="popup popup-addto" style="height:600px;overflow: auto;">
              
              <a onclick="goBack()" class="close" href="#">&times;</a>
              <div class="content" style="width:100%;min-height:300px;;margin-left: auto;margin-right: auto;margin-top: 0px;padding-top:3px;">
                <div class="head" style="width:100%;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);">
                <a style="color:#000;font-size: 17px;">Add to Collection</a>
                </div>
                
                <div class="download-content">
                  <a>Recently</a>
                  <?php
                  foreach($addtocollect as $row)
                  {
                  echo '<div class="row" style="margin-left:0px;margin-right: 0px;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);">';
                    echo '<div class="column" style="width:80px">';
                    echo '<img style="width:65px;height:65px;" src="'.base_url($row->Model_path).'">';
                  echo '</div>';
                  echo '<div class="column" style="width:100px">';
                    echo '<a><span>'.$row->Collection_name.'</span></a>';
                  echo '</div>';
                  echo '<div class="column" style="width:100px">';
                    echo '<button class="button1 btn-primary btn-large" id="addtobutton" data-collect='.$row->Collection_id.'  data-name='.$row->Collection_name.' style="text-align: center;float:right">Add</button>';
                  echo '</div>';
                  echo '</div>';
                  }?>
                </div>
                  <a>All Collections</a>
                  <?php
                  foreach($addtocollect as $row)
                  {
                  echo '<div class="row" style="margin-left:0px;margin-right: 0px;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);">';
                    echo '<div class="column" style="width:80px">';
                    echo '<img style="width:65px;height:65px;" src="'.base_url($row->Model_path).'">';
                  echo '</div>';
                  echo '<div class="column" style="width:100px">';
                    echo '<a><span>'.$row->Collection_name.'</span></a>';
                  echo '</div>';
                  echo '<div class="column" style="width:100px">';
                    echo '<button class="button1 btn-primary btn-large" id="addtobutton" data-collect='.$row->Collection_id.' data-name='.$row->Collection_name.' style="text-align: center;float:right">Add</button>';
                  echo '</div>';
                  echo '</div>';

                  }?>
                  <div class="row">
                  <?php if($this->session->userdata('User_id')) {?>
                 
                    <input type="button" onclick="window.location.href='#popupaddtocollection'" class="fa fa-plus" value="+ &nbsp;CREATE A NEW COLLECTION" style="padding:10px;color:rgb(91, 186, 245);border:1 px solid rgb(91, 186, 245);">
                  
                  
                  <?php } else if ($this->session->userdata('User_id')=='') {?>
          
                    <input type="button" onclick="window.location.href='#popupsignup'" class="fa fa-plus" value="+ &nbsp;CREATE A NEW COLLECTION" style="padding:10px;color:rgb(91, 186, 245);border:1 px solid rgb(91, 186, 245);">

                  <?php }?>
                    
                  </div>
                  
                  
                   
                  </div>
                </div>
              </div>
            </div>

            
            <!-- popupaddtocollection -->
            <div id="popupaddtocollection" class="overlay">
              <div class="popup pop-collections">
                
                <a onclick="goBack()" class="close" href="#">&times;</a>
                <div class="content" style="width:100%;height: 100%;margin-left: auto;margin-right: auto;margin-top: 0px;padding-top:3px;">
                  <div class="head" style="width:100%;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);background-color: #fff;">
                  <a style="color:#000;font-size: 17px;">Create a New Collection</a>
                  </div>
                  <div class="download-content">
                  <form id="target" action="<?php echo base_url('welcome/index');?>">
                    <div class="row" style="margin-left: 0px;margin-bottom: 0px;width:100%;padding:20px;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);background-color: #fff;">
                      <input type="text" placeholder="Collection name" id="collection_name" name="collection_name" style="padding:20px;width:100%">
                    </div>
                    <div class="row" style="margin-left: 0px;margin-bottom: 0px;width:90%;padding:20px;">
                      <button class="button1 btn-primary btn-large" type="submit" style="background-color: rgb(79, 38, 228);padding:10px;margin-left:15px;width:80px;float:right">Create</button>
                      <button class="button" onclick="window.location.href='#popupaddto'" style="background-color: lightsteelblue;width:80px;padding:10px;float:right">Cancel</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>



                 <!-- request 3d model -->

                 <div id="popuprequestform" class="overlay">
  <div class="popup pop-requestform" style="max-height: 100%;height: 685px;margin-top:10px;">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="contentss signup-body" style="padding-top: 0px;max-height: max-content;overflow: auto;">
      <h2 class="transfer-h2" style="padding-top:0px;">Request Form</h2>
      
        <form method="post" action="<?php echo base_url('welcome/requestform')?>" >
          <div class="contentss">
            <div class="row" style="width:90%;margin-bottom:10px;">
              <div class="row" style="width:100%;margin:0px;padding-top:15px;">
                <a style="padding-top:10Px;bottom:0px;color:#333;">User name<span style="color:red;">*</span></a>
              </div>
            
            <div class="row" style="width:100%;margin:0px;padding-top:5px;">
              <input type="text" name="user_name" placeholder="User name" style="margin:0px;" required>
            </div>
          </div>

          <div class="row" style="width:90%;margin-bottom:10px;">
          <div class="row" style="width:100%;margin:0px;padding-top:15px;">
                <a style="padding-top:10Px;bottom:0px;color:#333;">Email<span style="color:red;">*</span></a>
              </div>
            
              <div class="row" style="width:100%;margin:0px;padding-top:5px;">
              <input type="text" name="user_email" placeholder="what is your email address" style="margin:0px;" required>
            </div>
          </div>

          <div class="row" style="width:90%;margin-bottom:10px;">
          <div class="row" style="width:100%;margin:0px;padding-top:15px;">
                <a style="padding-top:10Px;bottom:0px;color:#333;">Phone number<span style="color:red;">*</span></a>
              </div>
            
              <div class="row" style="width:100%;margin:0px;padding-top:5px;">
              <input type="text" name="user_number" style="margin:0px;" placeholder="Phone Number" required>
            </div>
          </div>
          <div class="row" style="width:90%;margin-bottom:10px;">
          <div class="row" style="width:100%;margin:0px;padding-top:15px;">
            <a style="color:#333;">Categories<span style="color:red;">*</span></a>
           
          </div>
          
        
          <div class="row" style="width:100%;margin:0px;padding-top:5px;">
          <select name="select_cat" id="models" required style="width:44%;height:30px;">
                    
          <option value="">Select</option>
          
          <?php
          
          foreach($models as $row)
          {
            echo '<option value="'.$row->model_name.'">'.$row->model_name.'</option>';
          }
          ?>
          
        </select>
        </div>
      </div>
          
          <div class="row" style="width:90%;margin-bottom:10px;">
          <div class="row" style="width:100%;margin:0px;padding-top:15px;">
              <a style="color:#333;">Description<span style="color:red;">*</span></a>
            </div>
          
            <div class="row" style="width:100%;margin:0px;padding-top:5px;">
            <textarea id="description" name="model_description" rows="4" style="width:100%;resize:none;background-color: rgb(231, 231, 231);font-size: 16px;" required>
              
              </textarea>
          </div>
        </div>
        
      
      
      <?php
          echo $this->session->flashdata("requesterror");
         ?>
      <div class="row" style="margin: 0px;width:90%;margin-bottom:20px;">
      <div class="row" style="width:100%;padding-top:5px;">
                      <button class="button1 btn-full btn-huge btn-primary" type="submit" style="width:100%;">submit</button>
                  </div>
       </div>
       </div>
    </form>
  
    </div>
  </div>
</div>




             <!-- 2nd image -->
        <div id="popup_paid" class="overlay popup_paid">
          <div class="popup models_pop-up" style="margin-top:0px;height:100%;">
            
            <a class="close closure" href="#">&times;</a>
            <div class="content" style="width:100%;height: auto;padding-top:3px;padding-bottom:150px;">
            <div id="displays_image">
            
              
             </div> 
              <div class="cart2 popup-model-cart">
                <div class="payment-cart">
                <h3 class="payment-cart-h3" id="display_price" style="padding:0px;margin:auto;width: max-content;"></h3>
                
             
              
              <div class="payment-methods" style="width:max-content;padding: 20px 30px;margin: auto;">
                
                  <a href="#" class="payment-methods1"><i class="fab fa-cc-visa" style="color:#004d99"></i></a>
                  <a href="#" class="payment-methods2"><i class="fab fa-cc-paypal"style="color:#004d99"></i></a>
                  <a href="#" class="payment-methods3"><i class="fas fa-credit-card"></i></a>
                  <a href="#" class="payment-methods4"><i class="fab fa-cc-amex"></i></a>
                </div>
              </div>

              <div class="features-free-download paid-pops-free" style="padding-top: 20px;">
                <h5 class="free-download-h5">SUGGESTED 3D MODELS</h5>
                <div id="load-suggests-paid"></div>
                
                <div class="load-more" style="display:flex;width:70%;margin-left: auto;margin-right: auto;">
                      <button class="button1 btn-primary btn-large" id="suggestmore-paid" style="margin-left: auto;margin-right: auto;margin-top: 20px;">Load More</button>
                    </div>
                
              </div>
            </div>
            <div class="additonal-viewer pops-name">
                <div class="name" style="margin-left: 0px;">
                <h1 class="model-name-free" itemprop="name">
                  <span class="model-name">
                    <span class="model-name__label" id="display_model_name"></span>
                  </span>
                 
                </h1>
              
              </div>
              <div class="user-proof" style="width:100%;">
                <div class="user-pic-free">
                  <div class="container" style="width:48px; width:100%;">
                  <div class="image-container__image fa fa-user"  id="user_profile_image" style="padding: 10px;width:35px;border-radius: 4px;"></div>
                  <div id="user_profile_name"></div>
                      
                  
                  <!-- <a href="#"class="username far fa-eye" style="float:right;font-size: 18px;padding: 10px;color:#999;">&nbsp;<span class="count">0</span></a>
            <a href="#"class="username far fa-thumbs-up" style="float:right;font-size: 18px;padding: 10px;color:#999 ">&nbsp;<span>0</span></a> -->
                  </div>
                </div>
                
              </div>
              <div class="row" style="width:100%;margin-left: 0px;">
                
                <div id="comment_box"></div>
              </div>
              <!-- comments -->
              <div id="comments_text">
              
              </div>
              <!-- comments -->
              <div class="load-more" style="display:flex;width:70%;margin-left: auto;margin-right: auto;">
                      <button class="button1 btn-primary btn-large" style="margin-left: auto;margin-right: auto;margin-top: 20px;">Load More</button>
                    </div>
                    
              </div>
              </div>
            </div>
          </div> 

     <!-- script -->
     <script>
   
   $(document).ready(function(){
      
     var limit = 6;
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
         url:"<?php echo base_url(); ?>welcome/fetch_suggests_free",
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
             $('#load-suggests-paid').append(data);
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
 
     $('#suggestmore-paid').click( function(){
       if(action == 'inactive')
       {
         lazzy_loader(limit);
         action = 'active';
         start = start + limit;
         setTimeout(function(){
           load_data(limit, start);
         }, 1000);
       }
     });
 
   });
 
   
 </script>
 


          <!-- scripts for loading model -->


          <script>
 $(document).ready(function(){
        $('.container input[name="buy"]').click(function(){
          var cat = $('#cat_id').val();
          $.ajax({
        url:"<?php echo base_url('index.php/welcome/buy_models')?>",
        method:"POST",
        data:{cat:cat},
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

<script>
 $(document).ready(function(){
        $('.container input[name="others"]').click(function(){
          var cat = $('#cat_id').val();
          var tag = $(this).val();
         
          $.ajax({
        url:"<?php echo base_url('index.php/welcome/others_tag')?>",
        method:"POST",
        data:{cat:cat,tag:tag},
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

<script>
 $(document).ready(function(){
        $('.container input[name="free"]').click(function(){
          var cat = $('#cat_id').val();
          $.ajax({
        url:"<?php echo base_url('index.php/welcome/free_models')?>",
        method:"POST",
        data:{cat:cat},
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



<script>
 $(document).ready(function(){
   $('#onprice').click(function(){
    var cat = $('#cat_id').val();
     var fromval = $(this).attr('data-fromvalue');
     var toval = $(this).attr('data-tovalue');
     
     $.ajax({
        url:"<?php echo base_url('index.php/welcome/range_sliders')?>",
        method:"POST",
        data:{fromval:fromval, toval:toval, cat:cat},
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

<script>
 $(document).ready(function(){
   $('#onprice1').click(function(){
    var cat = $('#cat_id').val();
     var fromval = $(this).attr('data-fromvalue');
     var toval = $(this).attr('data-tovalue');
     
     $.ajax({
        url:"<?php echo base_url('index.php/welcome/range_sliders')?>",
        method:"POST",
        data:{fromval:fromval, toval:toval, cat:cat},
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

<script>
 $(document).ready(function(){
   $('#onprice2').click(function(){
    var cat = $('#cat_id').val();
     var fromval = $(this).attr('data-fromvalue');
     var toval = $(this).attr('data-tovalue');
     
     $.ajax({
        url:"<?php echo base_url('index.php/welcome/range_sliders')?>",
        method:"POST",
        data:{fromval:fromval, toval:toval, cat:cat},
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
<script>
 $(document).ready(function(){
   $('#onprice3').click(function(){
    var cat = $('#cat_id').val();
     var fromval = $(this).attr('data-fromvalue');
     var toval = $(this).attr('data-tovalue');
     
     $.ajax({
        url:"<?php echo base_url('index.php/welcome/range_sliders')?>",
        method:"POST",
        data:{fromval:fromval, toval:toval, cat:cat},
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
<script>
 $(document).ready(function(){
   $('#onprice4').click(function(){
    var cat = $('#cat_id').val();
     var fromval = $(this).attr('data-fromvalue');
     var toval = $(this).attr('data-tovalue');
     
     $.ajax({
        url:"<?php echo base_url('index.php/welcome/range_sliders')?>",
        method:"POST",
        data:{fromval:fromval, toval:toval, cat:cat},
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
 <script>
 $(document).on('click', '#filter-bar', function(){
  var cat = $('#cat_id').val();
var fromval = document.getElementById("from-value").value;
var toval = document.getElementById("to-value").value;

$.ajax({
        url:"<?php echo base_url('index.php/welcome/range_sliders')?>",
        method:"POST",
        data:{fromval:fromval, toval:toval, cat:cat},
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
</script>



<!-- search -->

<script>

  $(document).ready(function(){
    $('input[type="search"]').on('keyup',function(){
      var cat = $('#cat_id').val();
      var search = $(this).val();
      $.ajax({
        url:"<?php echo base_url('index.php/welcome/input_search')?>",
        method:"POST",
        data:{cat:cat, search:search},
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




<!-- search -->


<!-- extensions select -->
<script>
$(document).ready(function () {
  $('.container input[name="extensions"]').click(function(){
  var ext = $(this).val();
  var cat = $('#cat_id').val();
          $.ajax({
        url:"<?php echo base_url('index.php/welcome/extensions')?>",
        method:"POST",
        data:{cat:cat,ext:ext},
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


<!-- extensions select -->
<!-- script -->
<script>
   
  $(document).ready(function(){

    var limit = 8;
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
        url:"<?php echo base_url(); ?>welcome/fetching_all_models",
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




          <!-- scripts for loading model -->




          <script>
$(document).on('click','#popupdownloading' ,function(){
  $('#popup_download').trigger("click");
  var model_id = $(this).attr('data');
  $.ajax({
        url:"<?php echo base_url(); ?>welcome/popup_downloads",
        method:"GET",
        data:{model_id:model_id},
        cache: false,
        success:function(data)
        {
         $('#download_contents').html(data);
        }
  });


});
</script>
 <script>
$(document).on('click','#addtoc' ,function()
{
  $('#popup_addto').trigger("click");
  var model_id = $(this).attr('data-model_id');
  var model_path = $(this).attr('data-model_path');
  sessionStorage.setItem('model_id', model_id);
  sessionStorage.setItem('model_path', model_path);
  
  $(document).on('click','#addtobutton', function(){
    document.getElementById("addtobutton").innerHTML = "Added";
  var collection_name = $(this).attr('data-name');
  var collection_id = $(this).attr('data-collect')
  var model_id = sessionStorage.getItem('model_id');
  var model_path = sessionStorage.getItem('model_path');
  
  $.ajax({
        url:"<?php echo base_url(); ?>welcome/addto",
        method:"POST",
        data:{model_id:model_id, model_path:model_path, collection_name:collection_name, collection_id:collection_id},
        cache: false,
        success:function(data)
        {
          sessionStorage.clear();
        }
  });
});

$( "#target" ).submit(function() {
  var collection_name = $('#collection_name').val();
  var model_id = sessionStorage.getItem('model_id');
  var model_path = sessionStorage.getItem('model_path');

  $.ajax({
        url:"<?php echo base_url(); ?>welcome/addtocollect",
        method:"POST",
        data:{model_id:model_id, model_path:model_path, collection_name:collection_name},
        cache: false,
        success:function(data)
        {
          sessionStorage.clear();
        }
  });
});
});
</script>


<script>
function show_model_popup(user_model_id)
  {
   
       $('#popup_href').trigger("click");
      //  alert(user_model_id);
       $.post("<?php echo base_url('index.php/welcome/popupfetch')?>",
       {user_model_id:user_model_id}, function(data){
        $('#displays_image').attr('style', 'display:block;');
           $("#displays_image").html(data);

       });
       $.post("<?php echo base_url('index.php/welcome/get_price')?>",
       {user_model_id:user_model_id}, function(data){
           $("#display_price").html(data);
       });

       $.post("<?php echo base_url('index.php/welcome/get_name')?>",
       {user_model_id:user_model_id}, function(data){
           $("#display_model_name").html(data);

       });
       $.post("<?php echo base_url('index.php/welcome/user_model_image')?>",
       {user_model_id:user_model_id}, function(data){
           $("#user_profile_image").html(data);

       });

       $.post("<?php echo base_url('index.php/welcome/user_model_name')?>",
       {user_model_id:user_model_id}, function(data){
            $("#user_profile_name").html(data);
        });

        $.post("<?php echo base_url('index.php/welcome/get_comments')?>",
       {user_model_id:user_model_id}, function(data){
            $("#comments_text").html(data);
        }); 
        $.post("<?php echo base_url('index.php/welcome/comments')?>",
       {user_model_id:user_model_id}, function(data){
            $("#comment_box").html(data);
        });

        $.post("<?php echo base_url('index.php/welcome/views')?>",
       {user_model_id:user_model_id}, function(data){
            
        });
  }  

</script>



<script>

function show_models_popup(user_model_id)
  {
   
       $('#popup_hrefs').trigger("click");
       //alert(user_model_id);
       $.post("<?php echo base_url('index.php/welcome/popupfetch')?>",
       {user_model_id:user_model_id}, function(data){
           $('#display_image').attr('style', 'display:block;');

           $("#display_image").html(data);

       });
       $.post("<?php echo base_url('index.php/welcome/get_price')?>",
       {user_model_id:user_model_id}, function(data){
           $("#display_price").html(data);

       });  
       $.post("<?php echo base_url('index.php/welcome/get_name')?>",
       {user_model_id:user_model_id}, function(data){
           $("#display_name").html(data);

       });

       $.post("<?php echo base_url('index.php/welcome/user_model_image')?>",
       {user_model_id:user_model_id}, function(data){
           $("#user_model_image").html(data);

       });

       $.post("<?php echo base_url('index.php/welcome/user_model_name')?>",
       {user_model_id:user_model_id}, function(data){
            $("#user_model_name").html(data);
        }); 
        $.post("<?php echo base_url('index.php/welcome/get_comments')?>",
       {user_model_id:user_model_id}, function(data){
            $("#comment_text").html(data);
        }); 
        $.post("<?php echo base_url('index.php/welcome/comments')?>",
       {user_model_id:user_model_id}, function(data){
            $("#comments").html(data);
        });
        $.post("<?php echo base_url('index.php/welcome/views')?>",
       {user_model_id:user_model_id}, function(data){
            
        });
  }
</script>

<script>
    function comment(model_id)
    {
       var comment_text = document.getElementById("myComment").value;
       $.post("<?php echo base_url('index.php/welcome/send_comments')?>",
       {model_id:model_id, comment_text:comment_text}, function(data){
            
        }); 

        


    }


</script>

<script>
function myPhoto(User_id) 
{
   

      //  $.post("<?php echo base_url('index.php/welcome/user_model_image')?>",
      //  {User_id:User_id}, function(data){
      //      $("#user_model_image").html(data);
      //  }); 
      //  $.post("<?php echo base_url('index.php/welcome/user_model_name')?>",
      //  {User_id:User_id}, function(data){
      //      $("#user_model_name").html(data);
      //  }); 
}

</script>
<button id="popup_signin" onclick="window.location.href='#popuplogin'"></button>
<script>
function popuplogin()
{
  //alert(all_models_id);
  $('#popup_signin').trigger("click");
  
}
</script>

<script>
function add_to_cart(all_models_id)
{
  var btn = document.getElementById("addto_cart");
  btn.disabled = true;
  btn.innerText = 'added to your cart';
  //alert(all_models_id);
  $.post("<?php echo base_url('index.php/welcome/send_to_cart')?>",
    {all_models_id:all_models_id}, function(data){
      $(".cart-fixed").html(data);
  });
}
</script>
<script>
  function likes(model_id)
  {
    $.post("<?php echo base_url('index.php/welcome/likes')?>",
       {model_id:model_id}, function(data){
           

       });
  }

  </script>
  <script>
    function comment(model_id)
    {
       var comment_text = document.getElementById("myComment").value;
       $.post("<?php echo base_url('index.php/welcome/send_comments')?>",
       {model_id:model_id, comment_text:comment_text}, function(data){
            
        }); 

        


    }


</script>

<script>

  const refreshButton = document.querySelector('.refresh-button');

const refreshPage = () => {
  location.reload();
}

refreshButton.addEventListener('click', refreshPage)

</script>


<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>2020&nbsp;© 3dcopilot.com | 3Dcopilot <sup>®</sup></h3>
 
		</div>
 
		<div class="footer-center">
 
	
		<p><a href="<?php echo site_url('welcome/aboutus');?>">About us</a></p>
      <p><a href="<?php echo site_url('welcome/termsandconditions');?>">Terms and Conditions</a></p>
      <p><a href="<?php echo site_url('welcome/privacypolicy');?>">Privacy&nbsp;policy</a></p>
       <p><a href="<?php echo site_url('welcome/disclaimer');?>">Disclaimer</a></p>
       <p>    <a href="#popupcontactus">Contact us</a>
</p>
		
 
		</div>
 
		<div class="footer-right">
 
 
		<div class="footer-icons">
 
		<a href="https://www.linkedin.com/company/3dcopilot/"><i class="fab fa-linkedin-in fabi"></i></a>
    <a href="https://www.youtube.com/channel/UCpWxbv8dkJ3EEYXdBusTK0A"><i class="fab fa-youtube fabi"></i></a>
    <a href="https://www.facebook.com/3Dcopilot"><i class="fab fa-facebook fabi"></i></a>
    <a href="https://www.instagram.com/3dcopilot/"><i class="fab fa-instagram fabi"></i></a>
    <a href="https://twitter.com/3dcopilott"><i class="fab fa-twitter fabi"></i></a>
 
		</div>
 
		</div>
 
		</footer>
<style>

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
}
</style>

    <div id="popupcontactus" class="overlay">
    <div class="popup pop-requestform" style="margin-top:0px;max-height: 100%;height: 750px;">
    
    <a onclick="goBack()" class="close" href="#">&times;</a>
    <div class="contentss signup-body" style="padding-top: 0px;max-height: max-content;overflow: auto;">
      <a class="login-header" style="border-bottom:1px solid #999;color:#555;padding-bottom: 15px;">Contact us</a>
      <div class="row contactforms" style="margin-bottom: 0px;margin-left: 0px;width: 100%;max-height: max-content;">
            <!-- <div class="signup-body"> -->
                <form method="post" action="<?php echo base_url('welcome/contact_form');?>">

                <div class="row" style="margin: 0px;width:100%;">
                  <div class="row" style="margin-bottom: 0px;padding-top:20px;margin-left:20px;">
                      <a style="color:#333;">Name<span style="color:red">*</span></a>
                  </div>
                  <div class="row" style="margin:0px;width:100%;">
                  <div class="column texts-cols1">
                     <input type="text" name="first_name" style="border-radius:4px;margin-bottom:0px;" placeholder="First name" required>
                     <!-- <a class="contact-form" style="margin-left:0px;"></a> -->
                   </div>
                   <div class="column texts-cols2">
                       <input type="text" name="last_name" style="border-radius:4px;margin-bottom:0px;" placeholder="Last name" required>
                       <!-- <a class="contact-form" style="margin-left:0px;"></a> -->
                    </div>
                </div>
                <!-- <div class="row" style="margin:0px;width:100%">
                  <div class="column" style="width:48.5%;margin-top: 10px;">
                     <a class="contact-form">First name</a>
                   </div>
                   
                    <div class="column" style="width:50%;margin-top: 10px;">
                       <a class="contact-form">Last name</a>
                    </div>
                   </div> -->
               </div>

               <div class="row" style="margin: 0px;width:100%;margin-top:15px;">
                  <div class="row" style="margin-bottom: 0px;margin: 0px;margin-left:20px;">
                      <a style="color:#333;">Interested in<span style="color:red">*</span></a>
                  </div>
                  <div class="column" style="width:100%;margin-top: 5px;">
                  <select name="select" style="margin-left: 20px;width:44%;height:30px;">
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
        <!-- </div> -->
      </div>
  </div>
  </div>

  <script>
jQuery(".closure").click(function() {
  jQuery('#displays_image').attr('style', 'display:none;');
  jQuery('#display_image').attr('style', 'display:none;');

jQuery('video').get(0).pause()
toggleVideo("hide");
});
  </script>

<script>
  function goBack() {
   
    // document.getElementById("displays_image").hide();
    // document.getElementById("display_image").hide();

    
    // $("#display_image").hide();

    window.history.back();
  }
  </script>
<script type="text/javascript">

  function copyText(){
   document.getElementById("txt_copy").select();
   document.execCommand('copy');
  }
  </script>
<script>
  function copy_to_clipboard(id)
  { 
    html.setAttribute('readonly', '');
      document.getElementById('html').select();
      document.execCommand('copy');
      
      
  }
  </script> 
  
<script>

var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1, 1000 ],
	        connect: true,
	        range: {
	            'min': 1,
	            'max': 1000
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });

// bdweew
$(document).ready(function(){
        $('.mutliSelect input[type="checkbox"]').click(function(){
          var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
           title = $(this).val() + ",";
           
            if($(this).is(":checked")){
              var html = '<span title="' + title + '">' + title + '</span>';
              $('.multiSel').append(html);
              $(".hida").hide();
            }
            else {
              $('span[title="' + title + '"]').remove();
              var ret = $(".hida");
              $('.w3-dropdown a').append(ret);
            }
        });
    });

// $(document).ready(function(){
//   $(".dropdown dt a").on('click', function() {
//   $(".dropdown dd ul").slideToggle('fast');
// });
//   $(".dropdown dd ul li a").on('click', function() {
//   $(".dropdown dd ul").hide();
// });

// $('.mutliSelect input[type="checkbox"]').on('checked', function() {
//     var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
//     title = $(this).val() + ",";
//   if ($(this).is(':checked')) {
//     var html = '<span title="' + title + '">' + title + '</span>';
//     $('.multiSel').append(html);
//     $(".hida").hide();
//   } else {
//     $('span[title="' + title + '"]').remove();
//     var ret = $(".hida");
//     $('.dropdown dt a').append(ret);
//   }
// });
// });
  
$(document).ready(function(){
        $('.mutliSelect1 input[type="checkbox"]').click(function(){
          var title = $(this).closest('.mutliSelect1').find('input[type="checkbox"]').val(),
           title = $(this).val() + ",";

            var count=parseInt($("#file-format-id").text());

            if($(this).is(":checked")){
              //var html = '<span title="' + title + '">' + title + '</span>';
              //$('.multiSel1').append(html);
              //$(".hida").hide();

              count=count+1;
              
            }
            else {
              //$('span[title="' + title + '"]').remove();
              //var ret = $(".hida");
              //$('.w3-dropdown a').append(ret);

              count=count-1;
            }

            $("#file-format-id").text(count);
        });
    });

    
(function() {

var parent = document.querySelector(".range-slider");
if(!parent) return;

var
  rangeS = parent.querySelectorAll("input[type=range]"),
  numberS = parent.querySelectorAll("input[type=number]");

rangeS.forEach(function(el) {
  el.oninput = function() {
    var slide1 = parseFloat(rangeS[0].value),
          slide2 = parseFloat(rangeS[1].value);

    if (slide1 > slide2) {
              [slide1, slide2] = [slide2, slide1];
      // var tmp = slide2;
      // slide2 = slide1;
      // slide1 = tmp;
    }

    numberS[0].value = slide1;
    numberS[1].value = slide2;
  }
});

numberS.forEach(function(el) {
  el.oninput = function() {
          var number1 = parseFloat(numberS[0].value),
                  number2 = parseFloat(numberS[1].value);
          
    if (number1 > number2) {
      var tmp = number1;
      numberS[0].value = number2;
      numberS[1].value = tmp;
    }

    rangeS[0].value = number1;
    rangeS[1].value = number2;

  }
});

})();

    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    /*carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 4000);    
    }*/
    
    $("#inpt_search").on('focus', function () {
        $(this).parent('label').addClass('active');
    });
    
    $("#inpt_search").on('blur', function () {
        if($(this).val().length == 0)
            $(this).parent('label').removeClass('active');
    });
    
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      var y = document.getElementById("x_mark");
      var close = document.getElementById("y_mark");
      var show = '<i class="fa fa-bars" id="x_mark"></i>';
      var z = '<i class="fa fa-close" id="y_mark" style="font-size:18px;"></i>';
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        y.outerHTML = z;
      } else { 

        x.className = x.className.replace(" w3-show", "");
        close.outerHTML = show;
      }
    }
    
    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>



<script>
$(document).on('click','#likes_count' ,function()
{
  var model_id = $(this).attr('data');
  $.post("<?php echo base_url('index.php/welcome/likes')?>",
       {model_id:model_id}, function(data){
         $("#" + model_id).html(data);
        
       });
  
});

  </script>

<script>
$(document).on('click','#comment' ,function()
{
  var model_id = $(this).attr('data');
  var comment_text = document.getElementById("myComment").value;
  $.post("<?php echo base_url('index.php/welcome/send_comments')?>",
       {model_id:model_id, comment_text:comment_text}, function(data){
        
         
        //  $("#comments_text").html('');
         $("#comment_text").html(data);
         $("#comments_text").html(data);

         $("#myComment").val('');
       });
  
});

  </script>

<script>
$(document).on('click','#likes_counts' ,function()
{
  var model_id = $(this).attr('data');
  $.post("<?php echo base_url('index.php/welcome/likes')?>",
       {model_id:model_id}, function(data){
         $("." + model_id).html(data);
        
       });
  
});

  </script>

<script>

function download(model_id)
{
  $.post("<?php echo base_url('index.php/welcome/download')?>",
       {model_id:model_id}, function(data){
         //$("." + model_id).html(data);
        
       });
}
</script>
<!-- rangeslider -->





</body>
</html>
