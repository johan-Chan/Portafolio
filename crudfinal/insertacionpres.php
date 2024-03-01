<?php
require_once("classe/claseprestamo.php");
        
    $papayos= new trabajo();
        
    $o1=$_POST['id'];
    $o2=$_POST['fechai'];
    $o3=$_POST['fechaf'];
    $o4=$_POST['cantid'];
    $o5=$_POST['total'];
    $o6=$_POST['pagado'];
    $o7=$_POST['estadop'];
    $o8=$_POST['desc'];
    $o9=$_POST['usu'];
    $o10=$_POST['solic'];
    $o11=$_POST['inte'];
    $o12=$_POST['anti'];
    $o13=$_POST['venci'];
    $o14=$_POST['moda'];
    $o15=$_POST['linea'];
    $o16=$_POST['empre'];
        
    $pita=$papayos->insertarpres($o1,$o2,$o3,$o4,$o5,$o6,$o7,$o8,$o9,$o10,$o11,$o12,$o13,$o14,$o15,$o16);
    header('location:tablapres.php');

?>