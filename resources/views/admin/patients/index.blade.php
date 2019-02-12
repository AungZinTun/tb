@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.patient.title')</h3>
    @can('patient_create')
    <p>
        <a href="{{ route('admin.patients.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('patient_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.patients.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.patients.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('patient_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('patient_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.patient.fields.txt-start-date')</th>
                        <th>@lang('quickadmin.patient.fields.tb-no')</th>
                        <th>@lang('quickadmin.patient.fields.name')</th>
                        <th>@lang('quickadmin.patient.fields.sex')</th>
                        <th>age</th>
                        <th>@lang('quickadmin.patient.fields.current-address')</th>
                        <th>@lang('quickadmin.patient.fields.health-facility')</th>
                        <th>@lang('quickadmin.patient.fields.phone')</th>
                        <th>@lang('quickadmin.patient.fields.referred-by')</th>
                        <th>@lang('quickadmin.patient.fields.type-of-patient')</th>
                        <th>@lang('quickadmin.patient.fields.tb-site')</th>
                        <th>@lang('quickadmin.patient.fields.regimen')</th>
                        <th>@lang('quickadmin.patient.fields.smear-result-0')</th>
                        <th>@lang('quickadmin.patient.fields.x-pert-result')</th>
                        <th>@lang('quickadmin.patient.fields.culture-result')</th>
                        <th>@lang('quickadmin.patient.fields.smear-result-2')</th>
                        <th>@lang('quickadmin.patient.fields.xpert-result-2')</th>
                        <th>@lang('quickadmin.patient.fields.culture-result-2')</th>
                        <th>@lang('quickadmin.patient.fields.smear-result-5')</th>
                        <th>@lang('quickadmin.patient.fields.xpert-result-5')</th>
                        <th>@lang('quickadmin.patient.fields.culture-result-5')</th>
                        <th>@lang('quickadmin.patient.fields.smear-result-e')</th>
                        <th>@lang('quickadmin.patient.fields.xpert-result-e')</th>
                        <th>@lang('quickadmin.patient.fields.culture-result-e')</th>
                        <th>@lang('quickadmin.patient.fields.hiv-test-result')</th>
                        <th>@lang('quickadmin.patient.fields.cpt')</th>
                        <th>@lang('quickadmin.patient.fields.art')</th>
                        <th>@lang('quickadmin.patient.fields.outcome')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('patient_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.patients.mass_destroy') }}'; @endif
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.patients.index') !!}?show_deleted={{ request('show_deleted') }}';
            window.dtDefaultOptions.columns = [@can('patient_delete')
                @if ( request('show_deleted') != 1 )
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endif
                @endcan{data: 'txt_start_date', name: 'txt_start_date'},
                {data: 'tb_no', name: 'tb_no'},
                {data: 'name', name: 'name'},
                {data: 'sex', name: 'sex'},
                {data: 'age', name: 'age'},
                {data: 'current_address', name: 'current_address'},
                {data: 'health_facility.title', name: 'health_facility.title'},
                {data: 'phone', name: 'phone'},
                {data: 'referred_by', name: 'referred_by'},
                {data: 'type_of_patient', name: 'type_of_patient'},
                {data: 'tb_site', name: 'tb_site'},
                {data: 'regimen', name: 'regimen'},
                {data: 'smear_result_0', name: 'smear_result_0'},
                {data: 'x_pert_result', name: 'x_pert_result'},
                {data: 'culture_result', name: 'culture_result'},
                {data: 'smear_result_2', name: 'smear_result_2'},
                {data: 'xpert_result_2', name: 'xpert_result_2'},
                {data: 'culture_result_2', name: 'culture_result_2'},
                {data: 'smear_result_5', name: 'smear_result_5'},
                {data: 'xpert_result_5', name: 'xpert_result_5'},
                {data: 'culture_result_5', name: 'culture_result_5'},
                {data: 'smear_result_e', name: 'smear_result_e'},
                {data: 'xpert_result_e', name: 'xpert_result_e'},
                {data: 'culture_result_e', name: 'culture_result_e'},
                {data: 'hiv_test_result', name: 'hiv_test_result'},
                {data: 'cpt', name: 'cpt'},
                {data: 'art', name: 'art'},
                {data: 'outcome', name: 'outcome'},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection