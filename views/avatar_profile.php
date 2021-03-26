<style>
.my_settings{
    width:30%;
    margin-left: auto;
    margin-right: auto;
}
.settings-form{
    width:60%;
    background-color: #fff;
    border:1px solid rgb(190, 187, 187);
    margin-left: 100px;
    margin-top: 100px;
    margin-bottom: 20px;
}
.hide_show{
    margin-top:60px;
    display:none;
}
.upload_cols{
  display:flex;
  padding-top: 15px;
  width:60%;
  margin-left: auto;
  margin-right: auto;
}
@media (max-width:800px) and (min-width:300px){
  .upload_cols{
  padding-top: 15px;
  /* width:60%; */
  width:100px;
  margin: 0px;
}
    .my_settings{
        display:none;
    }
    .hide_show{
        height:100px;
    display:block;
}
    .settings-form{
    width:100%;
    background-color: #fff;
    border:1px solid rgb(190, 187, 187);
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 20px;
}
}

</style>


<div class="content" style="background-color: rgb(226, 224, 224);height:auto;">

<div class="hide_show">
     <h1 style="margin-top: 20px;color:#555">My Settings</h1>
         <div class="row" style="width:100%;margin:0px;">
         <div class="column" style="width:25%;">
            <a href="<?php echo site_url('welcome/edit_profile');?>">PROFILE</a>
        </div>
        <div class="column" style="width:25%;">
            <a href="<?php echo site_url('welcome/avatar_profile');?>" class="button1 btn-primary" style="text-transform:none;border:1px solid #ccc;border-radius:8px;padding:7px;color:#fff;">AVATAR</a>
          </div>
          <div class="column" style="width:25%;">
            <a href="<?php echo site_url('welcome/email_change');?>" class="">EMAIL</a>
          </div>
          <div class="column" style="width:25%;">
            <a href="<?php echo site_url('welcome/password_change');?>" class="">PASSWORD</a>
            </div>
          </div>

         </div>
    </div>



<div class="row" style="display:flex;width:90%;margin-bottom: 0px;margin-top: 50px;">
        <div class="column my_settings">
        <h1 style="margin-top: 20px;color:#555">My Settings</h1>
        <div class="column" style="width:100%;margin-left: auto;margin-right: auto;">
          <div class="edit-profile-tab1">
        <a href="<?php echo site_url('welcome/edit_profile');?>" class="edit-profile-tab1" >PROFILE</a>
      </div>
        <div class="edit-avatar-tab">
        <a href="<?php echo site_url('welcome/avatar_profile');?>" class="button1 btn-primary btn-large edit-avatar-tab1" style="font-size:16px;margin-left: auto;margin-right: auto;">AVATAR</a>
      </div>
      <div class="edit-email-tab">
        <a href="<?php echo site_url('welcome/email_change');?>" class="edit-email-tab">EMAIL</a>
      </div>
        <div class="edit-password-tab">
        <a href="<?php echo site_url('welcome/password_change');?>" class="edit-password-tab">PASSWORD</a>
        </div>
      </div>
    </div>
    <div class="column settings-form">
            <div class="row" style="border-bottom-style: solid;border-width: 1px;border-color: rgb(190, 187, 187);margin-left: 0px;">
                <h2 style="color:#555;margin-left: 20px;padding:20px;">Set or Change your avatar</h2>
            </div>
            <div class="cols" style="width:86%;margin-left: auto;margin-right: auto;">
            <div class="row" style=" margin-left: 0px;">
                <div class="column" style="width:300px;">
                <a id="uploaded_image" style="color:#555;width:50px"><i class="fa fa-user"  style="font-size: 200px;padding:20px;border:1px solid #555"></i></a>
               </div>

               <form method="post" id="photo_upload" >
               <div class="column" style="width:70%;margin-top: 20px;">
                <h3 style="color:#555">Recommend format : jpeg, 512x512.</h3>
                <div class="row" style="margin-left:0px;">
                <div class="cols upload_cols" style="float:left;">
                <input type="file" name="image_file" id="image_file" value="Change Photo" class="button1 btn-primary" style="float:left;font-size:14px;padding:6px;">
              </div>
            </div>
              <button type="submit" id="upload_photo" class="button1 btn-huge btn-primary" style="margin-top:15px;font-size:14px;">save avatar</button>

              </form>
               </div>
            </div>
          </div>
         
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
  $('#photo_upload').on('submit', function(e){
    e.preventDefault();
    if($('#image_file').val() == '')
    {
      alert("Please select photo");
    }
    else
    {
      $.ajax({
        url:"<?php echo base_url(); ?>welcome/upload_photo",
        method:"POST",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success:function(data)
        {
          $('#uploaded_image').html(data);
        }
      });
    }
  });
});
</script>
