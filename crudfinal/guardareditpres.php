<?php
require_once("classe/claseprestamo.php");

    $papayos = new trabajo();

    $w1=$_POST['id'];
    $w2=$_POST['fechai'];
    $w3=$_POST['fechaf'];
    $w4=$_POST['cantid'];
    $w5=$_POST['total'];
    $w6=$_POST['pagado'];
    $w7=$_POST['estadop'];
    $w8=$_POST['desc'];
    $w9=$_POST['usu'];
    $w10=$_POST['solic'];
    $w11=$_POST['inte'];
    $w12=$_POST['anti'];
    $w13=$_POST['venci'];
    $w14=$_POST['moda'];
    $w15=$_POST['linea'];
    $w16=$_POST['empre'];
    
    $resultado = $papayos->actualizarpres($w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$w11,$w12,$w13,$w14,$w15,$w16);
    header('location: tablapres.php');

?>
