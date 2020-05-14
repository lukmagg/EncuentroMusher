<?php 
session_set_cookie_params(3600);
session_start();



if(isset($_SESSION['nombreUsuario'])){
	if(isset($SESSION['idCorredor'])){
		$SESSION['idCorredor']='';
		unsset($SESSION['idCorredor']);
	}
	else{
		
	}
}
else{
	echo "Debes iniciar sesion";
	echo "<br>";
	echo "<a href='index.php'>Vovler</a>";
	exit;
}

?>

<?php 
	header ("Location: http://pruebas2019.esy.es/index-opo.php");
	

?>