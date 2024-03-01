<?php
require_once('classe/clasedocu.php');

    $idUsuario = $_POST['id'];
    $papayo = new trabajo();
    $papayo->borrardocu($idUsuario);
    header('Location: tabladocu.php');

?>
