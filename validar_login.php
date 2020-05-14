<?php
session_set_cookie_params(3600);
session_start();




	// Para direccionar a http://pruebas2019.esy.es/ directamente, sin hacer click a un boton
	// Lo puse aca arriba porque si lo pongo abajo no anda, no se porque
    //header ("Location: http://pruebas2019.esy.es/");

	/* Recibe las variables enviadas de index.php modalLogin a traves del metodo post */
	$nombreUser = $_POST['nombreUser'];
	$contra = $_POST['contra'];


	

	/* Obtengo los datos correctos de la base de datos y los comparo */
	

	/* Aca se valida el nombre de usuario y contraseña para luego abrir la session */
	/* en contraseña le puse solo 2 = porque sino no da bien el resultado, ver! */

	/* LINK */
	$link = mysqli_connect('127.0.0.1:3306','u202028904_root','ab12#$CD','u202028904_perro');



	/* manejo de errores de conexion */
	if(mysqli_connect_errno()){
		echo "Error de conexion a base de datos";
		exit();
	}

	
	/* esto es para que respete los acentos */
	mysqli_set_charset($link, "utf8");

	

	

	$existe = false;
	

	$sql2 = "SELECT * FROM tabla_login";
	$result = mysqli_query($link, $sql2);
	// recorre la tabla completa, si encuentra una fila donde coincidan el nombre y contraseña, le cambia el valor a la variable $existe 
	while ($row2 = mysqli_fetch_row($result)) {
		if($row2[1] == $nombreUser and $row2[2] == $contra){
			$existe = true;
			
		}
	}

	/* si se cumple la condicion de haber puesto bien el nombre de usuario y la clave, se crea la sesion para el usuario */
	if($existe){
		$_SESSION['nombreUsuario'] = $nombreUser;
		$_SESSION['contra']=$contra;

		header('Location: http://pruebas2019.esy.es/index-opo.php');

		
	}
	else{
		echo "Contraseña invalida";
	}





?>


