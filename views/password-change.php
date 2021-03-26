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
            <a href="<?php echo site_url('welcome/avatar_profile');?>">AVATAR</a>
          </div>
          <div class="column" style="width:25%;">
            <a href="<?php echo site_url('welcome/email_change');?>">EMAIL</a>
          </div>
          <div class="column" style="width:25%;">
            <a href="<?php echo site_url('welcome/password_change');?>" class="button1 btn-primary" style="border:1px solid #ccc;border-radius:8px;padding:7px;color:#fff;">PASSWORD</a>
            </div>
          </div>

         </div>
    </div>
    <div class="row" style="display:flex;width:90%;margin-bottom: 150px;margin-top: 50px;">
        <div class="column my_settings">
        <h1 style="margin-top: 20px;color:#555">My Settings</h1>
        <div class="column" style="width:100%;margin-left: auto;margin-right: auto;">
          <div class="edit-profile-tab1">
        <a href="<?php echo site_url('welcome/edit_profile');?>" class="edit-profile-tab1" >PROFILE</a>
      </div>
        <div class="edit-avatar-tab">
        <a href="<?php echo site_url('welcome/avatar_profile');?>" class="edit-avatar-tab" >AVATAR</a>
      </div>
      <div class="edit-email-tab">
        <a href="<?php echo site_url('welcome/email_change');?>" class="edit-email-tab" >EMAIL</a>
      </div>
        <div class="edit-password-tab">
        <a href="<?php echo site_url('welcome/password_change');?>" class="button1 btn-primary btn-large edit-avatar-tab1" style="font-size:16px;margin-left: auto;margin-right: auto;">PASSWORD</a>
        </div>
      </div>
    </div>
    <div class="column settings-form">
            <div class="row" style="border-bottom-style: solid;border-width: 1px;border-color: rgb(190, 187, 187);margin-left: 0px;">
                <h2 style="color:#555;margin-left: 20px;padding:20px;">Change your 3Dcopilot account password</h2>
                
            </div>
            <div class="cols" style="width:90%;margin-left: auto;margin-right: auto;">
         <form method="post" action="<?php echo base_url('welcome/change_password_form')?>">   
            <div class="row" style=" margin-left: 0px;">
                <div class="column" style="width:23%;margin-top: 16px;">
                <a style="color:#555;margin-left: 0px;margin-top: 40px;">New Password</a>
               </div>
                <div class="column" style="width:65%;">
               <input type="password" name="newpassword" required>
            </div>
            </div>
           
            <div class="row" style=" margin-left: 0px;">
                <div class="column" style="width:23%;margin-top: 16px;">
                <a style="color:#555;margin-left: 0px;margin-top: 40px;">Confirm Password</a>
               </div>
                <div class="column" style="width:65%;">
               <input type="password" name="cpassword" required>
            </div>
            </div>
            <?php
          echo $this->session->flashdata("errorpass");
          ?>

<div class="row" style=" margin-left: 0px;display:flex;">
            <button type="submit" class="button1 btn-huge btn-primary" style="font-size:14px;margin-left: auto;margin-right:auto;margin-bottom: 20px;">change password</button>
        </div>
           
            </form>
            </div>
        </div>
    </div>
</div>