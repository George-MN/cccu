<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Chiromo Campus Christian Union" />
        <meta name="keywords" content="Chiromo Campus Christian Union,Union,Chiromo,Christian,CCCU"/>
        <meta name="author" content="Paul Muriithi" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chiromo Campus Christian Union</title>

        <!-- =========================
         FAV AND TOUCH ICONS  
        ============================== -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/icons/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="http://designlab.co/wrapbootstrap/zerif-html/v1.1/images/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/images/icons/apple-touch-icon-114x114.png">

        <!-- =========================
             STYLESHEETS      
        ============================== -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.vegas.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/icon-fonts/styles.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pixeden-icons.css"> 
        <!-- CUSTOM STYLES -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">   
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-overrides.css" type="text/css" />-->

        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css" type="text/css" media="screen" />    
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css" media="screen, projection" />  

        <!-- WEBFONT -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
                                <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
                                <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
                        <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    </head>
    <body>
        <!-- =========================
           PRE LOADER       
        ============================== -->
        <div class="preloader">
            <div class="status">&nbsp;</div>
        </div>
        <!-- =========================
           HOME SECTION       
        ============================== -->
        <header id="home" class="header">

            <!-- TOP BAR -->
            <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
                <div class="container">
                    <div class="navbar-header responsive-logo">
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">
                            <!--<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Zerif">-->
                            <h4 style="color:#6cc7dd;"> Chiromo Campus Christian Union</h4>
                        </a>
                    </div>
                    <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
                        <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                            <li><a href="index.html#home">Home</a></li>
                            <li><a href="index.html#events">Events</a></li>
                            <li><a href="index.html#aboutus">About Us</a></li>
                            <li><a href="index.html#team">Leadership</a></li>
                            <li><a href="index.html#register">Register</a></li>
                            <li><a href="index.html#testimonials">Articles</a></li>
                            <li><a href="index.html#features">Gallery</a></li>
                            <li><a href="index.html#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- / END TOP BAR -->
            <section id="feature_slider" class="lol">
                <!-- 
                    Each slide is composed by <img> and .info
                    - .info's position is customized with css in index.css
                    - each <img> parallax effect is declared by the following params inside its class:
                    
                    example: class="asset left-472 sp600 t120 z3"
                    left-472 means left: -472px from the center
                    sp600 is speed transition
                    t120 is top to 120px
                    z3 is z-index to 3
                    Note: Maintain this order of params
        
                    For the backgrounds, you can combine from the bgs folder :D
                -->
                <article class="slide" id="tour" style="background: url('assets/images/backgrounds/first.jpg') repeat-x top center;">
                    <div class="info">
                        <h2 style="text-transform: none; font-size: 30px !important;">Chiromo Campus Christian Union</h2>
                        <h2 style="text-transform: none ; font-size: 16px !important;">We call it home</h2>
                    </div>
                </article>

                <article class="slide" id="showcasing" style="background: url('assets/images/backgrounds/second.jpg') repeat-x top center;">
                    <div class="info">
                        <h2 style="text-transform: none; font-size: 30px !important;">Theme</h2>
                        <h2 style="text-transform: none ; font-size: 16px !important;">Guard The Entrusted</h2>
                    </div>
                </article>
                <article class="slide" id="tour2" style="background: url('assets/images/backgrounds/third.jpg') repeat-x top center;">
                    <div class="info">
                        <h2 style="text-transform: none; font-size: 30px !important;">Theme</h2>
                        <h2 style="text-transform: none ; font-size: 16px !important;">Guard The Entrusted</h2>
                    </div>
                </article>
                <article class="slide" id="showcasing2" style="background: url('assets/images/backgrounds/fourth.jpg') repeat-x top center;">
                    <div class="info">
                        <h2 style="text-transform: none; font-size: 30px !important;">Queens at a past event</h2>
                    </div>
                </article>
                <article class="slide" id="showcasing2" style="background: url('assets/images/backgrounds/second.jpg') repeat-x top center;">
                    <div class="info">
                        <h2 style="text-transform: none; font-size: 30px !important;">Queens at a past event</h2>
                    </div>
                </article>
            </section>
        </header> <!-- / END HOME SECTION  -->