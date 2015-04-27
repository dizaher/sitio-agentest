<section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Registro</h1>
        </div>
        <div class="span6">
          <ul class="breadcrumb pull-right">
            <li><a href="<?php echo site_url('ctoc') ?>">Principal</a><span class="divider">/</span></li>
			<li class="active">Registro</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->       


<section id="registration-page" class="container">
	<?php echo form_open('cregistro'); ?>

		<fieldset class="registration-form">
			<div class="row-fluid">
				<!-- Left Column -->
				<div class="span6">
					<div class="control-group">
						<!-- Username -->
						<div class="controls">
						<label>Nombre(s):</label>        
						<input type="text" id="username" class="input-xlarge" name="nom" value="<?php echo set_value('nom'); ?>"></input>            
						</div>
					</div>

					<div class="control-group">
						<!-- E-mail -->
						<div class="controls">
						<label>Correo electronico:</label>
						<input type="email" id="email" class="input-xlarge" name="correo" value="<?php echo set_value('correo'); ?>"/>            
						</div>
					</div>

					<div class="control-group">
						<!-- Password-->
						<div class="controls">
						<label for="username">Contraseña:</label>
						<input type="password" id="password" class="input-xlarge" name="contra" value="<?php echo set_value('contra'); ?>"/>            
						</div>
					</div>		       
				</div>
				<!-- /Left Column -->

				<!-- Right Column -->
				<div class="span6">
					<div class="control-group">
						<!-- lastname -->
						<div class="controls">
						<label>Apellidos:</label>
						<input type="text" id="username" class="input-xlarge" name="ape" value="<?php echo set_value('ape'); ?>"></input>            
						</div>
					</div>

					<div class="control-group">
						<!-- E-mail -->
						<div class="controls">
						<label>Teléfono:</label>
						<input type="tel" class="input-xlarge" name="telefono" value="<?php echo set_value('telefono'); ?>"/>            
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
				<!-- /Right Column -->
			</div> 
			<div class="row-fluid">
				<h5>Tipo de Agente</h5>
				<div class="span4">
					<div class="checkbox"> 	
						<label>
						<input type="checkbox" name="agente" value="Empresa"> Empresa
						</label>

						<label>
						<input type="checkbox" name="agente" value="IES"> IES
						</label>

						<label>
						<input type="checkbox" name="agente" value="Centro de Investigación"> Centro de Investigación
						</label>    
					</div>
				</div>
				<div class="span4">
					<div class="checkbox">
										
						<label>
						<input type="checkbox" name="agente" value="Organización Civil"> Organización Civil
						</label>
					
						<label>
						<input type="checkbox" name="agente" value="Particular"> Particular
						</label>	

						<label>
						<input type="checkbox" name="agente" value="FIA"> Financiera, Incubadora o Aceleradora
						</label>
					</div>
				</div>
			</div>
			<h5>Descripción del Agente</h5>																
			<textarea name="descripcion" class="form-control" rows="4" placeholder="Describa brevemente las actividades que le interesa"></textarea>

			<?php if(validation_errors()):?>
			<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php echo validation_errors(); ?>
			</div>		    
		    <?php endif;?>
			<div class="control-group">
				<!-- Button -->
				<div class="controls">
				<button class="btn btn-success btn-large " type="submit">Registrar</button>    
				</div>
			</div>
		</fieldset>
	</form>
</section>
<!-- /#registration-page -->