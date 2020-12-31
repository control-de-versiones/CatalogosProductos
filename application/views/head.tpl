<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

    <link href="{base_url('css/bootstrap.css')}" rel="stylesheet" type="text/css" />
    <link href="{base_url('css/plugins.css')}" rel="stylesheet" type="text/css" />
    <link href="{base_url('css/animate.css')}" rel="stylesheet" type="text/css" />
    <link href="{base_url('css/style.css')}" rel="stylesheet" type="text/css" />
    <link href="{base_url('css/responsive.css')}" rel="stylesheet" type="text/css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{base_url('images/icons/favicon.ico')}" type="image/x-icon">
    <!-- // IE  // -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800,700,300,600,400' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="{base_url('js/jquery.js')}"></script>
	<script src="{base_url('js/jquery-ui.min.js')}" type="text/javascript"></script>    
    <script type="text/javascript" src="{base_url('js/current.js')}"></script>        
</head>
<body class="animated single_page" data-animated="fadeIn">
    <!-- #page -->
    <div id="page">
        <!-- header section -->
        <section id="top">
            <header> 
            	<div class="container">                                   
                    <!-- logo -->
                    <div id="logo">
                        <a href="index-2.html#top"><img class="logo_def" src="{base_url('images/logo.png')}" width="150" height="30" alt="" /><img class="logo_retina" height="30" width="150" alt="" src="{base_url('images/retina/logo.png')}" /></a>
                    </div>
                    <!-- menu -->
                    <nav class="navmenu">
                        <ul>
                            <li class="scrollable"><a class="active" href="{base_url()}">Home</a></li>
                            {if $admin eq 1}
                            <li class="scrollable"><a class="active" href="{base_url('producto')}">Añadir Nuevo</a></li>
                            {/if}
                            <li class="scrollable"><b>{$username}</b></li>
                            <li class="scrollable"><a href="{base_url('home/logout')}">Salir</a></li>
                        </ul>
                    </nav><!-- end nav --> 
                    <div class="clear"></div>
            	</div>
            </header>               
        </section><!-- //header section -->