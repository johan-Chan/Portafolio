<?php
require_once('classe/claseestado.php');

    $idUsuario = $_POST['id'];
    $papayo = new trabajo();
    $papayo->borrarest($idUsuario);
    header('Location: tablaestado.php');

?>
