 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
  });
</script>
         <title><?php echo $entries['title'];?></title>
         <br><br><br><br><br><br><br>
         <div class="wrapper wrapper-content  animated fadeInRight article">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <div class="ibox-content">
                            
                            <div class="text-center article-title">
                            <span class="text-muted"><i class="fa fa-clock-o"></i><?php echo $entries['date_created'];?></span>
                             <p>
                                <img id="entryimg" src ="<?php echo base_url();?>/public/img/<?php echo $entries['media_img'];?>"/>
                            </p>
                                <h1>
                                    <?php echo $entries['title'];?>
                                </h1>
                            </div>
                           
                         <?php echo htmlspecialchars_decode($entries['entry_text']);?>
                            <hr>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="small text-right">
                                     <div id=\"fb-root\"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>   
                                        
                                        
                                     <!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'en-GB'}
</script>

<div class="fb-share-button" data-href="<?php echo site_url('/reviews/'.$entries['entry_id']); ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fscrutiny-ng.com%2Freviews&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-annotation="inline" data-width="200"></div>
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">

                                    <h2>Comments:</h2><div> <h5>Stats:</h5><i class="fa fa-comments-o"> </i> <?php echo $countMusicEntries;?>comments</div>
                                        
                                    <?php if($comments) : ?>
                                    <?php foreach($comments as $comment) : ?>
                                       <input type="hidden" name="author" value="<?php echo $comment['author'];?>">
                                    <div class="social-feed-box">
                                        <div class="social-avatar">
                                            
                                            
                                            <div class="media-body">
                                                
                                                    <?php echo $comment['author'];?>
                                                  
                                                
                                                <small class="text-muted"><?php echo $comment['date'];?></small>
                                            </div>
                                        </div>
                                        <div class="social-body">
                                            <p>
                                                <?php echo $comment['txt'];?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <?php else : ?>
                                    <p>No Comments To Display</p>
                                    <?php endif; ?>
                    
                             
                                 


                                </div>
                                 <?php if(!$this->session->userdata('username')):?>
                                    <div class ="col-lg-12">

                                    <?php echo "Post a comment as a Guest";?>

                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open('user/comments/create/'.$entries['entry_id']); ?>
                                        <div class="col-lg-12">
                                            <label>Name</label>
                                            <input type="text" name="author" class="form-control">
                                        </div>
                                       
                                        <div class="col-lg-12">
                                            <label>Body</label>
                                            <textarea name="txt" rows="5" style="width: 70%; border-radius: 5px; border:1px solid #f8ac59;" class="form-control"></textarea><br>
                                            <input type="hidden" name="id" value="<?php echo $entries['entry_id']; ?>"><br>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        </div><br>
                                        
                                    </form>
                                    </div>
                                <?php else: ?>

                                
                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open('user/comments/create/'.$entries['entry_id']); ?>
                                <div class="col-lg-12">
                                    
                                    <!--<input type="text" name="author" class="form-control">-->
                                </div>
                                 <div class="col-lg-12">
                                            <label><h3>Comment</h3></label>
                                        <div class="ibox-content no-padding">
                                            
                                        <textarea name="txt" rows="5" style="width: 70%; border-radius: 5px; border:1px solid #f8ac59;" class="summernote"></textarea><br>
                                        </div>
                                            <input type="hidden" name="id" value="<?php echo $entries['entry_id']; ?>"><br>  
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                
                            </form>
                        
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    

    

