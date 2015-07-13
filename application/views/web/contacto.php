<body>
	<div class="container">
	            <div class="row">
<div class="contacto">

	

	
<div class="col-sm-7 contact-form wow fadeInLeft">

	<h1>Consulta</h1>
	<? if($error): ?>
                    <div class="alert alert-success">
                            Los datos de su consulta fueron enviados correctamente. En breve le responderemos
                    </div>

                    <? endif; ?>
	
	<?php echo form_open('contacto'); ?>
		<div class="form-group col-sm-12 <?php if(form_error('usuario')){echo 'has-error';} ?>">
			<div class="col-sm-2">
			<label class="control-label" for="usuario">Nombre</label></div>
			<div class="col-sm-10">
				<input type="text" name="usuario" class="form-control" value="<?php echo set_value('usuario'); ?>"/>
			</div>
			

		</div>
		<div class="form-group col-sm-12 <?php if(form_error('email')){echo 'has-error';} ?>">
			<div class="col-sm-2">
			<label class="control-label col-sm-1" for="email">Email</label></div>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>"/>
			</div>
		</div>

		<div class="form-group col-sm-12 <?php if(form_error('mensaje')){echo 'has-error';} ?>">
			<div class="col-sm-2">
			<label class="control-label col-sm-1" for="mensaje">Mensaje</label></div>
			<div class="col-sm-10">
				<textarea name="mensaje" class="form-control" rows="3" value=""><?php echo set_value('mensaje'); ?></textarea>
			</div>
		</div>


		<div><input type="submit" name="submit" class="btn btn-primary" value="Enviar Consulta" /></div>

	</form>
</div>
<div class="col-sm-5 contact-address wow fadeInUp">

	<h3>Nos podés encontrar</h3>
	<?php foreach($contact as $conta): ?>	
			
						<div><?php echo $conta->descripcion; ?></div>
			
	<?php endforeach ?>

</div>
</div>

</div> <!-- cierre de row -->

</div> <!-- cierre de container -->

