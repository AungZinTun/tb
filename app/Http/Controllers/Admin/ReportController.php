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

        $nr= DB::table('patients')
                                ->whereYear('txt_start_date', $year)->whereIn("type_of_patient", [1,2])
                                ->whereIn(DB::raw('QUARTER(txt_start_date)'), $quarter)
                                ->orderBy("age")
                                ->get();
        $n= DB::table('patients')
                ->whereYear('txt_start_date', $year)->where("type_of_patient", 1)
                ->whereIn(DB::raw('QUARTER(txt_start_date)'), $quarter)
                ->orderBy("age")
                ->get();
                $n_m=$n->where("sex",1);
                $n_f=$n->where("sex",0);
                $n_04=$n
                        ->whereBetween("age",[0,4]);
                        $n_04_m=$n_04 ->where("sex", 1)->count();
                        $n_04_f=$n_04 ->where("sex", 0)->count();
                $n_59=$n
                        ->whereBetween("age",[5,9]);
                        $n_59_m=$n_59 ->where("sex", 1)->count();
                        $n_59_f=$n_59 ->where("sex", 0)->count();
                $n_1014=$n
                        ->whereBetween("age",[10,14]);
                        $n_1014_m=$n_1014 ->where("sex", 1)->count();
                        $n_1014_f=$n_1014 ->where("sex", 0)->count();
                $n_1524=$n
                        ->whereBetween("age",[15,24]);
                        $n_1524_m=$n_1524 ->where("sex", 1)->count();
                        $n_1524_f=$n_1524 ->where("sex", 0)->count();
                $n_2534=$n
                        ->whereBetween("age",[25,34]);
                        $n_2534_m=$n_2534 ->where("sex", 1)->count();
                        $n_2534_f=$n_2534 ->where("sex", 0)->count();

                 $n_3544=$n
                        ->whereBetween("age",[35,44]);
                        $n_3544_m=$n_3544 ->where("sex", 1)->count();
                        $n_3544_f=$n_3544 ->where("sex", 0)->count();

                $n_4554=$n
                        ->whereBetween("age",[45,54]);
                        $n_4554_m=$n_4554 ->where("sex", 1)->count();
                        $n_4554_f=$n_4554 ->where("sex", 0)->count();

                $n_5564=$n
                        ->whereBetween("age",[55,64]);
                        $n_5564_m=$n_5564 ->where("sex", 1)->count();
                        $n_5564_f=$n_5564 ->where("sex", 0)->count();
                       
                $n_65=$n
                        ->where("age",">=",65);
                        $n_65_m=$n_65 ->where("sex", 1)->count();
                        $n_65_f=$n_65 ->where("sex", 0)->count();
                                               
          
        $r= DB::table('patients')
                ->whereYear('txt_start_date', $year)->where("type_of_patient", 2)
                ->whereIn(DB::raw('QUARTER(txt_start_date)'), $quarter)
                ->get();
               
                $r_m=$r->where("sex",1);
                $r_f=$r->where("sex",0);
                $r_04=$r
                        ->whereBetween("age",[0,4]);
                        $r_04_m=$r_04 ->where("sex", 1)->count();
                        $r_04_f=$r_04 ->where("sex", 0)->count();
                $r_59=$r
                        ->whereBetween("age",[5,9]);
                        $r_59_m=$r_59 ->where("sex", 1)->count();
                        $r_59_f=$r_59 ->where("sex", 0)->count();
                $r_1014=$r
                        ->whereBetween("age",[10,14]);
                        $r_1014_m=$r_1014 ->where("sex", 1)->count();
                        $r_1014_f=$r_1014 ->where("sex", 0)->count();
                $r_1524=$r
                        ->whereBetween("age",[15,24]);
                        $r_1524_m=$r_1524 ->where("sex", 1)->count();
                        $r_1524_f=$r_1524 ->where("sex", 0)->count();
                $r_2534=$r
                        ->whereBetween("age",[25,34]);
                        $r_2534_m=$r_2534 ->where("sex", 1)->count();
                        $r_2534_f=$r_2534 ->where("sex", 0)->count();

                 $r_3544=$r
                        ->whereBetween("age",[35,44]);
                        $r_3544_m=$r_3544 ->where("sex", 1)->count();
                        $r_3544_f=$r_3544 ->where("sex", 0)->count();

                $r_4554=$r
                        ->whereBetween("age",[45,54]);
                        $r_4554_m=$r_4554 ->where("sex", 1)->count();
                        $r_4554_f=$r_4554 ->where("sex", 0)->count();

                $r_5564=$r
                        ->whereBetween("age",[55,64]);
                        $r_5564_m=$r_5564 ->where("sex", 1)->count();
                        $r_5564_f=$r_5564 ->where("sex", 0)->count();
                       
                $r_65=$r
                        ->where("age",">=",65);
                        $r_65_m=$r_65 ->where("sex", 1)->count();
                        $r_65_f=$r_65 ->where("sex", 0)->count();
        return view('admin.report.tb07', compact('q', 'year',
                        'pb','pb_m','pb_f', 'pb_n_m', 'pb_n_f','pb_r_m', 'pb_r_f', 'pb_p_m', 'pb_p_f', 'pb_u_m', 'pb_u_f',
                        'pc','pc_m','pc_f', 'pc_n_m', 'pc_n_f','pc_r_m', 'pc_r_f', 'pc_p_m', 'pc_p_f', 'pc_u_m', 'pc_u_f',
                        'eb','eb_m','eb_f', 'eb_n_m', 'eb_n_f','eb_r_m', 'eb_r_f', 'eb_p_m', 'eb_p_f', 'eb_u_m', 'eb_u_f',
                        'ec','ec_m','ec_f', 'ec_n_m', 'ec_n_f','ec_r_m', 'ec_r_f', 'ec_p_m', 'ec_p_f', 'ec_u_m', 'ec_u_f',
                        'n', 'n_m', 'n_f','n_04','n_59', 'n_1014', 'n_1524',  'n_2534' , 'n_3544',  'n_4554',  'n_5564' , 'n_65',
                        'n_04_m', 'n_04_f', 'n_59_m', 'n_59_f', 'n_1014_m', 'n_1014_f', 'n_1524',  'n_1524_m',  'n_1524_f', 'n_2534_m', 'n_2534_f',  'n_3544_m',  'n_3544_f', 'n_4554_m', 'n_4554_f', 'n_5564_m',  'n_5564_f', 'n_65_m',  'n_65_f',
                        'nr','r', 'r_m', 'r_f','r_04','r_59', 'r_1014', 'r_1524',  'r_2534' , 'r_3544',  'r_4554',  'r_5564' , 'r_65',
                        'r_04_m', 'r_04_f', 'r_59_m', 'r_59_f', 'r_1014_m', 'r_1014_f', 'r_1524',  'r_1524_m',  'r_1524_f', 'r_2534_m', 'r_2534_f',  'r_3544_m',  'r_3544_f', 'r_4554_m', 'r_4554_f', 'r_5564_m',  'r_5564_f', 'r_65_m',  'r_65_f'
                                        ));  }

}
