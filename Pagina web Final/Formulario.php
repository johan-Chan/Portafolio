<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Estilos/Formulario.css">
</head>
<body>
<div class="tabla">

<table width="80%" align="center" border="1">
    <tr>
        <td>Id usuario</td>
        <td>Usuario</td>
        <td>Telefono</td>
        <td>Correo Electronico</td>
        <td>Id noticia</td>
        <td>Opciones</td>
        <td><a href="http://localhost//Pagina%20web%20Final/nuevo.php">Adicionar datos</a></td>

    </tr>
    <?php

        $cnx = mysqli_connect("localhost","root","","noticias_pagina");
        $sql = "SELECT id_usuario, usuario, telefono, correo_ele, id_noticia FROM usuarios order by id_usuario desc ";
        $rta = mysqli_query($cnx, $sql);
        while($mostrar = mysqli_fetch_row($rta)){
         ?>
            <tr>
                <td><?php echo $mostrar['0'] ?></td>
                <td><?php echo $mostrar['1'] ?></td>
                <td><?php echo $mostrar['2'] ?></td>
                <td><?php echo $mostrar['3'] ?></td>
                <td><?php echo $mostrar['4'] ?></td>
                <td>
                    <a href="editar.php
                    id_usuario=<?php echo $mostrar['0'] ?> &
                    usuario=<?php echo $mostrar['1'] ?> &
                    telefono=<?php echo $mostrar['2'] ?> &
                    correo_ele=<?php echo $mostrar['3'] ?> & 
                    id_noticia=<?php echo $mostrar['4'] ?> &
                    ">Editar</a>
                    <a href="eliminar.php">Eliminar</a>
                    
                    
                
            
                </td>
            </tr>
            <?php
        }
        ?>


    
    
</table>






</div>



    
</body>
</html>