<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>map.ico" type="image/ico" sizes="32x32">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!--CodePen-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9983809730412655",
    enable_page_level_ads: true
  });
</script>

    <script type="text/javascript">
        var base_url = "<?php echo base_url();?>";

    </script>

    <script type="text/javascript">
    var notification_count = "<?php echo $notification_count;?>";
    var chat_count = "<?php echo $chat_count;?>";
    var user_id = "<?php echo $user_id;?>";
    </script>
    <script type="text/javascript">
        var notification = "<?php foreach($notification as $notif){ echo $notif['username'];}?>";
    </script>
    <script type="text/javascript">
        var status = "<?php echo $status;?>";
    </script>
    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    

    <!--Smiley-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

    <!--Switchery-->
    <link href="<?php echo base_url(); ?>public/css/plugins/switchery/switchery.css" rel="stylesheet">
    <!-- Switchery -->
   <script src="<?php echo base_url(); ?>public/js/plugins/switchery/switchery.js"></script>

        <!-- Gritter -->
    <link href="<?php echo base_url(); ?>public/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="<?php echo base_url(); ?>public/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url(); ?>public/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">

     <!-- FooTable -->
    <link href="<?php echo base_url(); ?>public/css/plugins/footable/footable.core.css" rel="stylesheet">

    <!-- Checkboxes-->
    <link href="<?php echo base_url(); ?>public/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <!--Summernote Css-->
    <link rel="stylesheet" href="../dist/summernote-bs4.css">
    <script type="text/javascript" src="../dist/summernote-bs4.js"></script>
	
    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>public/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>public/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/wow/wow.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>public/js/plugins/iCheck/icheck.min.js"></script>

    <!--Ajax-->
      <script src="<?php echo base_url(); ?>public/js/notifications.js"></script>
      <script src="<?php echo base_url(); ?>public/js/chat2.js"></script>
      <script src="<?php echo base_url(); ?>public/js/loading.js"></script>
      
      
      <script src="<?php echo base_url(); ?>public/js/summernote-bs4.js"></script>


      <!-- jQuery UI -->
    <script src="<?php echo base_url(); ?>public/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url(); ?>public/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>public/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url(); ?>public/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url(); ?>public/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url(); ?>public/js/plugins/toastr/toastr.min.js"></script>

       <!-- Flot -->
    <script src="<?php echo base_url(); ?>public/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/flot/jquery.flot.pie.js"></script>
    
    <style>
        @media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 568px) 
  and (-webkit-min-device-pixel-ratio: 2) { 
      .col-sm-6{
          position:relative;
          right:1cm;
          min-width:150px;
      }
      #modalRow{
          display:flex;
      }
      #login_button{
          width:100%;
      }
  }
    </style>
   
</head>


<body id="page-top" class="landing-page no-skin-config">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img height="90" width="120" src="<?php echo base_url(); ?>public/img/scrut3.svg"/><img width="30px" height="30px"  src="<?php echo base_url(); ?>public/img/landing/africamap.png"/>  
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right" id="navi">
                        <li <?php if($this->uri->segment(2)=="home"){echo 'class="active"';}?>><a class="page-scroll" href="<?php echo base_url(); ?>home">Home</a></li>
                        <li <?php if($this->uri->segment(2)=="reviews"){echo 'class="active"';}?>><a class="page-scroll" href="<?php echo base_url(); ?>reviews">Reviews</a></li>
                        <li <?php if($this->uri->segment(2)=="videos"){echo 'class="active"';}?>><a class="page-scroll" href="<?php echo base_url(); ?>videos">Videos</a></li>
                        <li <?php if($this->uri->segment(2)=="artists"){echo 'class="active"';}?>><a class="page-scroll" href="<?php echo base_url(); ?>artists">Featured Artists</a></li>
                        
                        <li><a class="page-scroll" href="<?php echo site_url('user/connect/');?>">Connect</a></li>
                        
                                                <?php
if($pic['media_img'] != "")
{
    $img = $pic['media_img'];
}

else
{
    $img = "blank_user.png";
}
?>
<?php
                                $session = $this->session->userdata('user_id');

                                if($session):
                            ?>
                        <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">

                        <i class="fa fa-envelope"></i>  <span class="label label-warning" id="chat_alert_id">></span>
                    </a>
                        <div class="dropdown-menu dropdown-messages"  id="msg">
                        

                        
                        </div>
                </li>


                      
                       
                     <input type = "hidden" name="status" id = "status" value="reads">  
                    <li class="dropdown">                           
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" id="clicker">
                        <i class="fa fa-bell"></i>  <span class="label label-warning count" id="alert_id"></span>
                        <input id="nid" type="hidden" name="notification_id" value="<?php echo $notification_count['notification_id'];?>">
                    </a>
                    <div class="dropdown-menu dropdown-messages" id="drop">
                    

                    </div>  
                    </li>                     
                     <li><a class="page-scroll" href="<?php echo site_url('/members/'.$pic['user_id']); ?>"><img alt="image" width =38px height=38px class="img-circle" src="<?php echo base_url(); ?>public/user_img/<?php echo $img;?>"/></a></li>
                     <li><a class="page-scroll" href="<?=site_url('user/home/logout')?>"><span class="glyphicon glyphicon-log-out"></span></a></li>
                <?php
            else:

                ?>

               <li>
                    <a data-toggle="modal" href="#modal-form">
                        <i class="fa fa-sign-in"></i> Step In
                    </a>
                   
                </li>
                <?php
            endif;
            ?>
                    </ul>
                </div>
            </div>
        </nav>
        

        </div>
    <div id="modal-form" class="modal fade" aria-hidden="true">
                            <div id="login_form_error" class="alert alert-error"></div>
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width:100%;">
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
                                                        <a href="<?=site_url('register')?>"><i class="fa fa-sign-in big-icon"></i></a>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>

<script>
function myFunction() {
        $.ajax({
        type: "POST",
          url: base_url +"user/home/update_notifications",
          data: { status : status }, // pass it as POST parameter
          success: function(data){
           
         }
     });
 }   

 function chatClick() {
        $.ajax({
        type: "POST",
          url: base_url +"user/home/update_chat_notifications",
          data: { status : status }, // pass it as POST parameter
          success: function(data){
           
         }
     });
 } 

//  function loadArtists(){
//       var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             //document.getElementById("v_view").innerHTML = this.responseText;
//             document.getElementById("v_view").innerHTML = this.responseText;
            
//        }
//     };
//     xhttp.open("GET", base_url +"user/artists/a_test", true);
//     xhttp.send(); 
// }


//  function loadVideos() {


//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("a_view").innerHTML = this.responseText;      
//     }
//   };
//   xhttp.open("GET", base_url +"user/videos/v_test", true);
//   xhttp.send();
// } 

//  function loadReviews() {
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       //document.getElementById("a_view").innerHTML = this.responseText;
//       document.getElementById("a_view").innerHTML = this.responseText;
      
//       //document.location.href = base_url +"user/reviews";
    
//     }
//   };
//   xhttp.open("GET", base_url +"user/reviews/m_test", true);
//   xhttp.send();
// }



//  function loadUsers() {
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
    
//       document.getElementById("ajax_members").innerHTML = this.responseText;
//       //document.location.href = base_url +"user/reviews";
    
//     }
//   };
//   xhttp.open("GET", base_url +"user/members/ajax_view", true);
//   xhttp.send();
// } 

// function ChangeUrl(title, url) {
//     if (typeof (history.pushState) != "undefined") {
//         var obj = { Title: title, Url: url };
//         history.pushState(obj, obj.Title, obj.Url);
//     } else {
//         alert("Browser does not support HTML5.");
//     }
// }

//  window.sr = ScrollReveal({reset:true});
//     sr.reveal('.music-div', { duration: 2000 });

$(document).ready(function(){
    $("#login_form").submit(function(evt){
        evt.preventDefault();//this will prevent the form from submitting
        var url = $(this).attr('action');
        var postData = $(this).serialize();
        var element = document.getElementById('myp');
          

        $.post(url, postData, function(o){
            if(o.result == 1){
                
                window.location.href='<?=site_url('user/login/referer')?>';
        
                          
            
            }else{
                alert('Invalid Login');

            }
              
        }, 'json');
    });
    
    });
</script>



