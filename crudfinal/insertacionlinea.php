<?php
require_once('classe/claselinea.php');
$papayos= new trabajo();

$idest=$_POST['idest'];
$descri=$_POST['descrip'];

$pita=$papayos->insertarlinea($idest,$descri);
header('location: tablalinea.php');

?>