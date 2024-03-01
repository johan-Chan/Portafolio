<?php
require_once('classe/claseusu.php');
$papayo = new trabajo();
$papaya = $papayo->ver();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla usuarios</title>
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/tablausu.css?ver=1.3">

</head>
<body>
    <header>
        <nav>
            <p>Porvenir Usuarios</p>
        </nav>
    </header>
    <section>
        <div class="contenedor">
            <div class="tabla">
                <table width="80%" align="center" border="1" style="background-color:#FFB200;">
                    <tr>
                        <th>Id usuario</th>
                        <th>Numero identificacion</th>
                        <th>Tipo de documento</th>
                        <th>Nombre usuario</th>
                        <th>Apellido usuario</th>
                        <th>Telefono usuario</th>
                        <th>Direccion usuario</th>
                        <th>Correo usuario</th>
                        <th>Gamertag</th>
                        <th>Contraseña</th>
                        <th>Imagenes</th>
                        <th>Estado usuario</th>
                        <th>Tipo usuario</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                        <th>PDFs</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < sizeof($papaya); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $papaya[$i]["id_usuario"];?></td>
                        <td><?php echo $papaya[$i]["identidad_usuario"];?></td>
                        <td><?php echo $papaya[$i]["descrip_documento"];?></td>
                        <td><?php echo $papaya[$i]["nombre_usuario"];?></td>
                        <td><?php echo $papaya[$i]["apellido_usuario"];?></td>
                        <td><?php echo $papaya[$i]["telef_usuario"];?></td>
                        <td><?php echo $papaya[$i]["direcc_usuario"];?></td>
                        <td><?php echo $papaya[$i]["correo_usuario"];?></td>
                        <td><?php echo $papaya[$i]["usuario_sistema"];?></td>
                        <td>**********</td>
                        <?php $imagen = $papaya[$i]["Imagenes_usu"];?>
                        <td>
                            <img height="50px" src="imgs/<?php echo $imagen; ?>" width="80%">
                        </td>
                        <td><?php echo $papaya[$i]["descripcion_estado"];?></td>
                        <td><?php echo $papaya[$i]["descr_asociado"];?></td>
                        <td>
                            <a href="editarusu.php?id=<?php echo $papaya[$i]["id_usuario"]; ?>" class="botoned">Editar</a>
                        </td>
                        <td>
                            <form action="borrarusu.php" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres borrar este registro?');">
                                <input type="hidden" name="id" value="<?php echo $papaya[$i]["id_estado_usuario"]; ?>">
                                <button type="submit" class="botonb">Borrar</button>
                            </form>
                        </td>
                        <td>
                            <a href="pdfusuind.php?id=<?php echo $papaya[$i]["id_usuario"]; ?>" target="_blank" class="botonh">PDF</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
    <footer>
        <a href="menuusu.php" class="botoni">Volver a Usuarios</a>
        <a href="insertarusu.php" class="botone">Insertar</a>
        <a href="pdfusu.php" class="botonu" target="_blank">Imprimir PDF</a>
    </footer>
</body>
</html>
