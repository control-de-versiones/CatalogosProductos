<?php /* Smarty version Smarty-3.1.18, created on 2014-06-05 01:57:54
         compiled from "application/views/producto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1048947167538fa7be812a14-13638286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f824352057ac9f7dc7e401e4005d751549327dbe' => 
    array (
      0 => 'application/views/producto.tpl',
      1 => 1401926273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1048947167538fa7be812a14-13638286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538fa7be8cd269_08779422',
  'variables' => 
  array (
    'url' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538fa7be8cd269_08779422')) {function content_538fa7be8cd269_08779422($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
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


                                        <?php echo form_open($_smarty_tpl->tpl_vars['url']->value);?>


                                        <h5>Nombre</h5>
                                        <input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['product']->value)) {?><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->name;?>
<?php }?>"/>

                                        <h5>Descripción</h5>
                                        <textarea name="desc"><?php if (isset($_smarty_tpl->tpl_vars['product']->value)) {?><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->desc;?>
<?php }?></textarea>

                                        <h5>Stock</h5>
                                        <input type="text" name="stock" value="<?php if (isset($_smarty_tpl->tpl_vars['product']->value)) {?><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->stock;?>
<?php }?>"/>

                                        <h5>Precio</h5>
                                        <input type="text" name="price" value="<?php if (isset($_smarty_tpl->tpl_vars['product']->value)) {?><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->price;?>
<?php }?>"/>

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
