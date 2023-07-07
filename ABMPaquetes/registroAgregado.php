<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Agregado</title>
</head>

<body>

    <?php

    $conexion = new mysqli("localhost", "root", "","proyecto");

    $id = $_POST['id'];
    $direccion = $_POST['direccion'];
 

    require("registroId.php");

    $reg = mysqli_fetch_array($registro);


echo "$id,$direccion";

    if ($reg > 0) {

        echo '<div class="msjEliminar"><br>';
        echo '<img class="iconoMsj" src="img/advertencia.png" width="30px"><br>';
        echo '<a class="msj">Ya existe un registro con esta Id</a>';
        echo '<br>';
        echo '<button onclick="volver()" class="volver">Volver</button>';
    } else {

        $sentencia = "insert into paquetes values('$id','$direccion')";

        $registro = $conexion->query($sentencia);

        if ($registro == true) {

            echo '<div class="msjActualizacion">';

            echo '<img class="iconoMsj" src="img/actualizado.png" width="30px"><br>';
            echo '<a class="msj">Registro agregado</a><br>';
            echo '<button onclick="volver()" class="volver">Volver</button>';
            echo '<div>';
        }
    }





    $conexion->close();
    ?>

    <script>
        function volver() {

            location.href = "index.php";

        }
    </script>

</body>

</html>