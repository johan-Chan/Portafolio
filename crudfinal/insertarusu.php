<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/ins.css?ver=1.2">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <header>
        <nav>
            <p>Insertar Usuario</p>
        </nav>
    </header>
    <center>
        <form name="form_img" action="insertacionusu.php" method="POST" enctype="multipart/form-data">
            <div class="contenedor">
                <input type="text" name="id" placeholder="Digite el ID" class="auyama" required>
                <br><br>
                <select name="tipo" id="lang" class="opcion1">
                    <option value="1">Tarjeta identidad</option>
                    <option value="2">Cedula</option>
                    <option value="3">Pasaporte</option>
                    <option value="4">Cedula Estranjeria</option>
                </select>
                <br>
                <input type="text" name="identidad" placeholder="Numero de documento" class="auyama" required>
                <br><br>
                <input type="text" name="nombre" placeholder="Digite su nombre" class="auyama" required>
                <br><br>
                <input type="text" name="apellido" placeholder="Digite su apellido" class="auyama" required>
                <br><br>
                <input type="text" name="telefono" placeholder="Digite su telefono" class="auyama" required>
                <br><br>
                <input type="text" name="direccion" placeholder="Digite su direccion" class="auyama" required>
                <br><br>
                <input type="text" name="correo" placeholder="Digite su correo" class="auyama" required>
                <br><br>
                <input type="text" name="usuario" placeholder="Digite su nombre de usuario" class="auyama" required>
                <br><br>
                <input type="text" name="contraseña" placeholder="Digite su contraseña" class="auyama" required>
                <br><br>
                <select name="idestado" id="lang" class="opcion2">
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
                <br>
                <select name="idtipo" id="lang" class="opcion3">
                    <option value="1">Socio</option>
                    <option value="2">Asociado</option>
                    <option value="5">Socio/Asociado</option>
                </select>
                <br>
                <input type="file" name="imagen" size="registrar" class="sele">
                <br><br>
                <a href="tablausu.php" class="volver">Volver</a>
                <input type="submit" value="Guardar" class="guardar">
            </div>
        </form>
    </center>
</body>
</html>
