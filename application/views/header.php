<!doctype html>
<html lang="en">
<head>
    <title>:: Mplify :: Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="ThemeMakker, design by: ThemeMakker.com">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <?php include('css.php'); ?>
</head>
<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/thumbnail.png" width="48" height="48" alt="Mplify"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay" style="display: none;"></div>
    <div id="wrapper">
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <a href="index">
                        <img src="<?php echo base_url('assets/');?>images/logo-icon.svg" alt="Mplify Logo" class="img-responsive logo">
                        <span class="name">mplify</span>
                    </a>
                </div>
                <div class="navbar-right">
                    <ul class="list-unstyled clearfix mb-0">
                        <li>
                            <div class="navbar-btn btn-toggle-show">
                                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                            </div>
                            <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="fa fa-bars"></i></a>
                        </li>
                        <li>
                            <form id="navbar-search" class="navbar-form search-form">
                                <input value="" class="form-control" placeholder="Search here..." type="text">
                                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                            </form>
                        </li>
                        <li>
                            <div id="navbar-menu">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                            <i class="icon-bell"></i>
                                            <span class="notification-dot"></span>
                                        </a>
                                        <ul class="dropdown-menu animated bounceIn notifications">
                                            <li class="header"><strong>You have 4 new Notifications</strong></li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <i class="icon-info text-warning"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text">Campaign <strong>Holiday Sale</strong> is
                                                                nearly reach budget limit.</p>
                                                            <span class="timestamp">10:00 AM Today</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <i class="icon-like text-success"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text">Your New Campaign <strong>Holiday
                                                                    Sale</strong> is approved.</p>
                                                            <span class="timestamp">11:30 AM Today</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <i class="icon-pie-chart text-info"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text">Website visits from Twitter is 27% higher
                                                                than last week.</p>
                                                            <span class="timestamp">04:00 PM Today</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <i class="icon-info text-danger"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text">Error on website analytics configurations
                                                            </p>
                                                            <span class="timestamp">Yesterday</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="footer"><a href="javascript:void(0);" class="more">See all
                                                    notifications</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                            <img class="rounded-circle" src="<?php echo base_url('assets/');?>images/user-small.png" width="30" alt="">
                                        </a>
                                        <div class="dropdown-menu animated flipInY user-profile">
                                            <div class="d-flex p-3 align-items-center">
                                                <div class="drop-left m-r-10">
                                                    <img src="<?php echo base_url('assets/');?>images/user-small.png" class="rounded" width="50" alt="">
                                                </div>
                                                <div class="drop-right">
                                                    <h4>Samuel Morriss</h4>
                                                    <p class="user-name">samuelmorris@info.com</p>
                                                </div>
                                            </div>
                                            <div class="m-t-10 p-3 drop-list">
                                                <ul class="list-unstyled">
                                                    <li><a href="profile"><i class="icon-user"></i>My
                                                            Profile</a></li>
                                                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="logout"><i class="icon-power"></i>Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php include('sidebar.php'); ?>