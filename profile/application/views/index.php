<!--
                Hi guys.. 
                                        Welcome to my Website ;)

              _        ______    _   _               _ _       
     /\      | |      |  ____|  | | | |             | (_)      
    /  \   __| | ___  | |__ __ _| |_| |__  _   _  __| |_ _ __  
   / /\ \ / _` |/ _ \ |  __/ _` | __| '_ \| | | |/ _` | | '_ \ 
  / ____ \ (_| |  __/ | | | (_| | |_| | | | |_| | (_| | | | | |
 /_/    \_\__,_|\___| |_|  \__,_|\__|_| |_|\__,_|\__,_|_|_| |_|
                                                               
                                                               
-->

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>

        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Ade Fathudin | Official Website</title>
        <meta name="description" content="">  
        <meta name="author" content="Ade Fathudin">
        <meta name='language' content='Indonesia'>
        <meta property='og:type' content='website'>
        <meta property='og:site_name' content='Ade Fathudin'>
        <meta property='og:locale' content='id'>
        <meta property='og:url' content="https://www.adefathudin.com">
        <meta property='og:image' content='<?= base_url() ?>images/profile-pic-no-compress.jpg'>
        <meta property='og:title' content="Ade Fathudin">
        <meta property='og:description' content="Ade Fathudin | Official Website">


        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
   ================================================== -->
        <link rel="stylesheet" href="<?php echo base_url('css/base.css'); ?>">  
        <link rel="stylesheet" href="<?php echo base_url('css/main.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/vendor.css'); ?>">     

        <!-- script
        ================================================== -->   


        <!-- favicons
             ================================================== -->
        <link rel="icon" type="image/png" href="<?php echo base_url('images/favicon.ico'); ?>">

    </head>

    <body id="top">

        <?php
        $this->load->view('header');
        $this->load->view('intro');
        $this->load->view('about');
        $this->load->view('resume');
        $this->load->view('portfolio');
        $this->load->view('contact');
        $this->load->view('blog');
        $this->load->view('footer');
        ?>


        <div id="preloader"> 
            <div id="loader"></div>
        </div> 

        <!-- Java Script
        ================================================== --> 
        <script src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
        <script src="<?php echo base_url('js/modernizr.js'); ?>"></script>
        <script src="<?php echo base_url('js/pace.min.js'); ?>"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="<?php echo base_url('js/plugins.js') ?>"></script>
        <script src="<?php echo base_url('js/main.js') ?>"></script>
    </body>

</html>
