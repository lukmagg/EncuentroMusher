<?php
session_set_cookie_params(3600);
session_start();
echo session_id();
// echo phpinfo();
var_dump($_SESSION);

// echo "<a href='http://www.pruebas2019.esy.es/equipo_perros_nuevo.php'>Cargar Perros</a>";
	
if(isset($_SESSION['nombreUsuario'])){

}
else{
	echo "Debes iniciar sesion";
	echo "<br>";
	echo "<a href='http://www.pruebas2019.esy.es/index.php'>Vovler</a>";
	exit;
}

?>




<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="style.css"> -->
	<link rel="stylesheet" href="style-opo.css">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

	<title>Equipo 3/4</title>
</head>
<body>

	<!-- Modal Login -->
	<div class="modal fade" id="modalLogin">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2>Ingrese sus datos:</h2>
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="validar_login.php" method="post">
						<div class="form-group">
							<label for="">Nombre</label>
							<input type="text" class="form-control"  placeholder="Nombre de usuario" name="nombre">
							
						</div>
						<div class="form-group">
							<label for="">Contraseña</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="contra">
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Entrar</button>
						
						
					</form>
				</div>
				
			</div>
		</div>
	</div>

	


	<!------ BARRA DE NAVEGACION -------->
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-12">
				<nav class="navbar  navbar-dark bg-dark navbar-expand-lg " style="font-size: 20px; ">
					<a class="navbar-brand" href="index.php" style="font-size: 30px; font-family: 'Gloria Hallelujah', cursive; margin-right: 40px">Equipo 3/4</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse correrMenu" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" data-toggle="modal" data-target="#modalInscripciones" style="cursor: default">Inscripciones</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" data-toggle="modal" data-target="#modalInformacion" style="cursor: default">Informacion</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="tabla_perros.html">Equipos</a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link" href="contacto.html">Contacto</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="galeria.html">Galeria</a>
							</li>
						</ul>
					</div>
				</nav>
				
			</div>
		</div>
		
	</div>


	
	<!-- Optional JavaScript -->
	<!--  jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>
