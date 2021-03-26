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
@media (max-width:800px) and (min-width:300px){
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
            <a href="<?php echo site_url('welcome/edit_profile');?>" class="button1 btn-primary" style="border:1px solid #ccc;border-radius:8px;padding:7px;color:#fff;">PROFILE</a>
        </div>
        <div class="column" style="width:25%;">
            <a href="<?php echo site_url('welcome/avatar_profile');?>">AVATAR</a>
          </div>
          <div class="column" style="width:25%;">
            <a href="<?php echo site_url('welcome/email_change');?>">EMAIL</a>
          </div>
          <div class="column" style="width:25%;">
            <a href="<?php echo site_url('welcome/password_change');?>">PASSWORD</a>
            </div>
          </div>

         </div>
    </div>
    <div class="row" style="display:flex;width:90%;margin-bottom: 0px;margin-top: 50px;">
        <div class="column my_settings">
            <h1 style="margin-top: 20px;color:#555">My Settings</h1>
            <div class="column" style="width:100%;margin-left: auto;margin-right: auto;">
            <div style="width:40%;margin:auto;">
            <a href="<?php echo site_url('welcome/edit_profile');?>" class="button1 btn-primary btn-large edit-profile-tab" style="font-size:16px;margin-left: auto;margin-right: auto;">PROFILE</a>
           </div>
            <div class="edit-avatar-tab">
            <a href="<?php echo site_url('welcome/avatar_profile');?>" class="edit-avatar-tab">AVATAR</a>
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
                <h2 style="color:#555;margin-left: 20px;padding:20px">Edit Your Personal Information</h2>
            </div>
            <div class="cols" style="width:90%;margin-right: auto;margin-left: auto;">
            <div class="row" style=" margin-left: 0px;">
                <h3 style="color:rgb(151, 149, 149);margin-left: 20px;">Profile Information</h3>
            </div>
            <form method="post" action="<?php echo base_url('welcome/edit_profile_form')?>" >
            <div class="row" style=" margin-left: 0px;">
                <div class="column" style="width:20%;margin-top: 16px;">
                <a style="color:rgb(151, 149, 149);margin-left: 0px;margin-top: 40px;">User name</a>
               </div>
                <div class="column" style="width:71%;">
               <input type="text" name="user_name" value="<?php echo $user_module->User_name ?>" required>
            </div>
            </div>
            <div class="row" style=" margin-left: 0px;">
                <div class="column" style="width:20%;margin-top: 16px;">
                <a style="color:rgb(151, 149, 149);margin-left: 0px;margin-top: 40px;">First name</a>
               </div>
                <div class="column" style="width:27%;">
               <input type="text" name="first_name" value="<?php echo $user_module->First_name ?>" required>
               </div>
               <div class="column" style="width:13%;margin-top: 16px;">
                <a style="color:rgb(151, 149, 149);margin-left: 0px;margin-top: 40px;">Last name</a>
               </div>
                <div class="column" style="width:30%;">
               <input type="text" name="last_name" value="<?php echo $user_module->Last_name ?>" required>
               </div>
            </div>
            <div class="row" style=" margin-left: 0px;">
                <div class="column" style="width:20%;margin-top: 16px;">
                <a style="color:rgb(151, 149, 149);margin-left: 0px;margin-top: 40px;">Your tagline</a>
               </div>
                <div class="column" style="width:71%;">
               <input type="text" name="tagline" value="<?php echo $user_module->Your_tag_line ?>" required>
            </div>
            </div>
            <div class="row" style=" margin-left: 0px;">
                <div class="column" style="width:20%;margin-top: 16px;">
                <a style="color:rgb(151, 149, 149);margin-left: 0px;margin-top: 40px;">Account type</a>
               </div>
                <div class="column" style="width:71%;">
               <input type="text" name="account_type" value="<?php echo $user_module->Account_type ?>" required>
            </div>
            </div>
            <div class="row" style=" margin-left: 0px;">
                <div class="column" style="width:20%;margin-top: 16px;">
                <a style="color:rgb(151, 149, 149);margin-left: 0px;margin-top: 40px;">Your biography</a>
               </div>
                <div class="column" style="width:71%;">
               <input type="text" name="biography" value="<?php echo $user_module->Your_biography ?>" required>
            </div>
            </div>
            <div class="row" style=" margin-left: 0px;">
                <div class="column" style="width:20%;margin-top: 16px;">
                <a style="color:rgb(151, 149, 149);margin-left: 0px;margin-top: 40px;">Your Location</a>
               </div>
                <div class="column" style="width:71%;">
               <input type="text" name="location" value="<?php echo $user_module->Your_location ?>" required>
            </div>
            </div>
            <div class="row" style=" margin-left: 0px;display:flex;">
            <button type="submit" class="button1 btn-huge btn-primary" style="font-size:14px;margin-left: auto;margin-right:auto;margin-bottom: 20px;">save profile</button>
        </div>
        </form>
      </div>
        </div>
    </div>
</div>