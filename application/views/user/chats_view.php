<script type="text/javascript">
var user_id = "<?php echo $user_id;?>";
var recipient = "<?php echo $recipient['user_id'];?>";
var read = "<?php echo $read;?>";
</script>


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

<div class="page-container">
    <div class="container">

        <div class="row">
            <div class="col-12 chat-wrapper">
                <div class="chat-header">

                    <a href="<?php echo site_url('/members/'.$recipient['user_id']);?>"> <img width=38px height=38px
                            class="img-circle" src="<?php echo base_url();?>/public/user_img/<?php echo $img;?>"
                            alt="" /></a>

                    <a style="color: #204177;" href="<?php echo isset($recipient['facebook']);?>"><i
                            class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="<?php echo isset($recipient['twitter']);?>"><i class="fa fa-twitter"
                            aria-hidden="true"></i></a>
                    <a style="color: #991655; " href="<?php echo isset($recipient['instagram']);?>"><i
                            class="fa fa-instagram" aria-hidden="true"></i></a>

                </div>

                <div class="chat-content">
                    <div class="col-12" id="view">


                    </div>
                </div>



            </div>
            <div class="col-12 chat-input-frame" id="frame" id="readChat">

                <div class="content">
                    <div class="message-input">
                        <div class="chat-input-wrap" id="wrap">
                            <div class="chat-input-box mr-3">
                                <input type="text" onclick="readChat()" name="chat_message" class="rounded-item"
                                    id="chat_message">
                            </div>
                            <div class="chat-btn-box">
                                <button type="submit" name="submit" id="chat_submit"
                                    class="button rounded-item btn-medium">Send</button>
                            </div>


                            <input type="hidden" name="recipient" value="<?php echo $recipient['user_id'];?>">
                            <input type="hidden" name="read" id="read" value="<?php echo $read;?>">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
function readChat() {
    $.ajax({
        type: "POST",
        url: base_url + "user/chats/update_chat_notifications/" + recipient,
        data: {
            read: read
        }, // pass it as POST parameter
        success: function(data) {


        }
    });
}
</script>