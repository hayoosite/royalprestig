<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['ciudad']) >= 1 && strlen($_POST['celular']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pais']) >= 1 ) {
	    $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $direccion = trim($_POST['direccion']);
        $ciudad = trim($_POST['ciudad']);
        $celular = trim($_POST['celular']);
	    $email = trim($_POST['email']);
        $pais = trim($_POST['pais']);
	    $fechareg = date("d/m/y H:i:s");
	    $consulta = "INSERT INTO datos(nombre,apellido, direccion, ciudad,celular, email, pais, fecha_reg) VALUES ('$nombre', '$apellido','$direccion','$ciudad','$celular','$email','$pais','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {				
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente! <br>
			<a href="ruleta.php" target="_blank">Listo, Haz click AQUI para empezar</a></h3>
		
           <?php
	    } 
		else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>