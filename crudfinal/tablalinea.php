<?php
require_once("classe/claselinea.php");
$papayo = new trabajo();
$papaya = $papayo->verlinea();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla linea usuarios</title>
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/tablalinea.css?ver=1.6">

</head>
<body>
    <header>
        <nav>
            <p>Porvenir linea Usuarios</p>
        </nav>
    </header>
    <section>
        <div class="contenedor">
            <div class="tablas">
                <table width="80%" align="center" border="1" style="background-color:#FFB200;">
                    <tr>
                        <th>Id linea Prestamo</th>
                        <th>Descripcion Linea Prestamo</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < sizeof($papaya); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $papaya[$i]["id_linea_prestamo"];?></td>
                        <td><?php echo $papaya[$i]["descr_linea_prestamo"];?></td>
                        <td>
                            <a href="editarlinea.php?id=<?php echo $papaya[$i]["id_linea_prestamo"]; ?>" class="botoned">Editar</a>
                        </td>
                        <td>
                            <form action="borrarlinea.php" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres borrar este registro?');">
                                <input type="hidden" name="id" value="<?php echo $papaya[$i]["id_linea_prestamo"]; ?>">
                                <button type="submit" class="botonb">Borrar</button>
                            </form> 
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
        <br>
        <a href="menupres.php" class="botoni">Volver a Prestamos</a>
        <a href="insertarlinea.php" class="botone">Insertar</a>
    </footer>
</body>
</html>
