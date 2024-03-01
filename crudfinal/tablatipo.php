<?php
require_once("classe/clasetipo.php");
$papayo = new trabajo();
$papaya = $papayo->vertipo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla tipo usuarios</title>
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/tablatipo.css?ver=1.6">

</head>
<body>
    <header>
        <nav>
            <p>Porvenir Tipo Usuarios</p>
        </nav>
    </header>
    <section>
        <div class="contenedor">
            <div class="tablas">
                <table width="80%" align="center" border="1" style="background-color:#FFB200;">
                    <tr>
                        <th>Id tipo Usuario</th>
                        <th>Descripcion Socio/Asociado</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < sizeof($papaya); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $papaya[$i]["id_tipo_usuario"];?></td>
                        <td><?php echo $papaya[$i]["descr_asociado"];?></td>
                        <td>
                            <a href="editartipo.php?id=<?php echo $papaya[$i]["id_tipo_usuario"]; ?>" class="botoned">Editar</a>
                        </td>
                        <td>
                            <form action="borrartipo.php" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres borrar este registro?');">
                                <input type="hidden" name="id" value="<?php echo $papaya[$i]["id_tipo_usuario"]; ?>">
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
        <a href="insertartipo.php" class="botone">Insertar</a>
    </footer>
</body>
</html>
