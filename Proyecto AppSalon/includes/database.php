<?php

$db = mysqli_connect('localhost', 'root', '','appsalon');

if(!$db){
    echo "Error de la conexion";
}else {
    echo "conexion correcta";
}
