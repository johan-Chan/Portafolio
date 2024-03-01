<?php
    require_once('classe/clasetipo.php');

    $idUsuario = $_POST['id'];
    $papayo = new trabajo();
    $papayo->borrartipo($idUsuario);
    header('Location: tablatipo.php');

?>
