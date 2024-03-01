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

        public function verestado()
        {
            $sql="SELECT * FROM estado_usu ORDER BY id_estado_usuario ASC";
            $consule=$this->conexi->prepare($sql);
            $consule->execute();
            $consulta=$consule->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

        public function borrarest($id)
        {
        $sql = "DELETE FROM estado_usu WHERE id_estado_usuario = :id";
        $stmt = $this->conexi->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
        }

        public function insertarest($idest,$desc)
        {
            $sql = "INSERT INTO estado_usu VALUES('$idest','$desc')";
            $instest = $this->conexi->prepare($sql);
            $instest->execute();
            return $instest;
        }

        public function actualizarest($id,$j1)
        {
            $sql = "UPDATE estado_usu SET descripcion_estado = '$j1' WHERE  id_estado_usuario = $id ";
            $actuest = $this->conexi->prepare($sql);
            $actuest->execute();
            return $actuest;
        }

        public function busquedaest($papa)
        {
            $sql="SELECT * FROM estado_usu WHERE id_estado_usuario = $papa ";
            $consule=$this->conexi->prepare($sql);
            $consule->execute();
            $consulta=$consule->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

    }
?>