</script>
<title>Scrutiny | Members</title>
<div class="page-container">
    <div class="container">
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




            <div class="col-md-4 col-sm-12">
                <div class="contact-box">
                    <div class="contact-wrapper">
                        <a href="<?php echo site_url('/members/'.$member['user_id']); ?>">
                            <div class="col-sm-4">
                                <div class="text-center">
                                    <img alt="image" style="width:183.65px; height:183.65px;"
                                        class="img-circle m-t-xs img-responsive"
                                        src="<?php echo base_url();?>/public/user_img/<?php echo $img;?>">
                                    <div class="m-t-xs font-bold">
                                        <?php echo $member['firstname']." ".$member['lastname'];?>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8">
                                <h3><strong><?php echo $member['firstname']; ?></strong></h3>
                                <p><i class="fa fa-map-marker"></i><?php echo $member['Location']; ?></p>
                                <p>Facebook: <?php echo isset($member['facebook']); ?></p>
                                <p>Twitter: <?php echo isset($member['twitter']); ?></p>
                                <p>Instagram: <?php echo isset($member['instagram']); ?></p>

                            </div>

                        </a>
                    </div>

                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>