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

        public function ver()
        {
            $sql="SELECT * FROM usuario,estado_usu,tipo_asociados_socios,tipo_documento
            WHERE usuario.id_estado_usuario=estado_usu.id_estado_usuario
            AND usuario.id_tipo_usuario=tipo_asociados_socios.id_tipo_usuario
            AND usuario.id_tipo_documento=tipo_documento.id_tipo_documento
            ORDER BY id_usuario ASC";
            $consul=$this->conexi->prepare($sql);
            $consul->execute();
            $consulta=$consul->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

        public function pdfs()//PDFs
        {
            $sql="SELECT * FROM usuario,estado_usu,tipo_asociados_socios,tipo_documento 
            WHERE usuario.id_estado_usuario=estado_usu.id_estado_usuario 
            AND usuario.id_tipo_usuario=tipo_asociados_socios.id_tipo_usuario 
            AND usuario.id_tipo_documento=tipo_documento.id_tipo_documento";
            $pdf=$this->conexi->prepare($sql);
            $pdf->execute();
            $pdfs=$pdf->fetchAll(PDO::FETCH_ASSOC);
            return $pdfs;    
        }

        public function insertarusu($id,$iden,$tipod,$nom,$ape,$tele,$direc,$correo,$usus,$pass,$image,$idesta,$idtipo)
        {
            $sql = "INSERT INTO usuario VALUES('$id','$iden','$tipod','$nom','$ape','$tele','$direc',
            '$correo','$usus','$pass',:imagen,'$idesta','$idtipo')";
            $inst = $this->conexi->prepare($sql);
            $inst->bindparam(":imagen",$image);
            $inst->execute();
            return $inst;
        }
        
        public function borrarusu($id)
        {
        $sql = "DELETE FROM usuario WHERE id_usuario = :id";
        $stmt = $this->conexi->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
        }

        public function actualizarusu($id,$h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9i,$h10,$h11)
        {
            $sql = "UPDATE usuario SET identidad_usuario ='$h1', id_tipo_documento = '$h2', nombre_usuario = '$h3', apellido_usuario = '$h4', 
            telef_usuario = '$h5', direcc_usuario = '$h6', correo_usuario = '$h7', usuario_sistema = '$h8',password_usuario=null, Imagenes_usu = :imagen,
            id_estado_usuario = '$h10', id_tipo_usuario = '$h11' WHERE  id_usuario = $id ";
            $actu = $this->conexi->prepare($sql);
            $actu->bindParam(":imagen", $h9i);
            $actu->execute();
            return $actu;
        }

        public function busquedausu($papa)
        {
            $sql="SELECT * FROM usuario,estado_usu,tipo_asociados_socios,tipo_documento 
            WHERE usuario.id_estado_usuario=estado_usu.id_estado_usuario 
            AND
            usuario.id_tipo_usuario=tipo_asociados_socios.id_tipo_usuario 
            AND
            usuario.id_tipo_documento=tipo_documento.id_tipo_documento 
            AND 
            usuario.id_usuario = $papa ";
            $consule=$this->conexi->prepare($sql);
            $consule->execute();
            $consulta=$consule->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

    }
?>