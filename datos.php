<?php






	$nombre = $_POST['nombre'];   //aca recibimos los datos enviados desde el formulario
	$dni = $_POST['dni'];   //aca recibimos los datos enviados desde el formulario
	$telefono = $_POST["telefono"];   //aca recibimos los datos enviados desde el formulario
	$email = $_POST["email"];   //aca recibimos los datos enviados desde el formulario
	


	echo "GRACIAS POR INSCRIBIRSE!!!";

	
	 
	mail("marsinformatica@gmail.com","Competidor Nuevo","Nombre:  $nombre       DNI:  $dni       Telefono:  $telefono     Email:  $email  ") ;





	/*echo "Nombre:  $nombre       DNI:  $dni       Telefono:  $Telefono     Email:  $email  ";*/



	//borra el enlace a las variables post?
    unset($_POST['nombre']);
    unset($_POST['dni']);
    unset($_POST['telefono']);
    unset($_POST['email']);
    
    //Para direccionar a http://www.asheraima.com directamente, sin hacer click a un boton
    header ("Location: http://www.pruebas2019.esy.es");




?>