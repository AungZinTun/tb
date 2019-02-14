<?php

namespace App\Http\Controllers\Admin;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use DB;

class ReportController extends Controller
{
    public function tb07(Request $request)
    {
        if (! Gate::allows('role_access')) {
            return abort(401);
        }
        $year=$request->year;
      if ($request->quarter)
        { $quarter=[$request->quarter];
         $q=$quarter;}
        else 
        {$quarter= [1, 2, 3, 4 ];
        $q="Annual";}


        // $pb= Patient::all();

                $pb= DB::table('patients')
                        ->whereYear('txt_start_date', $year)->where("tb_site", "0")
                        ->whereIn(DB::raw('QUARTER(txt_start_date)'), $quarter)
                        ->where(function($query){
                                $query->where("smear_result_0", "1")->orWhere("x_pert_result", ">=", 3);
                        })
                        ->get();                   
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
                            ->where("type_of_patient",">=", 4)
                            ->where("sex", '1')->count();
                    $pb_p_f= $pb
                            ->where("type_of_patient",">=", 4)
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
        $pc= DB::table('patients')
                ->whereYear('txt_start_date', $year)->where("tb_site", "0")
                ->whereIn(DB::raw('QUARTER(txt_start_date)'), $quarter)
                ->where(function($query){
                        $query->where("smear_result_0", "<>", 1)->orWhereNull("smear_result_0");
                })
                ->where(function($query){
                        $query->where("x_pert_result", "<=", 2)->orWhereNull("x_pert_result");
                })
                ->get();   
                $pc_n_m= $pc
                        ->where("type_of_patient", 1)
                        ->where("sex", '1')->count();
                $pc_n_f= $pc
                        ->where("type_of_patient", 1)
                        ->where("sex", '0')->count();
                $pc_r_m= $pc
                        ->where("type_of_patient", 2)
                        ->where("sex", '1')->count();
                $pc_r_f= $pc
                        ->where("type_of_patient", 2)
                        ->where("sex", '0')->count();
                $pc_p_m= $pc
                        ->where("type_of_patient",">=", 4)
                        ->where("sex", '1')->count();
                $pc_p_f= $pc
                        ->where("type_of_patient",">=", 4)
                        ->where("sex", '0')->count();
                
                $pc_u_m= $pc
                        ->where("type_of_patient", 7)
                        ->where("sex", '1')->count();
                $pc_u_f= $pc
                        ->where("type_of_patient", 7)
                        ->where("sex", '0')->count();
                $pc_m=$pc
                        ->where("sex", 1)->count();
                $pc_f=$pc
                         ->where("sex", 0)->count();

         $eb= DB::table('patients')
                        ->whereYear('txt_start_date', $year)->where("tb_site", '>',0)
                        ->whereIn(DB::raw('QUARTER(txt_start_date)'), $quarter)
                        ->where(function($query){
                                $query->where("smear_result_0", "1")->orWhere("x_pert_result", ">=", 3);
                        })
                        ->get();                   
                $eb_n_m= $eb
                        ->where("type_of_patient", 1)
                        ->where("sex", '1')->count();
                $eb_n_f= $eb
                        ->where("type_of_patient", 1)
                        ->where("sex", '0')->count();
                $eb_r_m= $eb
                        ->where("type_of_patient", 2)
                        ->where("sex", '1')->count();
                $eb_r_f= $eb
                        ->where("type_of_patient", 2)
                        ->where("sex", '0')->count();
                $eb_p_m= $eb
                        ->where("type_of_patient",">=", 4)
                        ->where("sex", '1')->count();
                $eb_p_f= $eb
                        ->where("type_of_patient",">=", 4)
                        ->where("sex", '0')->count();

                $eb_u_m= $eb
                        ->where("type_of_patient", 7)
                        ->where("sex", '1')->count();
                $eb_u_f= $eb
                        ->where("type_of_patient", 7)
                        ->where("sex", '0')->count();
                $eb_m=$eb
                        ->where("sex", 1)->count();
                $eb_f=$eb
                        ->where("sex", 0)->count();

        $ec= DB::table('patients')
                ->whereYear('txt_start_date', $year)->where("tb_site", ">", 0)
                ->whereIn(DB::raw('QUARTER(txt_start_date)'), $quarter)
                ->where(function($query){
                        $query->where("smear_result_0", "<>", 1)->orWhereNull("smear_result_0");
                })
                ->where(function($query){
                        $query->where("x_pert_result", "<=", 2)->orWhereNull("x_pert_result");
                })
                ->get();   
                $ec_n_m= $ec
                        ->where("type_of_patient", 1)
                        ->where("sex", '1')->count();
                $ec_n_f= $ec
                        ->where("type_of_patient", 1)
                        ->where("sex", '0')->count();
                $ec_r_m= $ec
                        ->where("type_of_patient", 2)
                        ->where("sex", '1')->count();
                $ec_r_f= $ec
                        ->where("type_of_patient", 2)
                        ->where("sex", '0')->count();
                $ec_p_m= $ec
                        ->where("type_of_patient",">=", 4)
                        ->where("sex", '1')->count();
                $ec_p_f= $ec
                        ->where("type_of_patient",">=", 4)
                        ->where("sex", '0')->count();
                
                $ec_u_m= $ec
                        ->where("type_of_patient", 7)
                        ->where("sex", '1')->count();
                $ec_u_f= $ec
                        ->where("type_of_patient", 7)
                        ->where("sex", '0')->count();
                $ec_m=$ec
                        ->where("sex", 1)->count();
                $ec_f=$ec
                                ->where("sex", 0)->count();

         $n= DB::table('patients')
                ->whereYear('txt_start_date', $year)->where("type_of_patient", 1)
                ->whereIn(DB::raw('QUARTER(txt_start_date)'), $quarter)
                ->get();
                $n_04=$n
                        ->whereBetween("age",[0,4]);
                        $n_04_m=$n_04 ->where("sex", 1)->count();
                        $n_04_f=$n_04 ->where("sex", 0)->count();
                    

        return view('admin.report.tb07', compact('q', 'year',
                                                'pb','pb_m','pb_f', 'pb_n_m', 'pb_n_f','pb_r_m', 'pb_r_f', 'pb_p_m', 'pb_p_f', 'pb_u_m', 'pb_u_f',
                                                'pc','pc_m','pc_f', 'pc_n_m', 'pc_n_f','pc_r_m', 'pc_r_f', 'pc_p_m', 'pc_p_f', 'pc_u_m', 'pc_u_f',
                                                'eb','eb_m','eb_f', 'eb_n_m', 'eb_n_f','eb_r_m', 'eb_r_f', 'eb_p_m', 'eb_p_f', 'eb_u_m', 'eb_u_f',
                                                'ec','ec_m','ec_f', 'ec_n_m', 'ec_n_f','ec_r_m', 'ec_r_f', 'ec_p_m', 'ec_p_f', 'ec_u_m', 'ec_u_f',
                                                'n_04' , 'n_04_m', 'n_04_f'
                                        ));  }

}
