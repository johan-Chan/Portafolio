<?php
require_once('classe/claseestado.php');
$papayos= new trabajo();

$idest=$_POST['idest'];
$descri=$_POST['descrip'];

$pita=$papayos->actualizarest($idest,$descri);
header('location: tablaestado.php');      

?>