<?php
//comentario de una linnes
/*
comentario de varias lineas
*/
$nombre = "Kevin";
echo "Bienvenido" . $nombre;

//evaluar 
if(isset($_POST["enviar"])){
    $Seleccion = $_POST["seleccion"];
    include $Seleccion . ".php";
}else{
    include "es.php";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="seleccion" id="">
            <option value="en">English</option>
            <option value="es">Spanish</option>
</select>
<input type="submit" name="enviar" value="seleccionar" />
</form>
<h1><?php echo TITLE; ?></H2>
<h2><?php echo SUBTITLE; ?></h2>
    
</body>
</html>