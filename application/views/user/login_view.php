<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Scrutiny | Login</title>
    <link rel="icon" href="<?php echo base_url();?>map.ico" type="image/ico" sizes="28x28">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>public/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <img height="150" width="150" class="logo_name" src="<?php echo base_url(); ?>public/img/scrut3.svg"/>
            <h3>Welcome to Scrutiny</h3>
            <p>Where music matters
                
            </p>
            <p>Login In Below.</p>
            <form id="login_form" class="m-t" role="form" method="post" action="<?=site_url('user/user/login')?>">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" name="email" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" >
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

               
            </form>
            <p class="m-t"> <small>Scrutiny-ng.com &copy; <?=date('Y')?></small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>public/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

</body>

<script type="text/javascript">
    $(function(){
        var refer = '<?php echo $lRefer;?>';
    $("#login_form").submit(function(evt){
        evt.preventDefault();//this will prevent the form from submitting
        var url = $(this).attr('action');
        var postData = $(this).serialize();

        $.post(url, postData, function(o){
            if(o.result == 1){
                window.location.href= refer;
                
            }else{
                alert('Invalid Login');
            }
        }, 'json');
    });
    
    });
</script>

</html>
