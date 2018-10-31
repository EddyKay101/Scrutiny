 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
  });
</script>
<title>Scrutiny | Dashboard</title>
<script>
    var true = "<?php echo $trueDownload;?>";

    var false = "<?php echo $falseDownload;?>";
</script>

<style>

#downloadCheck{
    display: none;
}
.custom-checkbox {
  min-height: 1rem;
  padding-left: 0;
  margin-right: 0;
  cursor: pointer; 
}
  .custom-checkbox .custom-control-indicator {
    content: "";
    display: inline-block;
    position: relative;
    width: 30px;
    height: 10px;
    background-color: #818181;
    border-radius: 15px;
    margin-right: 10px;
    -webkit-transition: background .3s ease;
    transition: background .3s ease;
    vertical-align: middle;
    margin: 0 16px;
    box-shadow: none; 
  }
    .custom-checkbox .custom-control-indicator:after {
      content: "";
      position: absolute;
      display: inline-block;
      width: 18px;
      height: 18px;
      background-color: #f1f1f1;
      border-radius: 21px;
      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
      left: -2px;
      top: -4px;
      -webkit-transition: left .3s ease, background .3s ease, box-shadow .1s ease;
      transition: left .3s ease, background .3s ease, box-shadow .1s ease; 
    }
  .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
    background-color: #1e2c42;
    background-image: none;
    box-shadow: none !important; 
  }
    .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator:after {
      background-color: #1e2c42;
      left: 15px; 
    }
  .custom-checkbox .custom-control-input:focus ~ .custom-control-indicator {
    box-shadow: none !important; 
  }
</style>

<br><br><br><br><br><br><br>
<div style="background-color: #22264b;">
    <br>
<div id="page-wrapper" class="gray-bg dashbard-1">
    <?php
        $this->load->helper('time');
        if(!empty($notification_count) )
            {
                $i = $notification_count;
            }

        else
            {
                $i = "no";
            }



    ?>
<div class="row  border-bottom white-bg dashboard-header">
    <div class="col-md-3">
        <h2>Welcome <?php echo ucfirst($pic['username']);?></h2>
        <small>You have <?php echo $chat_count;?> unread messages and <?php echo $i;?> notifications.</small>                     
    </div>

</div>
    <div class="row">
        <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    
                                        <div class="ibox-content ibox-heading">
                                            <h3><i class="fa fa fa-history"></i>Timeline</h3>
                                          <small><i class="fa fa-tim"></i> <?php echo $count_timeline;?> feed(s) found.</small> 
                                        </div>
                                    
                                    <?php
                                        if(!empty($timeline)):
                                    ?>
                                <div class="ibox-content c_content">
                                    <div>
                                        <?php
                                        $display = "";
                                            foreach($timeline as $time):
                                                
                                                if(($time['recipient'] == $this->session->userdata('user_id')) and($time['action'] == "follow")) {
                                                    $display = "<strong>".$time['username']."</strong> is following you<br>";
                                                }

                                        ?>
                                        <div class="feed-activity-list">
                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">            
                                                </a>
                                                <div class="media-body ">
                                                    <small class="pull-right"><?php echo time_ago($time['date_created']);?></small>
                                                    <?php echo $display;?>         
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            
                                                endforeach;
                                        ?>
                                    </div>
                                </div>
                                    <?php
                                        else:
                                    ?>
                                          <div class="ibox-content c_content">
                                    <div>
                                        
                                        <div class="feed-activity-list">
                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">            
                                                </a>
                                                <div class="media-body ">
                                                    <h3>No Feed Detected</h3>
                                                            
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                     <?php
                                        endif;
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                           
                            <div class="ibox-content ibox-heading">
                                <h3><i class="fa fa-envelope-o"></i>Messages</h3>
                                <small><i class="fa fa-tim"></i> You have <?php echo $chat_count;?> new messages.</small>
                            </div>
                            <div class="ibox-content c_content">
                                <?php   
                                        $this->load->helper('time');

                                    foreach($chats->result() as $chat):
                                        if($chat->media_img != ""){
                                             $img = $chat->media_img;
                                        }

                                        else{

                                            $img = "blank_user.png";
                                        }
                                            if($chat->status == "unread")
                                                 {
                                                     $tr = 'c_unread';
                                                   
                                                 }

                                            else{
                                                     $tr = 'c_read';
                                                }
                                                 
                                  ?>
                                
                                <a style="color:black;" href="<?php echo base_url();?>chats/<?php echo $chat->user_id;?>"> 
                                    <div class="feed-element <?php echo $tr;?>">
                                      
                                            <small class="pull-right text-navy"><?php echo time_ago($chat->date_created);?></small>
                                            <img alt="image" class="img-circle" width=38px height=38px src="<?php echo base_url();?>/public/user_img/<?php echo $img;?>">
                                            <!-- -->
                                            <span ><?php echo $chat->username;?></span>
                                            <div class="connect_message">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $chat->chat_message_content;?></div>
                                           
                                     
                                    </div><hr>
                                </a>
                                    <?php
                                        endforeach;
                                    ?>

                                
                            </div>
                        </div>

                            </div>
                        <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                               
                                <div class="ibox-content ibox-heading">
                                    <h3><i class="fa fa-headphones"></i>Media</h3>
                                    
                                </div>
                                <div class="ibox-content inspinia-timeline">
                                  

                           <div class="container-wrap single-album">
                <div class="main-content container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="noo-main single single-noo_album">
                                <div class="noo_album">
                                    
                                    <div class="row">
                                        <?php
                                            if(!empty($tracks)):
                                        ?>
                                        <div class="album-intro col-xs-12">
                                            <div class="album-intro-wrap">
                                                
                                                
                                                <div class="album-media-player" id="m_player">
                                                  
                                                    <div class="single-album-playlist" id="track">
                                                        <ul>
                                                                            <?php 
                                                                            $i = 0;
                                                           foreach($tracks as $track):  
                                                                ++$i;

                                                             
                                                             ?>

                                                            <li id="album_<?php echo $i;?>" data-id="album_<?php echo $i;?>" data-artist="<a href=&quot;#&quot;><?php echo $track['artist']; ?></a>" data-file="<?php echo base_url();?>/public/user_tracks/<?php echo $track['location'];?>" data-thumb="<img width=&quot;768&quot; height=&quot;1000&quot; src=&quot;<?php echo base_url(); ?>public/images/album/<?php echo $track['art']; ?>&quot; alt=&quot;rock16&quot;/>" data-name="<?php echo $track['title']; ?>" data-url="#" data-album="<?php echo $track['artist']; ?>">
                                                                <a href="javascript:void(0)" class="noodata-play">
                                                                    <span class="number"><?php echo $i;?>.</span>
                                                                    <span class="current-active-play">
                                                                        <i class="fa fa-play"></i>
                                                                    </span>
                                                                    
                                                                    <small> - <?php echo $track['title']; ?></small>
                                                                </a>
                                                                <span class="album-meta">
                                                                    <a href="#" target="_blank">
                                                                       
                                                                    </a>
                                                                    <a href="#" target="_blank">
                                                               
                                                                    </a>
                                                                    <a href="#" target="_blank">
                                                                      
                                                                    </a>
                                                                    <a href="#" target="_blank">
                                                                
                                                                    </a>
                                                                    <a href="#" target="_blank">
                                                                      
                                                                    </a>
                                                                </span>
                                                            </li>
                                                            <?php
                                                        endforeach;
                                                        ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                                                                                              
                                    </div>
                                        <?php
                                            else:
                                        ?>
                                               <div class="ibox-content c_content">
                                    <div>
                                        
                                        
                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">            
                                                </a>
                                                <div class="media-body ">
                                                    <h3>No Track Found</h3><a href="<?php echo base_url();?>/user/uploads/""><i class="fa fa-headphones"></i> Click to add tracks</a>
                                                            
                                                </div>
                                            </div>
                                        
                                       
                                    </div>
                                </div>
                                <?php
                                    endif;
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                        
                                
                                    

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    
                                        <div class="ibox-content ibox-heading">
                                            <h3><i class="fa fa fa-users"></i>Following</h3>
                                           
                                          <small><i class="fa fa-tim"></i><?php echo $count_friends;?> following.</small>
                                        </div>
                               
                                    
                                <div class="ibox-content ">
                                    <div class="user-friends">
                                    <div>
                                        <?php

                                            foreach($friends as $friend):
                                                 if($friend['media_img'] != "")
                                            {
                                                $img = $friend['media_img'];
                                            }

                                            else
                                            {
                                                $img = "blank_user.png";
                                            }
                                              
                                        ?>
                                       
                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">            
                                                </a>
                                                <div class="media-body ">
                                                    
                                                     <a href="<?php echo site_url('/members/'.$friend['user_id']); ?>"><img alt="image" class="img-circle" src="<?php echo base_url();?>/public/user_img/<?php echo $img;?>"></a>      
                                                </div>
                                            </div>
                                        
                                        <?php
                                            endforeach;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content ibox-heading">
                                            <h3><i class="fa fa fa-users"></i>Followers</h3>
                                           
                                          <small><i class="fa fa-tim"></i><?php echo $count_followers;?> followers</small>
                                        </div>
                               
                                    
                                <div class="ibox-content ">
                                    <div class="user-friends">
                                    <div>
                                        <?php

                                            foreach($followers as $follower):
                                                 if($follower['media_img'] != "")
                                            {
                                                $img = $follower['media_img'];
                                            }

                                            else
                                            {
                                                $img = "blank_user.png";
                                            }
                                              
                                        ?>
                                       
                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">            
                                                </a>
                                                <div class="media-body ">
                                                    
                                                     <a href="<?php echo site_url('/members/'.$follower['user_id']); ?>"><img alt="image" class="img-circle" src="<?php echo base_url();?>/public/user_img/<?php echo $img;?>"></a>      
                                                </div>
                                            </div>
                                        
                                        <?php
                                            endforeach;
                                        ?>
                                    </div>
                                </div>
                            </div>

                         
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    
                                       

                            <div class="ibox-content">
                            <h3>
                                Musical Restrictions
                            </h3>
                            <p>
                                Turn on to allow you music to be downloadable
                            </p>
                            <form id="myform" action="javascript:void(0);">
                            <label class="custom-control custom-checkbox">
                                    <input type="checkbox" id="downloadCheck" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                            </label>
                        </form>
                            
                        </div>
                    </div></div>

                        </div>
                </div>
              
            </div>
        </div>

        </div>
        
        </div>
<script>

    $( "#downloadCheck" ).click(function() {
            if($('#downloadCheck').prop("checked")){
                $.ajax({
                type: "POST",
                  url: base_url +"user/connect/updateTrueDownloadable",
                  data: { true : true }, // pass it as POST parameter
                  success: function(data){
                   console.log("checked");
                 }
             });
            }
            else{
                $.ajax({
        type: "POST",
          url: base_url +"user/connect/updateFalseDownloadable",
          data: { false : false }, // pass it as POST parameter
          success: function(data){
           console.log("unchecked");
           $(document).ready(function(){
               document.getElementById("downloadCheck").checked = false; 
            });
         }
     });
            }
});
    /*To Keep checkbox checked on page refresh*/
    $(function(){
    var result = localStorage.input === 'true'? true: false;
    $('#downloadCheck').prop('checked', result || false);
});

$('#downloadCheck').on('change', function() {
    localStorage.input = $(this).is(':checked');
    console.log($(this).is(':checked'));
});
/*To Keep checkbox checked on page refresh*/
</script>