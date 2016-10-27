<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gallery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container gallery">
            <h2 class="page-title">Gallery</h2>
            <ul class="thumbnails">
                <li class="span3">
                    <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/1.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/1.jpg" title="Image Title" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                    <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/2.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/2.jpg" title="Image Title" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                    <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/3.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/3.jpg" title="Image Title" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                    <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/4.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/4.jpg" title="Image Title" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                    <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/5.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/5.jpg" title="Image Title" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                    <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/6.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/6.jpg" title="Image Title" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                    <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/7.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/7.jpg" title="Image Title" /></a>
                </li> <!--end thumb -->
                <li class="span3">
                    <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/8.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/8.jpg" title="Image Title" /></a>
                </li> <!--end thumb -->
            </ul><!--end thumbnails -->
        </div> <!-- /container -->

        <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js">/script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" ></script>
        <script src="<?php echo base_url(); ?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>

        <script>
            // Colorbox Call
            $(document).ready(function() {
                $("[rel^='lightbox']").prettyPhoto();
            });
        </script>
    </body>
</html>
