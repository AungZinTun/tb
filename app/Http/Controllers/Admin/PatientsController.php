<?php

namespace App\Http\Controllers\Admin;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePatientsRequest;
use App\Http\Requests\Admin\UpdatePatientsRequest;
use Yajra\DataTables\DataTables;

class PatientsController extends Controller
{
    /**
     * Display a listing of Patient.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('patient_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Patient::query();
            $query->with("report_person");
            $query->with("health_facility");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('patient_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'patients.id',
                'patients.txt_start_date',
                'patients.tb_no',
                'patients.name',
                'patients.sex',
                'patients.dob',
                'patients.current_address',
                'patients.report_person_id',
                'patients.health_facility_id',
                'patients.phone',
                'patients.referred_by',
                'patients.permanent_address',
                'patients.dot_provider',
                'patients.dots_supervisor',
                'patients.contact_person',
                'patients.type_of_patient',
                'patients.tb_site',
                'patients.regimen',
                'patients.smear_result_0',
                'patients.x_pert_result',
                'patients.culture_result',
                'patients.dst_h_0',
                'patients.dst_r_0',
                'patients.dst_e_0',
                'patients.lpa_e_0',
                'patients.lpa_r_0',
                'patients.weight',
                'patients.smear_result_2',
                'patients.xpert_result_2',
                'patients.culture_result_2',
                'patients.dst_h_2',
                'patients.dst_r_2',
                'patients.dst_s_2',
                'patients.dst_e_2',
                'patients.lpa_h_2',
                'patients.lpa_r_2',
                'patients.wt_2',
                'patients.smear_result_5',
                'patients.xpert_result_5',
                'patients.culture_result_5',
                'patients.dst_h_5',
                'patients.dst_r_5',
                'patients.dst_s_5',
                'patients.dst_e_5',
                'patients.lpa_h_5',
                'patients.lpa_r_5',
                'patients.wt_5',
                'patients.smear_result_e',
                'patients.xpert_result_e',
                'patients.culture_result_e',
                'patients.dst_h_e',
                'patients.dst_r_e',
                'patients.dst_s_e',
                'patients.dst_e_e',
                'patients.lpa_h_e',
                'patients.lpa_r_e',
                'patients.wt_e',
                'patients.c_regimen',
                'patients.hiv_test_result',
                'patients.hiv_test_date',
                'patients.cpt',
                'patients.art',
                'patients.outcome',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'patient_';
                $routeKey = 'admin.patients';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('txt_start_date', function ($row) {
                return $row->txt_start_date ? $row->txt_start_date : '';
            });
            $table->editColumn('tb_no', function ($row) {
                return $row->tb_no ? $row->tb_no : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('sex', function ($row) {
                return $row->sex ? $row->sex : '';
            });
            $table->editColumn('dob', function ($row) {
                return $row->dob ? $row->dob : '';
            });
            $table->editColumn('current_address', function ($row) {
                return $row->current_address ? $row->current_address : '';
            });
            $table->editColumn('report_person.name', function ($row) {
                return $row->report_person ? $row->report_person->name : '';
            });
            $table->editColumn('health_facility.title', function ($row) {
                return $row->health_facility ? $row->health_facility->title : '';
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : '';
            });
            $table->editColumn('referred_by', function ($row) {
                return $row->referred_by ? $row->referred_by : '';
            });
            $table->editColumn('permanent_address', function ($row) {
                return $row->permanent_address ? $row->permanent_address : '';
            });
            $table->editColumn('dot_provider', function ($row) {
                return $row->dot_provider ? $row->dot_provider : '';
            });
            $table->editColumn('dots_supervisor', function ($row) {
                return $row->dots_supervisor ? $row->dots_supervisor : '';
            });
            $table->editColumn('contact_person', function ($row) {
                return $row->contact_person ? $row->contact_person : '';
            });
            $table->editColumn('type_of_patient', function ($row) {
                return $row->type_of_patient ? $row->type_of_patient : '';
            });
            $table->editColumn('tb_site', function ($row) {
                return $row->tb_site ? $row->tb_site : '';
            });
            $table->editColumn('regimen', function ($row) {
                return $row->regimen ? $row->regimen : '';
            });
            $table->editColumn('smear_result_0', function ($row) {
                return $row->smear_result_0 ? $row->smear_result_0 : '';
            });
            $table->editColumn('x_pert_result', function ($row) {
                return $row->x_pert_result ? $row->x_pert_result : '';
            });
            $table->editColumn('culture_result', function ($row) {
                return $row->culture_result ? $row->culture_result : '';
            });
            $table->editColumn('dst_h_0', function ($row) {
                return $row->dst_h_0 ? $row->dst_h_0 : '';
            });
            $table->editColumn('dst_r_0', function ($row) {
                return $row->dst_r_0 ? $row->dst_r_0 : '';
            });
            $table->editColumn('dst_e_0', function ($row) {
                return $row->dst_e_0 ? $row->dst_e_0 : '';
            });
            $table->editColumn('lpa_e_0', function ($row) {
                return $row->lpa_e_0 ? $row->lpa_e_0 : '';
            });
            $table->editColumn('lpa_r_0', function ($row) {
                return $row->lpa_r_0 ? $row->lpa_r_0 : '';
            });
            $table->editColumn('weight', function ($row) {
                return $row->weight ? $row->weight : '';
            });
            $table->editColumn('smear_result_2', function ($row) {
                return $row->smear_result_2 ? $row->smear_result_2 : '';
            });
            $table->editColumn('xpert_result_2', function ($row) {
                return $row->xpert_result_2 ? $row->xpert_result_2 : '';
            });
            $table->editColumn('culture_result_2', function ($row) {
                return $row->culture_result_2 ? $row->culture_result_2 : '';
            });
            $table->editColumn('dst_h_2', function ($row) {
                return $row->dst_h_2 ? $row->dst_h_2 : '';
            });
            $table->editColumn('dst_r_2', function ($row) {
                return $row->dst_r_2 ? $row->dst_r_2 : '';
            });
            $table->editColumn('dst_s_2', function ($row) {
                return $row->dst_s_2 ? $row->dst_s_2 : '';
            });
            $table->editColumn('dst_e_2', function ($row) {
                return $row->dst_e_2 ? $row->dst_e_2 : '';
            });
            $table->editColumn('lpa_h_2', function ($row) {
                return $row->lpa_h_2 ? $row->lpa_h_2 : '';
            });
            $table->editColumn('lpa_r_2', function ($row) {
                return $row->lpa_r_2 ? $row->lpa_r_2 : '';
            });
            $table->editColumn('wt_2', function ($row) {
                return $row->wt_2 ? $row->wt_2 : '';
            });
            $table->editColumn('smear_result_5', function ($row) {
                return $row->smear_result_5 ? $row->smear_result_5 : '';
            });
            $table->editColumn('xpert_result_5', function ($row) {
                return $row->xpert_result_5 ? $row->xpert_result_5 : '';
            });
            $table->editColumn('culture_result_5', function ($row) {
                return $row->culture_result_5 ? $row->culture_result_5 : '';
            });
            $table->editColumn('dst_h_5', function ($row) {
                return $row->dst_h_5 ? $row->dst_h_5 : '';
            });
            $table->editColumn('dst_r_5', function ($row) {
                return $row->dst_r_5 ? $row->dst_r_5 : '';
            });
            $table->editColumn('dst_s_5', function ($row) {
                return $row->dst_s_5 ? $row->dst_s_5 : '';
            });
            $table->editColumn('dst_e_5', function ($row) {
                return $row->dst_e_5 ? $row->dst_e_5 : '';
            });
            $table->editColumn('lpa_h_5', function ($row) {
                return $row->lpa_h_5 ? $row->lpa_h_5 : '';
            });
            $table->editColumn('lpa_r_5', function ($row) {
                return $row->lpa_r_5 ? $row->lpa_r_5 : '';
            });
            $table->editColumn('wt_5', function ($row) {
                return $row->wt_5 ? $row->wt_5 : '';
            });
            $table->editColumn('smear_result_e', function ($row) {
                return $row->smear_result_e ? $row->smear_result_e : '';
            });
            $table->editColumn('xpert_result_e', function ($row) {
                return $row->xpert_result_e ? $row->xpert_result_e : '';
            });
            $table->editColumn('culture_result_e', function ($row) {
                return $row->culture_result_e ? $row->culture_result_e : '';
            });
            $table->editColumn('dst_h_e', function ($row) {
                return $row->dst_h_e ? $row->dst_h_e : '';
            });
            $table->editColumn('dst_r_e', function ($row) {
                return $row->dst_r_e ? $row->dst_r_e : '';
            });
            $table->editColumn('dst_s_e', function ($row) {
                return $row->dst_s_e ? $row->dst_s_e : '';
            });
            $table->editColumn('dst_e_e', function ($row) {
                return $row->dst_e_e ? $row->dst_e_e : '';
            });
            $table->editColumn('lpa_h_e', function ($row) {
                return $row->lpa_h_e ? $row->lpa_h_e : '';
            });
            $table->editColumn('lpa_r_e', function ($row) {
                return $row->lpa_r_e ? $row->lpa_r_e : '';
            });
            $table->editColumn('wt_e', function ($row) {
                return $row->wt_e ? $row->wt_e : '';
            });
            $table->editColumn('c_regimen', function ($row) {
                return $row->c_regimen ? $row->c_regimen : '';
            });
            $table->editColumn('hiv_test_result', function ($row) {
                return $row->hiv_test_result ? $row->hiv_test_result : '';
            });
            $table->editColumn('hiv_test_date', function ($row) {
                return $row->hiv_test_date ? $row->hiv_test_date : '';
            });
            $table->editColumn('cpt', function ($row) {
                return $row->cpt ? $row->cpt : '';
            });
            $table->editColumn('art', function ($row) {
                return $row->art ? $row->art : '';
            });
            $table->editColumn('outcome', function ($row) {
                return $row->outcome ? $row->outcome : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.patients.index');
    }

    /**
     * Show the form for creating new Patient.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('patient_create')) {
            return abort(401);
        }
        
        $report_people = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $health_facilities = \App\Township::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.patients.create', compact('report_people', 'health_facilities'));
    }

    /**
     * Store a newly created Patient in storage.
     *
     * @param  \App\Http\Requests\StorePatientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientsRequest $request)
    {
        if (! Gate::allows('patient_create')) {
            return abort(401);
        }
        $patient = Patient::create($request->all());



        return redirect()->route('admin.patients.index');
    }


    /**
     * Show the form for editing Patient.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }
        
        $report_people = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $health_facilities = \App\Township::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $patient = Patient::findOrFail($id);

        return view('admin.patients.edit', compact('patient', 'report_people', 'health_facilities'));
    }

    /**
     * Update Patient in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientsRequest $request, $id)
    {
        if (! Gate::allows('patient_edit')) {
            return abort(401);
        }
        $patient = Patient::findOrFail($id);
        $patient->update($request->all());



        return redirect()->route('admin.patients.index');
    }


    /**
     * Display Patient.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('patient_view')) {
            return abort(401);
        }
        $patient = Patient::findOrFail($id);

        return view('admin.patients.show', compact('patient'));
    }


    /**
     * Remove Patient from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('patient_delete')) {
            return abort(401);
        }
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect()->route('admin.patients.index');
    }

    /**
     * Delete all selected Patient at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('patient_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Patient::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Patient from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('patient_delete')) {
            return abort(401);
        }
        $patient = Patient::onlyTrashed()->findOrFail($id);
        $patient->restore();

        return redirect()->route('admin.patients.index');
    }

    /**
     * Permanently delete Patient from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('patient_delete')) {
            return abort(401);
        }
        $patient = Patient::onlyTrashed()->findOrFail($id);
        $patient->forceDelete();

        return redirect()->route('admin.patients.index');
    }
}
