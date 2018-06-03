<?php
  session_start();
require('config/config.php') ; 
include("common/load-page.php"); 
?>
<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="comida,delivery,pedir comida,domicilio,cochabamba">
    <meta name="description" content="quepedimos.com.bo es el servicio de comida a domicilio líder en calidad que ofrece auténticas experiencias gastronómicas. Aquí encontrarás las cartas más extensas y variadas del mercado y una selección de los mejores restaurantes.">
    <meta name="subjetc" content="quepedimos.com.bo es el servicio de comida a domicilio líder en calidad que ofrece auténticas experiencias gastronómicas.">
    <meta name="Author" content="Qwerty Bolivia">

    <title>Qué pedimos</title>

   
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>





	<link href="./libs/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="./libs/layerslider/css/layerslider.css" rel="stylesheet">
	<link href="./libs/layerslider/skins/v5/skin.css" rel="stylesheet">
	<link href="./libs/slick/css/slick.css" rel="stylesheet">
	<link href="./libs/slick/css/slick-theme.css" rel="stylesheet">
	<link href="./css/base.css" rel="stylesheet">
	<link href="./css/site.css" rel="stylesheet">


<body>
<header >
    <div class="">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="/" id="logo">
                    <img src="./img/logo.png" height="60" alt="" data-retina="true"
                         class="logo hidden-xs">
                    <img src="./img/logo.png" height="60" alt="" data-retina="true"
                         class="logo hidden-lg hidden-md hidden-sm" style="margin-left: 0">
                </a>
            </div>
            <nav class="col--md-8 col-sm-8 col-xs-8">
                <div class="main-menu main-menu-bar">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/QuePedimos.com.bo/?ref=bookmarks">Visítanos en <i style="font-size: 19px;"
                                    class="icon-facebook-squared"></i></a></li>
                        
                    </ul>
                </div>
                <!-- End main-menu -->
            </nav>
           
           
          
            <nav class="col--md-8 col-sm-8 col-xs-8">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:$('#header-menu').show();"><span>Menu mobile</span></a>

                 <div class="main-menu">
                    <div id="header_menu">
                        <img src="./img/logo.png" height="60" alt="" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                    <ul>
                                                <li><a href="index.php?page=restaurant&module=restaurant" class="show-submenu">INICIO</a></li>
                        <li><a href="index.php?page=restaurant&module=restaurant&accion_event=SearchCategory&accion_view=Category&category=restaurant" class="show-submenu">RESTAURANTES</a></li>
                        <li><a href="index.php?page=restaurant&module=restaurant&accion_event=SearchCategory&accion_view=Category&category=pub" class="show-submenu">BOLICHES</a></li>
                        <li><a href=" index.php?page=restaurant&module=restaurant&accion_event=contacts&accion_view=contacts">CONTACTO</a></li>
                       
                        <li id="logout2" style="display:none"><a href="javascript:Logout();">LOGOUT</a></li>
                        
                        
                        
                        <li class="visible-xs visible-sm">
                             <a target="_blank" href="https://www.facebook.com/QuePedimos.com.bo/?ref=bookmarks">Visítanos en &nbsp; <i
                                    class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
             
                <!-- End main-menu -->
            </nav>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</header>
<div id="header-menu">
   <div class="main-menu header-menu">
                    <div id="header_menu">
                        <img src="./img/logo.png" height="60" alt="" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                    <ul>
                                                <li><a href="index.php?page=restaurant&module=restaurant" class="show-submenu">INICIO</a></li>
                        <li><a href="index.php?page=restaurant&module=restaurant&accion_event=SearchCategory&accion_view=Category&category=restaurant" class="show-submenu">RESTAURANTES</a></li>
                        <li><a href="index.php?page=restaurant&module=restaurant&accion_event=SearchCategory&accion_view=Category&category=pub" class="show-submenu">BOLICHES</a></li>
                        <li><a href=" index.php?page=restaurant&module=restaurant&accion_event=contacts&accion_view=contacts">CONTACTO</a></li>
                       
                        <li id="logout2"><a href="javascript:Logout();">LOGOUT</a></li>
                        
                        
                        
                        <li class="visible-xs visible-sm">
                             <a target="_blank" href="https://www.facebook.com/QuePedimos.com.bo/?ref=bookmarks">Visítanos en &nbsp; <i
                                    class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
                </div>
<?php 
		 			
	
	
	
	if(empty($_GET['page']))
	    $_SESSION['page']='restaurant';
	else
		$_SESSION['page'] = $_GET['page'];
		
	if(empty($_GET['module']))
		$_SESSION['module'] = 'restaurant';
	else
		$_SESSION['module'] = $_GET['module'];
		
	$loadPage1 = new Page($_SESSION['page'],$_SESSION['module']);
	
	include($loadPage1->loadPage()); 
?>

  

<footer>
    <div class="container">
       
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="https://www.facebook.com/QuePedimos.com.bo/?ref=bookmarks"><i style="font-size: 19px;"
                                    class="icon-facebook-squared"></i></a></li>

                    </ul>
                    <p>© Qué pedimos 2017</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer>

<div class="layer"></div>

<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="review" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <form id="review" class="popup-form" name="review" action="comments.php" method="post">
					<input  type="text" id="page"  name="page" value="comment" style="display:none">
					<input type="text" id="module"  name="module" value="restaurant" style="display:none">
					<input type="text" id="accion_event"  name="accion_event" value="insert" style="display:none">
					<input type="text" id="accion_view"  name="accion_view" value="comments" style="display:none">
					<input type="text"  id="facebook_id"  name="facebook_id" style="display:none">
					<input type="text" id="facebook_name" name="facebook_name" style="display:none">
					<input type="text" id="facebook_email" name="facebook_email" style="display:none">
					<input type="text" id="restaurant_id" name="restaurant_id" value="<?php if(!empty($_GET['id'])) echo $_GET['id'];?>" style="display:none">
					<input type="text" id="date" name="date" style="display:none">
					<input type="text" id="quality" name="quality" style="display:none" value=0>
					<div class="login_icon"><i class="icon_comment_alt"></i></div>
					<textarea type="text" id="description" name="description" class="form-control form-white" style="height:200px"></textarea>
					<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
					</fb:login-button>
					<input   type="submit"  value="Dejar comentario" class="btn btn-submit" id="submit-review">
				</form>
            <div id="message-review"></div>
        </div>
    </div>
</div>



<script src="./js/jquery.js"></script>


<script src="./libs/layerslider/js/greensock.js"></script>
<script src="./libs/layerslider/js/layerslider.transitions.js"></script>
<script src="./libs/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="./libs/slick/js/slick.min.js"></script>
<script src="./js/common_scripts_min.js"></script>
<script src="./js/functions.js"></script>
<script src="./js/validate.js"></script>
<script src="./js/jquery.form.min.js"></script>


<script src="./js/facebookSDK.js"></script>
<script type="text/javascript">
jQuery(document).ready(function () {


	$(document).ready(function () {
		'use strict';
		$('#layerslider').layerSlider({
			autoStart: true,
			responsive: true,
			responsiveUnder: 1280,
			layersContainer: 1170,
			navButtons: false,
			showCircleTimer: false,
			navStartStop: false,
			skinsPath: './libs/layerslider/skins/'
		});	
	});
		
	$("#start1").click(function(){
		$("#quality").val("1");		
	});
	$("#start2").click(function(){
		$("#quality").val("2");		
	});
	$("#start3").click(function(){
		$("#quality").val("3");		
	});
	$("#start4").click(function(){
		$("#quality").val("4");
	});
	$("#start5").click(function(){
		$("#quality").val("5");
	});
	
    $("#car-rest").slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


    $("#car-cats").slick({
		centerMode: true,
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});</script></body>
</html>
