<?php /* Smarty version Smarty-3.1.18, created on 2014-06-05 02:41:59
         compiled from "application/views/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1872790941538f67be580938-28362690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7a0974809125b85f3a2f7b67f8a548df3bf385' => 
    array (
      0 => 'application/views/home.tpl',
      1 => 1401928916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872790941538f67be580938-28362690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538f67be663b78_29765182',
  'variables' => 
  array (
    'products' => 0,
    'admin' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538f67be663b78_29765182')) {function content_538f67be663b78_29765182($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <!-- page_section -->
        <section class="page_section">
                 
            <div class="content_section container"> 
            	<div class="row">
                	<div class="col-md-12">
                    	<div class="blog_post_page">
                            <div class="blog_post_content">
                            	<div class="contentarea">

                            		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?> 

                                    <div class="row">
                                        <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['admin']->value==1) {?>10<?php } else { ?>12<?php }?>">
                                            <div class="row">
                                                <div class="service">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="<?php echo base_url('');?>
<?php echo $_smarty_tpl->tpl_vars['i']->value->img;?>
">
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="contentarea">
                                                                <span class="service_title"><?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
 </span>
                                                                <p class="desc"><?php echo $_smarty_tpl->tpl_vars['i']->value->desc;?>

                                                            </div>

                                                                <div class="blogpost_share">                                                    
                                                                    <a class="share_facebook" href="javascript:void(0);"><i style="color:#37599e" class="fa fa-facebook-square"></i></a>
                                                                    <a class="share_gplus" href="javascript:void(0);"><i style="color:#d1452e" class="fa fa-google-plus-square"></i></a>
                                                                    <a class="share_tweet" href="javascript:void(0);"><i style="color:#00a9f4" class="fa fa-twitter"></i></a>

                                                                    <span class="price"><?php echo $_smarty_tpl->tpl_vars['i']->value->price;?>
 €</span>
                                                                    <a class="share_pinterest" href="javascript:void(0);"><i style="color:#db3419" class="fa fa-pinterest"></i></a>
                                                                    <div class="clear"></div>
                                                                </div>
                     
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php if ($_smarty_tpl->tpl_vars['admin']->value==1) {?>
                                        <div class="col-md-2">
                                        	<div class="service">
                                        		<div class="btn-group-vertical">
                                        		  <h3>Stock: <?php echo $_smarty_tpl->tpl_vars['i']->value->stock;?>
</h3>
											      <button type="button" class="btn btn-primary" onClick="location.href='<?php echo base_url('producto/edit/');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value->pid;?>
'">Editar</button>
											      <button type="button" class="btn btn-danger" onClick="location.href='<?php echo base_url('home/delete/');?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value->pid;?>
'">Eliminar</button>
											      
											    </div>
                                        	</div>
                                        </div>
                                    	<?php }?>

                                    </div>
                                    
                                    <?php } ?>

                             
                                </div> 
                                
                            </div>                            
                    	</div><!-- //blog_post_page-->                        
                	</div>
                </div>  
 <?php echo $_smarty_tpl->getSubTemplate ("./foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
