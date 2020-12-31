<?php /* Smarty version Smarty-3.1.18, created on 2014-06-05 00:08:22
         compiled from "application/views/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35489359538f8d15cbfa51-75488078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1156a2c42a01daaca1eba7a8f510ad53035cc195' => 
    array (
      0 => 'application/views/nuevo.tpl',
      1 => 1401919692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35489359538f8d15cbfa51-75488078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538f8d15d5c9d2_72722897',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538f8d15d5c9d2_72722897')) {function content_538f8d15d5c9d2_72722897($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <!-- page_section -->
        <section class="page_section">
                 
            <div class="content_section container">
            	<div class="row">
                	<div class="col-md-12">
                    	<div class="blog_post_page">
                            <div class="blog_post_content">
                            	<div class="contentarea">

                                    <div class="jumbotron">
                                        <h2>Nuevo producto</h2>
                                        <?php echo validation_errors();?>


                                        <?php echo form_open('nuevo');?>


                                        <h5>Nombre</h5>
                                        <input type="text" name="name" value=""/>

                                        <h5>Descripción</h5>
                                        <textarea name="desc" value=""></textarea>

                                        <h5>Stock</h5>
                                        <input type="text" name="stock" value=""/>

                                        <h5>Precio</h5>
                                        <input type="text" name="price" value=""/>

                                        <input type="submit" value="Enviar" />

                                        </form>

                                      </div>

                                </div> 
                                
                            </div>                            
                    	</div><!-- //blog_post_page-->                        
                	</div>
                </div>  

<?php echo $_smarty_tpl->getSubTemplate ("./foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
