          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
  });
</script>
         <title><?php echo $artists['artist'];?></title>
         <br><br><br><br><br><br><br>
         <div class="wrapper wrapper-content  animated fadeInRight article">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="pull-right">
                                <button class="btn btn-white btn-xs" type="button">Model</button>
                                <button class="btn btn-white btn-xs" type="button">Publishing</button>
                                <button class="btn btn-white btn-xs" type="button">Modern</button>
                            </div>
                            <div class="text-center article-title">
                            <span class="text-muted"><i class="fa fa-clock-o"></i><?php echo $artists['date_created'];?></span>
                             <p>
                                <img id="entryimg" src ="<?php echo base_url();?>/public/img/<?php echo $artists['media_img'];?>"/>
                            </p>
                                <h1>
                                    <?php echo $artists['artist'];?>
                                </h1>
                            </div>
                         <?php echo $artists['entry_text'];?>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                        <h5>Tags:</h5>
                                        <button class="btn btn-primary btn-xs" type="button">Model</button>
                                        <button class="btn btn-white btn-xs" type="button">Publishing</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="small text-right">
                                        <h5>Stats:</h5>
                                        <div> <i class="fa fa-comments-o"> </i> 56 comments </div>
                                        <i class="fa fa-eye"> </i> 144 views
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                            

    

