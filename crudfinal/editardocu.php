<?php
    require_once('classe/clasedocu.php');
    $id = $_GET['id'];
    $papayo = new trabajo();
    $actu=$papayo->busquedadocu($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/edidocu.css?ver=1.3    ">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <header>
        <nav>
            <p>Editar Tipo Documento</p>
        </nav>
    </header>
    <center>
        <form name="form_img" action="guardareditdocu.php" method="POST" enctype="multipart/form-data">
        <?php 
                for($i = 0; $i < sizeof($actu); $i++) {
                    $k1 = $actu[$i]["id_tipo_documento"];
                    $k2 = $actu[$i]["descrip_documento"];
                ?>     
            <div class="contenedor">
                <p class="arracacha">Id Tipo Documento</p>
                <input type="text" name="idest" value="<?php echo $k1; ?> " re class="auyama" readonly>
                <p class="arracacha">Descripcion Documento</p>
                <input type="text" name="descrip" value="<?php echo $k2; ?> " class="auyama">
                <br><br>
                <a href="tablatipo.php" class="volver">Volver</a>
                <input type="submit" value="Guardar" class="guardar">
            </div>
        </form>
        <?php
                }
                ?>
    </center>
</body>
</html>
