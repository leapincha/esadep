<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>ESADEP | ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/admin/css/bootstrap.min.css">
<?php  
            foreach($output->css_files as $file): ?>
                <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
            <?php endforeach; ?>


            <?php foreach($output->js_files as $file):  ?>
                <script src="<?php echo $file; ?>"></script>
            <?php endforeach; ?>


<link rel="stylesheet" href="/assets/admin/css/style1.css">
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown <?= ($title == "esadep") ? "active" : "" ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESADEP<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="<?= ($subtitle == "quienes") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/quienes')?>'>¿Quienes Somos?</a></li>
							<li class="<?= ($subtitle == "historia") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/historia')?>'>Historia</a></li>
							<li class="<?= ($subtitle == "comision") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/comision')?>'>Comision Directiva</a></li>
							<li class="<?= ($subtitle == "equipos") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/equipos')?>'>Equipos</a></li>
						</ul>
					</li>

					<li class="<?= ($title == "sponsors") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/sponsors')?>'>Sponsors</a></li>
					<li class="dropdown <?= ($title == "noticias") ? "active" : "" ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Noticias<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="<?= ($subtitle == "cat_noticias") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/categoria')?>'>Categorias</a></li>
							<li class="<?= ($subtitle == "noticias") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/noticias')?>'>Noticias</a></li>
						</ul>

					</li>					
					<li class="<?= ($title == "eventos") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/eventos')?>'>Eventos</a></li>
					<li class="dropdown <?= ($title == "pruebas") ? "active" : "" ?>"><a href='#' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pruebas<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="<?= ($subtitle == "abiertas") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/abiertas')?>'>Abiertas</a></li>
							<li class="<?= ($subtitle == "cerradas") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/cerradas')?>'>Cerradas</a></li>
						</ul>

					</li>

					<li class="dropdown <?= ($title == "salvamento") ? "active" : "" ?>"><a href='#' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salvamento Deportivo<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="<?= ($subtitle == "definicion_salvamento") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/definicion_salvamento')?>'>Definicion</a></li>
							<li class="<?= ($subtitle == "historia_salvamento") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/salvamento_historia')?>'>Historia</a></li>
							<li class="<?= ($subtitle == "reglamento") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/reglamento')?>'>Reglamento</a></li>
						</ul>

					</li>

					<li class="<?= ($title == "servicios") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/servicios')?>'>Servicios</a></li>
										<li class="dropdown <?= ($title == "contacto") ? "active" : "" ?>"><a href='#' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contacto<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="<?= ($subtitle == "info") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/info_contacto')?>'>Info. Contacto</a></li>
							<li class="<?= ($subtitle == "contacto") ? "active" : "" ?>"><a href='<?php echo base_url('admin/inicio/contacto')?>'>Consultas</a></li>
							
						</ul>

					</li>
					
					
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href='<?php echo base_url('admin/login/signout')?>'>Cerrar Sesión</a></li>
				</ul>
		
			</div>
		
		</div>
	</nav>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output->output;   ?>
    </div>
</body>

<script src="/assets/admin/js/bootstrap.min.js"></script>
</html>
