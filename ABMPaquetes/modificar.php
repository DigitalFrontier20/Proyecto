<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">  
    <title>Modificar</title>
</head>
<body>


<?php

$id=$_GET['id'];

require("registroId.php");

$reg=mysqli_fetch_array($registro);


?>


<form method="GET"  action="nuevosDatos.php" >

<h2>Actualizar Datos</h2>

<input type="hidden" name="id" value="<?php echo $reg['id']?>">

<input placeholder="direccion"  type="text" name="nuevaDireccion" value="<?php echo $reg['direccion']?>">
<br>

<br>

<br>
<br>
<input type="submit" id="boton" value="Actualizar">

</form>


</body>
</html>