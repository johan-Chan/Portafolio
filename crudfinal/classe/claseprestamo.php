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

        public function verpres()
        {
            $sql="SELECT * FROM prestamo,estado_prestamo,usuario,modalidad_prestamo,linea_prestamo 
            WHERE prestamo.id_estado_prestamo=estado_prestamo.id_estado_prestamo 
            AND prestamo.id_usuario=usuario.id_usuario
            AND Prestamo.id_modalidad_prestamo=modalidad_prestamo.id_modalidad_prestamo
            AND prestamo.id_linea_prestamo=linea_prestamo.id_linea_prestamo
            ORDER BY id_prestamo ASC";
            $consult=$this->conexi->prepare($sql);
            $consult->execute();
            $consulta=$consult->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

        public function borrarpres($id)
        {
        $sql = "DELETE FROM prestamo WHERE id_prestamo = :id";
        $stmt = $this->conexi->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
        }

        public function insertarpres($id,$fechai,$fechaf,$cantid,$total,$pagado,$estadop,$observ,$idusu,$idsoli,
                                    $interes,$anticipada,$vencida,$modalidad,$linea,$empresa)
        {
            $sql = "INSERT INTO prestamo VALUES('$id','$fechai','$fechaf','$cantid','$total','$pagado',
            '$estadop','$observ','$idusu','$idsoli','$interes','$anticipada','$vencida','$modalidad','$linea','$empresa')";
            $instest = $this->conexi->prepare($sql);
            $instest->execute();
            return $instest;
        }

        public function actualizarpres($id, $f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12, $f13, $f14, $f15)
        {
            $sql = "UPDATE prestamo SET fecha_inicio='$f1', fecha_final='$f2', prestamo_cantidad='$f3',
                    prestamo_valor_total='$f4', prestamo_valor_pagado='$f5', id_estado_prestamo='$f6',
                    descrip_prestamo='$f7', id_usuario='$f8',  id_asociado_solicitante='$f9', tasa_interes='$f10',
                    tasa_anticipada='$f11', tasa_vencida='$f12', id_modalidad_prestamo='$f13',
                    id_linea_prestamo='$f14', id_empresa='$f15' WHERE  id_prestamo = $id ";
            $actuest = $this->conexi->prepare($sql);
            $actuest->execute();
            return $actuest;
        }


        public function busquedapres($papa)
        {
            $sql="SELECT * FROM prestamo,estado_prestamo,usuario,modalidad_prestamo,linea_prestamo 
            WHERE prestamo.id_estado_prestamo=estado_prestamo.id_estado_prestamo 
            AND prestamo.id_usuario=usuario.id_usuario
            AND Prestamo.id_modalidad_prestamo=modalidad_prestamo.id_modalidad_prestamo
            AND prestamo.id_linea_prestamo=linea_prestamo.id_linea_prestamo 
            AND id_prestamo = $papa ";
            $consule=$this->conexi->prepare($sql);
            $consule->execute();
            $consulta=$consule->fetchAll(PDO::FETCH_ASSOC);
            return $consulta;    
        }

    }
?>