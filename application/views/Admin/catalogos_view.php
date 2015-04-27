<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le fav and touch icons -->
    <title>Plataforma Tecnologica TOC</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/iconTOC.png">
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {  
    color: #fff;  
    text-decoration: none;
    font-size: 18px;
}
a:hover
{
    color: #808080;
}
.sesion{
    padding: 10px;
    float: right;
    color: #000;
}
.imagen{
    float: left;
}
.contenedor{
    margin: 50px;
    padding: 10px;
    background-color: #3498d8;
    clear: both;
}
.cont2{
    margin-top: 20px;
    margin-right: 50px;
    margin-left: 50px;
}
.menu{
    display: inline;
}
li{
    list-style: none;
    padding: 15px;
    border-radius: 3px;
  color: #fff;
  line-height: 24px;
  display: inline-block;
  background-color: #003f7e;
}
h2{
    float: left;
    padding: 10px;
}
.container{
    margin-left: 50px;
    margin-right: 50px;
    
}
</style>
</head>
<body>
    <div class="cont2">
        <img class="imagen" src="<?php echo base_url(); ?>img/Logo_TOC.png" alt="" />
       <h2>Administración de Catálogos </h2> 
       <p class="sesion">Bienvenid@ <strong><?=$this->session->userdata('usuarioadmin'); ?>!</strong><br><a style="color:#808080; font-size:14px;" href="<?php echo site_url('ctocadmin/logout') ?>">Cerrar Sesión</a></p>       
    </div>
    <div class="contenedor">
        <ul >
            <li class="menu"><a href='<?php echo site_url('ctocadmin/admin_usuarios')?>'>Usuarios</a></li>
            <li class="menu"><a href='<?php echo site_url('ctocadmin/admin_noticias')?>'>Noticias</a></li>
        </ul>
    </div>    
    <div class="container">
        <?php echo $output; ?>
    </div>    
</body>
</html>