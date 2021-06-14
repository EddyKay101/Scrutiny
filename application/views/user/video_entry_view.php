<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
});
</script>
<title><?php echo $videos['title']; ?></title>

<?php

    if (isset($pic['media_img'])) {
        $img = $pic['media_img'];
    } else {
        $img = "blank_user.png";
    }
    ?>
<section class="music-post">
    <div class="container">
        <div class="row">
            <div class="col-12 wrapper">
                <div class="image-holder mt-5">
                    <img class="post-image"
                        src="<?php echo base_url(); ?>/public/img/<?php echo $videos['media_img']; ?>" />
                </div>
                <div class="article">
                    <div class="text-center article-title">
                        <span class="text-muted"><i
                                class="fa fa-clock-o"></i><?php echo $videos['date_created']; ?></span>
                        <h1>
                            <?php echo $videos['title']; ?>
                        </h1>
                    </div>
                    <div class="text-holder">
                        <p><?php echo htmlspecialchars_decode($videos['entry_text']); ?></p>
                    </div>
                </div>
                <div class="comments">
                    <h2>Comments:</h2>
                    <div>
                        <p class="comment-count"><i class="fa fa-comments-o"> </i><?php echo $countVideoEntries; ?>
                            comments</p>
                    </div>

                    <?php if($vid_comments) : ?>
                    <?php foreach($vid_comments as $commentvid) : ?>
                    <input type="hidden" name="author" value="<?php echo $commentvid['author']; ?>">
                    <div class="comment-box">
                        <div class="comment-wr">
                            <div class="comment-body">
                                <?php echo $commentvid['author']; ?>
                                <small class="text-muted"><?php echo $commentvid['date']; ?></small>
                                <div class="social-body">
                                    <p class="comment-p">
                                        <?php echo $commentvid['txt']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <p>No Comments To Display</p>
                    <?php endif; ?>
                </div>

                <div class="add-comment">

                    <?php if (!$this->session->userdata('username')) : ?>
                    <div>

                        <?php echo "Post a comment as a Guest"; ?>

                        <?php echo validation_errors(); ?>
                        <?php echo form_open('user/comments/create/' . $videos['video_id']); ?>
                        <div style="width: 70%;">
                            <label>Name</label>
                            <input type="text" name="author" class="form-control">
                        </div>

                        <div>
                            <label>Body</label>
                            <textarea name="txt" rows="5"
                                style="width: 70%; border-radius: 5px; border:1px solid #f8ac59;"
                                class="form-control"></textarea><br>
                            <input type="hidden" name="id" value="<?php echo $videos['video_id']; ?>"><br>
                            <button class="button" type="submit">Submit</button>
                        </div><br>

                        </form>
                    </div>
                    <?php else : ?>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('user/comments/create/' . $videos['video_id']); ?>
                    <div>
                        <label>
                            <h3>Comment</h3>
                        </label>
                        <div class="ibox-content no-padding">

                            <textarea name="txt" rows="5"
                                style="width: 70%; border-radius: 5px; border:1px solid #f8ac59;"
                                class="summernote"></textarea><br>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $videos['video_id']; ?>"><br>
                        <button class="button" type="submit">Submit</button>
                    </div>

                    </form>

                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>