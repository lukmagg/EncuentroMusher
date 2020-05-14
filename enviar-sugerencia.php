<?php
	$email = $_POST['email'];   //aca recibimos los datos enviados desde el formulario
	$sugerencia = $_POST["sugerencia"];   //aca recibimos los datos enviados desde el formulario

	$contenido = "Email: " . $email  . "\n". "\n"  .    "Sugerencia: " . $sugerencia;
	 
	mail("marsinformatica@gmail.com","Sugerencia",$contenido);
    
    //borra el enlace a las variables post?
    unset($_POST['email']);
    unset($_POST['sugerencia']);
    
    
    
    //Para direccionar a http://www.encuentromusher.com directamente, sin hacer click a un boton
    header ("Location: http://www.encuentromusher.com");

    
?>