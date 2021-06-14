 <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 <script>
     (adsbygoogle = window.adsbygoogle || []).push({
         google_ad_client: "ca-pub-9983809730412655",
         enable_page_level_ads: true
     });
 </script> -->
 <title>Scrutiny | Home</title>

 <section id="hero" class="hero">
     <video id="bgvid" playsinline autoplay muted loop>
         <source src="<?php echo base_url(); ?>public/videos/djscrutiny.mp4" type="video/mp4">

     </video>
     <div id="bars">
         <!-- <div class="bar scrutiny-secondary-background"></div> -->
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>
         <div class="bar scrutiny-secondary-background"></div>


     </div>

 </section>

 <section id="reviews" class="reviews mt-3">
     <div class="col-lg-12 text-center">

         <div class="separator"></div>
         <h1>Music Reviews</h1>
     </div>
     <div class="container">
         <div class="row">
             <?php
                foreach ($entries as $row) :
                ?>
             <div class="col-lg-4 col-sm-12 mt-3">
                 <div class="title-wrapper">
                     <img id="reviewimg" src="<?php echo base_url(); ?>/public/img/<?php echo $row['media_img']; ?>" />
                     <div class="after">
                         <div class="title">
                             <a href="<?php echo site_url('/reviews/' . $row['entry_id']); ?>"
                                 class="scrutiny-light-text">
                                 <h2 id="smallT">
                                     <?php echo $row['title']; ?>
                                 </h2>
                             </a>
                         </div>

                         <div class="small m-b-xs author scrutiny-secondary-text">
                             <strong>Scrutiny</strong> <span class="scrutiny-secondary-text"><i
                                     class="fa fa-clock-o"></i> <?php echo $row['date_created']; ?></span>
                         </div>

                     </div>
                 </div>

             </div>
             <?php endforeach; ?>
             <div class="col-12 mt-3">
                 <a href="<?php echo base_url(); ?>reviews" class="button" id="viewButton">View All <i
                         class="fas fa-chevron-right"></i></a>
             </div>
         </div>
     </div>
 </section>

 <section id="videos" class="videos mt-3">
     <div class="col-lg-12 text-center py-1">

         <div class="separator"></div>
         <h1>Videos</h1>
     </div>
     <div class="container">
         <div class="row">
             <?php
                foreach ($videos as $video) :
                ?>
             <div class="col-lg-4 col-sm-12 mt-3">
                 <div class="title-wrapper">
                     <img src="<?php echo base_url(); ?>/public/img/<?php echo $video['media_img']; ?>" />
                     <div class="after">
                         <div class="title">
                             <a href="<?php echo site_url('/videos/' . $video['video_id']); ?>"
                                 class="scrutiny-light-text">
                                 <h2 id="smallT">
                                     <?php echo $video['title']; ?>
                                 </h2>
                             </a>
                         </div>

                         <div class="small m-b-xs author scrutiny-secondary-text">
                             <strong>Scrutiny</strong> <span class="scrutiny-secondary-text"><i
                                     class="fa fa-clock-o"></i> <?php echo $row['date_created']; ?></span>
                         </div>

                     </div>
                 </div>

             </div>
             <?php endforeach; ?>
             <div class="col-12 mt-3">
                 <a href="<?php echo base_url(); ?>reviews" class="button" id="viewButton">View All <i
                         class="fas fa-chevron-right"></i></a>
             </div>
         </div>
     </div>
 </section>


 <section id="featured-artists" class="featured-artists mt-3">
     <div class="col-lg-12 col-sm-12 text-center py-1">

         <div class="separator"></div>
         <h1>Featured Artitsts</h1>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="holder">
                     <?php
                        $c = 0;
                        foreach ($artists as $artist_s) :
                            $c++;
                        ?>
                     <div class="holder-inner artist" id="<?php echo 'artist' . $c; ?>">
                         <div class="avatar-holder">
                             <img class="avatar" id="<?php echo 'avatar' . $c; ?>"
                                 src="<?php echo base_url(); ?>/public/img/<?php echo $artist_s['media_img']; ?>">
                         </div>
                         <div class="text-holder">
                             <h2 class="heading" id="<?php echo 'heading' . $c; ?>"><?php echo $artist_s['artist']; ?>
                             </h2>
                             <h4 class="description" id="<?php echo 'description' . $c; ?>">
                                 <?php echo word_limiter($artist_s['entry_text'], 50); ?></h4>
                         </div>
                     </div>

                     <?php endforeach; ?>
                 </div>
             </div>


         </div>

     </div>
 </section>

 <!---------Members Section------>
 <section id="members" class="members">
     <div class="col-lg-12 col-sm-12 text-center py-1">

         <div class="separator"></div>
         <h1>Members</h1>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-12 text-center p-5">
                 <div class="wrapper wrapper-content animated fadeInRight">
                     <div class="row">
                         <?php foreach ($members as $member) :
                                if ($member['media_img'] != "") {
                                    $img = $member['media_img'];
                                } else {
                                    $img = "blank_user.png";
                                }
                            ?>
                         <div class="col-lg-3">
                             <div class="contact-box center-version">

                                 <a href="<?php echo site_url('/members/' . $member['user_id']); ?>">

                                     <img alt="image" class="img-circle"
                                         src="<?php echo base_url(); ?>/public/user_img/<?php echo $img; ?>">


                                     <h3 class="m-b-xs"><strong><?php echo $member['firstname']; ?></strong></h3>


                                     <address class="m-t-md">
                                         <strong><i
                                                 class="fa fa-user"></i><?php echo $member['username']; ?></strong><br>
                                         <i class="fa fa-map-marker"></i><?php echo $member['Location']; ?><br>

                                     </address>

                                 </a>
                                 <div class="contact-box-footer">
                                     <div class="m-t-xs btn-group">

                                         <?php

                                                $local = base_url() . 'chats/' . $member['user_id'];

                                                $session = $this->session->userdata('user_id');
                                                //$friends = 0;

                                                if ($session == $member['user_id']) {
                                                    $message = "<br><p></p>";
                                                } else {
                                                    $message = "<a class=\"btn btn-xs btn-white\" id=\"hEmail\" href=\"$local\"><i class=\"fa fa-envelope\"></i> Message</a>";
                                                }


                                                ?>
                                         <?php echo $message; ?>
                                     </div>
                                 </div>

                             </div>
                         </div>

                         <?php endforeach; ?>


                     </div>

                 </div>


             </div>
         </div>
     </div>


 </section>


 <!---------Connect------>

 <section id="sign-in" class="sign-in">
     <div class="col-lg-12 col-sm-12 text-center py-1">

         <div class="separator"></div>
         <h1>Connect</h1>
     </div>
     <div class="container">
         <div class="row">
             <?php
                $data = $this->session->userdata('username');
                if ($data) :

                ?>
             <div class="login-div" id="logindiv" hidden>

                 <div class="login_modal" id="login_modal">
                     <div class="ibox float-e-margins">
                         <div class="ibox-title">
                             <h5>Secure Login</h5>

                         </div>
                         <div class="ibox-content">
                             <div class="text-center">
                                 <a data-toggle="modal" class="button" href="#modal-form">Click Here to Log In</a>
                             </div>
                             <div id="modal-form" class="modal fade" aria-hidden="true">
                                 <div id="login_form_error" class="alert alert-error">
                                     <!-- Dynamic -->
                                 </div>
                                 <div class="modal-dialog">
                                     <div class="modal-content">
                                         <div class="modal-body">
                                             <div class="row" id="modalRow">
                                                 <div class="col-sm-6 b-r">
                                                     <h3 class="m-t-none m-b">Sign in</h3>

                                                     <p>Sign in today for more experience.</p>

                                                     <form id="login_form" role="form" method="post"
                                                         action="<?= site_url('user/user/login') ?>">
                                                         <div class="form-group"><label>Email</label> <input
                                                                 type="email" placeholder="Enter email" name="email"
                                                                 class="form-control"></div>
                                                         <div class="form-group"><label>Password</label> <input
                                                                 type="password" placeholder="Password" name="password"
                                                                 class="form-control"></div>
                                                         <div>
                                                             <button id="login_button"
                                                                 class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                                                 type="submit"><strong>Log in</strong></button>

                                                         </div>
                                                     </form>
                                                 </div>
                                                 <div class="col-sm-6">
                                                     <h4>Not a member?</h4>
                                                     <p>You can create an account:</p>
                                                     <p class="text-center">
                                                         <a href="<?= site_url('user/home/register') ?>"><i
                                                                 class="fas fa-sign-in-alt big-icon"></i></a>
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


         <div class="row" id="connect_data">
             <?php $p = $this->session->userdata['username']; ?>
             <div class="col-lg-12 col-sm-12 text-center py-5">
                 <h2><?php echo "Welcome " . $p; ?></h2>
             </div>
             <div class="container">
                 <div class="row" id="connect1">
                     <div class="col-sm-12" id="cl-effect-13">

                         <div class="connect-list text-center">

                             <div class="dash"><a class="connecta"
                                     href="<?php echo site_url('user/members/edit/' . $p); ?>" id="connecta1"><i
                                         class="fa fa-user-circle-o" aria-hidden="true"></i> Manage Your
                                     Profile</a>
                             </div>
                             <div class="dash"><a class="connecta" href="<?= site_url('user/uploads/index') ?>"
                                     id="connecta2"><i class="fa fa-headphones" aria-hidden="true"></i> Upload Music</a>
                             </div>
                             <div class="dash"><a class="connecta" href="<?= site_url('user/friends/index') ?>"
                                     id="connecta3"><i class="fa fa-users" aria-hidden="true"></i> Manage Friends</a>
                             </div>
                             <div class="dash"><a class="connecta" href="<?= site_url('user/chats/view_chats') ?>"
                                     id="connecta4"><i class="fa fa-envelope" aria-hidden="true"></i> Messages</a></div>
                             <div class="dash"><a class="connecta" href="<?= site_url('user/home/logout') ?>"
                                     id="connecta5"><i class="fas fa-sign-out-alt"></i> Logout </a>
                             </div>
                         </div>


                     </div>
                 </div>
             </div>



         </div>


         <?php
                else :
        ?>
         <div class="login-div" id="logindiv">

             <div class="col-12" id="login_modal">
                 <div class="ibox float-e-margins">

                     <div class="ibox-content">
                         <div class="text-center">
                             <h5>Secure Login</h5>
                             <a data-toggle="modal" class="button" href="#modal-form">Click Here to Log In</a>
                         </div>
                         <div id="modal-form" class="modal fade" aria-hidden="true">
                             <div id="login_form_error" class="alert alert-error">
                                 <!-- Dynamic -->
                             </div>
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-body">
                                         <div class="row" id="modalRow">
                                             <div class="col-sm-6 b-r">
                                                 <h3 class="m-t-none m-b">Sign in</h3>

                                                 <p>Sign in today for more expirience.</p>

                                                 <form id="login_form" role="form" method="post"
                                                     action="<?= site_url('user/user/login') ?>">
                                                     <div class="form-group"><label>Email</label> <input type="email"
                                                             placeholder="Enter email" name="email"
                                                             class="form-control"></div>
                                                     <div class="form-group"><label>Password</label> <input
                                                             type="password" placeholder="Password" name="password"
                                                             class="form-control"></div>
                                                     <div>
                                                         <button id="login_button"
                                                             class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                                             type="submit"><strong>Log in</strong></button>

                                                     </div>
                                                 </form>
                                             </div>
                                             <div class="col-sm-6">
                                                 <h4>Not a member?</h4>
                                                 <p>You can create an account:</p>
                                                 <p class="text-center">
                                                     <a href="<?= site_url('user/home/register') ?>"><i
                                                             class="fas fa-sign-in-alt big-icon"></i></a>
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <?php
                endif; ?>

     </div>
 </section>

 <!--Social-->

 <section id="social" class="social-feeds">
     <div class="col-lg-12 col-sm-12 text-center py-1">

         <div class="separator"></div>
         <h1>Connect with Scrutiny</h1>
     </div>
     <div class="container">

         <div class="social-wrapper">
             <div class="col-lg-6 col-sm-12">


                 <iframe
                     src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FScrutinyNG%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                     width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                     allowfullscreen="true"
                     allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
             </div>
             <div class="col-lg-6 col-sm-12">
                 <a class="twitter-timeline" href="https://twitter.com/Scrutinyng"
                     data-widget-id="696385952579772416">Tweets by @Scrutinyng</a>
                 <script>
                 ! function(d, s, id) {
                     var js, fjs = d.getElementsByTagName(s)[0],
                         p = /^http:/.test(d.location) ? 'http' : 'https';
                     if (!d.getElementById(id)) {
                         js = d.createElement(s);
                         js.id = id;
                         js.src = p + "://platform.twitter.com/widgets.js";
                         fjs.parentNode.insertBefore(js, fjs);
                     }
                 }(document, "script", "twitter-wjs");
                 </script>
             </div>
         </div>



     </div>
 </section>

 <!--Social-->
 <section id="contact" class="contact">
     <div class="col-lg-12 col-sm-12 text-center py-1">
         <div class="separator"></div>
         <h1>Contact Us</h1>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-sm-12">
                 <address>
                     <abbr title="Email">E:</abbr> admin@scrutiny-ng.com<br>
                 </address>
             </div>
             <div class="col-lg-6 col-sm-12">
                 <p class="text-color">
                     For general inquiries get in touch either by phone, email or connect with us via our social
                     network.
                 </p>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-12 text-center">
                 <a href="mailto:admin@scruitny-ng.com" class="button">Get in Touch</a>
                 <p class="m-t-sm">
                     Or follow us on social platform
                 </p>
                 <ul class="list-inline social-icon">
                     <li><a href="https://twitter.com/Scrutinyng"><i class="fa fa-twitter"></i></a>
                     </li>
                     <li><a href="https://www.facebook.com/ScrutinyNG/"><i class="fa fa-facebook"></i></a>
                     </li>
                     <li><a href="https://plus.google.com/u/1/101594477980104593468"><i class="fa fa-google"></i></a>
                     </li>
                     <li><a href="https://www.instagram.com/scrutng/"><i class="fa fa-instagram"></i></a>
                     </li>
                 </ul>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-12 text-center m-t-lg m-b-lg">
                 <p><strong>&copy; <?= date('Y') ?> Scrutiny</strong><br /> All Rights Reserved</p>
             </div>
         </div>
     </div>
 </section>


 <script type="text/javascript">
$(document).ready(function() {
    $("#login_form").submit(function(e) {
        e.preventDefault();
        console.log($);
        let url = $(this).attr('action');
        let postData = $(this).serialize();
        let element = document.getElementById('myp');


        $.post(url, postData, function(o) {
            if (o.result == 1) {

                window.location.href = '<?= site_url('user/home') ?>';

            } else {
                alert('Invalid Login');

            }

        }, 'json');
    });

});
 </script>