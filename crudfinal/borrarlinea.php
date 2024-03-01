<?php
require_once('classe/claselinea.php');

    $idUsuario = $_POST['id'];
    $papayo = new trabajo();
    $papayo->borrarlinea($idUsuario);
    header('Location: tablalinea.php');

?>
