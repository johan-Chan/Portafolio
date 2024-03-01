    <?php
    require_once('classe/clasedocu.php');
    $papayos= new trabajo();

    $idest=$_POST['idest'];
    $descri=$_POST['descrip'];

    $pita=$papayos->actualizardocu($idest,$descri);
    header('location: tabladocu.php');

    ?>