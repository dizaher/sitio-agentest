<section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Recuperación de Contraseña</h1>
        </div>
        <div class="span6">
          <ul class="breadcrumb pull-right">
            <li><a href="<?php echo site_url('ctoc') ?>">Principal</a><span class="divider">/</span></li>
			<li class="active">Recuperación de Contraseña</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->       


<section id="registration-page" class="container">
	<?php echo form_open('crecovery'); ?>

		<fieldset class="registration-form">
			<div class="row-fluid">
				<!-- Left Column -->
				
					<div class="control-group">
						<!-- Username -->
						<div class="controls">
						<label>Tu contraseña será enviada a tu correo electrónico:</label>        
						<input type="email" id="correo" class="input-xlarge" placeholder="E-mail" name="correo" value="<?php echo set_value('correo'); ?>"></input>            
						</div>
					</div>

					<div class="control-group">
						<!-- Password-->
						<div class="controls">
						<label for="username">Ingresa tu nueva Contraseña:</label>
						<input type="password" id="password" class="input-xlarge" name="contra" value="<?php echo set_value('contra'); ?>"/>            
						</div>
					</div>

					<div class="control-group">
						<!-- Password -->
						<div class="controls">
						<label for="username">Repetir Contraseña:</label>
						<input type="password" class="input-xlarge" id="password_confirm" name="contra2" value="<?php echo set_value('contra2'); ?>"/>            
						</div>
					</div>
				
				
			</div> 
						

			<?php if(validation_errors()):?>
			<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php echo validation_errors(); ?>
			</div>		    
		    <?php endif;?>
			<div class="control-group">
				<!-- Button -->
				<div class="controls">
				<button class="btn btn-success btn-large " type="submit">Enviar</button>    
				</div>
			</div>
		</fieldset>
	</form>
</section>
<!-- /#registration-page -->