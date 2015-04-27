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
                <a id="logo" class="pull-left" href="<?php echo site_url('cingresoadmin') ?>"></a>
                <h3 id="encabezado">Ecosistema de Innovación</h3>
            </div>
        </div>
    </header>   
    <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Ingreso Administración</h1>
        </div>
        <div class="span6">
          
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->
  <section id="registration-page" class="container">
    <?php echo form_open('ctocadmin', 'class="center"'); ?>    
      <h2>Iniciar Sesión</h2>
      <i class="icon-user icon-medium"></i>
        <input type="text" class="input-large" name="user" value="<?php echo set_value('user'); ?>" placeholder="Usuario">
      <br>
      <i class="icon-key icon-medium"></i>
        <input type="password" class="input-large" placeholder="Contraseña" name="pass">
      <br>
        <?php if(validation_errors()):?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php echo validation_errors(); ?>
        </div>
        <?php endif;?>         
        
        <br>
        <button type="submit" class="btn btn-primary btn-large">Ingresar</button>
  </section>
  <!-- /#registration-page -->   
                                                                          


<script src="<?php echo base_url(); ?>js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>