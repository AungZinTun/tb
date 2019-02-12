@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.users.fields.name')</th>
                            <td field-key='name'>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.role')</th>
                            <td field-key='role'>{{ $user->role->title ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.township')</th>
                            <td field-key='township'>{{ $user->township->title ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#user_actions" aria-controls="user_actions" role="tab" data-toggle="tab">User actions</a></li>
<li role="presentation" class=""><a href="#patient" aria-controls="patient" role="tab" data-toggle="tab">Patient</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="user_actions">
<table class="table table-bordered table-striped {{ count($user_actions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.user-actions.created_at')</th>
                        <th>@lang('quickadmin.user-actions.fields.user')</th>
                        <th>@lang('quickadmin.user-actions.fields.action')</th>
                        <th>@lang('quickadmin.user-actions.fields.action-model')</th>
                        <th>@lang('quickadmin.user-actions.fields.action-id')</th>
                        
        </tr>
    </thead>

    <tbody>
        @if (count($user_actions) > 0)
            @foreach ($user_actions as $user_action)
                <tr data-entry-id="{{ $user_action->id }}">
                    <td>{{ $user_action->created_at ?? '' }}</td>
                                <td field-key='user'>{{ $user_action->user->name ?? '' }}</td>
                                <td field-key='action'>{{ $user_action->action }}</td>
                                <td field-key='action_model'>{{ $user_action->action_model }}</td>
                                <td field-key='action_id'>{{ $user_action->action_id }}</td>
                                
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="patient">
<table class="table table-bordered table-striped {{ count($patients) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.patient.fields.txt-start-date')</th>
                        <th>@lang('quickadmin.patient.fields.tb-no')</th>
                        <th>@lang('quickadmin.patient.fields.name')</th>
                        <th>@lang('quickadmin.patient.fields.sex')</th>
                        <th>@lang('quickadmin.patient.fields.dob')</th>
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

    <tbody>
        @if (count($patients) > 0)
            @foreach ($patients as $patient)
                <tr data-entry-id="{{ $patient->id }}">
                    <td field-key='txt_start_date'>{{ $patient->txt_start_date }}</td>
                                <td field-key='tb_no'>{{ $patient->tb_no }}</td>
                                <td field-key='name'>{{ $patient->name }}</td>
                                <td field-key='sex'>{{ $patient->sex }}</td>
                                <td field-key='dob'>{{ $patient->dob }}</td>
                                <td field-key='current_address'>{{ $patient->current_address }}</td>
                                <td field-key='health_facility'>{{ $patient->health_facility->title ?? '' }}</td>
                                <td field-key='phone'>{{ $patient->phone }}</td>
                                <td field-key='referred_by'>{{ $patient->referred_by }}</td>
                                <td field-key='type_of_patient'>{{ $patient->type_of_patient }}</td>
                                <td field-key='tb_site'>{{ $patient->tb_site }}</td>
                                <td field-key='regimen'>{{ $patient->regimen }}</td>
                                <td field-key='smear_result_0'>{{ $patient->smear_result_0 }}</td>
                                <td field-key='x_pert_result'>{{ $patient->x_pert_result }}</td>
                                <td field-key='culture_result'>{{ $patient->culture_result }}</td>
                                <td field-key='smear_result_2'>{{ $patient->smear_result_2 }}</td>
                                <td field-key='xpert_result_2'>{{ $patient->xpert_result_2 }}</td>
                                <td field-key='culture_result_2'>{{ $patient->culture_result_2 }}</td>
                                <td field-key='smear_result_5'>{{ $patient->smear_result_5 }}</td>
                                <td field-key='xpert_result_5'>{{ $patient->xpert_result_5 }}</td>
                                <td field-key='culture_result_5'>{{ $patient->culture_result_5 }}</td>
                                <td field-key='smear_result_e'>{{ $patient->smear_result_e }}</td>
                                <td field-key='xpert_result_e'>{{ $patient->xpert_result_e }}</td>
                                <td field-key='culture_result_e'>{{ $patient->culture_result_e }}</td>
                                <td field-key='hiv_test_result'>{{ $patient->hiv_test_result }}</td>
                                <td field-key='cpt'>{{ $patient->cpt }}</td>
                                <td field-key='art'>{{ $patient->art }}</td>
                                <td field-key='outcome'>{{ $patient->outcome }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('patient_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.patients.restore', $patient->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('patient_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.patients.perma_del', $patient->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('patient_view')
                                    <a href="{{ route('admin.patients.show',[$patient->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('patient_edit')
                                    <a href="{{ route('admin.patients.edit',[$patient->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('patient_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.patients.destroy', $patient->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="67">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


