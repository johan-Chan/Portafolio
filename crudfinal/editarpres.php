<?php
    require_once('classe/claseprestamo.php');
    $id = $_GET['id'];
    $papayo = new trabajo();
    $Cr7=$papayo->busquedapres($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/inspres.css?ver=1.9">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <header>
        <nav>
            <p>Editar Prestamo</p>
        </nav>
    </header>
    <center>
        <form name="form_img" action="guardareditpres.php" method="POST" enctype="multipart/form-data">
        <?php 
                for($i = 0; $i < sizeof($Cr7); $i++) {
                    $k1 = $Cr7[$i]["id_prestamo"];
                    $k2 = $Cr7[$i]["fecha_inicio"];
                    $k3 = $Cr7[$i]["fecha_final"];
                    $k4 = $Cr7[$i]["prestamo_cantidad"];
                    $k5 = $Cr7[$i]["prestamo_valor_total"];
                    $k6 = $Cr7[$i]["prestamo_valor_pagado"];
                    $k7 = $Cr7[$i]["id_estado_prestamo"];
                    $k8 = $Cr7[$i]["descrip_prestamo"];
                    $k9 = $Cr7[$i]["id_usuario"];
                    $k10 = $Cr7[$i]["id_asociado_solicitante"];
                    $k11 = $Cr7[$i]["tasa_interes"];
                    $k12 = $Cr7[$i]["tasa_anticipada"];
                    $k13 = $Cr7[$i]["tasa_vencida"];
                    $k14 = $Cr7[$i]["id_modalidad_prestamo"];
                    $k15 = $Cr7[$i]["id_linea_prestamo"];
                    $k16 = $Cr7[$i]["id_empresa"];
                ?>      
            <div class="contenedor">
                <input type="text" name="id" value=<?php echo $k1; ?>  class="auyama" required readonly>
                <br>
                <p class="arracacha">Fecha Inicio</p>
                <input type="date" name="fechai" class="auyama" value=<?php echo $k2; ?> required>
                <p class="arracacha">Fecha Fin</p>
                <input type="date" name="fechaf" class="auyama" value=<?php echo $k3; ?> required>
                <br><br>
                <input type="number" name="cantid" value=<?php echo $k4; ?> class="auyama"  required >
                <br><br>
                <input type="number" name="total" value=<?php echo $k5; ?> class="auyama" required>
                <br><br>
                <input type="number" name="pagado" value=<?php echo $k6; ?> class="auyama"  required>
                <br>
                <p class="arracacha">Estado Del Prestamo</p>
                <select name="estadop" id="lang" class="opcion1">
                    <option value="1" <?php if ($k7 == 1) echo 'selected'; ?>>Activo</option>
                    <option value="2" <?php if ($k7 == 2) echo 'selected'; ?>>Vencido</option>
                    <option value="3" <?php if ($k7 == 3) echo 'selected'; ?>>En Mora</option>
                    <option value="4" <?php if ($k7 == 4) echo 'selected'; ?>>Proceso De Cobro</option>
                    <option value="5" <?php if ($k7 == 5) echo 'selected'; ?>>Pagado</option>
                    <option value="6" <?php if ($k7 == 6) echo 'selected'; ?>>Cancelado</option>
                    <option value="7" <?php if ($k7 == 7) echo 'selected'; ?>>Espera De Aprobacion</option>
                </select>
                <br>
                <input type="text" name="desc" value=<?php echo $k8; ?> class="auyama" required>
                <br><br>
                <input type="text" name="usu" value=<?php echo $k9; ?> class="auyama"  required readonly> 
                <br><br>
                <input type="text" name="solic" value=<?php echo $k10; ?> class="auyama"  required>
                <br><br>
                <input type="number" name="inte" value=<?php echo $k11; ?>  class="auyama" required>
                <br><br>
                <input type="number" name="anti" value=<?php echo $k12; ?> class="auyama"  required>
                <br><br>
                <input type="number" name="venci" value=<?php echo $k13; ?> class="auyama"  required>
                <p class="arracacha">Modalidad Del Prestamo</p>
                <select name="moda" id="lang" class="opcion2">
                    <option value="1" <?php if ($k14 == 1) echo 'selected'; ?>>Prestamo Hipotecario</option>
                    <option value="2" <?php if ($k14 == 2) echo 'selected'; ?>>Préstamos para Automóviles</option>
                    <option value="3" <?php if ($k14 == 3) echo 'selected'; ?>>Línea de Crédito</option>
                    <option value="4" <?php if ($k14 == 4) echo 'selected'; ?>>Préstamos para Educación</option>
                    <option value="5" <?php if ($k14 == 5) echo 'selected'; ?>>Préstamos Comerciales</option>
                    <option value="6" <?php if ($k14 == 6) echo 'selected'; ?>>Préstamos Personales</option>
                </select>
                <p class="arracacha">Linea Del Prestamo</p>
                <select name="linea" id="lang" class="opcion3">
                    <option value="1" <?php if ($k15 == 1) echo 'selected'; ?>>Línea de Crédito Personal</option>
                    <option value="2" <?php if ($k15 == 2) echo 'selected'; ?>>Línea de Crédito Hipotecaria</option>
                    <option value="3" <?php if ($k15 == 3) echo 'selected'; ?>>Línea de Crédito para Tarjetas de Crédito</option>
                    <option value="4" <?php if ($k15 == 4) echo 'selected'; ?>>Línea de Crédito para Inventarios</option>
                    <option value="5" <?php if ($k15 == 5) echo 'selected'; ?>>Línea de Crédito para Cuentas por Cobrar</option>
                    <option value="6" <?php if ($k15 == 6) echo 'selected'; ?>>Línea de Crédito para Estudiantes</option>
                </select>

                <br>
                <input type="text" name="empre" value=<?php echo $k16; ?> class="auyama"  required>
                <br><br>
                <a href="tablapres.php" class="volver">Volver</a>
                <input type="submit" value="Guardar" class="guardar">
            </div>
        </form>
        <?php
            }
        ?>
    </center>
</body>
</html>
