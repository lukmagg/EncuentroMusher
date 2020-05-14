<?php





/* LINK */
$link = mysqli_connect('localhost','elopo','jhdgEzu8l~%(','bd_perros');



/* manejo de errores de conexion */
if(mysqli_connect_errno()){
	echo "Error de conexion a base de datos";
	exit();
}

	
/* esto es para que respete los acentos */
mysqli_set_charset($link, "utf8"); 


?>