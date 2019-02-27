<?php

namespace App\Http\Controllers\Admin;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use DB;

class TB08Controller extends Controller
{                    
    public function tb08(Request $request)
    {
        if (! Gate::allows('role_access')) {
            return abort(401);
        }
     
        // check year filter
       if ($request->year)
       { $year=$request->year;}
       else   { $year=Carbon::now()->year;} 
   // check year filter

//    $yearly_patient= Patient::select('id', 'txt_start_date')->orderBy('txt_start_date', 'ASC')
//    ->get()

//    ->groupBy(function($date){
//        return Carbon::parse($date->txt_start_date)->format('Y');
//            });
 
//    $yearCount=[];
//    $yearArr=[];
// foreach ( $yearly_patient as $key=>$value ){
//    // $yearCount[]=count($value);
//    $yearCount[$key]=count($value);
//    $yearArr[] = $key; 
// }

// return $yearCount;
// yearly 



        if ($request->quarter)
          { $quarter=$request->quarter;  

            $pb= DB::table('patients')
                ->whereYear('txt_start_date', $year)
                ->where( DB::raw("QUARTER(txt_start_date)"), $quarter )
                ->get();  }
               
            
          
        else 
          {  $quarter="Annual";
  
             $pb= DB::table('patients')
                ->whereYear('txt_start_date', $year)
                ->get();    }  
                
       
        return view('admin.report.tb08', compact(  'year', 'pb' , 'quarter'   )); 
    }
}
