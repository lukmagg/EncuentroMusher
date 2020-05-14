<?php 
session_start();
if(isset($SESSION['nombreUsuario'])){
	unset($SESSION['nombreUsuario']);
}
if(isset($SESSION['contra'])){
	unset($SESSION['contra']);
}
if(isset($SESSION['idCorredor'])){
	unset($SESSION['idCorredor']);
}

session_destroy();
header('Location: http://pruebas2019.esy.es/index.php');

?>