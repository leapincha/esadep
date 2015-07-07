<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<title><?=$titulo?></title>
  </head>
	  <body>
	  		Bienvenido <?=$this->db_session->userdata('username')?><br>
	  		Tu password encriptado con Bcrypt es <?=$this->db_session->userdata('password')?><br>
	  		<?=anchor(base_url().'secure_bcrypt/logout_bcrypt', 'Cerrar sesión')?>
	  </body>
</html>