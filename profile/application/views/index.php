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
    <meta property='og:image' content='https://adefathudin.com/images/profile-pic-no-compress.jpg'>
    <meta property='og:title' content="Ade Fathudin">
    <meta property='og:description' content="Ade Fathudin | Official Website">
    

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="<?php echo base_url('css/base.css');?>">  
   <link rel="stylesheet" href="<?php echo base_url('css/main.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('css/vendor.css');?>">     

   <!-- script
   ================================================== -->   
	<script src="<?php echo base_url('js/modernizr.js');?>"></script>
	<script src="<?php echo base_url('js/pace.min.js');?>"></script>
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>


   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="<?php echo base_url('images/favicon.ico');?>">

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
	<script src="<?php echo base_url('js/jquery-3.3.1.min.js')?>"></script>
   <script src="<?php echo base_url('js/plugins.js')?>"></script>
   <script src="<?php echo base_url('js/main.js')?>"></script>
 <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4300768,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4300768&101" alt="blog stats" border="0"></a></noscript>
<!-- Histats.com  END  -->
</body>

</html>
