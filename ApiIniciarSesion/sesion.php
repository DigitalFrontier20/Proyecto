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


                        <span class="title-from">LOGIN</span>
                        <br>
                        <br>
                        <br>

                        <span class="sub-title">INICIAR SESION</span>
                        <br>
                        <br>
                        <div class="buttons">
                                <!---
                                <a href="camionerologin.php">
                                        <button id="btn">Camionero</button>
                                </a>
                                --->

                                <a href="funcionariologin.php">
                                        <button id="btn">Funcionario</button>
                                </a>

                                <!---
                                <a href="administrador.php">
                                        <button id="btn">Administrador</button>
                                </a>
                                --->
                                <a href="formclientelogin.php">
                                        <button id="btn">Iniciar Sesion</button>
                                </a>

                                <br>
                                <br>
                                <br>


                        </div>




                </section>

        </div>


        <small class="text-footer">Todos los derechos reservados 2023 © Digital Frontier</small>









</body>

</html>

<?php

echo '<div id="containerTable">';

/*
echo '<a href="agregar.php"><button id="agregar">Agregar Registro</button></a>';
*/



function httpRequest($url)
{
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        return $data
        ;
}


$dato = json_decode(httpRequest("http://localhost/ejMysql/todo.php"), true);







?>