 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 <script>
(adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
});
 </script>
 <title>Scrutiny | Dashboard</title>
 <script>
const true = "<?php echo $trueDownload;?>";

const false = "<?php echo $falseDownload;?>";
 </script>



 <div class="page-container">
     <div class="container">
         <div class="row">
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
             <div class="col-12 mb-3 dashboard-header">
                 <div class="dashboard-title-msg">
                     <h2>Welcome <?php echo ucfirst($pic['username']);?></h2>
                     <small>You have <?php echo $chat_count;?> unread messages and <?php echo $i;?>
                         notifications.</small>
                 </div>
                 <div class="separator"></div>
             </div>
             <div class="dashboard-wrapper col-12">
                 <div class="col-lg-4 col-md-6 col-sm-12 dashboard-item-col mb-5">
                     <div class="dashboard-item-container">

                         <div class="dashboard-item-header">
                             <h3><i class="fa fa fa-history mr-3"></i>Timeline</h3>
                             <small><i class="fa fa-tim"></i> <?php echo $count_timeline;?> feed(s)
                                 found.</small>
                         </div>

                         <?php
                                        if(!empty($timeline)):
                                    ?>
                         <div class="dashboard-item-content">
                             <div>
                                 <?php
                                        $display = "";
                                            foreach($timeline as $time):
                                                
                                                if(($time['recipient'] == $this->session->userdata('user_id')) and($time['action'] == "follow")) {
                                                    $display = "<strong>".$time['username']."</strong> is following you";
                                                }

                                        ?>
                                 <div class="dashboard-activity-list">
                                     <div class="dashboard-feed-element">
                                         <div class="dashboard-feed-element-body">
                                             <small
                                                 class="pull-right"><?php echo time_ago($time['date_created']);?></small>
                                             <span><?php echo $display;?></span>
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
                 <div class="col-lg-4 col-md-6 col-sm-12 dashboard-item-col mb-5">
                     <div class="dashboard-item-container">

                         <div class="dashboard-item-header">
                             <h3><i class="fa fa-envelope mr-3"></i>Messages</h3>
                             <small><i class="fa fa-tim"></i> You have <?php echo $chat_count;?> unread
                                 messages.</small>
                         </div>
                         <div class="dashboard-item-content">
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
                                                     $tr = 'not-read';
                                                   
                                                 }

                                            else{
                                                     $tr = 'read';
                                                }
                                                 
                                  ?>

                             <a href="<?php echo base_url();?>chats/<?php echo $chat->user_id;?>">
                                 <div class="dropdown-messages-box dashboard-msg <?php echo $tr;?>">
                                     <div class="container-right">
                                         <small
                                             class="pull-right text-navy"><?php echo time_ago($chat->date_created);?></small>
                                     </div>
                                     <div class="container-left">
                                         <img alt="image" class="img-circle" width=38px height=38px
                                             src="<?php echo base_url();?>/public/user_img/<?php echo $img;?>">
                                         <!-- -->
                                         <span><?php echo $chat->username;?></span>
                                         <div class="connect-message">
                                             <?php echo $chat->chat_message_content;?>
                                         </div>
                                     </div>


                                 </div>
                                 <div class="divider"></div>
                             </a>
                             <?php
                                        endforeach;
                                    ?>


                         </div>
                     </div>

                 </div>
                 <div class="col-lg-4 col-md-6 col-sm-12 dashboard-item-col mb-3 mt-3">
                     <div class="dashboard-item-container">

                         <div class="dashboard-item-header">
                             <div>
                                 <h3><i class="fa fa-headphones mr-3"></i>Music</h3>
                             </div>
                             <div>
                                 <div class="download-div">
                                     <small><i class="fas fa-download mr-3"></i>Turn on to allow you music to be
                                         downloadable</small>


                                     <form id="myform" action="javascript:void(0);">
                                         <label class="custom-control custom-checkbox">
                                             <input type="checkbox" id="downloadCheck" class="custom-control-input">
                                             <span class="custom-control-indicator"></span>
                                         </label>
                                     </form>
                                 </div>

                             </div>

                         </div>
                         <div class="dashboard-item-content"">


                                 <div class=" single-album">
                             <div class="noo-main single single-noo_album">
                                 <div class="noo_album">
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

                                                         <li id="album_<?php echo $i;?>"
                                                             data-id="album_<?php echo $i;?>"
                                                             data-artist="<a href=&quot;#&quot;><?php echo $track['artist']; ?></a>"
                                                             data-file="<?php echo base_url();?>/public/user_tracks/<?php echo $track['location'];?>"
                                                             data-thumb="<img width=&quot;768&quot; height=&quot;1000&quot; src=&quot;<?php echo base_url(); ?>public/images/album/<?php echo $track['art']; ?>&quot; alt=&quot;rock16&quot;/>"
                                                             data-name="<?php echo $track['title']; ?>" data-url="#"
                                                             data-album="<?php echo $track['artist']; ?>">
                                                             <a href="javascript:void(0)" class="noodata-play">
                                                                 <span class="current-active-play">
                                                                     <i class="fa fa-play"></i>
                                                                 </span>

                                                                 <small>
                                                                     <?php echo $track['title']; ?></small>
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
                                     <?php
                                            else:
                                        ?>
                                     <div class="ibox-content c_content">
                                         <div>


                                             <div class="feed-element">
                                                 <a href="profile.html" class="pull-left">
                                                 </a>
                                                 <div class="media-body ">
                                                     <h3>No Track Found</h3><a
                                                         href="<?php echo base_url();?>/user/uploads/""><i class=" fa
                                                         fa-headphones"></i> Click to
                                                         add
                                                         tracks</a>

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
 </div>
 <script>
$("#downloadCheck").click(function() {
    if ($('#downloadCheck').prop("checked")) {
        $.ajax({
            type: "POST",
            url: base_url + "user/connect/updateTrueDownloadable",
            data: {
                true: true
            }, // pass it as POST parameter
            success: function(data) {
                console.log("checked");
            }
        });
    } else {
        $.ajax({
            type: "POST",
            url: base_url + "user/connect/updateFalseDownloadable",
            data: {
                false: false
            }, // pass it as POST parameter
            success: function(data) {
                console.log("unchecked");
                $(document).ready(function() {
                    document.getElementById("downloadCheck").checked = false;
                });
            }
        });
    }
});
/*To Keep checkbox checked on page refresh*/
$(function() {
    var result = localStorage.input === 'true' ? true : false;
    $('#downloadCheck').prop('checked', result || false);
});

$('#downloadCheck').on('change', function() {
    localStorage.input = $(this).is(':checked');
    console.log($(this).is(':checked'));
});
/*To Keep checkbox checked on page refresh*/
 </script>