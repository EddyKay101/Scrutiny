 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
  });
</script>
<script type="text/javascript">
var user_id = "<?php echo $user_id;?>";
var recipient = "<?php echo $recipient['user_id'];?>";
var read = "<?php echo $read;?>";
</script>

<br><br><br><br><br><br><br>

<?php
if($recipient['media_img'] != "")
{
  $img = $recipient['media_img'];
}

else
{
  $img = "blank_user.png";
}
?>
<title>Scrutiny | <?php echo $recipient['username'];?></title>

         <?php
          echo form_open_multipart('user/chats/ajax_add_chat_message');

                                        
            ?>

<div class="row">
        <div class="col-lg-12">

                <div class="ibox chat-view">
<div class="ibox-title" style="border-bottom: 1px solid black;">
                      
                         Chat room panel - You are connected to  <?php echo $recipient['username'];?>&nbsp;
                        <a href="<?php echo site_url('/members/'.$recipient['user_id']);?>"> <img width =38px height=38px class="img-circle"  src="<?php echo base_url();?>/public/user_img/<?php echo $img;?>"  alt=""  /></a>&nbsp;&nbsp;&nbsp;&nbsp;

       <a style="color: #204177;" href="<?php echo $recipient['facebook'];?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="<?php echo $recipient['twitter'];?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
         <a style="color: #991655; " href="<?php echo $recipient['instagram'];?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
     
                    </div> 

                     <div class="ibox-content">

                        <div class="row" >
                    
                    <div class="col-md-9 " id="view" style="overflow-y: auto;">
                        

                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                  
                            </div> 
                           <div id="frame" id="readChat" >

                        <div class="content">
                          <div class="message-input">
      <div class="wrap" id = "wrap">
        <div class="col-lg-8">
      <input type="text" onclick="readChat()" name="chat_message" id="chat_message"  style="height: 40px;">
      
      <button type="submit" name="submit" id="chat_submit" class="btn btn-primary btn-sm btn-block"><i class="fa fa-paper-plane"></i></button></div>
      <input type = "hidden" name = "recipient"  value="<?php echo $recipient['user_id'];?>">
      <input type = "hidden" name = "read" id="read" value="<?php echo $read;?>">     
      
      </div>
    </div>
  
      </div>
    </div>

<script>onclick="readChat()"
function readChat() {
        $.ajax({
        type: "POST",
          url: base_url +"user/chats/update_chat_notifications/"+recipient,
          data: { read: read}, // pass it as POST parameter
          success: function(data){
            
            
         }
     });
 }      
</script>


