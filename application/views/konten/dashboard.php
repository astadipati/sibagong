
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
                                
                            </div>
                            <a class="view-more" href="#">
                                Lihat Detil <i class="clip-arrow-right-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="core-box">
                            <div class="heading">
                                <i class="clip-clip circle-icon circle-teal"></i>
                                <h2>Manage Perkara</h2>
                            </div>
                            <div class="content">
                                
                            </div>
                            <a class="view-more" href="#">
                                Lihat Detil <i class="clip-arrow-right-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="core-box">
                            <div class="heading">
                                <i class="clip-database circle-icon circle-bricky"></i>
                                <h2>Manage Notifikasi</h2>
                            </div>
                            <div class="content">
                                
                            </div>
                            <a class="view-more" href="#">
                                Lihat Detil <i class="clip-arrow-right-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="clip-stats"></i> Grafik Perkara
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
                                        <i class="clip-pie"></i> Jenis Perkara
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
                <!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
   