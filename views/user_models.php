<div style="margin-top:60px;"></div>
<script type="module" src="<?php echo base_url('resources/uploadcss/model-viewer.min.js');?>"></script>
<script nomodule src="<?php echo base_url('resources/uploadcss/model-viewer-legacy.js');?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/');?>uploadcss/edithtmls.css">

<script src="<?php echo base_url('resources/jquerysession.js')?>"></script>
<!-- <meta charset = "utf-8">
      <title>jQuery UI ProgressBar functionality</title>
      <link href = "<?php echo base_url('resources/uploadcss/jquery-ui.css');?>"
         rel = "stylesheet"> -->
      <!-- <script src = "https://code.jquery.com/jquery-1.10.2.js"></script> -->
      <!-- <script src = "<?php echo base_url('resources/uploadcss/jquery-ui.js');?>"></script> -->
<!-- <script src="<?php echo base_url('resources/');?>https://code.jquery.com/jquery-1.12.4.min.js"></script> -->

     <style>
       
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
	 .ui-widget-header {
            background: #1caad9;
            border: 1px solid #DDDDDD;
            color: #333333;
            font-weight: bold;
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
    padding: 10px;
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
    overflow: hidden;
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
    grid-row: 2;
    grid-column: 2;
}
@media (min-width: 1280px){
.download__s {
    grid-row: 1;
    grid-column: 3;
}
}

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

.model-settings_round{
  position: absolute;
    right: 15px;
    bottom: 36px;
    display: flex;
    width: 35px;
    height: 35px;
    background-color: #ff9e3a;
    border-radius: 100%;
    box-shadow: 0 6px 20px 0 rgba(97,108,121,.17);
    justify-content: center;
    align-items: center;

}
.model-settings_round:before {
    font-family: FontAwesome;
    color: #fff;
    content: "" " ";
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
    .upload_background {
    background-color: #1ac95d;
}
.sell-button1{float:right;color:#999;background-color: transparent;border:2px solid #999;margin-top:11px;margin-right:10px;padding:10px 16px;font-weight:700px;text-decoration:none;border-radius:4px 4px 4px 4px;}
.sell-button1:hover{
  color:#000!important;
  background-color: transparent!important;
  border:2px solid #000!important;
    }
   </style>
   
   
   
   <!-- <script>
         $(function() {
            var progressbar = $( "#progressbar-2" );
            $( "#progressbar-2" ).progressbar({
               value: 1,
               max:100
            });
			$("#model__container").show();
            function progress() {
               var val = progressbar.progressbar( "value" ) || 0;
               progressbar.progressbar( "value", val + 1 );
			   
               if ( val < 100 ) {
                  setTimeout( progress, 20 );
				  
				  if(val == 99){
					  $( "#progressbar-2" ).hide();
					  $("#model__container").show();
					  $(".ui-progressbar-value").html(val);
				  }
               }
            }
            setTimeout( progress, 1000 );
         });
      </script> -->
<div class="model_head">
        <span class="model_head-title">Edit model</span>
        <div class="model_head__close"></div>
	</div>
	<!-- <div id = "progressbar-2" style="margin-top:10px;"></div> -->
  
  <div style="width:100%;background:#f9f9f9">

  <?php if($this->session->userdata('User_id')){
  if($this->session->userdata('model_u_path') || $this->session->userdata('model_u_path1') || $this->session->userdata('model_u_path2')){
    ?>

    <div class="model__container form_container" id="model__container" style="padding-top:50px;margin-left:0px;">
	    <div class="model-properties__side --left">
		   <div class="properties__viewer-container">
        
         <?php 
       //print_r($this->session->userdata('model_u_path1'));die;
      //  $this->session->unset_userdata('thumbnail');
      //  $this->session->unset_userdata('thumbnailo');

			       if($this->session->userdata('model_u_path') )
                {  
                  echo '<input type="hidden" name="model_dir_path" id="model_dir_path" value='.$this->session->userdata('model_u_path').'>';
                  ['extension' => $basename] = pathinfo($this->session->userdata('model_u_path'));
                  if($basename == 'fbx' || $basename == '3ds' || $basename == 'max' || $basename == 'blend' || $basename == 'obj' || $basename == 'c4d' || $basename == 'mb' || $basename == 'ma' || $basename == 'dae' || $basename == 'stl')
			              {?>
                      <?php if($this->session->userdata('thumbnailo')){
                        echo '<img style="width:100%;" src='.base_url($this->session->userdata('thumbnailo')).'>';
                        }else{
                       echo '<div id="replace_modelwith_thumb" style="width:100%;height:192px;background: #2B547E;color:#eee;"> Player only Support glb,gltf. Please upload thumbnail</div>';
                    }?>
              <?php }
                    else{
                  
                    echo '<model-viewer src='.base_url($this->session->userdata('model_u_path')).' style="width:100%;height:192px;background: #2B547E;" alt="A 3D model of an astronaut" auto-rotate camera-controls></model-viewer>';  
                    }
                  }  
                if($this->session->userdata('model_u_path1') )
                {  
                  echo '<input type="hidden" name="model_dir_path" id="model_dir_path" value='.$this->session->userdata('model_u_path1').'>';
                  ['extension' => $basename] = pathinfo($this->session->userdata('model_u_path1'));
                  if($basename == 'raw' || $basename == 'eps' || $basename == 'psd' || $basename == 'ai')
			           	{?>
                      <?php if($this->session->userdata('thumbnailo')){
                        echo '<img style="width:100%;" src='.base_url($this->session->userdata('thumbnailo')).'>';
                        }else{
                       echo '<div id="replace_modelwith_thumb" style="width:100%;height:192px;background: #2B547E;color:#eee;"> Doesnot Support. Please upload thumbnail</div>';
                    }?>
              <?php }
                    else{
                  echo '<img src='.base_url($this->session->userdata('model_u_path1')).' style="width:100%;">';
                    }
                }
                if($this->session->userdata('model_u_path2') )
                {  
                  echo '<input type="hidden" name="model_dir_path" id="model_dir_path" value='.$this->session->userdata('model_u_path2').'>';
                  ['extension' => $basename] = pathinfo($this->session->userdata('model_u_path2'));
                  if($basename == 'aep' || $basename == 'prproj' || $basename == 'drp')
			           	{?>
                      <?php if($this->session->userdata('thumbnailo')){
                        echo '<img style="width:100%;" src='.base_url($this->session->userdata('thumbnailo')).'>';
                        }else{
                       echo '<div id="replace_modelwith_thumb" style="width:100%;height:192px;background: #2B547E;color:#eee;"> Doesnot Support. Please upload thumbnail</div>';
                    }?>
              <?php }
                    else{
                  
                  echo '<video style="width:100%;height:192px;" controls> <source src='.base_url($this->session->userdata('model_u_path2')).' type="video/mp4">Your browser does not support HTML video.</video>';
                    }
                }
                // if($this->session->userdata('model_u_path2') == '' || $this->session->userdata('model_u_path') == '' || $this->session->userdata('model_u_path1') == '' )
                // {
                //   echo '<div id="replace_modelwith_thumb" style="width:100%;height:192px;background: #2B547E;color:#eee;">Uploaded failed!. Try again</div>';

                // }
			 ?>
			    
			
			 <div class="model_upload-status">
			    <div class="model_row-upload-status --green">
			       <div class="upload_background">✓</div>
				   <span class="upload-status-title">upload</span>
				   <span class="finished">Finished</span>
			    </div>
				<div class="model_row-upload-status --green">
				   <div class="upload_background">✓</div>
				   <span class="upload-status-title">processed</span>
				   <span class="finished">Finished</span>
				</div>
				<div class="model_row-upload-status --green">
				   <div class="upload_background">✓</div>
				   <span class="upload-status-title">Ready to publish</span>
				</div>
			  </div>
		    </div>
		</div>
  
	   <div class="middle_model">
	     <div class="model_form-field">
		    <label class="form-label forms__label">Title</label>
		    <input type="text" name="title_model" class="form-input --border" id="title_model" onkeyup='saveValue(this);'>
		</div>
		<div class="model_form-field" style="margin-top:50px;">
		    <label class="form-label forms__label">Description</label>
		    <textarea id="modsdescription" class="form-input --border" name="model_description" rows="4" style="box-shadow:none;resize:none;background-color: rgb(231, 231, 231);font-size: 16px;width:100%;" onkeyup='saveValue(this);' required="">              
              </textarea>
		</div>
		<div class="model_form-field" style="margin-top:20px;">
		     <label class="form-label forms__label">Upload Thumbnail</label>
         <?php if($this->session->userdata('thumbnail')){?>
         <?php  
                  echo '<input type="hidden" name="model_thumnail" id="model_thumnail" value='.$this->session->userdata('thumbnail').'>';
                  echo '<input type="hidden" name="model_thumnailo" id="model_thumnailo" value='.$this->session->userdata('thumbnailo').'>';


         echo '<div class="main_thumb_nail"><button class="remove-default-style style-scope thumbnails-compact-editor-uploader"><img src='.base_url($this->session->userdata('thumbnail')).' style="width:200px;"></button>
			   <div id="delete_thumb" data-selenium='.$this->session->userdata('ex_paths').' style="color:red;margin-top:10px;cursor:pointer;">Delete</div></div>';?>
         <?php }else{?>

		     <button class="remove-default-style style-scope thumbnails-compact-editor-uploader" id="click_thumbnail">
		     <a>
              <iron-icon id="add-photo-icon" class="remove-defaults style-scope ytcp-thumbnails-compact-editor-uploader" icon="yt-icons:add_photo_alternate"><svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope iron-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g viewBox="0 0 24 24" class="style-scope iron-icon">
              <path d="M19 7v2.99s-1.99.01-2 0V7h-3s.01-1.99 0-2h3V2h2v3h3v2h-3zm-3 4V8h-3V5H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8h-3zM5 19l3-4 2 3 3-4 4 5H5z" class="style-scope iron-icon"></path>
              <path d="M0 0h24v24H0z" fill="none" class="style-scope iron-icon"></path>
               </g></svg>
    
               </iron-icon>
               <span class="style-scope thumbnails-compact-editor-uploader" style="padding:10px;">
                  Upload thumbnail .jpg, .png, .jpeg
               </span>
			    </a>
          </button>
         <?php }?>
			   <input type="file" id="inputfileid" accept=".jpg,.png,.jpeg" class="hide"/>
		 </div>




     <input type="hidden" name="models" id="models_s" value="<?php echo $this->session->userdata('mod_els_id');?>">
     <input type="hidden" name="models_categories1" id="models_categories1" value="<?php echo $this->session->userdata('mod_cats_id');?>">
     
     <div class="model_form-field" style="margin-top:20px;display:flex;">
        
          
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
      <div class="model_form-field" style="margin-top:20px;display:flex;">
            <div class="w3-dropdown-hover cat-dropdown --white-background dropingdown3" style="background:transparent;">
                  <div class="cat-dropdown__label form-input --border">
                            <span class="cat-dropdown__label-title"></span>
                            <span class="c-dropdown__label-value --placeholder" style="">
                                 <span class="c-dropdown__label-value__text ">Select up to 2 categories</span>
                                 <span class="c-dropdown__label-value__hidden"></span>
                            </span>
                    </div>
                   
                    <div class="w3-dropdown-content w3-dropdown-contentclick w3-bar-block w3-card-4" id="checkboxgroup" style="width:100%;background:#fff;height:200px;overflow-y:scroll;">

                        
                        
                    
                    </div>
                    
              </div>
      </div>
      
      

      <script>
     
      $(document.body).on('click', '.li-check .model-check' ,function(){
        sessionStorage.clear();
          var value = '<?php echo $this->session->userdata('mod_cats_id');?>';
         
          var val = [];
          var k = 0;
            $('.model-check:checkbox').each(function(i){
              if($(this).is(':checked'))
              {
                $(this).attr('disabled', true);
                k++;
              }
              
            });

            if(k > 1)
            {
              $('.model-check:checkbox').each(function(i){
              if($(this).is(':checked'))
              {
                if($(this).val() == value)
                {
                  $(this).attr('disabled', true);
                }else{
                 //alert($(this).val());
                 sessionStorage.setItem('cat_id2', $(this).val());
                $(this).removeAttr('disabled');
                }
              }
              else{
               // sessionStorage.setItem('cat_id2', $(this).val());
                $(this).attr('disabled', true);
              }
              
            });
            }
            else{
              $(':checkbox').each(function(i){
                if($(this).val() == value)
                {
                  $(this).attr('disabled', true);
                }else{
                $(this).removeAttr('disabled');
                }
            });
            }
    
        });
       
    </script>


<!-- if($(this).is(':checked'))
              {
                if(k <= 1)
                {
                  $(this).removeAttr('disabled:disabled');
                //val[i] = $(this).val();
               // alert(val[i]);
                }else{
                  $(this).attr('disabled:disabled');
                }
                
              }
              else{
                if(k <= 1)
                {
                  $(this).removeAttr('disabled:disabled');
                //val[i] = $(this).val();
               // alert(val[i]);
                }else{
                  $(this).attr('disabled:disabled');
                }
              } -->

      <script>
    $(document).ready(function(){
        // Show hide popover
        $(".dropingdown3").click(function(){
            $(this).find(".dropingdown-menus3").slideToggle("fast");
        });
    });
    $(document).on("click", function(event){
        var $trigger = $(".dropingdown3");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".dropingdown-menus3").slideUp("fast");
        }            
    });
</script>
<script>
$(document).ready(function(){
$('#check_mark_disable').click(function(){
 
        $('#check_mark_disable').not(this).prop('disabled',this.checked);
    });
  });
</script>


      <link rel="stylesheet" href="<?php echo base_url('resources/tag/tags.css');?>">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('resources/tag/tagify.js');?>"></script>
		<script>
			$(function() {
				$("#testInput").tags({
					unique: true,
					maxTags: 10
				});
			});
		</script>
    <div class="model_form-field" style="margin-top:20px;">
       <label class="form-label forms__label">Tags</label>
       <input type="text" name="skill" id="testInput" class="form-control" style="width:700px;" value=""/>
    </div>

    <?php 
       
			       if($this->session->userdata('model_u_path'))
                { ?>
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
</style>

    <!-- animated -->
    <div class="model_form-field" style="margin-top:20px;">
    <label class="form-label forms__label">Technical Details</label>
      <div class="rowss" style="display:flex;flex-wrap: wrap;">

      <!-- textures materials -->

      <div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="textures" style="display:none;"><span style="margin:0px;">Textures</span>
             </label>
         </div>
         
         <div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="materials" style="display:none;"><span style="margin:0px;">Materials</span>
             </label>
         </div>
         <div class="ck-button" style="margin-top: 3px;"><span class="separator"></span></div>

      <!-- animated rigged -->
        <div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="animated" style="display:none;"><span style="margin:0px;">Animated</span>
             </label>
         </div>
         
         <div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="riggid" style="display:none;"><span style="margin:0px;">Riggid</span>
             </label>
         </div>
         <div class="ck-button" style="margin-top: 3px;"><span class="separator"></span></div>

         <!-- low-poly -->
         <div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="lowpoly" style="display:none;"><span style="margin:0px;">Low-poly (game-ready)</span>
             </label>
         </div>

         <div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="pbr" style="display:none;"><span style="margin:0px;">Pbr</span>
             </label>
         </div>
         <div class="ck-button" style="margin-top: 3px;"><span class="separator"></span></div>

         <!-- uv mapping -->
         <div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="uvw" style="display:none;"><span style="margin:0px;">UVW&nbsp;mapping</span>
             </label>
         </div>
         <div class="ck-button" style="margin-top: 3px;"><span class="separator"></span></div>

         <!-- plugins used -->

         <div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="plugins" style="display:none;"><span style="margin:0px;">Plugins&nbsp;used</span>
             </label>
         </div>

         </div>
         
<style>
.column-colls{
  width:25%;
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
         <div class="next-row" style="display:flex;margin-top:20px;">
               

               <div class="column-colls">
                    <label class="form-label forms__label">Geometry</label>
                          <select name="mod_public" id="geo">
                              <option value="">Choose Geometry</option>
                              <option value="polygon mesh">Polygon Mesh</option>
                              <option value="subdivision">Subdivision-ready</option>
                              <option value="nurbs">Nurbs</option>
                              <option value="other">other</option>
                          </select>
               </div>

               <div class="column-colls" style="margin-left:15px;">
                    <label class="form-label forms__label">Polygons</label>
                    <input type="number" class="form-input --border" id="polycount" placeholder="0" name="price_num" style="margin: 0px;">
               </div>

               <div class="column-colls" style="margin-left:15px;">
                    <label class="form-label forms__label">Vertices</label>
                    <input type="number" class="form-input --border" id="verticescount" placeholder="0" name="price_num" style="margin: 0px;">
               </div>
              
         </div>

    </div>
    <?php }?>

    <!-- features -->

    </div>
    <div class="download__s">
        <div class="right_settings">
            <div class="right_settings__flex">
                <div class="right-settings__status">Status: <strong>Draft </strong></div>
                <button class="button1 btn-primary" style="font-size:10px;padding:5px;">
                  view my model
                </button>
              </div>
              <div class="right-settings__separator"></div>
              <div class="form-set" style="margin-top:24px">
                <label class="form-label c-model-properties__label">Who can see?</label>
                <select name="mod_public" id="mod_public">
                 <option value="">Select</option>
                 <option value="Public">Public</option>
                 <option value="Private">Private</option>

          
             </select>
              </div>
              <div class="right-settings__separator"></div>
              <div class="right_model__label">Download</div>

             
                 <div class="tab">
                      <button class="tablinks" onclick="openCity(event, 'Free')" id="defaultOpen" style="border-right: 1px solid #ccc;">Free</button>
                      <button class="tablinks" onclick="openCity(event, 'Paid')">Paid</button>
                     
                 </div>
             

                 <div id="Free" class="tabcontent">
                        
                        <!-- <p style="margin:0px;">The users can download Freely.</p> -->
                        <div class="form-group">
                             <a>
                                 <label class="container" style="color:#555;margin-left: 2px;">I have read, understand, and agree to
                                    <input type="radio" title="Accept" name="radio_check" id="checked_box">
                                    <span class="checkmark" style="background-color:#2ec3fb;"></span>
                                 </label>
                              </a>
                             <a href="#"> <span style="color:#2ec3fb;">3Dcopilot's terms and conditions</span>.</a>
                          </div>
                  </div>

                   <div id="Paid" class="tabcontent">
                          
                   <div class="form-group">
                             <a>
                                 <label class="container" style="color:#555;margin-left: 2px;">I have read, understand, and agree to
                                    <input type="radio" title="Accept" name="radio_check" id="checked_boxss">
                                    <span class="checkmark" style="background-color:#2ec3fb;"></span>
                                 </label>
                              </a>
                             <a href="#"> <span style="color:#2ec3fb;">3Dcopilot's terms and conditions</span>.</a>
                          </div>
                          <a href="<?php echo base_url('welcome/sell_your_content');?>" class="sell-button1" target="_blank" style="display: flex;font-size: 12px;">&nbsp;SELL YOUR CONTENT</a>

                   <!-- <p style="margin:0px;">Enter the price($) you want to sell.</p> 
                   <input type="number" id="price_num" name="price_num"> -->
                   </div>
            </div>
         </div>
     </div>
    <div class="settings__footer --sticky">
         <div class="settings_d-container">
              <div class="c-model-properties__links">
                  <div class="c-model-properties__link-container" style="margin-top:14px;">
                      <a class="c-model-properties__delete cell" data-selenium='<?php echo $this->session->userdata('ex_paths');?>' href="#popup_delete_model">Delete this model</a>
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
                      <button class="button1 btn-primary btn-large submit_form" id="submit" type="submit">
                        Publish <div class="progress-bar"></div>
                      </button>
                    </span>
                  </div>
                </div>
            </div>
      </div>

    <?php }else{
    redirect(base_url()."welcome/index#popup_new_upload");

  }
}else{
    redirect(base_url()."welcome/index#popuplogin");

  }?>
    
  </div>


       <div id="popup_delete_model" class="overlay">
        <div class="popup signup_pop-up" style="margin-top:200px;height:45%;width:50%;">
    
             <a onclick="goBack()" class="close" href="#">&times;</a>
                <div class="login-content">
                  <header class="popup-header">
                      <div class="popup-title"> Delete model</div>
                          
                  </header>
                  <div class="popup-content">
			                <p style="margin:0px;"><b>This</b> will be deleted. <b>This cannot be undone.</b></p>
			                 <p style="margin:0px;">Delete this model permanently ?</p>
			           </div>
                   <footer class="popup-footer">
                
                      <div class="actions">
                         <button onclick="goBack()" class="button1 btn-medium btn-tertiary cancel" type="reset">Cancel</button>
        
                          <button onclick="myBack()" class="button1 btn-medium btn-danger submit" id="delete_this_model" type="submit">DELETE THIS MODEL</button>
                       </div>

                    </footer>

              </div>
        </div>

  </div>
<script>
function myBack()
{
  var user_model_id = 1;
  $.post("<?php echo base_url('index.php/welcome/moddelete')?>",
       {user_model_id:user_model_id}, function(data){
        localStorage.clear();
           window.location.href = "<?php echo base_url('welcome/index');?>"

       });
}
</script>
         
<script>
$(document).ready(function(){
  $('.c-model-pr').on('click', function(){
    var path = $('.c-model-properties__delete').attr('data-selenium');
    //alert(path);
    $.ajax({
        url:"<?php echo base_url('Welcome/delete_mod_paths');?>",
        method:"POST",
        data:{path:path},
        success:function(response)
        {
      
          //$(".main_thumb_nail").replaceWith(response);
          //window.location = "<?php echo base_url('welcome/index');?>";
        }
      });
  });
});

</script>
    
<script>
$(document).ready(function(){
  $('#delete_thumb').on('click', function(){
    var path = $('#delete_thumb').attr('data-selenium');
    $.ajax({
        url:"<?php echo base_url('Welcome/delete_thumb_nail');?>",
        method:"POST",
        data:{path:path},
        success:function(response)
        {
      
          $(".main_thumb_nail").replaceWith(response);
          $('#replace_modelwith_thumb').html(response);
          window.location = "<?php echo base_url('welcome/user_models');?>";
        }
      });
  });
});

</script>
<script>
$(document).ready(function(){
  $('#delete_thumbs').on('click', function(){
    var path = $('#delete_thumbs').attr('data-selenium');
    $.ajax({
        url:"<?php echo base_url('Welcome/delete_thumb_nail');?>",
        method:"POST",
        data:{path:path},
        success:function(response)
        {
          window.location = "<?php echo base_url('welcome/user_models');?>";
      
          $(".main_thumb_nail").replaceWith(response);
          $('#replace_modelwith_thumb').html(response);
          
        }
      });
  });
});

</script>
    

<script type="text/javascript">
        document.getElementById("title_model").value = getSavedValue("title_model");    // set the value to this input
        document.getElementById("modsdescription").value = getSavedValue("modsdescription");   // set the value to this input
        /* Here you can add more inputs to set value. if it's saved */

        //Save the value function - save it to localStorage as (ID, VALUE)
        function saveValue(e){
            var id = e.id;  // get the sender's id to save it . 
            var val = e.value; // get the value. 
            localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
        }

        //get the saved value function - return the value of "v" from localStorage. 
        function getSavedValue  (v){
            if (!localStorage.getItem(v)) {
                return "";// You can change this to your defualt value. 
            }
            return localStorage.getItem(v);
        }
</script>

    <script>
$(document).ready(function(){
 
 $('.submit_form').on('click', function(){
  var mod_path = $('#model_dir_path').val();
  var title = $('#title_model').val();
  var description = $('#modsdescription').val();
  var thumbnail = $('#model_thumnail').val();
  var thumbnailo = $('#model_thumnailo').val();
  var models = $('#models_s').val();
  var cat1 = $('#models_categories1').val();
  var cat2 = sessionStorage.getItem('cat_id2');
  var tags = $('#testInput').val();
  var public = $('#mod_public').val();
  var price = $('#price_num').val();
  // alert(price);
  // return false;
  // alert(cat1);
  //alert(cat2);
  var tech = '';
  $('.technical:checkbox').each(function(i){
              if($(this).is(':checked'))
              {
               tech += $(this).attr('value')+',';
              }
  });
  var technical = tech.replace(/^,|,$/g,'');
// alert(technical);
  // technical

  // polygons
  

  var free_check = $("#checked_box").prop('checked');
  var paid_check = $("#checked_boxss").prop('checked');

  if(!free_check && !paid_check){
    
    //do something
    alert("Please agree to terms and conditions.");
    return false;
}
  if($.trim(mod_path).length == 0)
  {
   alert("you've uploaded incorrect file. Please Delete and Re-upload it");
   
  }
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
  if($.trim(models).length == 0)
  {
   alert("Please Select Model");
   return false;
  }
  if($.trim(cat1).length == 0)
  {
   alert("Please Select Categories 1 or 2 or both ");
   return false;
  }
  if($.trim(public).length == 0)
  {
   alert("Please Select who can see public or private");
   return false;
  }
  var polygons = $('#polycount').val();
  var vertices = $('#verticescount').val();
  var geometry = $('#geo').val();
  
  // alert(geometry);
  if($.trim(cat2).length == 0)
  {

    //var cat21 = $.trim(cat2).length;
    //alert( sessionStorage.getItem('cat_id2'));
    $.ajax({
      xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        var x = percentComplete.toFixed(0);
                        // $(".progress-bar").width(x + '%');
                        $(".progress-bar").html('- '+x +'%');
                    }
                }, false);
                return xhr;
            },
        url:"<?php echo base_url('Welcome/transfer_validation');?>",
        method:"POST",
        data:{mod_path:mod_path, title:title, description:description, thumbnail:thumbnail, thumbnailo:thumbnailo, models:models, cat1:cat1, tags:tags, public:public, price:price, technical:technical, polygons:polygons, vertices:vertices, geometry:geometry},
        beforeSend: function(){
                $(".progress-bar").html('0%');
                
                $('#uploadStatus').html('<img id="id_of_loader" src="<?php echo base_url('resources/uploadcss/assets/images/LoaderIcon.gif');?>"/>');
                // $(".prog_upload").html('<a style="color:#000;">Checking files..</a>');

            },
        success:function(response)
        {
          localStorage.clear();
          sessionStorage.clear();
          sessionStorage.removeItem('cat_id2');
          window.location = '<?php echo base_url('welcome/user_profile')?>';
          
        }
      });

  }else{
    // alert(cat2);
if(cat2 == 0)
{
  $.ajax({
    xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        var x = percentComplete.toFixed(0);
                        // $(".progress-bar").width(x + '%');
                        $(".progress-bar").html('- '+x +'%');
                    }
                }, false);
                return xhr;
            },
        url:"<?php echo base_url('Welcome/transfer_validation');?>",
        method:"POST",
        data:{mod_path:mod_path, title:title, description:description, thumbnail:thumbnail, thumbnailo:thumbnailo, models:models, cat1:cat1, tags:tags, public:public, price:price, technical:technical, polygons:polygons, vertices:vertices, geometry:geometry},
        beforeSend: function(){
                $(".progress-bar").html('0%');
                
                $('#uploadStatus').html('<img id="id_of_loader" src="<?php echo base_url('resources/uploadcss/assets/images/LoaderIcon.gif');?>"/>');
                // $(".prog_upload").html('<a style="color:#000;">Checking files..</a>');

            },
        success:function(response)
        {
          localStorage.clear();
          sessionStorage.clear();
          sessionStorage.removeItem('cat_id2');
          window.location = '<?php echo base_url('welcome/user_profile')?>';
          
        }
      });

}else{
  
  $.ajax({
    xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        var x = percentComplete.toFixed(0);
                        // $(".progress-bar").width(x + '%');
                        $(".progress-bar").html('- '+x +'%');
                    }
                }, false);
                return xhr;
            },
        url:"<?php echo base_url('Welcome/transfer_validation');?>",
        method:"POST",
        data:{mod_path:mod_path, title:title, description:description, thumbnail:thumbnail, thumbnailo:thumbnailo, models:models, cat1:cat1, cat2:cat2, tags:tags, public:public, price:price, technical:technical, polygons:polygons, vertices:vertices, geometry:geometry},
        beforeSend: function(){
                $(".progress-bar").html('0%');
                
                $('#uploadStatus').html('<img id="id_of_loader" src="<?php echo base_url('resources/uploadcss/assets/images/LoaderIcon.gif');?>"/>');
                // $(".prog_upload").html('<a style="color:#000;">Checking files..</a>');

            },
        success:function(response)
        {
          localStorage.clear();
          sessionStorage.clear();
          sessionStorage.removeItem('cat_id2');

          window.location = '<?php echo base_url('welcome/user_profile')?>';
          
        }
      });
     }
    }
  });
});
  
 
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
$(document).ready(function(){
  // $(".forms__label").on('click', function(){
  //   alert('click');
  // });
  //$('.models_sel').change(function(){
   // alert('1');
    var model_id =$('#models_s').val();
    console.log(this.value);
    if(model_id !='')
    {
    
      $.ajax({
        url:"<?php echo site_url();?>Welcome/fetchnew_modelsnew_categoriesnew",
        method:"POST",
        data:{model_id:model_id},
        success:function(data)
        {
          $('.w3-dropdown-contentclick').html(data);
        }
      });
    }
  //});
});

</script>

<script>
$(document).ready(function(){
  $("#models_categories2").change(function(){
    
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
$(document).ready(function() {
	$('#click_thumbnail').on('click', function() {
		$('#inputfileid').trigger("click");
		
		
	});
	$('input[type="file"]').change(function(e){
			var fd = new FormData();
            var files = e.target.files[0];
			
			fd.append('file',files);

            $.ajax({
            url: '<?php echo base_url('welcome/thumbnail');?>',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                
					$(".remove-default-style").replaceWith(response);
          $('#replace_modelwith_thumb').replaceWith(response);
          window.location = "<?php echo base_url('welcome/user_models');?>";

				}
            },
        });
        });
});

</script>






