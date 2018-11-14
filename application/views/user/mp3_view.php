<script>
var base_url = "<?php echo base_url();?>";	
</script>
		<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/settings.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/widget-calendar-full.css' type='text/css' media='all'/>
		
		<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/commerce.css' type='text/css' media='all'/>
	
		<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/jquery.mb.YTPlayer.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/owl.carousel.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/owl.theme.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/nivo-lightbox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/nivo-default.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/mediaelementplayer.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/layout.css' type='text/css' media='all'/>

		<div class="footer-player" id="f_player">
			<div class="album-playlist">
				<ul>
					<li class="album-playlist-title">
						<span class="playlist-play">
							Play
						</span>
						<span class="playlist-release">
							Artist
							
						</span>
						<span class="playlist-tract">
							Track title
							
						</span>
						
						<span class="playlist-delete">
							Delete
						</span>
					</li>
					<?php 
foreach($tracks as $track):  
	?>
					<li class="album-playlist-item" data-thumb="&lt;img width=&quot;150&quot; height=&quot;150&quot; src=&quot;<?php echo base_url();?>/public/images/album/<?php echo $track['art'];?>&quot; alt=&quot;rock16&quot; /&gt;" data-name="<?php echo $track['artist']; ?>" data-artist="<?php echo $track['title']; ?>">
						<span class="playlist-play">
							<a href="<?php echo base_url();?>/public/tracks/<?php echo $track['location'];?>">
								<i class="fa fa-play"></i>
							</a>
						</span>
						<span class="playlist-release">
							<a href="#"><?php echo $track['artist']; ?></a>
						</span>
						<span class="playlist-tract">
                            <div style="margin-left: 20%;">
							<a class="trackTitle" href="#"><?php echo $track['title']; ?></a>
                            </div>
						</span>
						
						<span class="playlist-delete">
							<a href="#"><i class="fa fa-times"></i></a>
						</span>
					</li>
					<?php
				endforeach;
					?>
				</ul>
			</div>
			<div class="album-player">
				<div class="album-player-embed">
					<span class="contro-album-player contro-down-player"><i class="fa fa-angle-down"></i></span>
					<span class="contro-album-player contro-up-player"><i class="fa fa-angle-up"></i></span>
					<audio class="album-audio-embed">
						<source src="#" type="audio/mpeg"/>
					</audio>
				</div>
			</div>
		</div>

		<script type="text/javascript">
            var $height_w   = jQuery(window).height();
	        jQuery('.noo-countdown').css('height',$height_w+'px');
	        jQuery(window).resize(function(){
                var $height_w = jQuery(window).height();
                jQuery('.noo-countdown').css('height',$height_w+'px');
	        });
            jQuery(function () {
                jQuery('.full-background li:first-child').show();
                var myVar = '';
                clearInterval(myVar);
                myVar = setInterval(function(){
                    jQuery('.full-background li:first-child').fadeOut(1200).next('li').fadeIn(1200).end().appendTo('.full-background');
                },3500);
	            
	                                
	            austDay = new Date(2016, 5 - 1,  31);
	            jQuery('#defaultCountdown').countdown({until: austDay});
	            jQuery('#year').text(austDay.getFullYear());
            });

        


</script>

		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/modernizr-2.7.1.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.carouFredSel-6.2.1.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/hoverIntent-r7.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/main.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/mediaelement-and-player.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/player.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.plugin.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.countdown.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.parallax.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>public/js/owl.carousel.min.js'></script>


		<style type="text/css">
			
			.single .noo_album .album-intro .album-intro-wrap .images {
    float: left;
    padding-right: 15px;
    width: 50%;
    display: inline-block
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player {
    display: inline-block;
    width: 50%;
    padding: 0 0 0 15px
}

@media (max-width:991px) {
    .single .noo_album .album-intro .album-intro-wrap .album-media-player {
        width: 100%
    }
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist {
    background: #1e2c42;
    margin-bottom: 40px
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul {
    padding: 0;
    margin: 0;
    list-style: none
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li {
    border-bottom: 1px solid white;
    padding: 0;
    position: relative;
    line-height: 60px
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li a {
    color: #fff;
    position: relative;
    font-size: 16px;
    line-height: 20px;
    margin: 0 30px;
    padding-left: 30px;
    display: inline-block
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li a .number {
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    transform: translate(0, -50%)
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li a .current-active-play {
    position: absolute;
    left: -8px;
    top: -2px;
    line-height: 15px;
    border: 2px solid #e6af4b;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-align: center;
    display: none
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li a .current-active-play i {
    color: #e6af4b;
    font-size: 9px;
    line-height: 15px;
    padding-left: 3px
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li a small {
    color: #555;
    font-size: 16px
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li.current-playing,
.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li:hover {
    background: #b1b5bc;
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li.current-playing a,
.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li:hover a {
    color: #fff
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li.current-playing a .number,
.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li:hover a .number {
    display: none
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li.current-playing a .current-active-play,
.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li:hover a .current-active-play {
    display: block;
    -webkit-animation: aff-paly 2s linear 0s infinite;
    animation: aff-paly 2s linear 0s infinite
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li .album-meta a {
    display: inline-block;
    margin: 0 7px;
    padding: 0
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li .album-meta a img {
    -webkit-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li .album-meta a:hover img {
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    -o-transform: scale(1.3);
    transform: scale(1.3)
}

.single .noo_album .album-intro .album-intro-wrap .album-media-player .single-album-playlist ul li .album-meta .light {
    display: none
}

.single .noo_album .album-intro .album-intro-wrap .album-purchase {
    padding: 25px 0
}

.single .noo_album .album-intro .album-intro-wrap .album-purchase a {
    border: 1px solid #555;
    color: #555;
    padding: 5px 15px;
    margin-right: 5px;
    text-transform: uppercase
}

.single .noo_album .album-intro .album-intro-wrap .album-purchase a:hover {
    background: #e6af4b;
    color: #fff;
    border-color: #e6af4b
}

.single .noo_album .album-summary .meta-summary {
    padding-top: 6px
}

.single .noo_album .album-summary .meta-summary>div {
    border-bottom: 1px solid #343434;
    padding: 30px 0 15px;
    color: #e6af4b;
    text-transform: uppercase;
    display: block
}

.single .noo_album .album-summary .meta-summary>div span {
    display: block;
    color: #fff;
    font-size: .875em
}

.single .noo_album .album-summary .meta-summary>div.meta-artist {
    padding-top: 0
}

.single .noo_album .album-summary .meta-summary .album-share {
    display: inline-block;
    padding: 0;
    text-align: left;
    border-bottom: 0
}

@media (max-width:991px) {
    .single .noo_album .album-summary .meta-summary .album-share a {
        margin: 0 12px
    }
}

.single .noo_album .album-summary .meta-summary .album-share a:first-child {
    margin-left: 0
}

.single .noo_album .album-summary .meta-summary .album-share a .title-shared {
    font-size: 16px;
    text-transform: none;
    text-align: center
}

.single .noo_album .album-summary .meta-summary .album-share a i {
    border-color: transparent
}

.single .noo_album .album-summary .entry-summary {
    padding-left: 30px
}

.single .noo_album .album-summary .entry-summary .entry-title {
    font-size: 36px;
    line-height: 36px;
    padding: 10px 0 0;
    margin: 0;
    text-transform: none;
    font-weight: 400
}

.single .noo_album .album-summary .entry-summary .author {
    font-size: 16px;
    line-height: 30px;
    font-weight: 300;
    display: block;
    margin: 10px 0 15px
}

.single .noo_album .album-summary .entry-summary .author a {
    color: #555
}

@media (max-width:991px) {
    .single .noo_album .album-summary .entry-summary {
        padding-left: 0
    }
}

.single .noo_album .album-summary .entry-summary .album-tag {
    background: #1e2c42;
    padding: 10px 15px;
    margin: 43px 0;
    text-transform: uppercase
}

.single .noo_album .album-summary .entry-summary .album-tag a {
    border-color: #555;
    font-weight: 400;
    line-height: 1;
    background: #1f1f1f;
    margin: 0 0 0 5px;
    padding: 10px 15px;
    font-size: .875em;
    color: #555;
    border-bottom: 0;
    text-transform: uppercase
}

.single .noo_album .album-summary .entry-summary .album-tag a:hover {
    background: #e6af4b;
    border-color: #e6af4b;
    color: #fff
}

.single .noo_album .album-summary .entry-summary .album-tag a:first-child {
    margin-left: 10px
}

.single .noo_album .album-summary .entry-summary .album-description {
    font-weight: 300;
    line-height: 24px
}

@keyframes aff-paly {
    from {
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0)
    }
    to {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

@-webkit-keyframes aff-paly {
    from {
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0)
    }
    to {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

.album-meta {
    position: absolute;
    right: 16px;
    top: 0;
    color: #fff;
    text-align: right
}

.noo-archive-album {
    margin-bottom: 100px
}

.albums-masonry .masonry-filters {
    text-align: center;
    margin-bottom: 70px
}

.albums-masonry .masonry-filters li {
    display: inline-block;
    text-transform: uppercase;
    padding: 0 20px
}

.albums-masonry .masonry-filters li a {
    color: #555;
    padding: 8px 0;
    line-height: 1
}

.albums-masonry .masonry-filters li a.selected {
    color: #fff;
    border-bottom: 1px solid #e6af4b
}

.noo_albums {
    margin: 0;
    padding: 0;
    list-style: none
}

.noo_albums.masonry-container {
    margin: 0 -15px
}

.noo_albums li {
    margin-bottom: 30px
}

.noo_albums li.noo-al-item {
    width: 33.33%;
    float: left;
    margin-bottom: 30px;
    position: relative
}

@media (max-width:991px) {
    .noo_albums li.noo-al-item {
        width: 50%
    }
}

@media (max-width:767px) {
    .noo_albums li.noo-al-item {
        width: 100%
    }
}

.noo_albums li .noo_album-container {
    margin: 0
}

.noo_albums li .noo_album-container .noo_album-images {
    position: relative;
    overflow: hidden
}

.noo_albums li .noo_album-container .noo_album-images img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 1s cubic-bezier(.19, 1, .22, 1) 0s;
    -o-transition: all 1s cubic-bezier(.19, 1, .22, 1) 0s;
    transition: all 1s cubic-bezier(.19, 1, .22, 1) 0s
}

.noo_albums li .noo_album-container .noo_album-images:hover img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1)
}

.noo_albums li .noo_album-container figure {
    position: relative
}

.noo_albums li .noo_album-container figure figcaption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    background: rgba(0, 0, 0, .9);
    padding: 20px
}

.noo_albums li .noo_album-container figure figcaption .noo_album-info h3.noo_album_title {
    padding: 0;
    margin: 0;
    font-size: 16px
}

.noo_albums li .noo_album-container figure figcaption .noo_album-info .noo_album-category {
    color: #555
}

.noo_albums li .noo_album-container figure figcaption .noo_album-info .noo_album-category a {
    color: #555;
    font-size: 12px
}

.noo_albums li .noo_album-container figure figcaption .noo_album-loop-actions a {
    margin-top: 15px;
    margin-right: 8px;
    border: 1px solid #555;
    color: #555;
    text-transform: uppercase;
    padding: 5px 15px;
    font-size: 14px;
    display: inline-block
}

.noo_albums li .noo_album-container figure figcaption .noo_album-loop-actions a i {
    padding-right: 5px
}

.noo_albums li .noo_album-container figure figcaption .noo_album-loop-actions a:hover {
    background: #e6af4b;
    color: #fff;
    border-color: #e6af4b
}

.no_padding {
    padding-bottom: 0
}

.footer-player {
    position: fixed;
    bottom: 0;
    min-height: 76px;
    width: 100%;
    background: rgba(0, 0, 0, .5);
    z-index: 9999;
    -webkit-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s
}

.footer-player.contro-play {
    bottom: -80px
}

.footer-player .album-player-embed {
    padding: 0 30px;
    width: 100%;
    position: relative
}

.footer-player .album-player-embed .contro-album-player {
    display: inline-block;
    position: absolute;
    bottom: 100%;
    right: 0;
    width: 30px;
    height: 30px;
    background: #010d21;
    text-align: center;
    cursor: pointer
}

.footer-player .album-player-embed .contro-album-player i {
    color: #fff
}

.footer-player .album-player-embed .contro-album-player:hover {
    background: #e6af4b
}

.footer-player .album-player-embed .contro-album-player.contro-album-hide i:before {
    content: "\f106"
}

.footer-player .album-player-embed .contro-album-player.contro-up-player,
.footer-player .album-player-embed .contro-album-player.contro_hide {
    display: none
}

.footer-player .album-player-embed .contro-album-player.contro_show {
    display: block
}

.footer-player .album-player-embed .mejs-container {
    position: relative;
    background: 0 0
}

.footer-player .album-player-embed .mejs-container .mejs-controls {
    background: 0 0;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    transform: translate(0, -50%)
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-time-rail {
    height: 3px;
    position: relative;
    top: 11px;
    max-width: 35%!important
}

@media (max-width:767px) {
    .footer-player .album-player-embed {
        padding-left: 15px;
        padding-right: 15px
    }
    .footer-player .album-player-embed .mejs-container .mejs-controls .mejs-time-rail {
        display: none
    }
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-time-rail .mejs-time-loaded {
    max-height: 100%;
    -webkit-border-radius: 0;
    border-radius: 0
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-time-rail .mejs-time-total {
    height: 3px;
    top: 0;
    max-width: 100%;
    background: rgba(255, 255, 255, .15);
    -webkit-border-radius: 0;
    border-radius: 0
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-time-rail .mejs-time-loaded {
    background: rgba(255, 255, 255, .2)
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-time-rail .mejs-time-current {
    background: #fff;
    max-height: 100%;
    -webkit-border-radius: 0;
    border-radius: 0
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-button {
    cursor: pointer;
    text-align: left
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-button.mejs-unmute button:before {
    content: "\f026"
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-button button {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    background: #262626;
    border-radius: 50%;
    position: relative;
    margin: 0
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-button button:before {
    top: 50%;
    left: 50%;
    position: absolute;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    content: "\f027";
    font-family: FontAwesome;
    font-size: 14px;
    color: #fff
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-button button:hover:before {
    color: #e6af4b
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-button .fa {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border: 2px solid #555;
    border-radius: 50%;
    position: relative
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-button .fa:before {
    top: 50%;
    left: 50%;
    position: absolute;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-button.mejs-pause .fa-play:before {
    content: "\f04c"
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-navigation-controls {
    min-width: 10%;
    float: left
}

@media (max-width:991px) {
    .footer-player .album-player-embed .mejs-container .mejs-controls .mejs-navigation-controls {
        width: 16%
    }
}

@media (max-width:480px) {
    .footer-player .album-player-embed .mejs-container .mejs-controls .mejs-navigation-controls {
        width: 40%
    }
    .trackTitle{
        margin-left:10%;
    }
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-navigation-controls .mejs-button:last-child {
    padding-left: 52px
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-navigation-controls .mejs-button i {
    border: 0;
    font-size: 14px;
    color: #555;
    -webkit-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-navigation-controls .mejs-button i:hover {
    color: #e6af4b
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-navigation-controls:after {
    clear: both;
    display: block;
    content: ''
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-volume-button {
    margin-left: 50px
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-volume-button .fa {
    border-color: #262626;
    background: #262626;
    color: #fff
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-horizontal-volume-slider {
    margin: 0 20px;
    height: 3px;
    width: 100px;
    top: 15px
}

@media (max-width:767px) {
    .footer-player .album-player-embed .mejs-container .mejs-controls .mejs-horizontal-volume-slider {
        display: none
    }
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
    width: 100%;
    height: 3px;
    top: 0;
    background: rgba(255, 255, 255, .15);
    -webkit-border-radius: 0;
    border-radius: 0
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
    height: 3px;
    top: 0;
    -webkit-border-radius: 0;
    border-radius: 0
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-horizontal-volume-slider .mejs-volumn-percent {
    position: absolute;
    left: 120%;
    top: -5px;
    font-size: 12px
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-track-container {
    margin-left: 100px;
    top: 10px;
    width: 35%
}

@media (max-width:991px) {
    .footer-player .album-player-embed .mejs-container .mejs-controls .mejs-volume-button {
        display: none
    }
    .footer-player .album-player-embed .mejs-container .mejs-controls .mejs-track-container {
        margin-left: 40px
    }
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-track-container .mejs-track-cover {
    background: 0 0
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-track-container .mejs-track-cover img {
    margin: 0;
    max-width: 40px;
    max-height: 40px;
    -webkit-border-radius: 50%;
    border-radius: 50%
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-track-container .mejs-track-title {
    font-size: 14px;
    padding-left: 20px
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-track-container .mejs-track-artist,
.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-track-container .mejs-track-artist a {
    color: #555;
    font-size: 14px
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-left-controls {
    margin: 0 30px 0 0;
    display: block;
    min-width: 150px;
    float: right;
    text-align: right
}

@media (max-width:991px) {
    .footer-player .album-player-embed .mejs-container .mejs-controls .mejs-left-controls {
        margin-left: 20px;
        min-width: 100px;
        margin-right: 0
    }
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-left-controls .mejs-button {
    float: none;
    display: inline-block
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-left-controls .mejs-queue .fa {
    background: #262626;
    border: 0;
    color: #fff;
    -webkit-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-left-controls .mejs-queue .fa:hover,
.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-left-controls .mejs-queue.queue-active .fa {
    color: #e6af4b
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-playpause-button {
    position: absolute;
    left: 40px;
    top: 0;
    float: none;
    width: 36px;
    height: 36px;
    border: 2px solid #e6af4b;
    text-align: center;
    line-height: 25px;
    padding-left: 4px;
    -webkit-border-radius: 50%;
    border-radius: 50%
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-playpause-button.mejs-pause {
    padding-left: 0
}

.footer-player .album-player-embed .mejs-container .mejs-controls .mejs-playpause-button i.fa {
    font-size: 14px;
    color: #e6af4b;
    width: auto;
    height: auto;
    border: 0
}

.footer-player .album-playlist {
    display: none;
    background: #010d21
}

.footer-player .album-playlist ul {
    margin: 0;
    padding: 0;
    list-style: none;
    overflow-y: scroll;
    height: 300px
}

.footer-player .album-playlist ul li {
    border-bottom: 1px solid rgba(255, 255, 255, .15);
    padding: 15px 30px;
    width: 100%;
    display: block;
    clear: both;
    float: left
}

.footer-player .album-playlist ul li .playlist-play img {
    max-width: 40px
}

.footer-player .album-playlist ul li>span {
    width: 20%;
    float: left
}

@media (max-width:991px) {
    .footer-player .album-playlist ul li>span.playlist-tract {
        width: 30%
    }
}

.footer-player .album-playlist ul li.album-playlist-title {
    border-bottom: 2px solid #fff
}

.footer-player .album-playlist ul li.album-playlist-title small {
    display: block
}

.footer-player .album-playlist ul li.album-playlist-title>span {
    text-transform: uppercase
}

.footer-player .album-playlist ul li .playlist-tract small a {
    display: block;
    color: #555;
    font-size: 14px
}

.footer-player .album-playlist ul li .playlist-delete,
.footer-player .album-playlist ul li .playlist-page {
    text-align: right
}

.footer-player .album-playlist ul li .playlist-delete .fa,
.footer-player .album-playlist ul li .playlist-page .fa,
.footer-player .album-playlist ul li .playlist-play .fa {
    border: 2px solid #555;
    border-radius: 50%;
    height: 35px;
    position: relative;
    text-align: center;
    width: 35px;
    font-size: 11px;
    display: inline-block
    color:red !important;
}

.footer-player .album-playlist ul li .playlist-delete .fa:before,
.footer-player .album-playlist ul li .playlist-page .fa:before,
.footer-player .album-playlist ul li .playlist-play .fa:before {
    left: 50%;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

.footer-player .album-playlist ul li .playlist-delete:after {
    clear: both;
    display: block;
    content: ''
}

.footer-player .album-playlist ul li.current-playing .playlist-play .fa:before {
    content: "\f04c"
}

.single-album-title {
    text-align: center;
    font-size: 36px;
    line-height: 36px;
    font-weight: 400;
    padding: 0;
    margin: 0 0 72px;
    text-transform: uppercase
}

.similar_title,
.tracklist-title {
    font-size: 24px;
    line-height: 24px;
    text-transform: uppercase;
    font-weight: 400
}

.tracklist-title {
    margin-top: 0;
    margin-bottom: 30px
}

.similar_title {
    margin-top: 18px;
    margin-bottom: 27px
}

.similar_title span {
    color: #e6af4b
}

.single-album {
    padding: 0 0 70px
}

#loading {
    background-color: #000;
    height: 100%;
    width: 100%;
    position: fixed;
    z-index: 99999;
    margin-top: 0;
    top: 0
}

#loading-center {
    width: 100%;
    height: 100%;
    position: relative
}

#loading-center-absolute {
    position: absolute;
    left: 50%;
    top: 50%;
    height: 50px;
    width: 150px;
    margin-top: -25px;
    margin-left: -75px
}

.object {
    width: 8px;
    height: 50px;
    margin-right: 5px;
    background-color: #e6af4b;
    -webkit-animation: animate 1s infinite;
    animation: animate 1s infinite;
    float: left
}

.object:last-child {
    margin-right: 0
}

.object:nth-child(10) {
    -webkit-animation-delay: .9s;
    animation-delay: .9s
}

.object:nth-child(9) {
    -webkit-animation-delay: .8s;
    animation-delay: .8s
}

.object:nth-child(8) {
    -webkit-animation-delay: .7s;
    animation-delay: .7s
}

.object:nth-child(7) {
    -webkit-animation-delay: .6s;
    animation-delay: .6s
}

.object:nth-child(6) {
    -webkit-animation-delay: .5s;
    animation-delay: .5s
}

.object:nth-child(5) {
    -webkit-animation-delay: .4s;
    animation-delay: .4s
}

.object:nth-child(4) {
    -webkit-animation-delay: .3s;
    animation-delay: .3s
}

.object:nth-child(3) {
    -webkit-animation-delay: .2s;
    animation-delay: .2s
}

.object:nth-child(2) {
    -webkit-animation-delay: .1s;
    animation-delay: .1s
}

@-webkit-keyframes animate {
    50% {
        -ms-transform: scaleY(0);
        -webkit-transform: scaleY(0);
        transform: scaleY(0)
    }
}

@keyframes animate {
    50% {
        -ms-transform: scaleY(0);
        -webkit-transform: scaleY(0);
        transform: scaleY(0)
    }
}
		</style>

