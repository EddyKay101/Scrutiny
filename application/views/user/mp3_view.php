<script>
var base_url = "<?php echo base_url(); ?>";
</script>

<link rel='stylesheet' href='<?php echo base_url(); ?>public/css/mediaelementplayer.css' type='text/css' media='all' />

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


            </li>
            <?php
foreach ($tracks as $track):
?>
            <li class="album-playlist-item"
                data-thumb="&lt;img width=&quot;150&quot; height=&quot;150&quot; src=&quot;<?php echo base_url(); ?>/public/images/album/<?php echo $track['art']; ?>&quot; alt=&quot;rock16&quot; /&gt;"
                data-name="<?php echo $track['artist']; ?>" data-artist="<?php echo $track['title']; ?>">
                <span class="playlist-play">
                    <a href="<?php echo base_url(); ?>/public/tracks/<?php echo $track['location']; ?>">
                        <i class="fa fa-play"></i>
                    </a>
                </span>
                <span class="playlist-release">
                    <a href="#"><?php echo $track['artist']; ?></a>
                </span>
                <span class="playlist-tract">
                    <div>
                        <a class="trackTitle" href="#"><?php echo $track['title']; ?></a>
                    </div>
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
                <source src="#" type="audio/mpeg" />
            </audio>
        </div>
    </div>
</div>

<script type="text/javascript">
var $height_w = jQuery(window).height();
jQuery('.noo-countdown').css('height', $height_w + 'px');
jQuery(window).resize(function() {
    var $height_w = jQuery(window).height();
    jQuery('.noo-countdown').css('height', $height_w + 'px');
});
jQuery(function() {
    jQuery('.full-background li:first-child').show();
    var myVar = '';
    clearInterval(myVar);
    myVar = setInterval(function() {
        jQuery('.full-background li:first-child').fadeOut(1200).next('li').fadeIn(1200).end().appendTo(
            '.full-background');
    }, 3500);


    austDay = new Date(2016, 5 - 1, 31);
    jQuery('#defaultCountdown').countdown({
        until: austDay
    });
    jQuery('#year').text(austDay.getFullYear());
});
</script>

<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>public/js/main.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>public/js/mediaelement-and-player.js'></script>