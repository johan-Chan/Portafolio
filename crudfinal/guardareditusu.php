<?php
require_once("classe/claseusu.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $editar = $_POST["editar"];
    if ($editar === "si") {
        $ima = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['type'];
        $tama = $_FILES['imagen']['size'];

        if ($tama < 3200000) {
            if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif" || $tipo == "image/jfif") {
                $Carpeta_dest = $_SERVER['DOCUMENT_ROOT'] . '/crudfinal/imgs/';
                move_uploaded_file($_FILES['imagen']['tmp_name'], $Carpeta_dest . $ima);
            } else {
                echo "El sistema solo permite cargar archivos tipo jpg, png, gif";
            }
        } else {
            echo "El archivo no puede superar los 3MG";
        }
    } else {
        
        $ima = $_POST['imagen1']; 
        $ima2="imgs/".$ima;
        $idd = $_POST['id'];
        $iden = $_POST['identidad'];
        $tipodo = $_POST['tipo'];
        $nomb = $_POST['nombre'];
        $apel = $_POST['apellido'];
        $tele = $_POST['telefono'];
        $dire = $_POST['direccion'];
        $corre = $_POST['correo'];
        $ususi = $_POST['usuario'];
        $ides = $_POST['idestado'];
        $idti = $_POST['idtipo'];
    
        $papayos = new trabajo();
        $resultado = $papayos->actualizarusu($idd, $iden, $tipodo, $nomb, $apel, $tele, $dire, $corre, $ususi, $ima2, $ides, $idti);
    }
    
    $idd = $_POST['id'];
    $iden = $_POST['identidad'];
    $tipodo = $_POST['tipo'];
    $nomb = $_POST['nombre'];
    $apel = $_POST['apellido'];
    $tele = $_POST['telefono'];
    $dire = $_POST['direccion'];
    $corre = $_POST['correo'];
    $ususi = $_POST['usuario'];
    $ides = $_POST['idestado'];
    $idti = $_POST['idtipo'];

    $papayos = new trabajo();
    $resultado = $papayos->actualizarusu($idd, $iden, $tipodo, $nomb, $apel, $tele, $dire, $corre, $ususi, $ima, $ides, $idti);

    header('location: tablausu.php');
}
?>
