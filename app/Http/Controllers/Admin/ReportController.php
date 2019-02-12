<?php

namespace App\Http\Controllers\Admin;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function tb07(Request $request)
    {
        if (! Gate::allows('role_access')) {
            return abort(401);
        }
        $thisQ=Carbon::now()->quarter;
        $from= request('from');
        $to= request('to');
        $patient=Patient::whereBetween("txt_start_date", [$from, $to])->get();
               
                $all_pb=Patient::where("smear_result_0", "1")->orWhereIn("x_pert_result", [3,4,5])->get();
                    $pb=$all_pb->whereBetween("txt_start_date", [$from, $to]);
                    $pb_n_m= $pb
                            ->where("type_of_patient", 1)
                            ->where("sex", '1')->count();
                    $pb_n_f= $pb
                            ->where("type_of_patient", 1)
                            ->where("sex", '0')->count();
                    $pb_r_m= $pb
                            ->where("type_of_patient", 2)
                            ->where("sex", '1')->count();
                    $pb_r_f= $pb
                            ->where("type_of_patient", 2)
                            ->where("sex", '0')->count();
                    $pb_p_m= $pb
                            ->wherein("type_of_patient",[4, 5, 6])
                            ->where("sex", '1')->count();
                    $pb_p_f= $pb
                            ->wherein("type_of_patient", [4, 5, 6])
                            ->where("sex", '0')->count();
                    
                    $pb_u_m= $pb
                            ->where("type_of_patient", 7)
                            ->where("sex", '1')->count();
                    $pb_u_f= $pb
                            ->where("type_of_patient", 7)
                            ->where("sex", '0')->count();
                    $pb_m=$pb
                            ->where("sex", 1)->count();
                    $pb_f=$pb
                             ->where("sex", 0)->count();
                    

        return view('admin.report.tb07', compact('thisQ', 'from','to','patient','pb','pb_m','pb_f', 'pb_n_m', 'pb_n_f','pb_r_m', 'pb_r_f', 'pb_p_m', 'pb_p_f', 'pb_u_m', 'pb_u_f'

    
    
    ));
    }

}
