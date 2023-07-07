<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.0.css">
    <title>Agregado</title>
</head>

<body>

    <?php

    $conexion = new mysqli("localhost", "root", "", "proyecto");


    require 'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $email = $_POST["email"];
        $password = $_POST["password"];


    }

    echo "<br>";


    $sql = "SELECT * FROM login WHERE email = '$email' and pwd= '$password'";
    $resultado = mysqli_query($conexion, $sql);
    $numero_registro = mysqli_num_rows($resultado);
    if ($numero_registro != 0) {
        echo '<div class="msjActualizacion">';
        echo '<img class="iconoMsj" src="Imagenes/checked-buttom.png"><br>';
        echo "<br>";
        echo '<button onclick="volver()" class="volver">Volver</button>';
        echo '<div>';
    } else {
        echo '<script type="text/javascript">alert("Datos Incorrectos Intente de Nuevo");</script>';
        echo '<div class="msjActualizacion">';
        echo '<img class="iconoMsj" src="Imagenes/error.png"><br>';
        echo "<br>";
        echo "Datos Incorrectos Intente de Nuevo";
        echo '<button onclick="volver()" class="volver">Volver</button>';
        echo '<div>';
    }












    $conexion->close();
    ?>

    <script>
        function volver() {

            location.href = "/Proyecto/index.html";

        }

     
    </script>

</body>

</html>