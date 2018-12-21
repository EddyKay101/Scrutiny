 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
  });
</script>
<title>Scrutiny | Featured Artists</title>
<link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
<br><br><br>
<title></title>
<div id = "a_view">
<div class="wrapper wrapper-content">
<div class="middle-box text-center animated fadeInRightBig">
<?php 
foreach($artists as $artist):  
	?>
<div class="music-div">
<p>
<img src ="<?php echo base_url();?>/public/img/<?php echo $artist['media_img'];?>" width = '320px' height='250px'/>
</p>
<h3><?php echo $artist['artist'];?></h3>
<small class="post-date">Posted on: <?php echo $artist['date_created'];?></small>
<?php //echo word_limiter($artist['entry_text'], 50);?>
<br>
<p><a class="btn btn-primary" href="<?php echo site_url('/artists/'.$artist['entry_id']); ?>">Read More</a></p>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
<style>
	
	.post-date{
  background:#f4f4f4;
  padding:4px;
  margin:3px;
  display:block;
}

</style>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript">
    window.sr = ScrollReveal({reset:true});
    sr.reveal('.music-div', { duration: 2000 });
   // sr.reveal(div,{ duration: 2000 });
</script>