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

        public function vertipo()
        {
            $sql="SELECT * FROM tipo_asociados_socios ORDER BY id_tipo_usuario ASC";
            $consult=$this->conexi->prepare($sql);
            $consult->execute();
            $consulta=$consult->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

        public function borrartipo($id)
        {
        $sql = "DELETE FROM tipo_asociados_socios WHERE id_tipo_usuario = :id";
        $stmt = $this->conexi->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
        }

        public function insertartipo($idest,$desc)
        {
            $sql = "INSERT INTO tipo_asociados_socios VALUES('$idest','$desc')";
            $instest = $this->conexi->prepare($sql);
            $instest->execute();
            return $instest;
        }

        public function actualizartipo($id,$j1)
        {
            $sql = "UPDATE tipo_asociados_socios SET descr_asociado = '$j1' WHERE  id_tipo_usuario = $id ";
            $actuest = $this->conexi->prepare($sql);
            $actuest->execute();
            return $actuest;
        }

        public function busquedatipo($papa)
        {
            $sql="SELECT * FROM tipo_asociados_socios WHERE id_tipo_usuario = $papa ";
            $consule=$this->conexi->prepare($sql);
            $consule->execute();
            $consulta=$consule->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

    }
?>