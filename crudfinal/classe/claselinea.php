<?php
require_once('classe/conexion.php');

    class trabajo extends Conexion
    {
        private $datos;
        private $datos1;
        public $conexi;
        
        function __construct()
        {
            $this->conexi= new  Conexion();
            $this->conexi= $this->conexi->enviar_conexion();
        }

        public function verlinea()
        {
            $sql="SELECT * FROM linea_prestamo ORDER BY id_linea_prestamo  ASC";
            $consult=$this->conexi->prepare($sql);
            $consult->execute();
            $consulta=$consult->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

        public function borrarlinea($id)
        {
        $sql = "DELETE FROM linea_prestamo WHERE id_linea_prestamo = :id";
        $stmt = $this->conexi->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
        }

        public function insertarlinea($idest,$desc)
        {
            $sql = "INSERT INTO linea_prestamo VALUES('$idest','$desc')";
            $instest = $this->conexi->prepare($sql);
            $instest->execute();
            return $instest;
        }

        public function actualizarlinea($id,$j1)
        {
            $sql = "UPDATE linea_prestamo SET descr_linea_prestamo = '$j1' WHERE  id_linea_prestamo = $id ";
            $actuest = $this->conexi->prepare($sql);
            $actuest->execute();
            return $actuest;
        }

        public function busquedalinea($papa)
        {
            $sql="SELECT * FROM linea_prestamo WHERE id_linea_prestamo = $papa ";
            $consule=$this->conexi->prepare($sql);
            $consule->execute();
            $consulta=$consule->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

    }
?>