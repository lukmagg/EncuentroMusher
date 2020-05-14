<?php 
session_start();

	if(isset($_SESSION['nombre'])){
		
	}
	else{
		echo "Debes iniciar sesion";
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
	<link rel="stylesheet" href="style.css">
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

	<!------ MODAL INSCRIPCIONES ------>
	<div class="modal fade" id="modalInscripciones">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2>Ingrese sus datos:</h2>
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="datos.php" method="POST">
						<div class="form-group">
							<label for="exampleInputNombre1">Nombre</label>
							<input type="text" class="form-control" id="id_nombre" aria-describedby="emailHelp" placeholder="Nombre y apellido" name="nombre" required>
						</div>
						<div class="form-group">
							<label for="exampleInputDNI1">D.N.I.</label>
							<input type="text" class="form-control" id="id_dni" aria-describedby="emailHelp" placeholder="D.N.I." name="dni" required>
						</div>
						<div class="form-group">
							<label for="exampleInputTelefono1">Telefono</label>
							<input type="text" class="form-control" id="id_telefono" aria-describedby="emailHelp" placeholder="Telefono" name="telefono" required>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" id="id_email" aria-describedby="emailHelp" placeholder="Email" name="email" required>
						</div>
						
						
						
						<button type="submit" class="btn btn-primary">Enviar</button>
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

	<!------ CAROUSEL ------->
	<div class="container ">
		<div class="row ">
			<div class="col-md-6">
				
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" >
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/11.jpg" class="d-block w-100" alt="..." style="">
						</div>
						<div class="carousel-item ">
							<img src="img/12.jpg" class="d-block w-100" alt="..." style="">
						</div>
						<div class="carousel-item ">
							<img src="img/13.jpg" class="d-block w-100" alt="..." style="">
						</div>
						<div class="carousel-item ">
							<img src="img/14.jpg" class="d-block w-100" alt="..." style="">
						</div>

					</div>
					<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				
			</div>
			<div class="col-md-6 " >
				
				<div  style="margin-top:38px; margin-right: 50px; font-size:1.5rem;" class="ocultarTexto">
					<p ALIGN="justify">
						La carrera de trineos tirados por perros o mushing, aunque actualmente se considera un deporte, ha sido (y todavía es) una forma de transporte nórdica caracterizada por el uso de perros de tiro y esquís, que servía para desplazarse por superficies nevadas con rapidez. El término proviene de una orden, en lengua francesa, de iniciar la marcha como "adelante", "a correr", "vamos", para que el equipo empiece a tirar. En la actualidad, el término mush raramente se utiliza, pero al corredor de esta modalidad se le denomina musher o guía del trineo.
					</p>

				</div>

				
				
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

