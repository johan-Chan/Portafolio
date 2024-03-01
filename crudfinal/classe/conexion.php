<?php
class Conexion
{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $base="porvenir2";
    private $conectar;

    function __construct()
    {
        $cadena="mysql:host=".$this->host.";dbname=".$this->base.";setcharset=utf8";

        try{

            $this->conectar=new PDO($cadena,$this->user,$this->pass);
            $this->conectar->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            

        }catch(Exception $e)
        {
            $this->conectar="Error en la conexion a la base de datos";
            echo "Atencion se encontro un error en la conexion";

        }
    }
    public function enviar_conexion()
    {
        return $this->conectar;
    }

}

?>