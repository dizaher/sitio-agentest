<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Plataforma Tecnologica TOC</title>
    <meta name="description" content="TOC Technology Outsourcing Center">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/sl-slide.css">

    <script src="<?php echo base_url(); ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/iconTOC.png">   
    
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?php echo site_url('ctoc') ?>"></a>
                <h3 id="encabezado">Ecosistema de Innovación</h3>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">                                                                                                          
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('ctoc/quienes') ?>">Quiénes Somos</a></li>                                            
                                <li><a href="<?php echo site_url('ctoc/difusion') ?>">Noticias y Difusión</a></li>                                            
                                <li><a href="<?php echo site_url('ctoc/contacto') ?>">Contacto</a></li> 
                                <li><a href="<?php echo site_url('ctoc/cie') ?>">Aliados</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos Y servicios <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('ctoc/prodserv') ?>">Ecotecnologías</a></li>
                                <li><a href="<?php echo site_url('ctoc/asesorias') ?>">Asesorías</a></li>
                                <li><a href="<?php echo site_url('ctoc/progcap') ?>">Programas de Capacitación</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">I+D+i <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('ctoc/proyectos') ?>">Proyectos</a></li>
                                <li><a href="<?php echo site_url('ctoc/estudios') ?>">Estudios</a></li>                                            
                                <li><a href="<?php echo site_url('ctoc/cadenas') ?>">Cadenas y Sectores</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agentes de Innovación</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('ctoc/empresas') ?>">Empresas</a></li>                     
                                        <li><a href="<?php echo site_url('ctoc/ies') ?>">IES</a></li>
                                        <li><a href="<?php echo site_url('ctoc/centros') ?>">Centros de Investigación</a></li>
                                        <li><a href="<?php echo site_url('ctoc/nivelesgobierno') ?>">Niveles de Gobierno</a></li>
                                        <li><a href="<?php echo site_url('ctoc/poderesgobierno') ?>">Poderes de Gobierno</a></li>
                                        <li><a href="<?php echo site_url('ctoc/finan') ?>">Financieras, Incubadoras y Aceleradoras</a></li>
                                        <li><a href="<?php echo site_url('ctoc/orgciviles') ?>">Organizaciones Civiles</a></li>                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ecosistema <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('ctoc/apoyos') ?>">Apoyos</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Áreas</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('ctoc/agua') ?>">Agua</a></li>
                                        <li><a href="<?php echo site_url('ctoc/energia') ?>">Energía</a></li>
                                        <li><a href="<?php echo site_url('ctoc/alimentacion') ?>">Alimentación</a></li>
                                        <li><a href="<?php echo site_url('ctoc/transporte') ?>">Transporte</a></li>
                                        <li><a href="<?php echo site_url('ctoc/vivienda') ?>">Vivienda</a></li>
                                        <li><a href="<?php echo site_url('ctoc/seguridad') ?>">Seguridad</a></li>
                                        <li><a href="<?php echo site_url('ctoc/residuos') ?>">Residuos Sólidos Urbanos</a></li>
                                        <li><a href="<?php echo site_url('ctoc/salud') ?>">Salud</a></li>
                                        <li><a href="<?php echo site_url('ctoc/educacion') ?>">Educación</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pilares</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('ctoc/mercado') ?>">Mercado</a></li>
                                        <li><a href="<?php echo site_url('ctoc/marco') ?>">Marco Regulatorio</a></li>
                                        <li><a href="<?php echo site_url('ctoc/capihumano') ?>">Capital Humano</a></li>                                           
                                        <li><a href="<?php echo site_url('ctoc/forta') ?>">Innovación Empresarial</a></li>
                                        <li><a href="<?php echo site_url('ctoc/genconocimiento') ?>">Conocimiento estratégico</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Premisas</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('ctoc/innovacion') ?>">Estrategia de Innovación</a></li>
                                        <li><a href="<?php echo site_url('ctoc/areasimpacto') ?>">Áreas de Impacto</a></li>
                                        <li><a href="<?php echo site_url('ctoc/mecanismo') ?>">Coordinación entre Agentes</a></li>
                                        <li><a href="<?php echo site_url('ctoc/cuentas') ?>">Rendición de Cuentas</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>                        
                        <li><a href="<?php echo site_url('ctoc/interes') ?>">Sitios de interés</a></li>   
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></a>
                            <ul class="dropdown-menu">
                                <li>Bienvenid@ <?=$this->session->userdata('usuario'); ?>!</li>                                                                                                    
                                <li><a href="<?php echo site_url('cregistro/logout') ?>">Cerrar Sesión</a></li>                                
                            </ul>
                        </li>           
                        
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->

    <!--Slider-->
    <?php $this->load->view($contenido) ?>
<!--/Slider-->

<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>Datos de ubicación</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Dirección:</strong> Calle México # 34,Colonia Pumar <br> Xalapa , Veracruz, México
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong> contacto@tocveracruz.com.mx
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Website:</strong> www.tocveracruz.com.mx
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Teléfono:</strong> +052 (228) 8419919
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links
            <div id="tweets" class="span3">
                <h4>OUR COMPANY</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Copyright</a></li>
                        <li><a href="#">We are hiring</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>  
            </div>-->
            <!--Important Links-->

            <!--Archives
            <div id="archives" class="span3">
                <h4>ARCHIVES</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">December 2012 (1)</a></li>
                        <li><a href="#">November 2012 (5)</a></li>
                        <li><a href="#">October 2012 (8)</a></li>
                        <li><a href="#">September 2012 (10)</a></li>
                        <li><a href="#">August 2012 (29)</a></li>
                        <li><a href="#">July 2012 (1)</a></li>
                        <li><a href="#">June 2012 (31)</a></li>
                    </ul>
                </div>
            </div>-->
            <!--End Archives-->            

        </div>

    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
            </div>
            <!--/Copyright

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>                    
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>                    
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>-->

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Formulario de Ingreso</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">            
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        <!--<a href="#">Forgot your password?</a>-->
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="<?php echo base_url(); ?>js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="<?php echo base_url(); ?>js/jquery.ba-cond.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>