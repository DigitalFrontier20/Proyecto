<?php
$db = mysqli_connect("localhost", "root", "", "proyecto");


header('content-type: application/json');





$q = mysqli_query($db, "SELECT * FROM login");
$respuesta = array();


foreach ($q->fetch_all(MYSQLI_ASSOC) as $asoc) {

    $array = [
        
        "email" => $asoc['email'],
        "pwd" => $asoc['pwd']

    ];

    array_push($respuesta, $array);

}
echo json_encode($respuesta);

?>