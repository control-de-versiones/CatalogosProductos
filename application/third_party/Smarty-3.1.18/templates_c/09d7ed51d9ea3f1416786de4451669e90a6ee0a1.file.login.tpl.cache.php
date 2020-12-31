<?php /* Smarty version Smarty-3.1.18, created on 2014-06-05 02:31:47
         compiled from "application/views/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1567418308538fb40aca3450-03575841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09d7ed51d9ea3f1416786de4451669e90a6ee0a1' => 
    array (
      0 => 'application/views/login.tpl',
      1 => 1401928290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1567418308538fb40aca3450-03575841',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538fb40acc7ad2_26209402',
  'variables' => 
  array (
    'class' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538fb40acc7ad2_26209402')) {function content_538fb40acc7ad2_26209402($_smarty_tpl) {?><!DOCTYPE html>
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
    <!-- Favicon && Apple touch -->
    <link rel="shortcut icon" href="<?php echo base_url('images/icons/favicon.ico');?>
" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url('images/icons/apple_icons_57x57.png');?>
">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('images/icons/apple_icons_72x72.png');?>
">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('images/icons/apple_icons_114x114.png');?>
">
    <!-- // IE  // -->
  <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800,700,300,600,400' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="<?php echo base_url('js/jquery.js');?>
"></script>
  <script src="<?php echo base_url('js/jquery-ui.min.js');?>
" type="text/javascript"></script>    
    <script type="text/javascript" src="<?php echo base_url('js/current.j');?>
s"></script>        
</head>
<body cz-shortcut-listen="true" class="animated single_page" data-animated="fadeIn">


    <div class="container">

                
                <?php echo validation_errors();?>


                <?php echo form_open('verifylogin',$_smarty_tpl->tpl_vars['class']->value);?>

                 <h2 class="form-signin-heading">Login Catálogo</h2>
                 <label for="username">Username:</label>
                 <input type="text" id="username" name="username"/>
                 <br/>
                 <label for="password">Password:</label>
                 <input type="password" id="passowrd" name="password"/>
                 <br/>
                 <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block"/>
                </form>

  </div> 
       
</body>
</html>
<?php }} ?>
