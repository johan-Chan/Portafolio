<?php

$id = $_POST['id_usuario'];
$usu = $_POST['usuario'];
$tel = $_POST['telefono'];
$corr = $_POST['correo_ele'];
$idnot = $_POST['id_noticia'];


$cnx = mysqli_connect("localhost","root","","noticias_pagina");
$sql = "INSERT INTO usuarios (id_usuario, usuario, telefono, correo_ele, id_noticia) VALUES ('$id', '$usu', '$tel', '$corr', '$idnot')";
$rta = mysqli_query($cnx, $sql);

if ($rta) {
    echo " Se ha insertado correctamente";
}
else {
    header("Location: Formulario.php");
    
}

?>