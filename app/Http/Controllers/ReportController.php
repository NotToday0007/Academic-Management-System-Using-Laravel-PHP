<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

use Auth;
use App\Models\Payment;



class ReportController extends Controller
{
    public function report1($pid) 
    {  
        // Find the payment by ID
        $payment = Payment::find($pid);

        // Create a PDF instance using Dompdf
        $pdf = App::make('dompdf.wrapper');
        $print = "<div style='margin:20px; padding: 20px;'>";

        // Add title and horizontal line
        $print .= "<h1> Payment Receipt </h1>";
        $print .= "<hr/>";
        
        // Display receipt details
        $print .= "<p> Receipt No: <b>".$pid."</b> </p>"; 
        $print .= "<p> Date: <b>" . $payment->paid_date . "</b></p>"; 
        $print .= "<p> Enrollment No: <b>". $payment->enrollment->enroll_no . "</b></p>";
        $print .= "<p> Student Name: <b>". $payment->enrollment->student->name . "</b></p>";
        
        // Add horizontal line before the table
        $print .= "<hr/>";
        
        // Create a table for displaying payment details
        $print .= "<table style='width: 100%;'>";
        
        // Add table headers
        $print .= "<tr>";
        $print .= "<td>Batches</td>";
        $print .= "<td>Amount</td>";
        $print .= "</tr>";

        $print .= "<tr>";
        $print .= "<td><h3>".$payment->enrollment->batch->name ."</h3></td>";
        $print .= "<td><h3>".$payment->amount ."</h3></td>";
        $print .= "</tr>";
        
        $print .= "</table>";
        $print .= "<hr/>";

        $print .="<span> Printed date: <b>" . date('y-m-d') . "</b> </span>";
        
        // End the main div container
        $print .= "</div>";
        
        // Load HTML content into PDF and stream it to the browser
        return $pdf->loadHTML($print)->stream();
    }
}

?>
