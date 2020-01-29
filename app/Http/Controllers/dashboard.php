<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitor;
use App\User;
use App\Exports\VisitorExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use PDF;


class dashboard extends Controller
{
    public function index(){

     $visitors = visitor::all();
     //var_dump($vvtss);
     //$fname = $visitors->firstname;
     return view('/home', ['visitors' => $visitors]);
     
     //return view('/scanshow', ['vscanqrs'=>$vscanqrs]);

    }

    public function getusers(){

      $users = User::all();
      return view('/users', ['users' => $users]);
    }

     function excel(){

        return Excel::download(new VisitorExport, 'Visitors.xlsx');
     }

     function pdf(){

      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($this->convert_data());
      return $pdf->stream();

     }


     public function convert_data(){

     $visitors = visitor::all();

     $output = '<table>
     <thead>
       <tr>
               <th>First Name</th>
               <th>Last Name</th>
               <th>phone number</th>
               <th>Email</th>
               <th>Profession</th>
               <th>Host</th>
               <th>Purpose</th>
               <th>Date and Time</th>

       </tr>
     </thead>
     <tbody>';
         foreach($visitors as $visitor)
         {
       $output .= '<tr>
         <td>'.$visitor->firstname.'</td>
         <td>'.$visitor->lastname.'</td>
         <td>'.$visitor->number.'</td>
         <td>'.$visitor->email.'</td>
         <td>'.$visitor->profession.'</td>
         <td>'.$visitor->host.'</td>
         <td>'.$visitor->purpose.'</td>
         <td>'.$visitor->created_at.'</td>
         </tr>';
     }
    $output .= '</table>';
    return $output; 
     }
     
}
