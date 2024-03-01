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

        public function verdocu()
        {
            $sql="SELECT * FROM tipo_documento ORDER BY id_tipo_documento  ASC";
            $consult=$this->conexi->prepare($sql);
            $consult->execute();
            $consulta=$consult->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

        public function borrardocu($id)
        {
        $sql = "DELETE FROM tipo_documento WHERE id_tipo_documento = :id";
        $stmt = $this->conexi->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
        }

        public function insertardocu($idest,$desc)
        {
            $sql = "INSERT INTO tipo_documento VALUES('$idest','$d  esc')";
            $instest = $this->conexi->prepare($sql);    
            $instest->execute();
            return $instest;
        }

        public function actualizardocu($id,$j1)
        {
            $sql = "UPDATE tipo_documento SET descrip_documento = '$j1' WHERE  id_tipo_documento = $id ";
            $actuest = $this->conexi->prepare($sql);
            $actuest->execute();
            return $actuest;
        }

        public function busquedadocu($papa)
        {
            $sql="SELECT * FROM tipo_documento WHERE id_tipo_documento = $papa ";
            $consule=$this->conexi->prepare($sql);
            $consule->execute();
            $consulta=$consule->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

    }
?>