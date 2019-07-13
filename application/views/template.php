<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin GIS</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/node_modules/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/node_modules/css/perfect-scrollbar.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/style.css"/>
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/template/img/favicon.png"/>

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/datatables/jquery.dataTables.min.css"/>        
    </head>
    <body>
        <div class=" container-scroller">
            <!--Navbar-->
            <nav class="navbar bg-primary-gradient col-lg-12 col-12 p-0 fixed-top navbar-inverse d-flex flex-row">
                <div class="bg-white text-center navbar-brand-wrapper">
                    <a class="navbar-brand brand-logo" href="<?php echo base_url() ?>c_adm_utama"><img src="<?php echo base_url() ?>assets/template/img/logo_admin.png" /></a>
                    <a class="navbar-brand brand-logo-mini" href="<?php echo base_url() ?>c_adm_utama"><img src="<?php echo base_url() ?>assets/template/img/logo_star_mini.jpg" alt=""></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center">
                    <button class="navbar-toggler navbar-toggler hidden-md-down align-self-center mr-3" type="button" data-toggle="minimize">
                        <span class="navbar-toggler-icon"></span>
                    </button>                    
                       <!--<input class="form-control mr-sm-2 search" type="text" placeholder="Search" -->
                    <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
                        <a class="nav-link" href="<?php echo base_url() ?>c_login/logout">LogOut</a>

                    </ul>
                    <button class="navbar-toggler navbar-toggler-right hidden-lg-up align-self-center" type="button" data-toggle="offcanvas">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            <!--End navbar-->
            <div class="container-fluid">
                <div class="row row-offcanvas row-offcanvas-right">
                    <nav class="bg-white sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
                        <div class="user-info">
                            <img src="<?php echo base_url() ?>assets/template/img/adminn.png" alt="">
                            <p class="name">Hello, <?php echo $this->session->userdata("nama"); ?></p>
<!--                            <p class="designation">Manager</p>-->
                            <span class="online"></span>

                        </div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>c_adm_utama">                              
                                    <img src="<?php echo base_url() ?>assets/template/img/download.png" alt="">
                                    <span class="menu-title">Data Utama</span>
                                </a>
                            </li>                        
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>c_gambar">                              
                                    <img src="<?php echo base_url() ?>assets/template/img/gambar.png" alt="">
                                    <span class="menu-title">Gambar</span>
                                </a>
                            </li>                            
                        </ul>
                    </nav>
                    <!-- SIDEBAR ENDS -->
                    <?php
                    $this->load->view($konten);
                    ?>
                    <footer class="footer">
                        <div class="container-fluid clearfix">
                            <span class="float-right">
                                <a href="#">Star Admin</a> &copy; 2017
                            </span>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url() ?>assets/template/node_modules/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/template/node_modules/js/tether.min.js"></script>
        <script src="<?php echo base_url() ?>assets/template/node_modules/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/template/node_modules/js/Chart.min.js"></script>
        <script src="<?php echo base_url() ?>assets/template/node_modules/js/perfect-scrollbar.jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/template/js/off-canvas.js"></script>
        <script src="<?php echo base_url() ?>assets/template/js/hoverable-collapse.js"></script>
        <script src="<?php echo base_url() ?>assets/template/js/misc.js"></script>
        <script src="<?php echo base_url() ?>assets/datatables/jquery-3.1.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/datatables/jquery.dataTables.min.js"></script>       


        <script type="text/javascript">
            $(document).ready(function () {
                $('#tbl').DataTable({
                    "ordering": false
                });
            });
        </script>  
    </body>
</html>
