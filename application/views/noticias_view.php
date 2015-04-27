<section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">
        
        <!--Slider Items-->    
        <div class="sl-slider">
            <?php 
            foreach ($noti_principales as $np) {                                                       
                ?>  
                <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div class="container">                                             
                            <img class="pull-right" src="<?=base_url()?>img/Noticias/<?=$np->atu_imagen?>" alt="" />
                            <h2><?php echo $np->atu_nombre; ?></h2>
                            <p><?php echo $np->atu_descripcion; ?></p>                        
                        </div>
                    </div>
                </div>                             
                <?php                   
            }
            ?>            
        </div>
        <!--/Slider Items-->

        <!--Slider Next Prev button-->
        <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
            <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
        </nav>
        <!--/Slider Next Prev button-->

    </div>
    <!-- /slider-wrapper -->           
</section>

<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>Novedades</h3>            
        </div>

        <div class="row-fluid">
            <?php 
            foreach ($noti_secundarias as $ns) {                                                       
                ?>
                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-leaf icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $ns->atu_nombre; ?></h4>
                            <p><?php echo $ns->atu_descripcion; ?></p>
                        </div>
                    </div>
                </div>
             <?php                   
            }
            ?>
        </div>  
        <div class="gap"></div>
        

    </div>
</section>

<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">                                        
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                    <img src="<?php echo base_url(); ?>img/CIE/cie.jpg">
                </div>                
            </div>
            <div class="span10">
                <div id="myCarousel" class="carousel slide clients">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span4"><a href="#"><img src="<?php echo base_url(); ?>img/CIE/reintech.jpg"></a></li>
                                <li class="span4"><a href="#"><img src="<?php echo base_url(); ?>img/CIE/ayuda.jpg"></a></li>
                                <li class="span4"><a href="#"><img src="<?php echo base_url(); ?>img/CIE/amanecer.jpg"></a></li>                                
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="<?php echo base_url(); ?>img/CIE/greenit.jpg"></a></li>
                                <li class="span5"><a href="#"><img src="<?php echo base_url(); ?>img/CIE/estecs.jpg"></a></li>
                                                               
                            </ul>
                        </div>
                    </div>                    
                </div>
                <!-- /Carousel items -->

            </div>
        </div>
    </div>
</div>
</section>