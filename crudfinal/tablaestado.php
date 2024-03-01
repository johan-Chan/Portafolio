<?php
require_once("classe/claseestado.php");
$papayo = new trabajo();
$papaya = $papayo->verestado();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla usuarios</title>
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/tablaest.css?ver=1.6">

</head>
<body>
    <header>
        <nav>
            <p>Porvenir Estado Usuarios</p>
        </nav>
    </header>
    <section>
        <div class="contenedor">
            <div class="tablas">
                <table width="80%" align="center" border="1" style="background-color:#FFB200;">
                    <tr>
                        <th>Id Estado Usuario</th>
                        <th>Descripcion Estado</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < sizeof($papaya); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $papaya[$i]["id_estado_usuario"];?></td>
                        <td><?php echo $papaya[$i]["descripcion_estado"];?></td>
                        <td>
                            <a href="editarest.php?id=<?php echo $papaya[$i]["id_estado_usuario"]; ?>" class="botoned">Editar</a>
                        </td>
                        <td>
                            <form action="borrares.php" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres borrar este registro?');">
                                <input type="hidden" name="id" value="<?php echo $papaya[$i]["id_estado_usuario"]; ?>">
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
        <a href="menuusu.php" class="botoni">Volver a Usuarios</a>
        <a href="insertares.php" class="botone">Insertar</a>
    </footer>
</body>
</html>
