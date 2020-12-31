<?php /* Smarty version Smarty-3.1.18, created on 2018-05-09 22:10:08
         compiled from "C:\xampp\htdocs\Catalogo-PHP-master\application\views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176415af355a006a3c8-70594857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9563964f13415e71ad4c0f735361994e9b59d837' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Catalogo-PHP-master\\application\\views\\head.tpl',
      1 => 1525896597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176415af355a006a3c8-70594857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5af355a012c9b3_29963853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af355a012c9b3_29963853')) {function content_5af355a012c9b3_29963853($_smarty_tpl) {?><!DOCTYPE html>
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
