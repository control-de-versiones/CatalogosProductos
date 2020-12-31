<?php /* Smarty version Smarty-3.1.18, created on 2014-06-05 02:53:52
         compiled from "/var/www/webs/catalogo/application/views/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78033693538f986c89ef31-99755599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b50aa6ced30b42f59adb9eb37e1cfbc3f5bf826d' => 
    array (
      0 => '/var/www/webs/catalogo/application/views/head.tpl',
      1 => 1401929630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78033693538f986c89ef31-99755599',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538f986c8db877_91842763',
  'variables' => 
  array (
    'admin' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538f986c8db877_91842763')) {function content_538f986c8db877_91842763($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

    <link href="<?php echo base_url('css/bootstrap.css');?>
" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('css/plugins.css');?>
" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('css/animate.css');?>
" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('css/style.css');?>
" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('css/responsive.css');?>
" rel="stylesheet" type="text/css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('images/icons/favicon.ico');?>
" type="image/x-icon">
    <!-- // IE  // -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800,700,300,600,400' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="<?php echo base_url('js/jquery.js');?>
"></script>
	<script src="<?php echo base_url('js/jquery-ui.min.js');?>
" type="text/javascript"></script>    
    <script type="text/javascript" src="<?php echo base_url('js/current.js');?>
"></script>        
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
                        <a href="index-2.html#top"><img class="logo_def" src="<?php echo base_url('images/logo.png');?>
" width="150" height="30" alt="" /><img class="logo_retina" height="30" width="150" alt="" src="<?php echo base_url('images/retina/logo.png');?>
" /></a>
                    </div>
                    <!-- menu -->
                    <nav class="navmenu">
                        <ul>
                            <li class="scrollable"><a class="active" href="<?php echo base_url();?>
">Home</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['admin']->value==1) {?>
                            <li class="scrollable"><a class="active" href="<?php echo base_url('producto');?>
">Añadir Nuevo</a></li>
                            <?php }?>
                            <li class="scrollable"><b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b></li>
                            <li class="scrollable"><a href="<?php echo base_url('home/logout');?>
">Salir</a></li>
                        </ul>
                    </nav><!-- end nav --> 
                    <div class="clear"></div>
            	</div>
            </header>               
        </section><!-- //header section --><?php }} ?>
