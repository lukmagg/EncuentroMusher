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
	


	//Para direccionar a http://www.pruebas2019.esy.es/equipo_perros_nuevo.php directamente, sin hacer click a un boton
    header ("Location: http://www.pruebas2019.esy.es/equipo_perros_nuevo.php");
	

	/* Recibe las variables enviadas de index.php modalLogin a traves del metodo post de la pagina equipo_perros_nuevo.php */
	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];



	/* LINK */
	$link = mysqli_connect('127.0.0.1:3306','u202028904_root','ab12#$CD','u202028904_perro');



	/* manejo de errores de conexion */
	if(mysqli_connect_errno()){
		echo "Error de conexion a base de datos";
		exit();
	}

	/* esto es para que respete los acentos */
	mysqli_set_charset($link, "utf8");

	/* Inserta en la tabla_corredores un nuevo corredor. */
	$sql1 = "INSERT INTO tabla_corredores(nombre,dni,telefono,email) VALUES ('$nombre','$dni','$telefono', '$email')"; 

	/* ejecuto la consulta $sql1 */
	mysqli_query($link,$sql1);

	/* Busca en la base de datos el corredor con el mismo dni (que acaba de ser insertado) y de ahi obtenemos el id_corredor para luego mandarlo a la pagina datos_nuevo_perros.php */

	/* Selecciona de la tabla_corredores el corredor con dicho dni */
	$sql2 = "SELECT * FROM tabla_corredores WHERE dni = '$dni'"; 

	/* ejecuto la consulta $sql2 */
	$resultado = mysqli_query($link,$sql2);
	/* devuelve un array con los valores de $resultado */
	$extraido = mysqli_fetch_array($resultado);

	$id_corredores = $extraido[0]; /* id_corredores del corredor con dicho dni */
	/*hasta aca anda perfect! da bien el id */
	/*CONTINUAR ACA.. HASTA ACA TODO ANDA BIEN, AHORA LO QUE FALTA ES ENVIAR $id_corredor a la pagina datos_nuevo_perros.php*/
	/* dicen que se puede hacer con ajax */


	
	$_SESSION['idCorredor'] = $id_corredores;
	
	//echo "<a href='http://pruebas2019.esy.es/equipo_perros_nuevo.php'>Cargar Perros</a>";


	/* close link */
	// mysql_close($link);



 ?>




    <!-- 
    ejemplo para insertar una nueva columna en una tabla 
	$sql2 = "ALTER TABLE 'tabla_corredores' ADD 'email' VARCHAR(30) AFTER telefono";
	mysqli_query($link,$sql2);
	-->
