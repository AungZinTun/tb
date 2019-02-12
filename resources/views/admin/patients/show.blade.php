@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.patient.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.patient.fields.txt-start-date')</th>
                            <td field-key='txt_start_date'>{{ $patient->txt_start_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.tb-no')</th>
                            <td field-key='tb_no'>{{ $patient->tb_no }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.name')</th>
                            <td field-key='name'>{{ $patient->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.sex')</th>
                            <td field-key='sex'>{{ $patient->sex }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dob')</th>
                            <td field-key='dob'>{{ $patient->dob }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.current-address')</th>
                            <td field-key='current_address'>{{ $patient->current_address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.report-person')</th>
                            <td field-key='report_person'>{{ $patient->report_person->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.health-facility')</th>
                            <td field-key='health_facility'>{{ $patient->health_facility->title ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.phone')</th>
                            <td field-key='phone'>{{ $patient->phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.referred-by')</th>
                            <td field-key='referred_by'>{{ $patient->referred_by }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.permanent-address')</th>
                            <td field-key='permanent_address'>{{ $patient->permanent_address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dot-provider')</th>
                            <td field-key='dot_provider'>{{ $patient->dot_provider }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dots-supervisor')</th>
                            <td field-key='dots_supervisor'>{{ $patient->dots_supervisor }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.contact-person')</th>
                            <td field-key='contact_person'>{{ $patient->contact_person }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.type-of-patient')</th>
                            <td field-key='type_of_patient'>{{ $patient->type_of_patient }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.tb-site')</th>
                            <td field-key='tb_site'>{{ $patient->tb_site }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.regimen')</th>
                            <td field-key='regimen'>{{ $patient->regimen }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.smear-result-0')</th>
                            <td field-key='smear_result_0'>{{ $patient->smear_result_0 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.x-pert-result')</th>
                            <td field-key='x_pert_result'>{{ $patient->x_pert_result }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.culture-result')</th>
                            <td field-key='culture_result'>{{ $patient->culture_result }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-h-0')</th>
                            <td field-key='dst_h_0'>{{ $patient->dst_h_0 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-r-0')</th>
                            <td field-key='dst_r_0'>{{ $patient->dst_r_0 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-e-0')</th>
                            <td field-key='dst_e_0'>{{ $patient->dst_e_0 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.lpa-e-0')</th>
                            <td field-key='lpa_e_0'>{{ $patient->lpa_e_0 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.lpa-r-0')</th>
                            <td field-key='lpa_r_0'>{{ $patient->lpa_r_0 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.weight')</th>
                            <td field-key='weight'>{{ $patient->weight }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.smear-result-2')</th>
                            <td field-key='smear_result_2'>{{ $patient->smear_result_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.xpert-result-2')</th>
                            <td field-key='xpert_result_2'>{{ $patient->xpert_result_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.culture-result-2')</th>
                            <td field-key='culture_result_2'>{{ $patient->culture_result_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-h-2')</th>
                            <td field-key='dst_h_2'>{{ $patient->dst_h_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-r-2')</th>
                            <td field-key='dst_r_2'>{{ $patient->dst_r_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-s-2')</th>
                            <td field-key='dst_s_2'>{{ $patient->dst_s_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-e-2')</th>
                            <td field-key='dst_e_2'>{{ $patient->dst_e_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.lpa-h-2')</th>
                            <td field-key='lpa_h_2'>{{ $patient->lpa_h_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.lpa-r-2')</th>
                            <td field-key='lpa_r_2'>{{ $patient->lpa_r_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.wt-2')</th>
                            <td field-key='wt_2'>{{ $patient->wt_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.smear-result-5')</th>
                            <td field-key='smear_result_5'>{{ $patient->smear_result_5 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.xpert-result-5')</th>
                            <td field-key='xpert_result_5'>{{ $patient->xpert_result_5 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.culture-result-5')</th>
                            <td field-key='culture_result_5'>{{ $patient->culture_result_5 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-h-5')</th>
                            <td field-key='dst_h_5'>{{ $patient->dst_h_5 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-r-5')</th>
                            <td field-key='dst_r_5'>{{ $patient->dst_r_5 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-s-5')</th>
                            <td field-key='dst_s_5'>{{ $patient->dst_s_5 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-e-5')</th>
                            <td field-key='dst_e_5'>{{ $patient->dst_e_5 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.lpa-h-5')</th>
                            <td field-key='lpa_h_5'>{{ $patient->lpa_h_5 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.lpa-r-5')</th>
                            <td field-key='lpa_r_5'>{{ $patient->lpa_r_5 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.wt-5')</th>
                            <td field-key='wt_5'>{{ $patient->wt_5 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.smear-result-e')</th>
                            <td field-key='smear_result_e'>{{ $patient->smear_result_e }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.xpert-result-e')</th>
                            <td field-key='xpert_result_e'>{{ $patient->xpert_result_e }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.culture-result-e')</th>
                            <td field-key='culture_result_e'>{{ $patient->culture_result_e }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-h-e')</th>
                            <td field-key='dst_h_e'>{{ $patient->dst_h_e }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-r-e')</th>
                            <td field-key='dst_r_e'>{{ $patient->dst_r_e }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-s-e')</th>
                            <td field-key='dst_s_e'>{{ $patient->dst_s_e }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.dst-e-e')</th>
                            <td field-key='dst_e_e'>{{ $patient->dst_e_e }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.lpa-h-e')</th>
                            <td field-key='lpa_h_e'>{{ $patient->lpa_h_e }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.lpa-r-e')</th>
                            <td field-key='lpa_r_e'>{{ $patient->lpa_r_e }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.wt-e')</th>
                            <td field-key='wt_e'>{{ $patient->wt_e }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.c-regimen')</th>
                            <td field-key='c_regimen'>{{ $patient->c_regimen }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.hiv-test-result')</th>
                            <td field-key='hiv_test_result'>{{ $patient->hiv_test_result }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.hiv-test-date')</th>
                            <td field-key='hiv_test_date'>{{ $patient->hiv_test_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.cpt')</th>
                            <td field-key='cpt'>{{ $patient->cpt }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.art')</th>
                            <td field-key='art'>{{ $patient->art }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.patient.fields.outcome')</th>
                            <td field-key='outcome'>{{ $patient->outcome }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.patients.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

@section('javascript')
    @parent

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.date').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
            });
            
        });
    </script>
            
@stop
