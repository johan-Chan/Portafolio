<?php
    require_once('classe/claseestado.php');
    $id = $_GET['id'];
    $papayo = new trabajo();
    $actu=$papayo->busquedaest($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/ediest.css?ver=1.2">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <header>
        <nav>
            <p>Editar Estado Usuario</p>
        </nav>
    </header>
    <center>
        <form name="form_img" action="guardareditest.php" method="POST" enctype="multipart/form-data">
        <?php 
                for($i = 0; $i < sizeof($actu); $i++) {
                    $k1 = $actu[$i]["id_estado_usuario"];
                    $k2 = $actu[$i]["descripcion_estado"];
                ?>     
            <div class="contenedor">
                <p class="arracacha">Id Estado Usuario</p>
                <input type="text" name="idest" value="<?php echo $k1; ?> " re class="auyama" readonly>
                <p class="arracacha">Descripcion Estado</p>
                <input type="text" name="descrip" value="<?php echo $k2; ?> " class="auyama">
                <br><br>
                <a href="tablaestado.php" class="volver">Volver</a>
                <input type="submit" value="Guardar" class="guardar">
            </div>
        </form>
        <?php
                }
                ?>
    </center>
</body>
</html>
