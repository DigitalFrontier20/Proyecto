<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.0.css">
    <title>Registros</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon+SC&display=swap" rel="stylesheet">

</head>

<body>

    <div class="formulario">
        <br>
        <br>

        <br>
        <section class="form">
            <form action="" method="POST">

                <span class="title-from">LOGIN</span>
                <br>
                <br>
                <br>


                <br>
                <br>



                <br>
                <input name="codigofun" id="codigofun" placeholder="Ingrese su codigo de funcionario">

                <br>
                <br>
                <br>



                <input type="submit" id="btn" onclick="function();">




            </form>


        </section>

    </div>


    <small class="text-footer">Todos los derechos reservados 2023 © Digital Frontier</small>

    <?php

    function mandar()
    {
        header("Location: http://localhost/Proyecto/ABMPaquetes/index.php");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigofun = $_POST['codigofun'];
        if ($codigofun !== "456") {
            echo '<script type="text/javascript">alert("Datos Incorrectos Intente de Nuevo");</script>';
        } else {
            mandar();
        }


    }




    ?>
