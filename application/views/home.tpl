{include file="./head.tpl"}
        
        <!-- page_section -->
        <section class="page_section">
                 
            <div class="content_section container"> 
            	<div class="row">
                	<div class="col-md-12">
                    	<div class="blog_post_page">
                            <div class="blog_post_content">
                            	<div class="contentarea">

                            		{foreach from=$products key=key item=i name=foo} 

                                    <div class="row">
                                        <div class="col-md-{if $admin == 1}10{else}12{/if}">
                                            <div class="row">
                                                <div class="service">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="{base_url('')}{$i->img}">
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="contentarea">
                                                                <span class="service_title">{$i->name} </span>
                                                                <p class="desc">{$i->desc}
                                                            </div>

                                                                <div class="blogpost_share">                                                    
                                                                    <a class="share_facebook" href="javascript:void(0);"><i style="color:#37599e" class="fa fa-facebook-square"></i></a>
                                                                    <a class="share_gplus" href="javascript:void(0);"><i style="color:#d1452e" class="fa fa-google-plus-square"></i></a>
                                                                    <a class="share_tweet" href="javascript:void(0);"><i style="color:#00a9f4" class="fa fa-twitter"></i></a>

                                                                    <span class="price">{$i->price} €</span>
                                                                    <a class="share_pinterest" href="javascript:void(0);"><i style="color:#db3419" class="fa fa-pinterest"></i></a>
                                                                    <div class="clear"></div>
                                                                </div>
                     
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {if $admin == 1}
                                        <div class="col-md-2">
                                        	<div class="service">
                                        		<div class="btn-group-vertical">
                                        		  <h3>Stock: {$i->stock}</h3>
											      <button type="button" class="btn btn-primary" onClick="location.href='{base_url('producto/edit/')}/{$i->pid}'">Editar</button>
											      <button type="button" class="btn btn-danger" onClick="location.href='{base_url('home/delete/')}/{$i->pid}'">Eliminar</button>
											      
											    </div>
                                        	</div>
                                        </div>
                                    	{/if}

                                    </div>
                                    
                                    {/foreach}

                             
                                </div> 
                                
                            </div>                            
                    	</div><!-- //blog_post_page-->                        
                	</div>
                </div>  
 {include file="./foot.tpl"}