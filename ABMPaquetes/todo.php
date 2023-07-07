<?php
$conexion= new mysqli("localhost","root","","proyecto");

$sentencia="select * from paquetes";

$registro=$conexion->query($sentencia);
$respuesta=array();

foreach($registro -> fetch_all(MYSQLI_ASSOC) as $asoc){

$array=["id"=>$asoc['id'],
        "direccion"=>$asoc['direccion']
    
      
];
array_push($respuesta,$array);

}




echo json_encode($respuesta);


?>
