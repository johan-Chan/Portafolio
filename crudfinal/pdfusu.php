<?php

require_once('classe/claseusu.php');

$guatila = new trabajo();
$papayo = $guatila->pdfs();
//print_r($papayo)

require_once("fpdf/fpdf.php");
class PDF extends fpdf
{
    function header()
    {
        $this->SetFont('Arial','B',19);
        //$this->Cell(60);
        $this->SetFillColor(230, 0, 0);
        $this->Rect(10, 10, 190, 10, 'F');
        $this->Cell(170,10,"Informe de Reporte de Usuarios:",0,1,'C');//70 casilla/10 tamaño/0 cajon/1 salto de linea/(center/left/right)
        $this->Ln(20);
    
    }

    function footer()
    {
        $this->SetY(-15);//18 milimetros
        $this->SetFont('Arial','I',8);//8 tamaño
        $this->Cell(0,10,utf8_decode('Pagina: ').$this->PageNo().'/{nb}',0,0,'C');//utf8 tildes //
    }

}
$pdf =new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(230, 230, 230); // Color de fondo de la fila
$pdf->SetTextColor(0); // Color del texto

for($i=0;$i<count($papayo);$i++)
{       
    $v1=$papayo[$i]["id_usuario"];
    $v2=$papayo[$i]["identidad_usuario"];
    $v3=$papayo[$i]["descrip_documento"];
    $v4=$papayo[$i]["nombre_usuario"];
    $v5=$papayo[$i]["apellido_usuario"];
    $v6=$papayo[$i]["telef_usuario"];
    $v7=$papayo[$i]["direcc_usuario"];
    $v8=$papayo[$i]["correo_usuario"];
    $v9=$papayo[$i]["usuario_sistema"];
    $v10="************";
    $imgPath = "./imgs/" . $papayo[$i]["Imagenes_usu"];
    $v12=$papayo[$i]["descripcion_estado"];
    $v13=$papayo[$i]["descr_asociado"];

    $pdf->Image($imgPath, 140, $pdf->GetY(),60);
    
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, "ID: $v1\nIdentidad: $v2\nTipo de Documento: $v3\nNombre: $v4\nApellido: $v5\nTelefono: $v6\nDireccion: $v7\nCorreo: $v8\nUsuario: $v9\nContrasena: $v10\nEstado: $v12\nAsociado: $v13\n ", 1, 'L');
    $pdf->AddPage();
    
}

$pdf->output();


?>