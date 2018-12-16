 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
  });
</script>
<title>Scrutiny | Home</title>
<style>
    .fb-iframe_widget{
  height:60% !important;
  overflow: auto !important;
}

#bars {
    height: 30px;
    left: 50%;
    margin: -30px 0 0 -20px;
    position: absolute;
    top: 50%;
    width: 40px;

}

.bar {
   background: #666;
    bottom: 1px;
    height: 3px;
    position: absolute;
    width: 3px;      
    animation: sound 0ms -800ms linear infinite alternate;
}

@keyframes sound {
    0% {
       opacity: .35;
        height: 3px; 
    }
    100% {
        opacity: 1;       
        height: 28px;        
    }
}

.bar:nth-child(1)  { left: 1px; animation-duration: 474ms; }
.bar:nth-child(2)  { left: 5px; animation-duration: 433ms; }
.bar:nth-child(3)  { left: 9px; animation-duration: 407ms; }
.bar:nth-child(4)  { left: 13px; animation-duration: 458ms; }
.bar:nth-child(5)  { left: 17px; animation-duration: 400ms; }
.bar:nth-child(6)  { left: 21px; animation-duration: 427ms; }
.bar:nth-child(7)  { left: 25px; animation-duration: 441ms; }
.bar:nth-child(8)  { left: 29px; animation-duration: 419ms; }
.bar:nth-child(9)  { left: 33px; animation-duration: 487ms; }
.bar:nth-child(10) { left: 37px; animation-duration: 442ms; }

  @media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 568px) 
  and (-webkit-min-device-pixel-ratio: 2) { 
      .col-sm-6{
          position:relative;
          right:0.3cm;
          min-width:150px;
      }
      #modalRow{
          display:flex;
      }
      #login_button{
          width:100%;
      }
  }
  
    @media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px) 
  and (-webkit-min-device-pixel-ratio: 2) {
      .wrapper{
          width:70% !important;
          margin:auto;
      }
  }
</style>
      

<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
  
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <!--<h1 style="color:black;">We craft<br/>
                        brands, web apps,<br/>
                        and user interfaces<br/>
                        we are IN+ studio</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing.</p>-->
                    <p>
                       
                        
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <!---->
                </div>
            </div>
            <!-- Set background for slide in css -->
            <!-- <div class="header-back one"></div> -->
            <div id="bars">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>


</div>
<img height="100" width="150" src="<?php echo base_url(); ?>public/img/scrut3.svg" style="-webkit-transform: translateY(20%);"/>
        </div>
        
    </div>
    
</div>


<section id="features" class="container services">
    
   <div class="col-lg-12 text-center">
       <iframe style="margin:auto;" src="https://mixlr.com/users/4974648/embed?color=e6af4b&autoplay=true" id = 'mixlr' width="64%" height="160px" scrolling="no" frameborder="no" marginheight="0" marginwidth="0"></iframe>
    <div class="navy-line"></div>
       <h1>Music Reviews</h1>
       </div>
            <!-- Blog-->
                    <div class="wrapper wrapper-content  animated fadeInRight blog">
            <div class="row">
                                         <?php 
    foreach($entries as $row):  
    ?>
                <div class="col-lg-4">
                    <div class="ibox">
                        <div class="ibox-content">
                            <a href="<?php echo site_url('/reviews/'.$row['entry_id']); ?>" class="btn-link">
                                <h2 id="smallT">
                                    <?php echo $row['title'];?>
                                </h2>
                            </a>
                            <div class="small m-b-xs" id="smallT">
                                <strong>Scrutiny</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> <?php echo $row['date_created'];?></span>
                            </div>
                            <p>
                                <p>
                                <img id="reviewimg" src ="<?php echo base_url();?>/public/img/<?php echo $row['media_img'];?>" />
                            </p>
                                <?php echo word_limiter($row['entry_text'], 10);?>
                            </p>
                            <div class="row">
                                
                                </div>
                                </div>
                                </div>
                                </div>
                                <?php endforeach; ?>
                                <div class="col-lg-6 text-right wow fadeInRight">
                                <a href="<?php echo base_url(); ?>reviews" class="btn btn-primary" id="viewButton" >View All</a>
                                </div>
                                </div>
                                </div>


                                <!---->
        <div class="col-lg-6 text-right wow fadeInRight">
            
        </div>
    </div>
    

</section>

<section id="team" class="gray-section team">
    <div class="container">
    <div class="col-lg-12 text-center">
    <div class="navy-line"></div>
       <h1>Videos</h1>
       </div>
            <!-- Blog-->
                    <div class="wrapper wrapper-content  animated fadeInRight blog">
            <div class="row">
                                         <?php 
    foreach($videos as $video):  
    ?>
                <div class="col-lg-4">
                    <div class="ibox">
                        <div class="ibox-content">
                            <a href="<?php echo site_url('/videos/'.$video['video_id']); ?>" class="btn-link">
                                <h2 style="font-size:14px;">
                                    <?php echo $video['title'];?>
                                </h2>
                            </a>
                            <div class="small m-b-xs">
                                <strong>Scrutiny</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> <?php echo $video['date_created'];?></span>
                            </div>
                            <p>
                                <img id="reviewimg" src ="<?php echo base_url();?>/public/img/<?php echo $video['media_img'];?>"/>
                            </p>
                            <div class="row">
                                
                                </div>
                                </div>
                                </div>
                                </div>
                                <?php endforeach; ?>
                                </div>
                                </div>


                                <!---->
        <div class="col-lg-6 text-right wow fadeInRight">
          <a href="<?php echo base_url(); ?>videos" class="btn btn-primary" id="viewButton">View All</a>  
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
              
                
            </div>
        </div>
    </div>

</section>



<section id="testimonials" class="navy-section testimonials" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                 <div class="navy-line"></div>
                <h1>Featured Artitsts</h1>
               <div class="col-md">
      <div class="holder">
                      <?php
                      $c = 0;
      foreach($artists as $artist_s): 
        $c++;
        ?>
        <div class="holder-inner artist" id="<?php echo 'artist'.$c; ?>">
          <div class="avatar-holder">
            <img class="avatar" id="<?php echo 'avatar'.$c; ?>" src="<?php echo base_url();?>/public/img/<?php echo $artist_s['media_img'];?>">
          </div>
          <div class="text-holder">
            <h2 class="heading" id="<?php echo 'heading'.$c;?>"><?php echo $artist_s['artist'];?></h2>
            <h4 class="description" id="<?php echo 'description'.$c;?>"><?php echo word_limiter($artist_s['entry_text'], 50);?></h4>
          </div>
        </div>
  
       <?php endforeach; ?>
      </div>
      
    </div>
    
    </div>

    </div>
    </div>
    </section>

    <!---------Members Section------>
    <section id="team" class="gray-section team">

    <div class="container">
        <div class="row" style="background: #152847;">
            <div class="col-lg-12 text-center">
                 <div class="navy-line"></div>
                <h1 style="color:white;">Members</h1>
               
      <div class="wrapper wrapper-content animated fadeInRight">
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
            
            
            <div class="col-lg-3">
                <div class="contact-box center-version">

                    <a href="<?php echo site_url('/members/'.$member['user_id']); ?>">

                        <img alt="image" class="img-circle" src="<?php echo base_url();?>/public/user_img/<?php echo $img;?>">

                           
                        <h3 class="m-b-xs"><strong><?php echo $member['firstname'];?></strong></h3>

                        
                        <address class="m-t-md">
                            <strong><i class="fa fa-user"></i><?php echo $member['username'];?></strong><br>
                            <i class="fa fa-map-marker"></i><?php echo $member['Location'];?><br>
                            
                        </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            
                            <?php
                            
          $local = base_url().'chats/'.$member['user_id'];                      
                            
        $session = $this->session->userdata('user_id');   
        //$friends = 0;
        
        if($session == $member['user_id']){
            $message = "<br><p></p>";
        }

        else{
            $message= "<a class=\"btn btn-xs btn-white\" id=\"hEmail\" href=\"$local\"><i class=\"fa fa-envelope\"></i> Message</a>";
        }
    

       ?>
                           <?php echo $message;?>
                        </div>
                    </div>

                </div>
            </div>

            <?php endforeach; ?>
            
      
    </div>
    
    </div>
    

    </div>
</div></div>


    </section>


    <!---------Members Section------>



<section id="pricing" class="navy-section testimonials">
    <div class="container">
    
        <div class="row m-b-lg">

            <div class="col-lg-12 text-center">
                
                <div class="navy-line"></div>
                <h1>Connect</h1>
                <p>Where your musical experience is greatly appreciated!</p>
            </div>



            <?php 

                    $data = $this->session->userdata('username');
                     if($data):

                        ?>
            <div class="row"  id="logindiv" hidden>
           
                <div class="login_modal" id="login_modal">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5 style"text-align:center;">Secure Login</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <div class="text-center">
                            <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Click Here to Log In</a>
                            </div>
                            <div id="modal-form" class="modal fade" aria-hidden="true">
                            <div id="login_form_error" class="alert alert-error"><!-- Dynamic --></div>
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row" id="modalRow">
                                                <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Sign in</h3>

                                                    <p>Sign in today for more expirience.</p>

                                    <form id="login_form"  role="form" method="post" action="<?=site_url('user/user/login')?>">
                                        <div class="form-group"><label>Email</label> <input type="email" placeholder="Enter email" name="email" class="form-control"></div>
                                        <div class="form-group"><label>Password</label> <input type="password" placeholder="Password" name="password" class="form-control"></div>
                                        <div>
                                        <button id="login_button" class="btn btn-sm btn-primary pull-right m-t-n-xs"  type="submit"><strong>Log in</strong></button>
                                                            
                                     </div>
                                    </form>
                                                </div>
                                                <div class="col-sm-6"><h4>Not a member?</h4>
                                                    <p>You can create an account:</p>
                                                    <p class="text-center">
                                                        <a href="<?=site_url('user/home/register')?>"><i class="fa fa-sign-in big-icon"></i></a>
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
          
        
          <div class="row wrapper border-bottom white-bg page-heading" style="background:#f4f4f4;" id="connect_data">
          <?php $p = $this->session->userdata['username'];?>
                    
                        <h2 id="connecth2" style="color:#e6af4b"><?php echo "Welcome ".$p;?></h2>
                         
              <div class="holders">
              <div class="holders-inner connect" id="connect1">
                <div class="col-sm-8" id="cl-effect-13">
                    
                    <ul id="connectul">
                    
                        <li class="connectli"><a class="connecta" href="<?php echo site_url('user/members/edit/'.$p);?>" id="connecta1"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Manage Your Profile</a></li><br>
                        <li class="connectli"><a class="connecta" href="<?=site_url('user/uploads/index')?>" id="connecta2"><i class="fa fa-headphones" aria-hidden="true"></i> Upload Music</a></li><br>
                        <li class="connectli"><a class="connecta" href="<?=site_url('user/friends/index')?>" id="connecta3"><i class="fa fa-users" aria-hidden="true"></i> Friends</a></li><br>
                        <li class="connectli"><a class="connecta" href="<?=site_url('user/chats/view_chats')?>" id="connecta4"><i class="fa fa-envelope" aria-hidden="true"></i> Messages</a></li><br>
                        <li class="connectli"><a class="connecta" href="<?=site_url('user/home/logout')?>" id="connecta5"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a></li>
                    </ul>
              
                    
                </div>
                </div>
                </div>
                
              

    </div>     
        
    
    <?php
    else:
        ?>
    <div class="row"  id="logindiv">
           
                <div class="col-lg-4" id="login_modal">
                    <div class="ibox float-e-margins">
                       
                        <div class="ibox-content">
                            <div class="text-center">
                                <h5>Secure Login</h5>
                            <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Click Here to Log In</a>
                            </div>
                            <div id="modal-form" class="modal fade" aria-hidden="true">
                            <div id="login_form_error" class="alert alert-error"><!-- Dynamic --></div>
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row" id="modalRow">
                                                <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Sign in</h3>

                                                    <p>Sign in today for more expirience.</p>

                                    <form id="login_form"  role="form" method="post" action="<?=site_url('user/user/login')?>">
                                        <div class="form-group"><label>Email</label> <input type="email" placeholder="Enter email" name="email" class="form-control"></div>
                                        <div class="form-group"><label>Password</label> <input type="password" placeholder="Password" name="password" class="form-control"></div>
                                        <div>
                                        <button id="login_button" class="btn btn-sm btn-primary pull-right m-t-n-xs"  type="submit"><strong>Log in</strong></button>
                                                            
                                     </div>
                                    </form>
                                                </div>
                                                <div class="col-sm-6"><h4>Not a member?</h4>
                                                    <p>You can create an account:</p>
                                                    <p class="text-center">
                                                        <a href="<?=site_url('user/home/register')?>"><i class="fa fa-sign-in big-icon"></i></a>
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
    endif;?>     

    </div>  
</section>

<!--Social-->


<!--Social-->
<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Us</h1>
                <p>Get in Touch Now.</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">Scrutiny</span></strong><br/>
                    <abbr title="Email">E:</abbr> admin@scrutiny-ng.com<br>
                    <abbr title="Phone">P:</abbr> +(44)7438269591
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    For general inquiries get in touch either by phone, email or connect with us via our social network.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:admin@scruitny-ng.com" class="btn btn-primary">Get in Touch</a>
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
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; <?=date('Y')?> Scrutiny</strong><br/> All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

 $(document).ready(function () {

    if('.carousel-caption').css

</script>

        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
        <script type="text/javascript">
    $(document).ready(function(){
    $("#login_form").submit(function(evt){
        evt.preventDefault();//this will prevent the form from submitting
        var url = $(this).attr('action');
        var postData = $(this).serialize();
        var element = document.getElementById('myp');
          

        $.post(url, postData, function(o){
            if(o.result == 1){
                
                window.location.href='<?=site_url('user/home')?>';
        
                          
            
            }else{
                alert('Invalid Login');

            }
              
        }, 'json');
    });
    
    });

</script>
<style type="text/css">
   
</style>

