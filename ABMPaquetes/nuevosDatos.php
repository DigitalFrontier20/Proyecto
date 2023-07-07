<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">  
    <title>Actualizar Datos</title>
</head>
<body>

<?php

$conexion= new mysqli("localhost","root","","proyecto");

$id=$_GET['id'];
$direccion=$_GET['nuevaDireccion'];


$sentencia="update paquetes set direccion='$direccion' where id=$id";

$registro=$conexion->query($sentencia);

echo '<div class="msjActualizacion">';



echo '<br>';
if($registro){

   

    echo "Registro actualizado correctamente";

   
}else{

    echo "Error al actualizar el registro";
    

}

echo '<button onclick="volver()" class="volver">Volver</button>';
    echo '<div>';
?>

<script>

 function volver(){

location.href="index.php";

 }   
</script>
</body>
</html>