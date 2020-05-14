<?php 
session_start();

if(isset($_SESSION['nombreUsuario'])){
	
}
else{
	echo "Debes iniciar sesion";
	echo "<br>";
    echo "<a href='http://www.pruebas2019.esy.es/index.php'>Vovler</a>";
	exit;
}

?>




<?php 
	echo "Corredor cargado correctamente";
	echo "<br>";
	echo "<a href='http://www.pruebas2019.esy.es/index-opo.php'>Vovler</a>";



 ?>