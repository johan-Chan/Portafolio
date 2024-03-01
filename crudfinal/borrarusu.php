<?php
    require_once('classe/claseusu.php');
    $idUsuario = $_POST['id'];
    $papayo = new trabajo();
    $papayo->borrarusu($idUsuario);
    header('Location: tablausu.php');
?>
