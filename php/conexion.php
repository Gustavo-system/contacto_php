<?php

$host = "localhost";
$user = "root";
$pws = "";
$database = "contactos";


$conexion =  mysqli_connect($host, $user, $pws, $database);
mysqli_query($conexion, "SET NAMES 'utf8'");