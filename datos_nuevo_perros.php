<?php 
session_set_cookie_params(3600);
	session_start();
	echo session_id();
	var_dump($_SESSION);
	
	if(isset($_SESSION['nombreUsuario'])){
		
	}
	else{
		echo "Debes iniciar sesion";
		echo "<br>";
		echo "<a href='index.php'>Vovler</a>";
		exit;
	}

?>


<?php 
  
	


	//Para direccionar a http://www.pruebas2019.esy.es/corredor_creado.php directamente, sin hacer click a un boton
    header ("Location: http://pruebas2019.esy.es/equipo_perros_nuevo.php");

	// /* Recibe las variables enviadas de index.php modalLogin a traves del metodo post */
	$nombrePerro = $_POST['nombrePerro'];
	$sexo = $_POST['sexo'];
	$edad = $_POST['edad'];
	$raza = $_POST['raza'];
	           
	
	$idCorredor = $_SESSION['idCorredor'];
	 /* LINK */
	$link = mysqli_connect('127.0.0.1:3306','u202028904_root','ab12#$CD','u202028904_perro');



	// // /* manejo de errores de conexion */
	if(mysqli_connect_errno()){
		echo "Error de conexion a base de datos";
		exit();
	}

	// // /* esto es para que respete los acentos */
	mysqli_set_charset($link, "utf8");


	//  // Inserta en la tabla_perros un nuevo perro. 
	$sql1 = "INSERT INTO tabla_perros(nombre,sexo,edad,raza,id_corredores) VALUES ('$nombrePerro','$sexo','$edad', '$raza','$idCorredor')"; 

	// /* ejecuto la consulta $sql1 */
	mysqli_query($link,$sql1);


	

	

	// // /* close link */
	// mysql_close($link);


 ?>





	<!-- 
  	ejemplo para insertar una nueva columna en una tabla 
	$sql2 = "ALTER TABLE 'tabla_corredores' ADD 'email' VARCHAR(30) AFTER telefono";
	mysqli_query($link,$sql2);
	 -->



	 <!-- ejemplo para mostrar el contenido de una variable de SESSION 
	 echo $_SESSION['id_corredores'];-->