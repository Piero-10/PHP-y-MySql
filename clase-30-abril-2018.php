<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "nuevabase";
//conexion a la base de datos con el motor mslqi, es procedural
//la siguiente forma de conectar no la usaremos
$con = mysqli_connect();
//la anterior forma de conectar no la usaremos

//estoy creando un objeto de la clase msqli
$conexion = new mysqli($server,$user,$pass,$db);
echo "tipo variable: ".gettype($conexion);
echo "contenido variable: <br/>";
//
var_dump($conexion);

echo "<br/><br/>";
