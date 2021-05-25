<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url(); ?>map.ico" type="image/ico" sizes="28x28">
    <meta name="description" content="">
    <meta name="author" content="">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9983809730412655",
            enable_page_level_ads: true
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--CodePen-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>

    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>/";
    </script>

    <script type="text/javascript">
        var notification_count = "<?php echo $notification_count; ?>";
        var chat_count = "<?php echo $chat_count; ?>";
        var user_id = "<?php echo $user_id; ?>";
    </script>
    <script type="text/javascript">
        var notification = "<?php foreach ($notification as $notif) {
                                echo $notif['username'];
                            } ?>";
    </script>
    <script type="text/javascript">
        var status = "<?php echo $status; ?>";
    </script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="<?php echo base_url(); ?>public/css/animate.css" rel="stylesheet">
    <!--<link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="<?php echo base_url(); ?>public/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="<?php echo base_url(); ?>public/css/plugins/footable/footable.core.css" rel="stylesheet">

    <!-- Checkboxes-->
    <link href="<?php echo base_url(); ?>public/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <!--Summernote Css-->
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>public/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Summer notes-->
    <script src="<?php echo base_url(); ?>public/js/plugins/summernote/summernote.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>public/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/wow/wow.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>public/js/plugins/iCheck/icheck.min.js"></script>

    <!--Ajax-->
    <script src="<?php echo base_url(); ?>public/js/notifications.js"></script>

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
                    <img height="100" width="150" src="<?php echo base_url(); ?>public/img/scrut3.svg" />
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!--<ul class="nav navbar-top-links navbar-right">-->
                        <li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a class="page-scroll" href="#features">Reviews</a></li>
                        <li><a class="page-scroll" href="#team">Videos</a></li>
                        <li><a class="page-scroll" href="#testimonials">Featured Artists</a></li>
                        <li><a class="page-scroll" href="#pricing">Connect</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <?php

                        if (isset($pic['media_img'])) {
                            $img = $pic['media_img'];
                        } else {
                            $img = "blank_user.png";
                        }
                        ?>
                        <?php
                        $session = $this->session->userdata('user_id');

                        if ($session) :
                        ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">

                                    <i class="fa fa-envelope"></i> <span class="label label-warning" id="chat_alert_id">></span>
                                </a>
                                <div class="dropdown-menu dropdown-messages" id="msg">



                                </div>
                            </li>




                            <input type="hidden" name="status" id="status" value="reads">
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" id="clicker">
                                    <i class="fa fa-bell"></i> <span class="label label-warning count" id="alert_id"></span>
                                    <input id="nid" type="hidden" name="notification_id" value="<?php echo isset($notification_count['notification_id']); ?>">
                                </a>
                                <div class="dropdown-menu dropdown-messages" id="drop">


                                </div>
                            </li>
                            <li><a class="page-scroll" href="<?php echo site_url('/members/' . $pic['user_id']); ?>"><img alt="image" width=38px height=38px class="img-circle" src="<?php echo base_url(); ?>public/user_img/<?php echo $img; ?>" /></a></li>
                            <li><a class="page-scroll" href="<?= site_url('user/home/logout') ?>"><span class="glyphicon glyphicon-log-out"></span></a></li>
                        <?php
                        else :

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
    <script>
        function myFunction() {
            $.ajax({
                type: "POST",
                url: base_url + "user/home/update_notifications",
                data: {
                    status: status
                }, // pass it as POST parameter
                success: function(data) {

                }
            });
        }

        function chatClick() {
            $.ajax({
                type: "POST",
                url: base_url + "user/home/update_chat_notifications",
                data: {
                    status: status
                }, // pass it as POST parameter
                success: function(data) {

                }
            });
        }
    </script>