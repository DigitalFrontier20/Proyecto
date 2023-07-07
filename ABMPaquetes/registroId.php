<?php

$conexion= new mysqli("localhost","root","","proyecto");

$sentencia="select * from paquetes where id=$id";

$registro=$conexion->query($sentencia);


?>