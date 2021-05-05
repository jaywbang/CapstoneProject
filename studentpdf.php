<?php
//TCPDF Library
require_once('tcpdf.php');

//Creates Custom Header and Footer not the default given by TCPDF
class SMUHeader extends TCPDF
{
    //Page Header
    public function header()
    {
        //SMU Logo
        $logo = 'logo.jpeg';
        //Image Function Atributes for the Logo
        $this->Image($logo, 10, 10, 65, ' ', 'JPEG', ' ', 'T', false, 300, '', false, false, 0, false, false, false);
    }

    //Page Footer
    public function footer()
    {
        //Set Y value at 14 mm from the bottom of the page
        $this->SetY(-15);
        //Font Selection
        $this->SetFont('Times', 'I', 12);
        //Page Number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
  }
//Creates New PDF file
$pdf = new SMUHeader(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//sets margins for the pdf
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);


//Saves The PDF File when click on download
$pdf->Output('firstname_lastname.pdf', 'I');
 ?>
