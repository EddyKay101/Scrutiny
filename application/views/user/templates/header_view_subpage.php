<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=<?php echo config_item('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url(); ?>public/img/scrutiny-ico.svg" type="image/ico" sizes="28x28">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css"
        integrity="sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <link href="<?php echo base_url(); ?>public/css/utilities.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/variables.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/header.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/music-entry.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/profile.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/mp3_styles.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/members_styles.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/dashboard.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/footer.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/chat.css" rel="stylesheet">

    <script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    </script>

    <script type="text/javascript">
    var notification_count = "<?php echo $notification_count; ?>";
    var chat_count = "<?php echo $chat_count; ?>";
    var user_id = "<?php echo $user_id; ?>";
    </script>

</head>


<body id="page-top" class="landing-page no-skin-config"
    data-nanobar="radial-gradient(circle at 30% 107%,#e7bb6a 0%,#22264b 5%,#e7bb6a 45%,#22264b 60%,#e7bb6a 90%)">

    <div class="row" id="fb_root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0"
        nonce="Dm5bPNBO">
    </script>

    <header class="main-head">

        <nav id="navbar" class="scrutiny-light-background top">
            <div class="nav-container col-12" id="nav-container">
                <div class="logo-image">
                    <svg class="logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-459 -250 1000 1000"
                        style="enable-background:new -459 -250 1000 1000;" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M-121.6,301.4l-16.8,21.6h-42.1c-14.6,0-26.7-4.1-36.3-12.2c-9.6-8.1-14.4-18.3-14.4-30.6
				c0-12.3,4.7-22.2,14.2-29.8c9.5-7.6,21.6-11.4,36.4-11.4h58.9l-16.8,21.8h-42.1c-7.1,0-13,1.9-17.7,5.8s-7,8.8-7,14.7
				c0,5.9,2.3,10.7,7,14.4s10.6,5.6,17.7,5.6L-121.6,301.4L-121.6,301.4z" />
                                    <path class="st0" d="M4.8,323h-37.8L-58.4,302h-35.8V323h-26.1v-42.8H-48c4.4,0,8.1-0.7,10.9-2c3.6-1.7,5.5-4.2,5.5-7.6
				c0-6.5-5.5-9.8-16.4-9.8h-72.4l17-21.8h53c13.1,0,23.7,2.5,31.9,7.4c9.2,5.7,13.7,13.7,13.7,24.2c0,5.9-1.8,11.2-5.5,16
				c-3.7,4.8-8.8,8.4-15.3,11L4.8,323z" />
                                    <path class="st0"
                                        d="M116,284.8c0,25.5-17.5,38.2-52.4,38.2h-5.5c-34.9,0-52.4-12.7-52.4-38.2v-45.7h26v45.7
				c0,7.6,3.3,12.5,10,14.7c3.6,1.2,10.9,1.9,21.9,1.9c8.8,0,15-0.9,18.7-2.8c5-2.4,7.6-7,7.6-13.7v-45.7H116L116,284.8L116,284.8z" />
                                    <path class="st0"
                                        d="M220.4,239.1l-16.9,21.8h-25.1V323h-26.1v-62.2h-34.6l16.8-21.8H220.4z" />
                                    <path class="st0" d="M249.4,323h-26v-83.9h26V323z" />
                                    <path class="st0" d="M360.8,312.2c0,7.6-3.5,11.4-10.4,11.4c-5,0-9.7-1.9-14.2-5.6l-49.1-41.1V323H261v-73.1c0-3.1,1-5.7,3-7.7
				c2-2,4.8-3,8.4-3c4.7,0,9.1,1.7,13.2,5l49.1,41.1v-46.2h26.1V312.2z" />
                                    <path class="st0"
                                        d="M490.8,239.1l-49.8,56.1V323h-26.1v-27.9l-51.3-56h33.3l31.4,34.1l29.3-34.1L490.8,239.1L490.8,239.1z" />
                                </g>
                            </g>
                            <g>
                                <path class="st1" d="M-328.4,331.6c-8.7,9.3-17.6,17.8-22.6,28.7c-6.7,14.5-1.9,29.6,14.8,34.4c2.6,0.7,5,1.4,7.2-1.5
			c-1.4-1.5-2.8-3-4.2-4.6c-3.8-4.4-4.6-9.4-2.2-14.5c2.5-5.4,5.7-10.4,12.7-11c11.2-0.9,16.9,4.7,17.7,16
			c0.8,12.2-10.6,22.3-22.1,22.8c-15.8,0.6-27.2-8.3-32-20c-2.5-6.1-2.8-12.7,0.1-18.6c3.2-6.5,7.1-12.8,11.2-18.8
			c2.9-4.3,6.6-8,10.1-11.9c4.7-5.4,4.9-6.8,1.4-13.1c-12.1-21.7-5.3-42.1,12.7-55.8c9.9-7.5,21.7-8.9,33.6-3.5
			c2.4,1.1,4.7,2.2,7.6,3.6c4.6-5.7,9.2-11.4,13.7-17.1c2.4-3.1,2.1-6.7,1.3-10.2c-2.1-9-2.8-18.2-2.4-27.4
			c0.8-18.4,6.7-34.7,19.9-47.9c5.8-5.8,12-11.5,18.6-16.2c6.8-4.9,9.9-3.1,13.3,4.7c3.5,8.2,2.3,16.3,0.5,24.4
			c-3.9,18.4-11.6,35-24.5,48.8c-3.4,3.6-4,7.1-2.7,11.6c2.5,8.4,4.9,16.8,6.9,25.3c1.5,6.2,3.1,12.5,3.3,18.8
			c0.9,22.4-6.8,41.2-25.4,54.7c-9.6,7-20.3,11.2-32.2,11.6c-10.4,0.4-20-2.6-28.7-8.4C-323.1,334.9-325.3,333.6-328.4,331.6z
			 M-323.9,324.8c5.5,7.3,12.5,10.1,19.8,12c16.1,4.3,29.9,0.5,40.8-12.3c6.8-8,9.7-17.7,10.3-28.1c0.6-11.1-2.7-21.5-5.7-31.9
			c-1.3-4.7-3.1-9.2-5-14.9c-3.4,4.1-5.8,7.3-8.5,10.2c-4.6,4.9-5.6,9.5-2,15.8c7.2,12.6,5.7,25-2.9,36.5
			c-6.8,9.1-16.2,12.6-27.4,11.2c-1-0.1-1.9-1-3.8-2c6.3-2.1,12.2-3.1,16.9-6c5.2-3.2,7.4-9,7.1-15.4c-0.2-5.9-1.1-11.6-7.1-16
			C-302.2,297.7-312.9,311.1-323.9,324.8z M-249.3,219.9c0.6,0,1.2,0.1,1.8,0.1c10-11.9,15.8-25.6,16.9-41c0.3-4-1.4-8.4-3.1-12.2
			c-2-4.6-6.8-5.8-10.5-2.6c-2.9,2.5-5.4,6-6.9,9.5c-4,9.6-3.8,19.9-2.4,30C-252.8,209.1-250.8,214.5-249.3,219.9z M-328.2,320.4
			c11-13.7,21.4-26.8,32-40c-9.7-5.7-21.3-3.7-29.5,4.6C-335.1,294.4-336.3,307.5-328.2,320.4z" />
                                <path class="st1" d="M-405.9,447c-9.7-10.9-15-22.5-16-36.2c-1.2-17.2,5.2-31.3,15.9-44.1c2.4-2.9,4.9-5.8,6.7-9.1
			c1.7-3,2.5-6.5,4-10.4c1.6,0.6,3.3,1,4.9,1.8c8.7,4.1,18.5-2,20.6-8.5c3-9.5-2.3-20.4-10.9-21.2c-1.1-0.1-2.1-0.6-3.9-1.2
			c8.4-12.1,7.8-26.3,11.3-39.4c5.6-20.9,17.6-36.6,37.4-45.4c7.4-3.3,15.8-4.4,23.8-6.4c2.5-0.6,5.2-1.3,7.7-1.1
			c6,0.5,7.9-2.9,9.7-7.9c9.9-27.8,20.3-55.5,30.4-83.2c2.3-6.2,4.5-12.4,6.7-18.6c-1.7-1.5-3.1-2.7-4.1-3.5
			c-0.1-7.8,3.6-13.9,6.6-20.1c1.6-3.3,3.1-6.4-0.6-10.5c5.1,0.1,8.4-1.5,11.4-4.4c3.1-2.9,7-4.7,10.5-7.3c4-3,7.6-6.3,8.9-11.5
			c1.2-4.9-0.9-8.3-4.4-11.1c-3.6-2.9-8.2-3.2-11.9-1c-5.2,3.1-5.6,9.7-0.5,12.7c1.3,0.8,3.4,0.2,5.1,0.2c-0.3-1.5-0.4-3-0.8-4.4
			c-0.2-0.8-1-1.4-1.6-2.2c3.1-2.5,5.7-1.6,7.8,0.6c1.9,1.9,2.8,4.3,1.9,7.1c-1.8,5.7-7.3,8.5-12.9,6.6c-5.4-1.8-9.2-7.5-9-13.2
			c0.2-5.5,4.6-11.7,9.7-12.7c10-2.1,19.3,0.8,22.3,12.9c1.5,6-0.8,11.2-4.9,15.5c-4.7,5-9.5,9.9-14.6,14.5
			c-6,5.4-7.9,12.7-10.5,19.8c-0.4,1-0.6,2.8,0,3.4c3.4,3.7,1.1,7.1-0.1,10.5c-8.1,21.9-16.1,43.9-24.2,65.8
			c-5.2,14.2-10.4,28.4-15.6,42.6c-1.9,5.2-2,4.7-7.6,5.1c-23,1.9-44.4,7.6-58,28.6c-6.6,10.1-9.9,21.2-10.1,33.4
			c-0.2,9.8,0.8,19.4,3.2,28.7c4.1,15.6-2.5,26.6-14.7,35.2c-5.4,3.8-11.3,7-16.4,11.1c-12.4,10.2-19.8,23-20.3,39.6
			c-0.4,12.6,1.5,24.5,7.1,35.7C-405.8,444.6-406,445.3-405.9,447z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="nav-links">
                    <ul class="main-menu">
                        <div class="nav-a scrutiny-primary-text close-menu"><i class="fa fa-times"></i></div>
                        <li <?php if ($this->uri->segment(2) == "home") {
    echo 'class="active"';
}?>><a class="nav-a scrutiny-primary-text" href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li <?php if ($this->uri->segment(2) == "reviews") {
    echo 'class="active"';
}?>><a class="nav-a scrutiny-primary-text" href="<?php echo base_url(); ?>reviews">Reviews</a>
                        </li>
                        <li <?php if ($this->uri->segment(2) == "videos") {
    echo 'class="active"';
}?>><a class="nav-a scrutiny-primary-text" href="<?php echo base_url(); ?>videos">Videos</a>
                        </li>

                        <?php

if (isset($pic['media_img'])) {
    $img = $pic['media_img'];
} else {
    $img = "blank_user.png";
}
?>
                        <?php
$session = $this->session->userdata('user_id');

if ($session):
?>
                        <li class="dropdown">
                            <a class="nav-a scrutiny-primary-text dropdown-toggle count-info" data-toggle="dropdown"
                                href="#">

                                <i class="fa fa-envelope"></i> <span class="notification-label"
                                    id="chat_alert_id"></span>
                            </a>
                            <div class="dropdown-menu dropdown-messages" id="msg">
                            </div>
                        </li>




                        <input type="hidden" name="status" id="status" value="reads">
                        <li class="dropdown">
                            <a class="nav-a scrutiny-primary-text dropdown-toggle count-info" data-toggle="dropdown"
                                href="#" id="clicker">
                                <i class="fa fa-bell"></i> <span class="notification-label" id="alert_id"></span>
                                <input id="nid" type="hidden" name="notification_id"
                                    value="<?php echo isset($notification_count['notification_id']); ?>">
                            </a>
                            <div class="dropdown-menu dropdown-messages" id="drop">


                            </div>
                        </li>
                        <li><a class="page-scroll" href="<?php echo site_url('/members/' . $pic['user_id']); ?>"><img
                                    alt="image" width=38px height=38px class="img-circle"
                                    src="<?php echo base_url(); ?>public/user_img/<?php echo $img; ?>" /></a></li>
                        <li><a class="page-scroll" href="<?=site_url('user/home/logout')?>"></li>
                        <li><a class="nav-a scrutiny-primary-text" href="<?=site_url('user/home/logout')?>"><i
                                    class="fas fa-sign-out-alt"></i></a></li>
                        <?php
else:

?>

                        <li>
                            <a class="nav-a scrutiny-primary-text" data-toggle="modal" href="#modal-form">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <?php
endif;
?>

                    </ul>
                    <ul class="nav-icon-menu">
                        <li>
                            <div class="nav-a scrutiny-primary-text open-menu"><i class="fa fa-bars"></i></div>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>
    </header>
    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div id="login_form_error" class="alert alert-error"></div>
        <div class="modal-dialog">
            <div class="modal-content" style="width:100%;">
                <div class="modal-body">
                    <div class="row" id="modalRow">
                        <div class="col-sm-6 b-r">
                            <h3 class="m-t-none m-b">Sign in</h3>

                            <p>Sign in today for more expirience.</p>

                            <form id="login_form" role="form" method="post" action="<?=site_url('user/user/login')?>">
                                <div class="form-group"><label>Email</label> <input type="email"
                                        placeholder="Enter email" name="email" class="form-control"></div>
                                <div class="form-group"><label>Password</label> <input type="password"
                                        placeholder="Password" name="password" class="form-control"></div>
                                <div>
                                    <button id="login_button" class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                        type="submit"><strong>Log in</strong></button>

                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <h4>Not a member?</h4>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--CodePen-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.js"
        integrity="sha512-m5PctfgJKR5pnKRH+u+p+0pMMIDEfkqvOjAwqK1e8k3bEnHRcnshkN8+7q0gdM5q58AM1mnC7Zqm1y5L/aKH9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"
        integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url(); ?>public/js/nanobar.js"></script>
    <script src="<?php echo base_url(); ?>public/js/header_sub.js"></script>

    <!--Summer notes-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"
        integrity="sha512-kZv5Zq4Cj/9aTpjyYFrt7CmyTUlvBday8NGjD9MxJyOY/f2UfRYluKsFzek26XWQaiAp7SZ0ekE7ooL9IYMM2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script data-search-pseudo-elements defer src="https://use.fontawesome.com/releases/latest/js/all.js"
        integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous">
    </script>





    <script type="text/javascript">
    var notification = "<?php foreach ($notification as $notif) {
    echo $notif['username'];
}?>";
    </script>
    <script type="text/javascript">
    var status = "<?php echo $status; ?>";
    </script>

    <!--Ajax-->

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

    <script>
    $(document).ready(function() {
        $("#login_form").submit(function(evt) {
            evt.preventDefault(); //this will prevent the form from submitting
            var url = $(this).attr('action');
            var postData = $(this).serialize();
            var element = document.getElementById('myp');


            $.post(url, postData, function(o) {
                if (o.result == 1) {

                    window.location.href = '<?=site_url('user/login/referer')?>';



                } else {
                    alert('Invalid Login');

                }

            }, 'json');
        });

    });
    </script>