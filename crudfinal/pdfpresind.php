<?php

require_once('classe/claseprestamo.php');
$id = $_GET['id'];
$guatila = new trabajo();
$Cr7 = $guatila->busquedapres($id);

require_once("fpdf/fpdf.php");

class PDF extends FPDF
{
    function header()
    {
        $this->SetFont('Arial', 'B', 18);
        $this->SetFillColor(230, 0, 0);
        $this->Rect(10, 10, 190, 10, 'F');
        $this->Cell(170, 10, "Informe de Reporte de Prestamos:", 0, 1, 'C');
        $this->Ln(20);
    }

    function footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, utf8_decode('Página: ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

for ($i = 0; $i < count($Cr7); $i++) {
    $k1 = $Cr7[$i]["id_prestamo"];
    $k2 = $Cr7[$i]["fecha_inicio"];
    $k3 = $Cr7[$i]["fecha_final"];
    $k4 = $Cr7[$i]["prestamo_cantidad"];
    $k5 = $Cr7[$i]["prestamo_valor_total"];
    $k6 = $Cr7[$i]["prestamo_valor_pagado"];
    $k7 = $Cr7[$i]["id_estado_prestamo"];
    $k8 = $Cr7[$i]["descrip_prestamo"];
    $k9 = $Cr7[$i]["id_usuario"];
    $k10 = $Cr7[$i]["id_asociado_solicitante"];
    $k11 = $Cr7[$i]["tasa_interes"];
    $k12 = $Cr7[$i]["tasa_anticipada"];
    $k13 = $Cr7[$i]["tasa_vencida"];
    $k14 = $Cr7[$i]["id_modalidad_prestamo"];
    $k15 = $Cr7[$i]["id_linea_prestamo"];
    $k16 = $Cr7[$i]["id_empresa"];

    $carta = "
    [Nombre de tu Empresa]
    [Dirección de tu Empresa]
    [Teléfono de tu Empresa]
    [Fecha]

    [Nombre del Cliente o Entidad Financiera]
    [Dirección del Cliente o Dirección de la Entidad Financiera]
    [Ciudad, Código Postal]

    Estimado/a [Nombre del Cliente o Título de la Entidad Financiera]:

    Me complace dirigirme a usted en calidad de representante de [Tu Empresa], con el fin de informarle acerca del préstamo otorgado bajo el número de referencia $k1. Los detalles del préstamo son los siguientes:

    - Identificación del préstamo: $k1
    - Fecha de inicio del préstamo: $k2
    - Fecha de vencimiento del préstamo: $k3
    - Cantidad del préstamo: $k4
    - Valor total del préstamo: $k5
    - Valor pagado del préstamo: $k6
    - Estado del préstamo: $k7
    - Descripción del préstamo: $k8
    - Identificación del cliente: $k9
    - Identificación del solicitante asociado: $k10
    - Tasa de interés: $k11
    - Tasa anticipada: $k12
    - Tasa vencida: $k13
    - Modalidad del préstamo: $k14
    - Línea de préstamo: $k15
    - Empresa relacionada: $k16

    Deseamos asegurarle que estamos comprometidos en mantener una relación transparente y confiable con nuestros clientes. Si requiere información adicional o tiene alguna pregunta relacionada con este préstamo, no dude en ponerse en contacto con nuestro equipo de atención al cliente.

    Apreciamos la confianza que ha depositado en [Tu Empresa], y esperamos que esta relación sea mutuamente beneficiosa. Le agradecemos por su negocio y confianza en nuestros servicios financieros.

    Atentamente,

    [Firma]
    [Nombre del Remitente]
    [Título del Remitente]
    [Teléfono de Contacto]
    [Correo Electrónico de Contacto]
    ";

    // Agregar la carta al PDF
    $pdf->MultiCell(0, 10, utf8_decode($carta), 1, 'L');
}

$pdf->Output();

?>
