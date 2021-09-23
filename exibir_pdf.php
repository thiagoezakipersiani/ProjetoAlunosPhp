<?php
define('FPDF_FONTPATH', 'font/');
require('./fpdf/fpdf.php');

require __DIR__ .'/vendor/autoload.php'; 
use \App\Entity\Aluno;

//conexão com banco de dados
$alunos=Aluno::getAlunosPorIdaide(); 

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(180,10,('Relatorio de Alunos'),0,0,"C");
$pdf->ln(); 
$pdf->SetFont('Arial','B',12);
$pdf->Cell(50, 7,'Nome Completo',1,0,"C");
$pdf->Cell(65, 7,'Endereco',1,0,"C");
$pdf->Cell(40, 7,'Idade',1,0,"C");
$pdf->Cell(40, 7,'Renda Familiar R$',1,0,"C");
$pdf->ln(); //nenhum espaçamentos entre linhas


foreach ($alunos as $aluno) {
	
	$pdf->Cell(50, 7, $aluno->nome_completo,1,0,"C");
    $pdf->Cell(65, 7,$aluno->endereco,1,0,"C");
    $pdf->Cell(40, 7,$aluno->idade,1,0,"C");
    $pdf->Cell(40, 7, $aluno->renda_familiar,1,0,"C");
    $pdf->Ln();
    ;
 }

$pdf->Output();
?>