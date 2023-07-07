<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css">
        <title>Registros</title>
</head>

<body>

</body>

</html>

<?php



echo '<div id="containerTable">';


echo '<table>';
echo '<tr id="headTable">';
echo '<th>id</th>';
echo '<th>Direccion</th>';
echo '<th>Opciones</th>';
echo '<tr>';


function httpRequest($url)
{
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        return $data
        ;
}


$dato = json_decode(httpRequest("http://localhost/Proyecto/ABMPaquetes/todo.php"), true);

foreach ($dato as $fila) {


        echo '<tr>';
        echo '<td>' . $fila['id'] . '</td>';
        echo '<td>' . $fila['direccion'] . '</td>';


        echo '<td><div id="eliminar"><a href="borrar.php?id=' . $fila['id'] . '">Eliminar</a></div><div id="modificar"><a href="modificar.php?id=' . $fila['id'] . '">Modificar</a>
        </div><div id="agregar"><a href="agregar.php?id=' . $fila['id'] . '">Agregar</a></div></td>';
 

        echo '<tr>';
}
echo '<br>';
echo '</table>';
echo '</div>';

?>