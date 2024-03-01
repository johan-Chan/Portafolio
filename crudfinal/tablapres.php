<?php
require_once('classe/claseprestamo.php');
$papayo = new trabajo();
$papaya = $papayo->verpres();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla usuarios</title>
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/tablapres.css?ver=1.3">

</head>
<body>
    <header>
        <nav>
            <p>Porvenir Prestamos</p>
        </nav>
    </header>
    <section>
        <div class="contenedor">
            <div class="tabla">
                <table width="80%" align="center" border="1" style="background-color:#FFB200;">
                    <tr>
                    <th>Id Prestamo</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Cantidad Prestamo</th>
                        <th>Prestamo Valor Total</th>
                        <th>Valor Pagado</th>
                        <th>Estado Prestamo</th>
                        <th>Descripcion Del Prestamo</th>
                        <th>Id Usuario</th>
                        <th>Id Asociado Solicitante</th>
                        <th>Tasa De Interes</th>
                        <th>Tasa Anticipada</th>
                        <th>Tasa Vencida</th>
                        <th>Modalidad Prestamo</th>
                        <th>Linea De Prestamo</th>
                        <th>Id Empresa</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                        <th>PDF</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < sizeof($papaya); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $papaya[$i]["id_prestamo"];?></td>
                        <td><?php echo $papaya[$i]["fecha_inicio"];?></td>
                        <td><?php echo $papaya[$i]["fecha_final"];?></td>
                        <td><?php echo $papaya[$i]["prestamo_cantidad"];?></td>
                        <td><?php echo $papaya[$i]["prestamo_valor_total"];?></td>
                        <td><?php echo $papaya[$i]["prestamo_valor_pagado"];?></td>
                        <td><?php echo $papaya[$i]["descr_estado_prestamo"];?></td>
                        <td><?php echo $papaya[$i]["descrip_prestamo"];?></td>
                        <td><?php echo $papaya[$i]["nombre_usuario"];?></td>
                        <td><?php echo $papaya[$i]["id_asociado_solicitante"];?></td>
                        <td><?php echo $papaya[$i]["tasa_interes"];?></td>
                        <td><?php echo $papaya[$i]["tasa_anticipada"];?></td>
                        <td><?php echo $papaya[$i]["tasa_vencida"];?></td>
                        <td><?php echo $papaya[$i]["descr_modalidad"];?></td>
                        <td><?php echo $papaya[$i]["descr_linea_prestamo"];?></td>
                        <td><?php echo $papaya[$i]["id_empresa"];?></td>
                        <td>
                            <a href="editarpres.php?id=<?php echo $papaya[$i]["id_prestamo"]; ?>" class="botoned">Editar</a>
                        </td>
                        <td>
                            <form action="borrarpres.php" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres borrar este registro?');">
                                <input type="hidden" name="id" value="<?php echo $papaya[$i]["id_estado_usuario"]; ?>">
                                <button type="submit" class="botonb">Borrar</button>
                            </form>
                        </td>
                        <td>
                            <a href="pdfpresind.php?id=<?php echo $papaya[$i]["id_prestamo"]; ?>" target="_blank" class="botonh">PDF</a>
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
        <a href="menupres.php" class="botoni">Volver a Prestamos</a>
        <a href="insertarpres.php" class="botone">Insertar</a>
    </footer>
</body>
</html>
