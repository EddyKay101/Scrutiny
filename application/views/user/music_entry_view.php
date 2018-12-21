 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
  });
</script>
<style>
body{
    background: #f1e7e7;
}
.audio-player-cont{
    width:450px;
    height:135px;
    /* background: #949392; */
    /* background: linear-gradient(to right, rgba(230, 175, 75, 0.3), rgba(210, 210, 219, 0.6));   */
    /* background: linear-gradient(to right, rgba(45, 32, 104, 0.87), rgba(218, 187, 12, 0.6));   */
    background: linear-gradient(45deg, #22264b 26%,#d6b43b 100%); 
    box-shadow: 0 0 6px 2x #c7a8a8;
    color: #003ba9;
    font-family: verdana;
    font-size:12px;
    position: relative;
    margin: auto;
    /* top: 1cm; */
    border-radius: 25px;
    color:#bfbfc1;
}
.playerImage{
    float:left;
    position: absolute;
    top:1.5em;
    left:1em;
    border: 6px solid rgba(189, 189, 192, 0.486);
    border-radius: 5px;
}
.player{
    float:right;
    margin:7px;
}
.song-title{
    width: 300px;
    padding: 5px 0px 5px 0px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.song-slider{
    -webkit-appearance: none;
    width:300px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}
.song-slider:hover{
    opacity: 1;
}
.song-slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #22264b;
    cursor: pointer;
  }
  
.song-slider::-moz-range-thumb {
    background: #22264b;
    cursor: pointer;
  }
.current-time{
    float:left;
    font-size:10px;
}
.duration{
    float:right;
    font-size:10px;
}
.controllers{
    clear:both;
    display:table;
}
.controllers *{
    vertical-align: middle;
    margin-right:15px;
}
.volume-slider{
    width:90px !important;
    margin-left:2px !important;
    display: -webkit-inline-box !important;

    -webkit-appearance: none;
    -moz-apperance: none;
    border-radius: 6px;
    height: 6px;
    background-image: -webkit-gradient(
        linear,
        left top,
        right top,
        color-stop(10, #22264b),
        color-stop(10, #C5C5C5)
    );
}
@media (max-width: 568px) {
    .audio-player-cont{
        width:100%;
    }
    .volume-slider{
        width: 40px !important;
    }
    .playerImage{
        display:none;
    }
    .player{
        float:none;
    }
    .song-title{
        position: relative;
        left: 20%;
    }
    .download{
        display:none;
    }
}
@media (max-width: 667px) {
    .audio-player-cont{
        width:100%;
    }
    .volume-slider{
        width: 90px;
    }
    .playerImage{
        display:none;
    }
    .player{
        float:none;
    }
    .song-title{
        position: relative;
        left: 25%;
    }
    .download{
        display:none;
    }
}
</style>
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
                            <div class="entryContent">
                                <?php 
                                    echo htmlspecialchars_decode($entries['entry_text']);
                                    if(!empty(($entries['music_location']))):
                                ?>

                                        <div class="audio-player-cont">
                                            <div class="playerImage">
                                                <img img-thumbnail src="<?php echo base_url();?>/public/img/<?php echo $entries['media_img'];?>" width="100px" height="90px;">
                                            </div>
                                            <div class="player" muted="muted">
                                                <div id="songTitle" class="song-title"></div>
                                                <input id="songSlider" class="song-slider" type="range" min="0" step="1" onchange="seekSong()"/>
                                                <div>
                                                    <div id="currentTime" class="current-time">00:00</div>
                                                    <div id="duration" class="duration">00:00</div>
                                                </div>
                                                <div class="controllers">
                                                    <img src="<?php echo base_url();?>/public/img/player/play-button.svg" width="40px" onclick="playOrPauseSong(this);" id="play">
                                                    <img src="<?php echo base_url();?>/public/img/player/volume-down.svg" width="15px" onclick="mutePlayer(this);" id="volumeDown">
                                                    <input id="volumeSlider" class="volume-slider" type="range" min="0"value="100" max="1" step="0.01" onchange="adjustVolume()"/>
                                                    <img src="<?php echo base_url();?>/public/img/player/volume-up.svg" width="15px" style="margin-left:2px;" onclick="maxVolume();">

                                                    <a class="download" href="<?php echo base_url();?>/public/img/<?php echo $entries['music_location'];?>" download>
                                                        <img src="<?php echo base_url();?>/public/img/player/download.svg" alt="download" width="20px">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        endif;
                                    ?>
                            </div>
                         
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
                                            <input type="text" name="author" class="form-control" style="width:40%; border-radius:15px;">
                                        </div>
                                       
                                        <div class="col-lg-12">
                                            <label>Body</label>
                                            <textarea name="txt" rows="5" style="width: 50%; border-radius: 20px; " class="form-control"></textarea>
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

                    <script>
                        // let songs = ['FULLY AKTIV RIDDIM - DANE RAYCHORDS.mp3',];
                        let songs = ['<?php echo $entries['music_location']?>'];

let songTitle = document.getElementById('songTitle');
let songSlider = document.getElementById('songSlider');
let currentTime = document.getElementById('currentTime');
let duration = document.getElementById('duration');
let volumeSlider = document.getElementById('volumeSlider');
let nextSongTitle = document.getElementById('nextSongTitle');
let minVolume = document.getElementById('volumeDown');
let playbtn = document.getElementById('play');
let song = new Audio(); // New audio object
let currentSong = 0;

window.onload = loadSong;

function loadSong (){
    song.src = "<?php echo base_url();?>/public/tracks/" + songs[currentSong]; // directory of where the tracks are
    songTitle.textContent = songs[currentSong];
    song.playbackRate = 1;
    song.volume = volumeSlider.value;
    // song.play();
    setTimeout(showDuration, 1000);

    
}

 setInterval(updateSongSlider, 1000);
 setInterval(showDuration, 1000);

function updateSongSlider (){
    let c = Math.round(song.currentTime);
    songSlider.value = c;
    currentTime.textContent = convertTime(c);
    if(song.ended) {
        next();
    }
}

function convertTime (secs){
    let min = Math.floor(secs/60);
    let sec = secs % 60;
    min = (min < 10) ? "0" + min : min;
    sec = (sec < 10) ? "0" + sec : sec;
    return (min + ":" + sec);
}

function showDuration (){
    let d = Math.floor(song.duration);
    let ct = Math.round(song.currentTime);
    let rm = d - ct;
    songSlider.setAttribute("max", rm);
    duration.textContent = convertTime(rm);
}

function playOrPauseSong(image) {
    song.playbackRate = 1;
    if(song.paused){
        song.play();
        image.src = "<?php echo base_url();?>/public/img/player/pause-button.svg";
    }
    else{
        song.pause();
        image.src = "<?php echo base_url();?>/public/img/player/play-button.svg";
    }
}



function seekSong() {
    song.currentTime = songSlider.value;
    currentTime.textContent = convertTime(song.currentTime);
}

function adjustVolume (){
    song.volume = volumeSlider.value;
}

function mutePlayer (image){
    volumeSlider.value = 0;
    song.volume = volumeSlider.value;
    image.src = "<?php echo base_url();?>/public/img/player/mute.svg";
    volumeSlider.style.background = '#C5C5C5';
}

function maxVolume () {
    volumeSlider.value = volumeSlider.max;
    song.volume = volumeSlider.value;
    minVolume.src = "<?php echo base_url();?>/public/img/player/volume-down.svg";
    volumeSlider.style.background = '#22264b';
}


$('.volume-slider').change(function () {
    var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
    
    $(this).css('background-image',
                '-webkit-gradient(linear, left top, right top, '
                + 'color-stop(' + val + ', #22264b), '
                + 'color-stop(' + val + ', #C5C5C5)'
                + ')'
                );
});


                    </script>
                    

    

