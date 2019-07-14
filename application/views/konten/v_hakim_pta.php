
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
                            <h2>Data Hakim <small> </small></h2>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->
                <!-- start: PAGE CONTENT -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="alert alert-info">
                            Please try to re-size your browser window in order to see the tables in responsive mode.
                        </div> -->
                        <!-- start: RESPONSIVE TABLE PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Pengadilan Tinggi Agama Surabaya
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
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover" id="sample-table-1">
                                        <thead>
                                            <tr>
                                                <th class="center">No</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Kode</th>
                                                <th class="center" colspan="2"><i class="fa fa-time"></i> Status </th>
                                                <!-- <th>Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php 
                                                $i = $this->uri->segment('3') + 1;
                                                foreach ($data->result() as $row) {
                                                ?>
                                                <td class="center">
                                                  <?php echo $i++?> 
                                                </td>
                                                <td><?= $row->nip?></td>
                                                <td><?= $row->nama_gelar?></td>
                                                <td><?= $row->kode;?></td>
                                                <!-- <td><a class="btn btn-green" href="#"><i class="glyphicon glyphicon-ok-sign"></i></a></td> -->
                                                <td class="center"><a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Aktif"><i class="glyphicon glyphicon-ok-sign"></i></a></td>
                                                <td class="center"><a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Detil"><i class="fa fa-edit"></i></a></td>
                                            </tr>
                                            <?php 
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php
                                        echo $paging;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- end: RESPONSIVE TABLE PANEL -->
                    </div>
                </div>
                <!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
   