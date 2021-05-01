<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function export_pdf()
  {
  	 $data = Customer::get();

  	//return view('pdf.customers', $data);die;
    // Fetch all customers from database
    $data = Customer::get();
    // Send data to the view using loadView function of PDF facade
    $pdf = PDF::loadView('pdf.customers', $data);
   /* echo '<pre>';
    print_r($pdf);
    echo '</pre>';die;*/
    // If you want to store the generated pdf to the server then you can use the store function
   $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    //return $pdf->download('customers.pdf');
}
}
