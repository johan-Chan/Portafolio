<?php
require_once('classe/clasetipo.php');
$papayos= new trabajo();

$idest=$_POST['idest'];
$descri=$_POST['descrip'];

$pita=$papayos->insertartipo($idest,$descri);
header('location: tablatipo.php'); 

?>