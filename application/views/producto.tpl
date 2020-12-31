{include file="./head.tpl"}
        
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
                                        {validation_errors()}

                                        {form_open($url)}

                                        <h5>Nombre</h5>
                                        <input type="text" name="name" value="{if isset($product)}{$product[0]->name}{/if}"/>

                                        <h5>Descripción</h5>
                                        <textarea name="desc">{if isset($product)}{$product[0]->desc}{/if}</textarea>

                                        <h5>Stock</h5>
                                        <input type="text" name="stock" value="{if isset($product)}{$product[0]->stock}{/if}"/>

                                        <h5>Precio</h5>
                                        <input type="text" name="price" value="{if isset($product)}{$product[0]->price}{/if}"/>

                                        <h5>Ruta Imagen</h5>
                                        <input type="text" name="img" value="{if isset($product)}{$product[0]->img}{/if}"/>

                                        <input type="submit" value="Enviar" />

                                        </form>

                                      </div>

                                </div> 
                                
                            </div>                            
                    	</div><!-- //blog_post_page-->                        
                	</div>
                </div>  

{include file="./foot.tpl"}