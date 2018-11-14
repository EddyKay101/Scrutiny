<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Scrutiny Admin</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>public/css/plugins/footable/footable.core.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/animate.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style2.css"/>
<link href="<?php echo base_url(); ?>public/css/plugins/dropzone/basic.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>public/css/plugins/dropzone/dropzone.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>public/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>public/css/plugins/codemirror/codemirror.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>public/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <!-- Jasny -->
<script src="<?php echo base_url(); ?>public/js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- DROPZONE -->
<script src="<?php echo base_url(); ?>public/js/plugins/dropzone/dropzone.js"></script>

    <!-- CodeMirror -->
<script src="<?php echo base_url(); ?>public/js/plugins/codemirror/codemirror.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/codemirror/mode/xml/xml.js"></script>

    <!-- Custom and plugin javascript -->
<script src="<?php echo base_url(); ?>public/js/inspinia.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/pace/pace.min.js"></script>
<script src="<?php echo base_url(); ?>public/ckeditor/ckeditor.js"></script> 
<!-- <script src='//cdn.ckeditor.com/4.5.5/full/ckeditor.js'></script> -->
<body class="">

<div id="wrapper">
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" height="48" width="48" src="<?php echo base_url(); ?>public/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Eddy Kay</strong>
                             </span> <span class="text-muted text-xs block">Scrutiny CEO <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            
                            <li><a href="<?=site_url('home/logout')?>">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        <img height="48" width="48" src="<?php echo base_url(); ?>public/img/scrut3.svg"/>
                    </div>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Scrutiny Posts</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li <?php if($this->uri->segment(2)=="home"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/home" >Home</a></li>
                        <li <?php if($this->uri->segment(2)=="music"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/music" >Music Entries</a></li>
                        <li <?php if($this->uri->segment(3)=="music/insert"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/music/insert">Add Music Entries</a></li>
                        <li <?php if($this->uri->segment(2)=="videos"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/video">Video Entries</a></li>
                        <li <?php if($this->uri->segment(3)=="videos/insert"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/video/insert">Add Video Entries</a></li>
                        <li <?php if($this->uri->segment(2)=="artists"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/artists">Artist Entries</a></li>
                        <li <?php if($this->uri->segment(3)=="artists/insert"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/artists/insert">Add Artists Entries</a></li>
                        <li><a href="<?php echo base_url(); ?>about">Image Manager</a></li>
                    </ul>
                </li>

                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Music Manager</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                       <li <?php if($this->uri->segment(3)=="mp3/insert"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/mp3/insert">Upload Music</a></li>
                    </ul>
                </li>

                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">User Manager</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                       <li <?php if($this->uri->segment(3)=="mp3/insert"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/user/insert">Add Users</a></li>
                    </ul>
                </li>
                </ul>
                </div>

                </nav>
<!--<nav class="navbar navbar-inverse">
<div class="container">
<div class="navbar-header">
	<a class="navbar-brand" href="<?php //echo base_url(); ?>">ciBlog</a>
	</div>
	<div id="navbar">
	<ul class="nav navbar-nav">
		<li><a href="<?php //echo base_url(); ?>">Home</a></li>
		<li><a href="<?php //echo base_url(); ?>about">About</a></li>
		<li><a href="<?php //echo base_url(); ?>posts">Blog</a></li>
		<li><a href="<?php //echo base_url(); ?>posts/create">Create</a></li>
		</ul>
		<ul>
		<ul class ="nav navbar-nav navbar-right">
		<li><a href="<?php //echo base_url(); ?>posts/create">Create Post</a>
		</li>
		</ul>
	</div>
	</div>
	</nav>-->
	
<!--<div class="container">-->