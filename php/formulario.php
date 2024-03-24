<!DOCTYPE html>
<html>
<head>
	<title>ROYAL PRESTIGE|Registro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="Cache-control" content="max-age=3600, must-revalidate">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="shortcut icon" href="../img/icono.ico" type="image/x-icon">
	<script src="../js/scrip.js"></script></script>
</head>
<body>
    <form method="post" id="miFormulario" onsubmit="return validarFormulario()">
    	<h1>¡Registrate!</h1>
    	<input type="text" name="nombre" placeholder="Nombre completo">
    	<input type="text" name="apellido" placeholder="Apellidos Completos">
    	<input type="text" name="direccion" placeholder="Direccion">
    	<input type="text" name="ciudad" placeholder="Ciudad">
    	<input type="text" name="celular" placeholder="Numero de Celular">
    	<input type="email" name="email" placeholder="Email">
    	<input type="text" name="pais" placeholder="Pais de Origen">
    	<div class="con_ter">
    	   <input class="check" type="checkbox"  id="miCheckbox" name="miCheckbox">
		   <p class="tyc">He leido y aceptado los <a href="#" onclick="mostrarTerminos(); return false;">Terminos y Condiciones.</a></p>
    	</div>
    	<input type="submit" name="register" value="Empezar">
		

    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>