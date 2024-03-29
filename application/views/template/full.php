
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Clip-One - Responsive Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
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

<body>

    <!-- start: HEADER -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <!-- start: TOP NAVIGATION CONTAINER -->
        <div class="container">
            <div class="navbar-header">
                <!-- start: RESPONSIVE MENU TOGGLER -->
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="clip-list-2"></span>
            </button>
                <!-- end: RESPONSIVE MENU TOGGLER -->
                <!-- start: LOGO -->
                <a class="navbar-brand" href="index.html">
                CLIP<i class="clip-clip"></i>ONE
            </a>
                <!-- end: LOGO -->
            </div>
            <div class="navbar-tools">
                <!-- start: TOP NAVIGATION MENU -->
                <ul class="nav navbar-right">
                    <!-- start: TO-DO DROPDOWN -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                            <i class="clip-list-5"></i>
                            <span class="badge"> 12</span>
                        </a>
                        <ul class="dropdown-menu todo">
                            <li>
                                <span class="dropdown-menu-title"> You have 12 pending tasks</span>
                            </li>
                            <li>
                                <div class="drop-down-wrapper">
                                    <ul>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
                                                <span class="label label-danger" style="opacity: 1;"> today</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
                                                <span class="label label-danger" style="opacity: 1;"> today</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> Hire developers</span>
                                                <span class="label label-warning"> tommorow</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc">Staff Meeting</span>
                                                <span class="label label-warning"> tommorow</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> New frontend layout</span>
                                                <span class="label label-success"> this week</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> Hire developers</span>
                                                <span class="label label-success"> this week</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> New frontend layout</span>
                                                <span class="label label-info"> this month</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> Hire developers</span>
                                                <span class="label label-info"> this month</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
                                                <span class="label label-danger" style="opacity: 1;"> today</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
                                                <span class="label label-danger" style="opacity: 1;"> today</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> Hire developers</span>
                                                <span class="label label-warning"> tommorow</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="view-all">
                                <a href="javascript:void(0)">
                                See all tasks <i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: TO-DO DROPDOWN-->
                    <!-- start: NOTIFICATION DROPDOWN -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                            <i class="clip-notification-2"></i>
                            <span class="badge"> 11</span>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li>
                                <span class="dropdown-menu-title"> You have 11 notifications</span>
                            </li>
                            <li>
                                <div class="drop-down-wrapper">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-primary"><i class="fa fa-user"></i></span>
                                                <span class="message"> New user registration</span>
                                                <span class="time"> 1 min</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-success"><i class="fa fa-comment"></i></span>
                                                <span class="message"> New comment</span>
                                                <span class="time"> 7 min</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-success"><i class="fa fa-comment"></i></span>
                                                <span class="message"> New comment</span>
                                                <span class="time"> 8 min</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-success"><i class="fa fa-comment"></i></span>
                                                <span class="message"> New comment</span>
                                                <span class="time"> 16 min</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-primary"><i class="fa fa-user"></i></span>
                                                <span class="message"> New user registration</span>
                                                <span class="time"> 36 min</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-warning"><i class="fa fa-shopping-cart"></i></span>
                                                <span class="message"> 2 items sold</span>
                                                <span class="time"> 1 hour</span>
                                            </a>
                                        </li>
                                        <li class="warning">
                                            <a href="javascript:void(0)">
                                                <span class="label label-danger"><i class="fa fa-user"></i></span>
                                                <span class="message"> User deleted account</span>
                                                <span class="time"> 2 hour</span>
                                            </a>
                                        </li>
                                        <li class="warning">
                                            <a href="javascript:void(0)">
                                                <span class="label label-danger"><i class="fa fa-shopping-cart"></i></span>
                                                <span class="message"> Transaction was canceled</span>
                                                <span class="time"> 6 hour</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-success"><i class="fa fa-comment"></i></span>
                                                <span class="message"> New comment</span>
                                                <span class="time"> yesterday</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-primary"><i class="fa fa-user"></i></span>
                                                <span class="message"> New user registration</span>
                                                <span class="time"> yesterday</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-primary"><i class="fa fa-user"></i></span>
                                                <span class="message"> New user registration</span>
                                                <span class="time"> yesterday</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-success"><i class="fa fa-comment"></i></span>
                                                <span class="message"> New comment</span>
                                                <span class="time"> yesterday</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="label label-success"><i class="fa fa-comment"></i></span>
                                                <span class="message"> New comment</span>
                                                <span class="time"> yesterday</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="view-all">
                                <a href="javascript:void(0)">
                                See all notifications <i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: NOTIFICATION DROPDOWN -->
                    <!-- start: MESSAGE DROPDOWN -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown" href="#">
                            <i class="clip-bubble-3"></i>
                            <span class="badge"> 9</span>
                        </a>
                        <ul class="dropdown-menu posts">
                            <li>
                                <span class="dropdown-menu-title"> You have 9 messages</span>
                            </li>
                            <li>
                                <div class="drop-down-wrapper">
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                                    <div class="thread-image">
                                                        <img alt="" src="./assets/images/avatar-2.jpg">
                                                    </div>
                                                    <div class="thread-content">
                                                        <span class="author">Nicole Bell</span>
                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                        <span class="time"> Just Now</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                                    <div class="thread-image">
                                                        <img alt="" src="./assets/images/avatar-1.jpg">
                                                    </div>
                                                    <div class="thread-content">
                                                        <span class="author">Peter Clark</span>
                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                        <span class="time">2 mins</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                                    <div class="thread-image">
                                                        <img alt="" src="./assets/images/avatar-3.jpg">
                                                    </div>
                                                    <div class="thread-content">
                                                        <span class="author">Steven Thompson</span>
                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                        <span class="time">8 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                                    <div class="thread-image">
                                                        <img alt="" src="./assets/images/avatar-1.jpg">
                                                    </div>
                                                    <div class="thread-content">
                                                        <span class="author">Peter Clark</span>
                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                        <span class="time">9 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                                    <div class="thread-image">
                                                        <img alt="" src="./assets/images/avatar-5.jpg">
                                                    </div>
                                                    <div class="thread-content">
                                                        <span class="author">Kenneth Ross</span>
                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                        <span class="time">14 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="view-all">
                                <a href="pages_messages.html">
                                See all messages <i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: MESSAGE DROPDOWN -->
                    <!-- start: USER DROPDOWN -->
                    <li class="dropdown current-user">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                            <img src="<?php echo base_url()?>static/assets/images/avatar-1-small.jpg" class="circle-img" alt="">
                            <span class="username">Peter Clark</span>
                            <i class="clip-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="pages_user_profile.html">
                                    <i class="clip-user-2"></i> &nbsp;My Profile
                                </a>
                            </li>
                            <li>
                                <a href="pages_calendar.html">
                                    <i class="clip-calendar"></i> &nbsp;My Calendar
                                </a>
                                <li>
                                    <a href="pages_messages.html">
                                        <i class="clip-bubble-4"></i> &nbsp;My Messages (3)
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="utility_lock_screen.html">
                                        <i class="clip-locked"></i> &nbsp;Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="login_example1.html">
                                        <i class="clip-exit"></i> &nbsp;Log Out
                                    </a>
                                </li>
                        </ul>
                        </li>
                        <!-- end: USER DROPDOWN -->
                        <!-- start: PAGE SIDEBAR TOGGLE -->
                        <li>
                            <a class="sb-toggle" href="#"><i class="fa fa-outdent"></i></a>
                        </li>
                        <!-- end: PAGE SIDEBAR TOGGLE -->
                </ul>
                <!-- end: TOP NAVIGATION MENU -->
            </div>
        </div>
        <!-- end: TOP NAVIGATION CONTAINER -->
    </div>
    <!-- end: HEADER -->
    <!-- start: MAIN CONTAINER -->
    <div class="main-container">
        <div class="navbar-content">
            <!-- start: SIDEBAR -->
            <div class="main-navigation navbar-collapse collapse">
                <!-- start: MAIN MENU TOGGLER BUTTON -->
                <div class="navigation-toggler">
                    <i class="clip-chevron-left"></i>
                    <i class="clip-chevron-right"></i>
                </div>
                <!-- end: MAIN MENU TOGGLER BUTTON -->
                <!-- start: MAIN NAVIGATION MENU -->
                <ul class="main-navigation-menu">
                    <li>
                        <!--active open-->
                        <a href="index.html">
                            <i class="clip-home-3"></i>
                            <span class="title"> Dashboard </span><span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="clip-screen"></i>
                            <span class="title"> Layouts </span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="layouts_horizontal_menu1.html">
                                    <span class="title"> Horizontal Menu </span>
                                    <span class="badge badge-new">new</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="close-sidebar-left">
                                    <span class="title"> Sidebar Closed </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="set-boxed-layout">
                                    <span class="title"> Boxed Layout </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="set-footer-fixed">
                                    <span class="title"> Footer Fixed </span>
                                </a>
                            </li>
                            <li>
                                <a href="../clip-one-rtl/index.html">
                                    <span class="title"> RTL Version </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://www.cliptheme.com/preview/cliponeV2/Frontend/clip-one-template/clip-one/index.html" target="_blank">
                            <i class="clip-cursor"></i>
                            <span class="title"> Frontend Theme </span><span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="clip-cog-2"></i>
                            <span class="title"> UI Lab </span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ui_elements.html">
                                    <span class="title"> Elements </span>
                                </a>
                            </li>
                            <li>
                                <a href="ui_buttons.html">
                                    <span class="title"> Buttons &amp; icons </span>
                                </a>
                            </li>
                            <li>
                                <a href="ui_animations.html">
                                    <span class="title"> CSS3 Animation </span>
                                    <span class="badge badge-new">new</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui_modals.html">
                                    <span class="title"> Extended Modals </span>
                                </a>
                            </li>
                            <li>
                                <a href="ui_tabs_accordions.html">
                                    <span class="title"> Tabs &amp; Accordions </span>
                                </a>
                            </li>
                            <li>
                                <a href="ui_sliders.html">
                                    <span class="title"> Sliders </span>
                                </a>
                            </li>
                            <li>
                                <a href="ui_treeview.html">
                                    <span class="title"> Treeview </span>
                                </a>
                            </li>
                            <li>
                                <a href="ui_nestable.html">
                                    <span class="title"> Nestable List </span>
                                </a>
                            </li>
                            <li>
                                <a href="ui_typography.html">
                                    <span class="title"> Typography </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="clip-grid-6"></i>
                            <span class="title"> Tables </span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="table_static.html">
                                    <span class="title">Static Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="table_responsive.html">
                                    <span class="title">Responsive Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="table_data.html">
                                    <span class="title">Data Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="table_export.html">
                                    <span class="title">Table Export</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="clip-pencil"></i>
                            <span class="title"> Forms </span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="form_elements.html">
                                    <span class="title">Form Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href="form_wizard.html">
                                    <span class="title">Form Wizard</span>
                                </a>
                            </li>
                            <li>
                                <a href="form_validation.html">
                                    <span class="title">Form Validation</span>
                                </a>
                            </li>
                            <li>
                                <a href="form_inline.html">
                                    <span class="title">Inline Editor</span>
                                </a>
                            </li>
                            <li>
                                <a href="form_x_editable.html">
                                    <span class="title">Form X-editable</span>
                                </a>
                            </li>
                            <li>
                                <a href="form_image_cropping.html">
                                    <span class="title">Image Cropping</span>
                                </a>
                            </li>
                            <li>
                                <a href="form_multiple_upload.html">
                                    <span class="title">Multiple File Upload</span>
                                </a>
                            </li>
                            <li>
                                <a href="form_dropzone.html">
                                    <span class="title">Dropzone File Upload</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="clip-user-2"></i>
                            <span class="title">Login</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="login_example1.html">
                                    <span class="title">Login Form Example 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="login_example2.html">
                                    <span class="title">Login Form Example 2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="clip-file"></i>
                            <span class="title">Pages</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="pages_user_profile.html">
                                    <span class="title">User Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages_invoice.html">
                                    <span class="title">Invoice</span>
                                    <span class="badge badge-new">new</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages_gallery.html">
                                    <span class="title">Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages_timeline.html">
                                    <span class="title">Timeline</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages_calendar.html">
                                    <span class="title">Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages_messages.html">
                                    <span class="title">Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages_blank_page.html">
                                    <span class="title">Blank Page</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="clip-attachment-2"></i>
                            <span class="title">Utility</span><i class="icon-arrow"></i>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="utility_faq.html">
                                    <span class="title">Faq</span>
                                </a>
                            </li>
                            <li>
                                <a href="utility_search_result.html">
                                    <span class="title">Search Results </span>
                                    <span class="badge badge-new">new</span>
                                </a>
                            </li>
                            <li>
                                <a href="utility_lock_screen.html">
                                    <span class="title">Lock Screen</span>
                                </a>
                            </li>
                            <li>
                                <a href="utility_404_example1.html">
                                    <span class="title">Error 404 Example 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="utility_404_example2.html">
                                    <span class="title">Error 404 Example 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="utility_404_example3.html">
                                    <span class="title">Error 404 Example 3</span>
                                </a>
                            </li>
                            <li>
                                <a href="utility_500_example1.html">
                                    <span class="title">Error 500 Example 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="utility_500_example2.html">
                                    <span class="title">Error 500 Example 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="utility_pricing_table.html">
                                    <span class="title">Pricing Table</span>
                                </a>
                            </li>
                            <li>
                                <a href="utility_coming_soon.html">
                                    <span class="title">Cooming Soon</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="active">
                            <i class="clip-folder"></i>
                            <span class="title"> 3 Level Menu </span>
                            <i class="icon-arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                            Item 1 <i class="icon-arrow"></i>
                        </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">
                                    Sample Link 1
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    Sample Link 2
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    Sample Link 3
                                </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                            Item 1 <i class="icon-arrow"></i>
                        </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">
                                    Sample Link 1
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    Sample Link 1
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    Sample Link 1
                                </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                            Item 3
                        </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="clip-folder-open"></i>
                            <span class="title"> 4 Level Menu </span><i class="icon-arrow"></i>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                            Item 1 <i class="icon-arrow"></i>
                        </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:;">
                                    Sample Link 1 <i class="icon-arrow"></i>
                                </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-times"></i> Sample Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pencil"></i> Sample Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-edit"></i> Sample Link 1
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                    Sample Link 1
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    Sample Link 2
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    Sample Link 3
                                </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                            Item 2 <i class="icon-arrow"></i>
                        </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">
                                    Sample Link 1
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    Sample Link 1
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    Sample Link 1
                                </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                            Item 3
                        </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="maps.html">
                            <i class="clip-location"></i>
                            <span class="title">Maps</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a href="charts.html">
                            <i class="clip-bars"></i>
                            <span class="title">Charts</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
                <!-- end: MAIN NAVIGATION MENU -->
            </div>
            <!-- end: SIDEBAR -->
        </div>

        <!-- start: PAGE -->
        <div class="main-content">
            <!-- start: PANEL CONFIGURATION MODAL FORM -->
            <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                            <h4 class="modal-title">Panel Configuration</h4>
                        </div>
                        <div class="modal-body">
                            Here will be a configuration form
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                            <button type="button" class="btn btn-primary">
                    Save changes
                </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- end: SPANEL CONFIGURATION MODAL FORM -->
            <div class="container">
                <!-- start: PAGE HEADER -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- start: STYLE SELECTOR BOX -->
                        <div id="style_selector" class="hidden-xs close-style">
                            <div id="style_selector_container" style="display:block">
                                <div class="style-main-title">
                                    Style Selector
                                </div>
                                <div class="box-title">
                                    Choose Your Layout Style
                                </div>
                                <div class="input-box">
                                    <div class="input">
                                        <select name="layout">
                    <option value="default">Wide</option>
                    <option value="boxed">Boxed</option>
                </select>
                                    </div>
                                </div>
                                <div class="box-title">
                                    Choose Your Orientation
                                </div>
                                <div class="input-box">
                                    <div class="input">
                                        <select name="orientation">
                    <option value="default">Default</option>
                    <option value="rtl">RTL</option>
                </select>
                                    </div>
                                </div>
                                <div class="box-title">
                                    Choose Your Header Style
                                </div>
                                <div class="input-box">
                                    <div class="input">
                                        <select name="header">
                    <option value="fixed">Fixed</option>
                    <option value="default">Default</option>
                </select>
                                    </div>
                                </div>
                                <div class="box-title">
                                    Choose Your Footer Style
                                </div>
                                <div class="input-box">
                                    <div class="input">
                                        <select name="footer">
                    <option value="default">Default</option>
                    <option value="fixed">Fixed</option>
                </select>
                                    </div>
                                </div>
                                <div class="box-title">
                                    Backgrounds for Boxed Version
                                </div>
                                <div class="images boxed-patterns">
                                    <a id="bg_style_1" href="#"><img alt="" src="<?php echo base_url()?>static/assets/images/bg.png"></a>
                                    <a id="bg_style_2" href="#"><img alt="" src="<?php echo base_url()?>static/assets/images/bg_2.png"></a>
                                    <a id="bg_style_3" href="#"><img alt="" src="<?php echo base_url()?>static/assets/images/bg_3.png"></a>
                                    <a id="bg_style_4" href="#"><img alt="" src="<?php echo base_url()?>static/assets/images/bg_4.png"></a>
                                    <a id="bg_style_5" href="#"><img alt="" src="<?php echo base_url()?>static/assets/images/bg_5.png"></a>
                                </div>
                                <div class="box-title">
                                    5 Predefined Color Schemes
                                </div>
                                <div class="images icons-color">
                                    <a id="light" href="#"><img class="active" alt="" src="<?php echo base_url()?>static/assets/images/lightgrey.png"></a>
                                    <a id="dark" href="#"><img alt="" src="<?php echo base_url()?>static/assets/images/darkgrey.png"></a>
                                    <a id="black-and-white" href="#"><img alt="" src="<?php echo base_url()?>static/assets/images/blackandwhite.png"></a>
                                    <a id="navy" href="#"><img alt="" src="<?php echo base_url()?>static/assets/images/navy.png"></a>
                                    <a id="green" href="#"><img alt="" src="<?php echo base_url()?>static/assets/images/green.png"></a>
                                </div>
                                <div style="height:25px;line-height:25px; text-align: center">
                                    <a class="clear_style" href="#">
                Clear Styles
            </a>
                                    <a class="save_style" href="#">
                Save Styles
            </a>
                                </div>
                            </div>
                            <div class="style-toggle open">
                                <i class="fa fa-cog fa-spin"></i>
                            </div>
                        </div>
                        <!-- end: STYLE SELECTOR BOX -->
                        <!-- start: PAGE TITLE & BREADCRUMB -->
                        <ol class="breadcrumb">
                            <li>
                                <i class="clip-home-3"></i>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li class="active">
                                Dashboard
                            </li>
                            <li class="search-box">
                                <form class="sidebar-search">
                                    <div class="form-group">
                                        <input type="text" placeholder="Start Searching...">
                                        <button class="submit">
                                            <i class="clip-search-3"></i>
                                        </button>
                                    </div>
                                </form>
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Dashboard <small>overview &amp; stats </small></h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->
                <!-- start: PAGE CONTENT -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="core-box">
                            <div class="heading">
                                <i class="clip-user-4 circle-icon circle-green"></i>
                                <h2>Manage Users</h2>
                            </div>
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </div>
                            <a class="view-more" href="#">
                                View More <i class="clip-arrow-right-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="core-box">
                            <div class="heading">
                                <i class="clip-clip circle-icon circle-teal"></i>
                                <h2>Manage Orders</h2>
                            </div>
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </div>
                            <a class="view-more" href="#">
                                View More <i class="clip-arrow-right-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="core-box">
                            <div class="heading">
                                <i class="clip-database circle-icon circle-bricky"></i>
                                <h2>Manage Data</h2>
                            </div>
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </div>
                            <a class="view-more" href="#">
                                View More <i class="clip-arrow-right-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="clip-stats"></i> Site Visits
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                    </a>
                                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-close" href="#">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="flot-medium-container">
                                    <div id="placeholder-h1" class="flot-placeholder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="clip-pie"></i> Acquisition
                                        <div class="panel-tools">
                                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                            </a>
                                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                            <a class="btn btn-xs btn-link panel-close" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-mini-container">
                                            <div id="placeholder-h2" class="flot-placeholder"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="clip-bars"></i> Pageviews real-time
                                        <div class="panel-tools">
                                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                            </a>
                                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                            <a class="btn btn-xs btn-link panel-close" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-mini-container">
                                            <div id="placeholder-h3" class="flot-placeholder"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="row space12">
                            <ul class="mini-stats col-sm-12">
                                <li class="col-sm-4">
                                    <div class="sparkline_bar_good">
                                        <span>3,5,9,8,13,11,14</span>+10%
                                    </div>
                                    <div class="values">
                                        <strong>18304</strong> Visits
                                    </div>
                                </li>
                                <li class="col-sm-4">
                                    <div class="sparkline_bar_neutral">
                                        <span>20,15,18,14,10,12,15,20</span>0%
                                    </div>
                                    <div class="values">
                                        <strong>3833</strong> Unique Visitors
                                    </div>
                                </li>
                                <li class="col-sm-4">
                                    <div class="sparkline_bar_bad">
                                        <span>4,6,10,8,12,21,11</span>+50%
                                    </div>
                                    <div class="values">
                                        <strong>18304</strong> Pageviews
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="row space12">
                            <div class="col-sm-6">
                                <div class="easy-pie-chart">
                                    <span class="bounce number" data-percent="44"> <span class="percent">44</span> </span>
                                    <div class="label-chart">
                                        Bounce Rate
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="easy-pie-chart">
                                    <span class="cpu number" data-percent="82"> <span class="percent">82</span> </span>
                                    <div class="label-chart">
                                        New Visits
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="clip-users-2"></i> Users
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                    </a>
                                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-close" href="#">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body panel-scroll" style="height:300px">
                                <table class="table table-striped table-hover" id="sample-table-1">
                                    <thead>
                                        <tr>
                                            <th class="center">Photo</th>
                                            <th>Full Name</th>
                                            <th class="hidden-xs">Email</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center"><img src="<?php echo base_url()?>static/assets/images/avatar-1.jpg" alt="image" /></td>
                                            <td>Peter Clark</td>
                                            <td class="hidden-xs">
                                                <a href="#" rel="nofollow" target="_blank">
                                                    peter@example.com
                                                </a>
                                            </td>
                                            <td class="center">
                                                <div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                            <i class="fa fa-cog"></i> <span class="caret"></span>
                                                        </a>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-share"></i> Share
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-times"></i> Remove
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="center"><img src="<?php echo base_url()?>static/assets/images/avatar-2.jpg" alt="image" /></td>
                                            <td>Nicole Bell</td>
                                            <td class="hidden-xs">
                                                <a href="#" rel="nofollow" target="_blank">
                                                    nicole@example.com
                                                </a>
                                            </td>
                                            <td class="center">
                                                <div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                            <i class="fa fa-cog"></i> <span class="caret"></span>
                                                        </a>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-share"></i> Share
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-times"></i> Remove
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="center"><img src="<?php echo base_url()?>static/assets/images/avatar-3.jpg" alt="image" /></td>
                                            <td>Steven Thompson</td>
                                            <td class="hidden-xs">
                                                <a href="#" rel="nofollow" target="_blank">
                                                    steven@example.com
                                                </a>
                                            </td>
                                            <td class="center">
                                                <div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                            <i class="fa fa-cog"></i> <span class="caret"></span>
                                                        </a>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-share"></i> Share
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-times"></i> Remove
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="center"><img src="<?php echo base_url()?>static/assets/images/avatar-5.jpg" alt="image" /></td>
                                            <td>Kenneth Ross</td>
                                            <td class="hidden-xs">
                                                <a href="#" rel="nofollow" target="_blank">
                                                    kenneth@example.com
                                                </a>
                                            </td>
                                            <td class="center">
                                                <div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                            <i class="fa fa-cog"></i> <span class="caret"></span>
                                                        </a>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-share"></i> Share
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-times"></i> Remove
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="center"><img src="<?php echo base_url()?>static/assets/images/avatar-4.jpg" alt="image" /></td>
                                            <td>Ella Patterson</td>
                                            <td class="hidden-xs">
                                                <a href="#" rel="nofollow" target="_blank">
                                                    ella@example.com
                                                </a>
                                            </td>
                                            <td class="center">
                                                <div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                            <i class="fa fa-cog"></i> <span class="caret"></span>
                                                        </a>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-share"></i> Share
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="#">
                                                                    <i class="fa fa-times"></i> Remove
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="clip-checkbox"></i> To Do
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                    </a>
                                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-close" href="#">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body panel-scroll" style="height:300px">
                                <ul class="todo">
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
                                            <span class="label label-danger" style="opacity: 1;"> today</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
                                            <span class="label label-danger" style="opacity: 1;"> today</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> Hire developers</span>
                                            <span class="label label-warning"> tommorow</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc">Staff Meeting</span>
                                            <span class="label label-warning"> tommorow</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> New frontend layout</span>
                                            <span class="label label-success"> this week</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> Hire developers</span>
                                            <span class="label label-success"> this week</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> New frontend layout</span>
                                            <span class="label label-info"> this month</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> Hire developers</span>
                                            <span class="label label-info"> this month</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
                                            <span class="label label-danger" style="opacity: 1;"> today</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
                                            <span class="label label-danger" style="opacity: 1;"> today</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> Hire developers</span>
                                            <span class="label label-warning"> tommorow</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="clip-calendar"></i> Calendar
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                    </a>
                                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#">
                                        <i class="fa fa-resize-full"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-close" href="#">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="clip-bubble-4"></i> Chats
                                        <div class="panel-tools">
                                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                            </a>
                                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                                <i class="fa fa-resize-full"></i>
                                            </a>
                                            <a class="btn btn-xs btn-link panel-close" href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="panel-body panel-scroll" style="height:460px">
                                        <ol class="discussion">
                                            <li class="other">
                                                <div class="avatar">
                                                    <img alt="" src="<?php echo base_url()?>static/assets/images/avatar-4.jpg">
                                                </div>
                                                <div class="messages">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </p>
                                                    <span class="time"> 51 min </span>
                                                </div>
                                            </li>
                                            <li class="self">
                                                <div class="avatar">
                                                    <img alt="" src="<?php echo base_url()?>static/assets/images/avatar-1.jpg">
                                                </div>
                                                <div class="messages">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </p>
                                                    <span class="time"> 37 mins </span>
                                                </div>
                                            </li>
                                            <li class="other">
                                                <div class="avatar">
                                                    <img alt="" src="<?php echo base_url()?>static/assets/images/avatar-3.jpg">
                                                </div>
                                                <div class="messages">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="self">
                                                <div class="avatar">
                                                    <img alt="" src="<?php echo base_url()?>static/assets/images/avatar-1.jpg">
                                                </div>
                                                <div class="messages">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="other">
                                                <div class="avatar">
                                                    <img alt="" src="<?php echo base_url()?>static/assets/images/avatar-4.jpg">
                                                </div>
                                                <div class="messages">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </p>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="chat-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-mask-date" placeholder="Type a message here...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-teal" type="button">
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
    <div class="footer clearfix">
        <div class="footer-inner">
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; clip-one by cliptheme.
        </div>
        <div class="footer-items">
            <span class="go-top"><i class="clip-chevron-up"></i></span>
        </div>
    </div>
    <!-- end: FOOTER -->
    <!-- start: RIGHT SIDEBAR -->
    <div id="page-sidebar">
        <a class="sidebar-toggler sb-toggle" href="#"><i class="fa fa-indent"></i></a>
        <div class="sidebar-wrapper">
            <ul class="nav nav-tabs nav-justified" id="sidebar-tab">
                <li class="active">
                    <a href="#users" role="tab" data-toggle="tab"><i class="fa fa-users"></i></a>
                </li>
                <li>
                    <a href="#favorites" role="tab" data-toggle="tab"><i class="fa fa-heart"></i></a>
                </li>
                <li>
                    <a href="#settings" role="tab" data-toggle="tab"><i class="fa fa-gear"></i></a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="users">
                    <div class="users-list">
                        <h5 class="sidebar-title">On-line</h5>
                        <ul class="media-list">
                            <li class="media">
                                <a href="#">
                                    <i class="fa fa-circle status-online"></i>
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-2.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nicole Bell</h4>
                                        <span> Content Designer </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <div class="user-label">
                                        <span class="label label-success">3</span>
                                    </div>
                                    <i class="fa fa-circle status-online"></i>
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-3.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Steven Thompson</h4>
                                        <span> Visual Designer </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <i class="fa fa-circle status-online"></i>
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-4.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Patterson</h4>
                                        <span> Web Editor </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <i class="fa fa-circle status-online"></i>
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-5.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Kenneth Ross</h4>
                                        <span> Senior Designer </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <h5 class="sidebar-title">Off-line</h5>
                        <ul class="media-list">
                            <li class="media">
                                <a href="#">
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-6.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nicole Bell</h4>
                                        <span> Content Designer </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <div class="user-label">
                                        <span class="label label-success">3</span>
                                    </div>
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-7.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Steven Thompson</h4>
                                        <span> Visual Designer </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-8.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Patterson</h4>
                                        <span> Web Editor </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-9.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Kenneth Ross</h4>
                                        <span> Senior Designer </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-10.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Patterson</h4>
                                        <span> Web Editor </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-5.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Kenneth Ross</h4>
                                        <span> Senior Designer </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="user-chat">
                        <div class="sidebar-content">
                            <a class="sidebar-back" href="#"><i class="fa fa-chevron-circle-left"></i> Back</a>
                        </div>
                        <div class="user-chat-form sidebar-content">
                            <div class="input-group">
                                <input type="text" placeholder="Type a message here..." class="form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="button">
                                    <i class="fa fa-chevron-right"></i>
                                </button>
                                </div>
                            </div>
                        </div>
                        <ol class="discussion sidebar-content">
                            <li class="other">
                                <div class="avatar">
                                    <img src="<?php echo base_url()?>static/assets/images/avatar-4.jpg" alt="">
                                </div>
                                <div class="messages">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                    <span class="time"> 51 min </span>
                                </div>
                            </li>
                            <li class="self">
                                <div class="avatar">
                                    <img src="<?php echo base_url()?>static/assets/images/avatar-1.jpg" alt="">
                                </div>
                                <div class="messages">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                    <span class="time"> 37 mins </span>
                                </div>
                            </li>
                            <li class="other">
                                <div class="avatar">
                                    <img src="<?php echo base_url()?>static/assets/images/avatar-4.jpg" alt="">
                                </div>
                                <div class="messages">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="tab-pane" id="favorites">
                    <div class="users-list">
                        <h5 class="sidebar-title">Favorites</h5>
                        <ul class="media-list">
                            <li class="media">
                                <a href="#">
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-7.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nicole Bell</h4>
                                        <span> Content Designer </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <div class="user-label">
                                        <span class="label label-success">3</span>
                                    </div>
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-6.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Steven Thompson</h4>
                                        <span> Visual Designer </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-10.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Patterson</h4>
                                        <span> Web Editor </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-2.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Kenneth Ross</h4>
                                        <span> Senior Designer </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-4.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Patterson</h4>
                                        <span> Web Editor </span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#">
                                    <img alt="..." src="<?php echo base_url()?>static/assets/images/avatar-5.jpg" class="media-object">
                                    <div class="media-body">
                                        <h4 class="media-heading">Kenneth Ross</h4>
                                        <span> Senior Designer </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="user-chat">
                        <div class="sidebar-content">
                            <a class="sidebar-back" href="#"><i class="fa fa-chevron-circle-left"></i> Back</a>
                        </div>
                        <ol class="discussion sidebar-content">
                            <li class="other">
                                <div class="avatar">
                                    <img src="<?php echo base_url()?>static/assets/images/avatar-4.jpg" alt="">
                                </div>
                                <div class="messages">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                    <span class="time"> 51 min </span>
                                </div>
                            </li>
                            <li class="self">
                                <div class="avatar">
                                    <img src="<?php echo base_url()?>static/assets/images/avatar-1.jpg" alt="">
                                </div>
                                <div class="messages">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                    <span class="time"> 37 mins </span>
                                </div>
                            </li>
                            <li class="other">
                                <div class="avatar">
                                    <img src="<?php echo base_url()?>static/assets/images/avatar-4.jpg" alt="">
                                </div>
                                <div class="messages">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="tab-pane" id="settings">
                    <h5 class="sidebar-title">General Settings</h5>
                    <ul class="media-list">
                        <li class="media">
                            <div class="checkbox sidebar-content">
                                <label>
                                <input type="checkbox" value="" class="green" checked="checked">
                                Enable Notifications
                            </label>
                            </div>
                        </li>
                        <li class="media">
                            <div class="checkbox sidebar-content">
                                <label>
                                <input type="checkbox" value="" class="green" checked="checked">
                                Show your E-mail
                            </label>
                            </div>
                        </li>
                        <li class="media">
                            <div class="checkbox sidebar-content">
                                <label>
                                <input type="checkbox" value="" class="green">
                                Show Offline Users
                            </label>
                            </div>
                        </li>
                        <li class="media">
                            <div class="checkbox sidebar-content">
                                <label>
                                <input type="checkbox" value="" class="green" checked="checked">
                                E-mail Alerts
                            </label>
                            </div>
                        </li>
                        <li class="media">
                            <div class="checkbox sidebar-content">
                                <label>
                                <input type="checkbox" value="" class="green">
                                SMS Alerts
                            </label>
                            </div>
                        </li>
                    </ul>
                    <div class="sidebar-content">
                        <button class="btn btn-success">
                        <i class="icon-settings"></i> Save Changes
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: RIGHT SIDEBAR -->
    <div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                    <h4 class="modal-title">Event Management</h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-light-grey">
                    Close
                </button>
                    <button type="button" class="btn btn-danger remove-event no-display">
                    <i class='fa fa-trash-o'></i> Delete Event
                </button>
                    <button type='submit' class='btn btn-success save-event'>
                    <i class='fa fa-check'></i> Save
                </button>
                </div>
            </div>
        </div>
    </div>
    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
        <script src="../../bower_components/respond/dest/respond.min.js"></script>
        <script src="../../bower_components/Flot/excanvas.min.js"></script>
        <script src="../../bower_components/jquery-1.x/dist/jquery.min.js"></script>
        <![endif]-->

            <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/jquery-ui/jquery-ui.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/blockUI/jquery.blockUI.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/iCheck/icheck.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/jquery.cookie/jquery.cookie.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>static/bower_components/sweetalert/dist/sweetalert.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url()?>static/assets/js/min/main.min.js"></script>
            <!-- end: MAIN JAVASCRIPTS -->
            <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
            <script src="<?php echo base_url()?>static/bower_components/Flot/jquery.flot.js"></script>
            <script src="<?php echo base_url()?>static/bower_components/Flot/jquery.flot.pie.js"></script>
            <script src="<?php echo base_url()?>static/bower_components/Flot/jquery.flot.resize.js"></script>
            <script src="<?php echo base_url()?>static/assets/plugin/jquery.sparkline.min.js"></script>
            <script src="<?php echo base_url()?>static/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
            <script src="<?php echo base_url()?>static/bower_components/jqueryui-touch-punch/jquery.ui.touch-punch.min.js"></script>
            <script src="<?php echo base_url()?>static/bower_components/moment/min/moment.min.js"></script>
            <script src="<?php echo base_url()?>static/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
            <script src="<?php echo base_url()?>static/assets/js/min/index.min.js"></script>
            <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

    <script>
        jQuery(document).ready(function() {
            Main.init();
            Index.init();
        });
    </script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582HVlH3eBnL316x79sEjG0kVdYzkRhQDYXw5tnu6LjNbd83GbIOry5277frwuFo64tjr28yyRgmLRExgDZrel3FHzlTThEtOqryuqQkGaXInT4V%2fowKUzgDJognrswM9dkf%2bP6nxREx8eV%2fM76cK52lP6mWwE%2fEjzbd8l8uFyXqVlAyKBbEpLMxTy1lkYLNZj8OTryZQL%2bWbzuDmAmPvt50D4M6iE5RFWTDohfja%2bqy40g9dv83aHv%2fmMDtc3a2M4FALJZWru5jlDnEgTw5thTJEYSEQoIyKEFCBiDFgH05S9txP1evoIJj%2fQp942Tal2rNceIM%2f1NwGDLdGoAJ1osEaGHVjbMpNFmYQXdwqLwky2IibCugTmY9XzoFkUJjg%2f6SH0zuLN2SpB4%2fF%2fbyMsQl0Cpfpl1UyM3LEnbg1indJPYT9UsPuZ87z%2b0pJE7JOvMijK7H546ani5d8XBKlZ%2fp08bLrbL8mf%2br3Bg8Btr6tuC1asrJIj6kFi8zrdwwBefz0qzbUZT%2bzuP1zmrAeboe%2b8AE5OeezkEciv52IdWp9aKnc6Yc2DFSmYu7aqLQE8u%2fRHRZqh9W3P2kszgWbMs44Sy%2bQ7SRHeaASAhuT8AfN7" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>
