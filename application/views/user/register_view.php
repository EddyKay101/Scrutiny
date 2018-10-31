<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrutiny | Register</title>
    <link rel="icon" href="<?php echo base_url();?>map.ico" type="image/ico" sizes="28x28">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/textSpinners/spinners.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">


</head>
<style type="text/css">
    #register_form_error{
  background: rgba(230, 175, 75, 0.5);
  color:red;
  font-weight: bold;
  margin:auto;
  /*padding:0 !important;*/

}
ul{
    padding-right:10%;
    line-height: 1.4;
}
li{
    list-style-type: none;
}
</style>
<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <img height="150" width="150" class="logo_name" src="<?php echo base_url(); ?>public/img/scrut3.svg"/>

            </div>
            <h3>Register to Scrutiny</h3>
            <p>Create account and get into action!</p>

             <div id="register_form_error" class="alert alert-error"><!-- Dynamic --></div>
            <form id="register_form" class="m-t" role="form" method="post" action="<?=site_url('user/user/register')?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First name" name="firstname">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last name" name="lastname">
                </div>
                 <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                
                <div class="form-group" id="pwd-container1">
                    
                <div class="form-group">
                    <input type="password" class="form-control example1" id="password1" placeholder="Password"  name="password">
                    
                </div>
                <div class="form-group">
                <div class="pwstrength_viewport_progress"></div>
                </div>
               
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url();?>user/login">Login</a>
            </form>
             <p class="m-t"> <small>Scrutiny-ng.com &copy; <?=date('Y')?></small> </p>
             <br>
             <a style="color:#e6af4b;" href="<?php echo base_url(); ?>home"><i class="fa fa-angle-double-left"></i>  Back to home page</a>
            </div>
            </div>
           
        </div>
    </div>

    <!-- Mainly scripts -->
     <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>public/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/pwstrength/pwstrength-bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/plugins/pwstrength/zxcvbn.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>public/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    <script>
$(document).ready(function(){


            // Example 1
            var options1 = {};
            options1.ui = {
                container: "#pwd-container1",
                showVerdictsInsideProgressBar: true,
                viewports: {
                    progress: ".pwstrength_viewport_progress"
                }
            };
            options1.common = {
                debug: false,
            };
            $('.example1').pwstrength(options1);

            // Example 2
            var options2 = {};
            options2.ui = {
                container: "#pwd-container2",
                showStatus: true,
                showProgressBar: false,
                viewports: {
                    verdict: ".pwstrength_viewport_verdict"
                }
            };
            $('.example2').pwstrength(options2);

            // Example 3
            var options3 = {};
            options3.ui = {
                container: "#pwd-container3",
                showVerdictsInsideProgressBar: true,
                viewports: {
                    progress: ".pwstrength_viewport_progress2"
                }
            };
            options3.common = {
                debug: true,
                usernameField: "#username"
            };
            $('.example3').pwstrength(options3);

            // Example 4
            var options4 = {};
            options4.ui = {
                container: "#pwd-container4",
                viewports: {
                    progress: ".pwstrength_viewport_progress4",
                    verdict: ".pwstrength_viewport_verdict4"
                }
            };
            options4.common = {
                zxcvbn: true,
                zxcvbnTerms: ['samurai', 'shogun', 'bushido', 'daisho', 'seppuku'],
                userInputs: ['#year', '#familyname']
            };
            $('.example4').pwstrength(options4);


        })


    </script>

    <script type="text/javascript">
$(function() {
    
    $("#register_form_error").hide();
    
    $("#register_form").submit(function(evt) {
        evt.preventDefault();
        var url = $(this).attr('action');
        var postData = $(this).serialize();
        
        $.post(url, postData, function(o) {
            if (o.result == 1) {
                window.location.href = '<?=site_url('user/home')?>';
            } else {
                $("#register_form_error").show();
                var output = '<ul>';
                for (var key in o.error) {
                    var value = o.error[key];
                    output += '<li>' + value + '</li>';
                }
                output += '</ul>';
                $("#register_form_error").html(output);
            }
        }, 'json');
        
    });
    
});
</script>
</body>

</html>
