<?php
    require_once("classe/claseprestamo.php");
    $idUsuario = $_POST['id'];
    $papayo = new trabajo();
    $papayo->borrarpres($idUsuario);
    header('Location: tablapres.php');
?>
