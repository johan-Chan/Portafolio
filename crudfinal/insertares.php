<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/insest.css?ver=1.2">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <header>
        <nav>
            <p>Insertar Estado Usuario</p>
        </nav>
    </header>
    <center>
        <form name="form_img" action="insertaciones.php" method="POST" enctype="multipart/form-data">
            <div class="contenedor">
                <input type="text" name="idest" placeholder="Digite el Id de Estado" class="auyama" required>
                <br><br>
                <input type="text" name="descrip" placeholder="Digite la Descripcion" class="auyama" required>
                <br><br>
                <a href="tablaestado.php" class="volver">Volver</a>
                <input type="submit" value="Guardar" class="guardar">
            </div>
        </form>
    </center>
</body>
</html>
