<!doctype html>
<html lang="en">

<head>
    <title>:: Mplify :: Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/animate-css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendor/font-awesome/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/main.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/color_skins.css">
</head>

<body class="theme-blue">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="mobile-logo"><a href="index.html"><img src="<?php echo base_url('assets/'); ?>images/logo-icon.svg" alt="Mplify"></a></div>
                    <div class="auth-left">
                        <div class="left-top">
                            <a href="#">
                                <img src="<?php echo base_url('assets/'); ?>images/logo-icon.svg" alt="Mplify">
                                <span>AVC Learning</span>
                            </a>
                        </div>
                        <div class="left-slider">
                            <img src="<?php echo base_url('assets/'); ?>images/login/1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="auth-right">
                        <div class="right-top">
                            <ul class="list-unstyled clearfix d-flex">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li><a href="javascript:void(0);">Home</a></li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="header">
                                <p class="lead">Log in</p>
                            </div>
                            <div class="body">
                                <form class="form-auth-small" method="POST" action="">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Email</label>
                                        <input type="email" class="form-control" id="signin-email" value="" placeholder="Email ID" name="userEmail" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Password</label>
                                        <input type="password" class="form-control" id="signin-password" value="" placeholder="Password" name="userPassword" required>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                                </form><br>
                                <span><?php
                                        if ($this->session->flashdata('login_success') == 'Login Successfully') {
                                            echo $this->session->flashdata('login_success');
                                        ?>
                                        <script>
                                            window.setTimeout(function() {

                                                window.location.href = "index";

                                            }, 2000);
                                        </script>
                                    <?php
                                        } else {
                                            echo $this->session->flashdata('login_success');
                                        }
                                    ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>