<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <title>Ambiquity</title>
        <meta name="author" content="luckynvic@gmail.com">
        <link href="<?php echo base_url('assets/user/') ?>css/bootstrap.min.css" rel="stylesheet">       
        <link href="<?php echo base_url('assets/user/') ?>ext/customScroll/css/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/user/') ?>css/style.default.css" rel="stylesheet">
        <link href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" rel="stylesheet">         

    </head>
    <body>
        <nav class="navbar navbar-default nav-fixed-top" role="navigation" id="app-nav-bar" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
             
                <a class="navbar-brand" href="<?php echo base_url('c_user'); ?>">Tempat working space Malang Raya</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- <li class="nav-item">
                        <a href="<?php echo base_url('c_user'); ?>">Home</a>
                     --></li>
                    <!-- <li class="nav-item">
                        <a href="<?php echo base_url('c_user'); ?>">Map</a>
                    </li> -->
                    <!-- <li>
                        <a href="<?php echo base_url('c_user/browse'); ?>">Browse</a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url('c_user/help'); ?>">Help</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c_user/about') ?>">About</a>
                    </li>
                </ul>
               
                <ul class="nav navbar-nav navbar-right">                    
                    <li>
                        <a target="_blank" href="<?php echo base_url() ?>c_adm_utama">Login</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

         <?php
        $this->load->view($konten);
         ?>        
         
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url('assets/user/') ?>js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url('assets/user/') ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets/user/') ?>ext/customScroll/js/jquery.mCustomScrollbar.min.js"></script>
         <script src="<?php echo base_url('assets/user/') ?>js/holder.js"></script>
        <script src="<?php echo base_url('assets/user/') ?>ext/customScroll/js/jquery.mousewheel.min.js"></script>
        <script src="<?php echo base_url('assets/user/') ?>js/application.js"></script>      

  </body> 
  
</html>