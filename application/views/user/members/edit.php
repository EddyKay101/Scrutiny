       <title>Scrutiny | Edit Profile</title>
        <br><br><br><br><br><br><br>



        <?php
if($members['media_img'] != "")
{
    $img = $members['media_img'];
}

else
{
    $img = "blank_user.png";
}
?>

        <div class="container">
    <h1><?php echo $title;?></h1>
    <hr>
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?php echo base_url();?>/public/user_img/<?php echo $img;?>" class="img-circle" alt="image" width=80px height=80px>
         
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
       
        <h3>Personal info</h3>

        <?php
         $formData = array(
                'class' => 'form-horizontal',
            );
        ?>
         <?php echo form_open_multipart('user/members/update', $formData);?>
           <input type = "hidden" name="user_id" value = "<?php echo $members['user_id']; ?>">
        <form>
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name ="firstname" value="<?php echo $members['firstname']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lastname" value="<?php echo $members['lastname']; ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="<?php echo $members['email']; ?>">
            </div>
          </div>
        
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="username" value="<?php echo $members['username']; ?>">
            </div>
          </div>
            
            <div class="form-group">
            <label class="col-md-3 control-label">Facebook:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="facebook" value="<?php echo $members['facebook']; ?>">
            </div>
          </div><div class="form-group">
            <label class="col-md-3 control-label">Twitter:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="twitter" value="<?php echo $members['twitter']; ?>">
            </div>
          </div><div class="form-group">
            <label class="col-md-3 control-label">Instagram:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="instagram" value="<?php echo $members['instagram']; ?>">
            </div>
          </div>
            
          <div class="form-group">
            <label class="col-md-3 control-label">Location:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="location" value="<?php echo $members['Location']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">About you:</label>
            <div class="col-md-8">
              <textarea class="form-control" type="text" name="info" ><?php echo $members['info']; ?></textarea> 
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name = "password" value="<?php echo $members['password']; ?>"">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="confirm_password" value="<?php echo $members['password']; ?>"">
            </div>
          </div>
         
          
    <div class="form-group">
    <label class="col-md-3 control-label" for="title">Upload Image</label>
    <div class="col-md-8 fileinput fileinput-new input-group" data-provides="fileinput">
    <div class="form-control" data-trigger="fileinput">
        <i class="glyphicon glyphicon-file fileinput-exists"></i>
    <span class="fileinput-filename"><?php echo $img; ?></span>
    </div>
    <span class="input-group-addon btn btn-default btn-file">
        <span class="fileinput-new">Select file</span>
        <span class="fileinput-exists">Change</span>
        <input type="file" name="userfile"/>
    </span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div>
                        </div>
                   
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                 
              <input class="btn btn-primary" type="submit" value="Submit"></div>
              
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>