<!DOCTYPE html>
<html lang="Es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="Cache-control" content="max-age=3600, must-revalidate">
    <title>ROYAL PRESTIGE|Wellcome</title>
    <link rel="stylesheet" type="text/css" href="css/wellcome.css">
    <link rel="shortcut icon" href="./img/icono.ico" type="image/x-icon">

</head>
<body>
    <div class="contenedor">
        <div class="logo">
            <img  src="./img/icono.ico" alt="Botón" id="boton-img" onclick="miFuncion()">
        </div>
        <script>
        // Función que se ejecuta cuando se hace clic en la imagen
        document.getElementById("boton-img").addEventListener("click", function() {
        window.location.href = "./php/formulario.php";
        });
        </script>
        <div class="boton">
            <a href="./php/formulario.php" class="btn-neon">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                ROYAL PRESTIGE
            </a>
        </div>
    </div>        
</body>
</html>