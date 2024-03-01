<?php
require_once("classe/claseusu.php");
$ima=$_FILES['imagen']['name'];
$tipo=$_FILES['imagen']['type'];
$tama=$_FILES['imagen']['size'];

if($tama<3200000)
{
    if($tipo=="image/jpg" || $tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/gif" )
    {
        $Carpeta_dest=$_SERVER['DOCUMENT_ROOT'].'/crudfinal/imgs/';
        move_uploaded_file($_FILES['imagen']['tmp_name'],$Carpeta_dest.$ima);
        $idd=$_POST['id'];
        $iden=$_POST['identidad'];
        $tipodo=$_POST['tipo'];
        $nomb=$_POST['nombre'];
        $apel=$_POST['apellido'];
        $tele=$_POST['telefono'];
        $dire=$_POST['direccion'];
        $corre=$_POST['correo'];
        $ususi=$_POST['usuario'];
        $passw=$_POST['contraseña'];
        $ides=$_POST['idestado'];
        $idti=$_POST['idtipo'];
        $convertir=password_hash($passw,PASSWORD_DEFAULT,['cost'=>6]);
        $papayos= new trabajo();
        $pita=$papayos->insertarusu($idd,$iden,$tipodo,$nomb,$apel,$tele,$dire,$corre,$ususi,$convertir,
        $ima,$ides,$idti);
        header('location:tablausu.php');
        
    }
        else
        {
            echo "El sistema solo permite cargar archivos tipo jpg, png, gif";
        }
        
}
else
        {
            echo "El archivo no puede superar los 3MG";
        }

?>