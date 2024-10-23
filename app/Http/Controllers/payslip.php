<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class payslip extends Controller
{
    public static function print(Request $request) {
        $fpdf = new Fpdf('p', 'mm', 'A4');
        $fpdf->AddPage();

        $fpdf->SetFont('Arial', 'B', 16);

        $fpdf->Cell(0, 10, 'Echipan', 0, 1, 'C');

        $fpdf->SetFont('Arial', '', 14);
        $fpdf->Cell(0, 10, 'Barangay inayagan', 0, 1, 'C');
    

         
        $fpdf->Ln(10);
        $fpdf->Ln(10);

        $fpdf->Ln(10);

        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(20, 10, 'Name:', 0, 0);
        $fpdf->Cell(20, 10, 'Aliviano jogie', 0, 1);

        $fpdf->Cell(20, 10, 'Email:', 0, 0);
        $fpdf->Cell(20, 10, 'jaliviano035@gmail.com', 0, 1);

        $fpdf->Cell(20, 10, 'Contact:', 0, 0);
        $fpdf->Cell(20, 10, '09894571869', 0, 1);

        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(95, 10, 'Earnings', 1, 0, 'C');
        $fpdf->Cell(95, 10, 'Deductions', 1, 1, 'C');

        $fpdf->SetFont('Arial', '', 12);

        $fpdf->Cell(95, 10, 'Basic Salary:      $10000', 1, 0);
        $fpdf->Cell(95, 10, 'Salary Advance:   $1000', 1, 1);
        $fpdf->Cell(95, 10, 'OT Hours:    $50', 1, 0);
        $fpdf->Cell(95, 10, 'Fed Tax:    $75', 1, 1);

        $fpdf->Cell(95, 10, 'OT Rate:   $75', 1, 0);
        $fpdf->Cell(95, 10, 'Other Deductions:     $100', 1, 1);
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(95, 10, 'Total Payment:    $1125', 1, 0);
        $fpdf->Cell(95, 10, 'Total Deductions:   $1000', 1, 1);

        $fpdf->Ln(10);
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(20, 10, 'Salary Details', 0, 1);
        $fpdf->SetFont('Arial', 'B', 14);
        $fpdf->Cell(20, 10, 'Net Salary: $5000', 0, 1,);


        $fpdf->Ln(10);

        $fpdf->SetFont('Arial', 'I', 10);
        $fpdf->Cell(0, 10, 'Signature of Employee.', 0, 1, 'C');


        $fpdf->SetFont('Courier', 'B', 18);
        $fpdf->Cell(50, 8, '');
        $fpdf->SetFont('Courier', 'B', 18);
        $fpdf->Output();
        exit;

    }
}

