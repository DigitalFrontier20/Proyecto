<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">  
    <title>Borrar</title>
</head>
<body>
    
<?php

$id = $_GET['id'];

require("registroId.php");

echo '<div class="msjEliminar">';
echo '<img src="img/borrar.png" width="60px">';
echo '<br>';
if ($reg = mysqli_fetch_array($registro)) {

    $sentencia2 = "delete from paquetes where id=$id";

    $registro2 = $conexion->query($sentencia2);

   
    echo '<a class="msj">Registro de '.$reg['direccion'].' eliminado</a>';
  
}else{

    echo '<a class="msj">Datos no encontrados</a>';
}

echo '<br>';
echo '<button onclick="volver()" class="volver">Volver</button>';
echo '</div>';
$conexion->close();
?>

<script>

 function volver(){

location.href="index.php";

 }   
</script>
</body>
</html>
