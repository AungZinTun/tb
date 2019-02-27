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
     
       
       if ($request->year)  { $year=$request->year;}
       else   { $year=Carbon::now()->year;} 


        if ($request->quarter)
          { $quarter=[$request->quarter]; 
            $q=$quarter;  
          
                $pb= DB::table('patients')
                ->whereYear('txt_start_date', $year)->where("tb_site", "0")
                ->where(DB::raw('QUARTER(txt_start_date)'), $quarter)
                ->where(function($query){
                        $query->where("smear_result_0", "1")->orWhere("x_pert_result", ">=", 3);
                })
                ->get();  }
          
          else 
          {  ;
          $q="Annual";

          // $pb= Patient::all();
  
          $pb= DB::table('patients')
                          ->whereYear('txt_start_date', $year)->where("tb_site", "0")
                          ->where(function($query){
                                  $query->where("smear_result_0", "1")->orWhere("x_pert_result", ">=", 3);
                          })
                          ->get();     }  
                
       
        return view('admin.report.tb08', compact(  'year', 'pb' , 'q'   )); 
    }
}
