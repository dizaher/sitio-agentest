<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Plataforma Tecnologica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>css/estilosExtras.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />   
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="span1">
          <a href="<?php echo site_url('toc_controller') ?>">
          <img src="<?php echo base_url(); ?>img/Logo_TOC.png" alt="Logo TOC"></a>                    
        </div>
        <div class="span10">
          <h2>Technology Outsourcing Center</h2>  
          <h6>Ecosistema de Innovación</h6>     
        </div>      
        <div class="span1">
          <small>Apoyado</small>  
          <a href="http://www.conacyt.mx/" target="_blank"><img src="http://fca.uaq.mx/img/logo-conacyt.png" alt="Conacyt"></a>
        </div>
        
      </div>      
    </div>


    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>            
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">                
                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>img/simbolo_toc.jpg" alt="toc" width="14" heigth="14" ></a>               
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo site_url('toc_controller/quienes') ?>">Quiénes Somos</a></li>
                                <li><a href="<?php echo site_url('toc_controller/servicios') ?>">Servicios</a></li>
                                <li><a href="<?php echo site_url('toc_controller/difusion') ?>">Difusión</a></li>
                                <li><a href="<?php echo site_url('toc_controller/operaytec') ?>">Operaciones Y tecnologías</a></li>
                                <li><a href="<?php echo site_url('toc_controller/contacto') ?>">Contacto</a></li>                 
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agentes de Innovación<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo site_url('toc_controller/empresas') ?>">Empresas</a></li>                     
                                <li><a href="<?php echo site_url('toc_controller/ies') ?>">IES</a></li>
                                <li><a href="<?php echo site_url('toc_controller/centros') ?>">Centros de Investigación</a></li>
                                <li><a href="<?php echo site_url('toc_controller/nivelesgobierno') ?>">Niveles de Gobierno</a></li>
                                <li><a href="<?php echo site_url('toc_controller/poderesgobierno') ?>">Poderes de Gobierno</a></li>
                                <li><a href="<?php echo site_url('toc_controller/finan') ?>">FIA</a></li>
                                <li><a href="<?php echo site_url('toc_controller/orgciviles') ?>">Organizaciones Civiles</a></li>
                                <li><a href="<?php echo site_url('toc_controller/sociedad') ?>">Sociedad en General</a></li>                  
                    </ul>
                  </li>
                  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Areas<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('toc_controller/agua') ?>">Agua</a></li>
                                <li><a href="<?php echo site_url('toc_controller/energia') ?>">Energía</a></li>
                                <li><a href="<?php echo site_url('toc_controller/alimentacion') ?>">Alimentación</a></li>
                                <li><a href="<?php echo site_url('toc_controller/transporte') ?>">Transporte</a></li>
                                <li><a href="<?php echo site_url('toc_controller/vivienda') ?>">Vivienda</a></li>
                                <li><a href="<?php echo site_url('toc_controller/seguridad') ?>">Seguridad</a></li>
                                <li><a href="<?php echo site_url('toc_controller/residuos') ?>">Residuos Sólidos Urbanos</a></li>
                                <li><a href="<?php echo site_url('toc_controller/salud') ?>">Salud</a></li>
                                <li><a href="<?php echo site_url('toc_controller/educacion') ?>">Educación</a></li>                         
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Información<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('toc_controller/estudios') ?>">Estudios</a></li>
                                <li><a href="<?php echo site_url('toc_controller/programas') ?>">Programas</a></li>
                                <li><a href="<?php echo site_url('toc_controller/cadenas') ?>">Cadenas y Sectores</a></li>
                                <li><a href="<?php echo site_url('toc_controller/prodserv') ?>">Productos y Servicios</a></li>
                                <li><a href="<?php echo site_url('toc_controller/apoyos') ?>">Apoyos</a></li>
                                <li><a href="<?php echo site_url('toc_controller/progcap') ?>">Programas de Capacitación</a></li>
                                <li><a href="<?php echo site_url('toc_controller/politicas') ?>">Políticas y Marco Jurídico</a></li>
                                <li><a href="<?php echo site_url('toc_controller/herramientas') ?>">Tecnológicas de Articulación</a></li>
                                <li><a href="<?php echo site_url('toc_controller/clientesec') ?>">Clientes y Sectores</a></li>                          
                            </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pilares<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('toc_controller/mercado') ?>">Mercado</a></li>
                                <li><a href="<?php echo site_url('toc_controller/marco') ?>">Marco Regulatorio</a></li>
                                <li><a href="<?php echo site_url('toc_controller/capihumano') ?>">Capital Humano</a></li>
                                <li><a href="<?php echo site_url('toc_controller/finanincu') ?>">FIA</a></li>
                                <li><a href="<?php echo site_url('toc_controller/forta') ?>">Innovación Empresarial</a></li>
                                <li><a href="<?php echo site_url('toc_controller/genconocimiento') ?>">Conocimiento estratégico</a></li>                                                 
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Premisas<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('toc_controller/innovacion') ?>">Estrategia de Innovación</a></li>
                                <li><a href="<?php echo site_url('toc_controller/areasimpacto') ?>">Áreas de Impacto</a></li>
                                <li><a href="<?php echo site_url('toc_controller/mecanismo') ?>">Coordinación entre Agentes</a></li>
                                <li><a href="<?php echo site_url('toc_controller/cuentas') ?>">Rendición de Cuentas</a></li>                                                     
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Necesidades a Satisfacer<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('toc_controller/nichos') ?>">Nichos de Mercado</a></li>
                                <li><a href="<?php echo site_url('toc_controller/promocion') ?>">Apoyo I+D+i</a></li>
                                <li><a href="<?php echo site_url('toc_controller/financiamiento') ?>">Financiamiento</a></li>
                                <li><a href="<?php echo site_url('toc_controller/capital') ?>">Capital Humano</a></li>
                                <li><a href="<?php echo site_url('toc_controller/regularizacion') ?>">Legislación y Normatividad</a></li>                                                  
                            </ul>
                        </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

<?php $this->load->view($contenido) ?>

<!-- FOOTER -->
<footer class="piePagina">
  &copy; Copyright 2013 Todos los derechos Reservados. <img src="<?php echo base_url(); ?>img/mano-toc1.png" alt="Mano" width="30px" heigth="30px">
      <address>
      <strong>TOC Technology Outsourcing Center</strong><br>
      Calle México # 34,Colonia Pumar, Xalapa , Veracruz, México    
      <abbr title="Teléfono">Tel:</abbr> +052 (228) 8419919<br>
      www.tocveracruz.com.mx, RFC: TTO0804297VA<br>
      <a href="mailto:#">contacto@tocveracruz.com.mx</a>
      </address>
                
</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>   
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>    
    
  </body>
</html>





    

    








<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">      
      <div class="item active">
        <div class="row">
          <div class="span5">
            <img src="<?php echo base_url(); ?>img/Noticias/C_1.jpg" width="550" height="350" alt="" align="center">
          </div>
          <div class="span6 carousel-fondo">              
              <h4>Producto piloto en energía: Calentador Solar</h4>
              <p>La empresa TOC diseña y construye un calentador solar el cual tiene la función principal de calentar agua con la mayor parte de la energía solar que se pueda captar durante el día. Al desarrollar este producto el objetivo es lograr un ahorro en el consumo de gas, gracias al Calentador Solar se puede mantener el agua caliente durante todo el día sin hacer uso de combustible alguno.</p>
              <p>A este sistema se le ha agregado una lente fresnel misma que sirve para que aumente la ganancia de energía calorífica del líquido, a partir de este método de diseño más avanzada del Calentador Solar reduce las posibilidades de escape de calor.</p>              
          </div>
        </div>              
      </div>
      <div class="item">
        <div class="row">
          <div class="span5">
            <img src="<?php echo base_url(); ?>img/Noticias/E_1.jpg" width="550" height="350" alt="">
          </div>
          <div class="span6 carousel-fondo">              
              <h4>Producto piloto en energía: Generador Eólico</h4>
              <p>La empresa TOC crea un Generador Eólico con un diseño único y funcional el cual busca aprovechar al máximo los vientos unidireccionales, predominantes en la zona de Xalapa y Veracruz. Un aspecto importante es que la Empresa TOC con este producto está generando una estrategia para el cuidado del medio ambiente y aprovechar las energías renovables.</p>             
              <p>De esta forma se disminuiría el uso y consumo de energía eléctrica de una unidad habitacional y la solución sería de esta manera transformar según las condiciones naturales de la zona geográfica la energía del viento en energía eléctrica.</p>             
              <p>Las energías renovables en nuestro días son de suma importancia para la conservación del medio ambiente, tomando en consideración los recursos ambientales en cada zona para aprovechar estos de diversas maneras, generando casas ecológicamente sustentables, por ese motivo se plantea este diseño para la construcción de un generador extractor  eólico, con la finalidad de captar el poco viento del cual está prevista esta zona, y ayudando a otras como es el ejemplo de Veracruz el cual mediante el extractor se podrá mantener un clima agradable dentro de la casa habitación favoreciendo con ello la disminución del uso de energía mediante la implementación de climatización artificial.</p>
          </div>  
        </div>                                  
      </div>
      <div class="item">
        <div class="row">
          <div class="span5">
            <img src="<?php echo base_url(); ?>img/Noticias/M_1.jpg" width="550" height="350" alt="">
          </div>
          <div class="span6 carousel-fondo">              
            <h4>Producto piloto en energía: Motor Stirling  versión 2.0</h4>
            <p>La empresa TOC Technology Outsorcing Center construyó un motor para bombear y generar electricidad, es un motor Stirling tipo gamma o motor de combustión externa. Este motor genera un trabajo mecánico gracias a la variación de presión provocada por una diferencia de temperaturas. Los motores Stirling funcionan a volumen constante, el gas que se puede ocupar es helio, hidrogeno, nitrógeno, metano y aire, este último es el gas de trabajo que se ocupa en este motor prototipo. El volumen de este motor en su interior es de aproximadamente 560 cm cúbicos. Una potencia de salida calculada de 8 a 10 W en el eje. Esta potencia se ocupara para bombear agua en una casa habitación a una altura aproximada de un piso o una altura aproximada de 2.5 m desde donde se coloque el motor. Las dimensiones son 55x58x35 cm. Ocupando un volumen aproximado de .11165 metros cúbicos.</p> 
          </div>
        </div>                
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
  </div>
  
  <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Noticia</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Noticia</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Noticia</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>