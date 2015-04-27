<div class="grid fluid">
	<div class="row">
		<div class="span12">
				<ul class="breadcrumb">
					<li><a href="<?php echo site_url('ctoc') ?>">Principal</a><span class="divider">/</span></li>
					<li class="active">Ingreso</li>
				</ul>		
		</div>
	</div>
	<div class="row">
		<div class="span3"></div>
		<div class="span6">
			<?php echo form_open('cingreso'); ?>

		    <?php echo validation_errors('<button class="warning">', '</button><br>'); ?> 		              
		        <h2>Iniciar Sesión</h2>
				<label>Correo electrónico o id de usuario</label>		        		      				
				<div class="input-control text"><input type="text" name="correo" value="<?php echo set_value('correo'); ?>">
				<button class="btn-clear"></button></div> 
				<label>Contraseña</label>
				<div class="input-control password">
				<input type="password" name="clave">
				<button class="btn-reveal"></button></div> 
				<div class="input-control checkbox">
				<label><input type="checkbox" name="c1" checked/>
				<span class="check"></span>Recordarme</label></div>
				<div class="form-actions">
					<button class="button primary">Iniciar sesión</button> 
					<button class="button" type="reset">Cancelar</button> 
				</div>
				</form>
		</div>
	</div>	
</div>