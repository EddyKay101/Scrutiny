 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
  });
</script>
         <title><?php echo $videos['title'];?></title>
         <br><br><br><br><br><br><br>
         <div class="wrapper wrapper-content  animated fadeInRight article">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <div class="ibox-content">
                            
                            <div class="text-center article-title">
                            <span class="text-muted"><i class="fa fa-clock-o"></i><?php echo $videos['date_created'];?></span>
                             <p>
                                <img id="entryimg" src ="<?php echo base_url();?>/public/img/<?php echo $videos['media_img'];?>" '/>
                            </p>
                                <h1>
                                    <?php echo $videos['title'];?>
                                </h1>
                            </div>
                         <?php echo htmlspecialchars_decode($videos['entry_text']);?>
                            <hr>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">

                                    <h2>Comments:</h2><div> <h5>Stats:</h5><i class="fa fa-comments-o"> </i> <?php echo $countVideoEntries;?>comments</div>

                                    <?php if($vid_comments) : ?>
                                    <?php foreach($vid_comments as $commentvid) : ?>
                                       
                                    <div class="social-feed-box">
                                        <div class="social-avatar">
                                           
                                            <div class="media-body">
                                               
                                                    <?php echo $commentvid['author'];?>
                                                  
                                               
                                                <small class="text-muted"><?php echo $commentvid['date'];?></small>
                                            </div>
                                        </div>
                                        <div class="social-body">
                                            <p>
                                                <?php echo $commentvid['txt'];?>
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
                                    <?php echo form_open('user/comments/create_vid/'.$videos['video_id']); ?>
                                        <div class="col-lg-12">
                                            <label>Name</label>
                                            <input type="text" name="author" class="form-control">
                                        </div>
                                       
                                        <div class="col-lg-12">
                                            <label>Body</label>
                                            <textarea name="txt" class="form-control"></textarea><br>
                                            <input type="hidden" name="id" value="<?php echo $videos['video_id']; ?>"><br>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        </div><br>
                                        
                                    </form>
                                    </div>
                                <?php else: ?>

                                
                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open('user/comments/create_vid/'.$videos['video_id']); ?>
                                <div class="col-lg-12">
                                    
                                    <!--<input type="text" name="author" class="form-control">-->
                                </div>
                                 <div class="col-lg-12">
                                            <label><h3>Comment</h3></label>
                                        <div class="ibox-content no-padding">
                                            
                                        <textarea name="txt" class="summernote"></textarea><br>
                                        </div>
                                            <input type="hidden" name="id" value="<?php echo $videos['video_id']; ?>"><br>  
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

    

