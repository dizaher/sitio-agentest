<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Noticias</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">                    	
                        <li><a href="<?php echo site_url('ctoc') ?>">Principal</a> <span class="divider">/</span></li>
                        <li class="active">Difusión</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->   

    <!-- 404 error -->
    <section id="about-us" class="container">        
        <div class="blog">
            <?php 
        if ($results == 0) {
            echo "No hay Noticias recientes";
        }
        else{

            foreach($results as $data){ ?>
                <div class="blog-item well">
                    <a href="#"><h2><?php echo $data->atu_nombre; ?></h2></a>
                    <div class="blog-meta clearfix">
                        <p class="pull-left"><i class="icon-calendar"></i> <?php echo $data->atu_fecha; ?></p>                    
                    </div>
                    <p><img src="<?=base_url()?>img/Noticias/<?=$data->atu_imagen?>" width="100px"/>
                        </p>
                    <p><?php echo $data->atu_descripcion; ?></p>                
                </div>
                <!-- End Blog Item -->
            <?php
            }
        }
        ?>
        <div class="gap"></div>

        <div class="pagination">                 
        <p><?php echo $links; ?></p>
        </div>    
        </div>        
    </section>
    <!-- /404 error 