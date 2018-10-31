 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
  });
</script>
<title>Scrutiny | Members</title>
<br><br><br><br><br><br>
<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
         <?php foreach($members as $member):

         
if($member['media_img'] != "")
{
    $img = $member['media_img'];
}

else
{
    $img = "blank_user.png";
}
?>
         
                    
                   
                    
            <div class="col-lg-4">
                <div class="contact-box">
                    <a href="<?php echo site_url('/members/'.$member['user_id']); ?>">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img alt="image" style="width:183.65px; height:183.65px;" class="img-circle m-t-xs img-responsive" src="<?php echo base_url();?>/public/user_img/<?php echo $img;?>">
                            <div class="m-t-xs font-bold"><?php echo $member['firstname']." ".$member['lastname'];?></div>
                        </div>
                    </div>

                   
                    <div class="col-sm-8">
                        <h3><strong><?php echo $member['firstname']; ?></strong></h3>
                        <p><i class="fa fa-map-marker"></i><?php echo $member['Location']; ?></p>
                        <p>Facebook: <?php echo $member['facebook']; ?></p>
                        <p>Twitter: <?php echo $member['twitter']; ?></p>
                        <p>Instagram: <?php echo $member['instagram']; ?></p>
                       
                    </div>
                    
                    <div class="clearfix"></div>
                        </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
           
            

        
            
                    