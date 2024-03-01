<?php
    require_once('classe/claseusu.php');
    $id = $_GET['id'];
    $papayo = new trabajo();
    $actu=$papayo->busquedausu($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon/6199368.png">
    <link rel="stylesheet" href="estilos/edi.css?ver=1.7">
    <title>Editar Usuario</title>
</head>
<body>
    <header>
        <nav>
            <p>Editar Usuario</p>
        </nav>
    </header>
    <section>
        <div class="contenedor">
            <form name="form_img" action="guardareditusu.php" method="POST" enctype="multipart/form-data">
                <?php 
                for($i = 0; $i < sizeof($actu); $i++) {
                    $k1 = $actu[$i]["id_usuario"];
                    $k2 = $actu[$i]["identidad_usuario"];
                    $k3 = $actu[$i]["id_tipo_documento"];
                    $k4 = $actu[$i]["nombre_usuario"];
                    $k5 = $actu[$i]["apellido_usuario"];
                    $k6 = $actu[$i]["telef_usuario"];
                    $k7 = $actu[$i]["direcc_usuario"];
                    $k8 = $actu[$i]["correo_usuario"];
                    $k9 = $actu[$i]["usuario_sistema"];
                    $imagen = $actu[$i]["Imagenes_usu"];
                    $k10 = $actu[$i]["descripcion_estado"];
                    $k11 = $actu[$i]["descr_asociado"];
                ?>     
                <div class="contenedor2">
                    <p class="arracacha">ID de Usuario</p>
                    <input type="text" name="id" value="<?php echo $k1; ?>" class="auyama" readonly>
                    <br>
                    <p class="arracacha">Numero de Documento</p>
                    <input type="text" name="identidad" value="<?php echo $k2; ?>" class="auyama">
                    <br>
                    <p class="arracacha">Tipo de Documento</p>
                    <select name="tipo" id="lang" class="opcion1">
                        <option value="1" <?php if ($k3 == 1) echo "selected"; ?>>Tarjeta identidad</option>
                        <option value="2" <?php if ($k3 == 2) echo "selected"; ?>>Cedula</option>
                        <option value="3" <?php if ($k3 == 3) echo "selected"; ?>>Pasaporte</option>
                        <option value="4" <?php if ($k3 == 4) echo "selected"; ?>>Cedula Estranjeria</option>
                    </select>

                    <p class="arracacha">Nombre</p>
                    <input type="text" name="nombre" value="<?php echo $k4; ?>" class="auyama">
                    <br>
                    <p class="arracacha">Apelliddo</p>
                    <input type="text" name="apellido" value="<?php echo $k5; ?>" class="auyama">
                    <br>
                    <p class="arracacha">Telefono</p>
                    <input type="text" name="telefono" value="<?php echo $k6; ?>" class="auyama">
                    <br>
                    <p class="arracacha">Direccion</p>
                    <input type="text" name="direccion" value="<?php echo $k7; ?>" class="auyama">
                    <br>
                    <p class="arracacha">Correo Electronico</p>
                    <input type="text" name="correo" value="<?php echo $k8; ?>" class="auyama">
                    <br>
                    <p class="arracacha">Nombre Usuario</p>
                    <input type="text" name="usuario" value="<?php echo $k9; ?>" class="auyama">
                    <br>
                    <p class="arracacha">Estado Usuario</p>
                    <select name="idestado" id="lang" class="opcion2">
                        <option value="1" <?php if ($k10 == 1) echo "selected"; ?>>Activo</option>
                        <option value="2" <?php if ($k10 == 2) echo "selected"; ?>>Inactivo</option>
                    </select>
                    <p class="arracacha">Tipo de Usuario</p>
                    <select name="idtipo" id="lang" class="opcion3">
                        <option value="1" <?php if ($k11 == 1) echo "selected"; ?>>Socio</option>
                        <option value="2" <?php if ($k11 == 2) echo "selected"; ?>>Asociado</option>
                        <option value="5" <?php if ($k11 == 5) echo "selected"; ?>>Socio/Asociado</option>
                    </select>
                    <br>
                    <img src="imgs/<?php echo $imagen; ?>">
                    <br>
                    <input type="hidden" name="imagen1" value="<?php echo $imagen; ?>" >
                    <br>
                    <input type="file" name="imagen" id="imagen" class="sele">
                    <br><br>
                    <label for="editar" class="arracacha">¿Deseas editar la imagen?</label>
                    <select name="editar" id="editar" class="opcion4">
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                    <br><br>
                    <a href="tablausu.php" class="volver">Volver</a>
                    <input type="submit" value="Guardar" class="guardar">
                </div>
                </form>
                <?php
                }
                ?>
            </div>    
        </section>
    </body>
    </html>
