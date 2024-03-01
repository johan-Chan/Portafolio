<?php

function conectar()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $base = "noticias_pagina";

    $con = new mysqli($host, $user, $pass);

    if ($con->connect_errno) 
    {
        die("Error al conectar con la base de datos....");
    } 
    
    else 
    {
        echo "conexion realizada correctamente....";
    }
}

?>