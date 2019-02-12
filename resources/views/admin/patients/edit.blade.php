@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.patient.title')</h3>
    
    {!! Form::model($patient, ['method' => 'PUT', 'route' => ['admin.patients.update', $patient->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('txt_start_date', trans('quickadmin.patient.fields.txt-start-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('txt_start_date', old('txt_start_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('txt_start_date'))
                        <p class="help-block">
                            {{ $errors->first('txt_start_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tb_no', trans('quickadmin.patient.fields.tb-no').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('tb_no', old('tb_no'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tb_no'))
                        <p class="help-block">
                            {{ $errors->first('tb_no') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.patient.fields.name').'', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sex', trans('quickadmin.patient.fields.sex').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sex'))
                        <p class="help-block">
                            {{ $errors->first('sex') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('sex', '1', false, []) !!}
                            male
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('sex', '0', false, []) !!}
                            female
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dob', trans('quickadmin.patient.fields.dob').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('dob', old('dob'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dob'))
                        <p class="help-block">
                            {{ $errors->first('dob') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('current_address', trans('quickadmin.patient.fields.current-address').'', ['class' => 'control-label']) !!}
                    {!! Form::text('current_address', old('current_address'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('current_address'))
                        <p class="help-block">
                            {{ $errors->first('current_address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('report_person_id', trans('quickadmin.patient.fields.report-person').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('report_person_id', $report_people, old('report_person_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('report_person_id'))
                        <p class="help-block">
                            {{ $errors->first('report_person_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('health_facility_id', trans('quickadmin.patient.fields.health-facility').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('health_facility_id', $health_facilities, old('health_facility_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('health_facility_id'))
                        <p class="help-block">
                            {{ $errors->first('health_facility_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', trans('quickadmin.patient.fields.phone').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('referred_by', trans('quickadmin.patient.fields.referred-by').'', ['class' => 'control-label']) !!}
                    {!! Form::text('referred_by', old('referred_by'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('referred_by'))
                        <p class="help-block">
                            {{ $errors->first('referred_by') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('permanent_address', trans('quickadmin.patient.fields.permanent-address').'', ['class' => 'control-label']) !!}
                    {!! Form::text('permanent_address', old('permanent_address'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('permanent_address'))
                        <p class="help-block">
                            {{ $errors->first('permanent_address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dot_provider', trans('quickadmin.patient.fields.dot-provider').'', ['class' => 'control-label']) !!}
                    {!! Form::text('dot_provider', old('dot_provider'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dot_provider'))
                        <p class="help-block">
                            {{ $errors->first('dot_provider') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dots_supervisor', trans('quickadmin.patient.fields.dots-supervisor').'', ['class' => 'control-label']) !!}
                    {!! Form::text('dots_supervisor', old('dots_supervisor'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dots_supervisor'))
                        <p class="help-block">
                            {{ $errors->first('dots_supervisor') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('contact_person', trans('quickadmin.patient.fields.contact-person').'', ['class' => 'control-label']) !!}
                    {!! Form::text('contact_person', old('contact_person'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('contact_person'))
                        <p class="help-block">
                            {{ $errors->first('contact_person') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('type_of_patient', trans('quickadmin.patient.fields.type-of-patient').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('type_of_patient'))
                        <p class="help-block">
                            {{ $errors->first('type_of_patient') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('type_of_patient', '1', false, []) !!}
                            New 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type_of_patient', '2', false, []) !!}
                            Relapse
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type_of_patient', '3', false, []) !!}
                            Transfered in 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type_of_patient', '4', false, []) !!}
                            Treatment after failure
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type_of_patient', '5', false, []) !!}
                            Treatment after LFU
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type_of_patient', '6', false, []) !!}
                            Others
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('type_of_patient', '7', false, []) !!}
                            Unknown
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tb_site', trans('quickadmin.patient.fields.tb-site').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tb_site'))
                        <p class="help-block">
                            {{ $errors->first('tb_site') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('tb_site', '1', false, []) !!}
                            Pulmonary
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('tb_site', '0', false, []) !!}
                            Extra Pulmonary
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('regimen', trans('quickadmin.patient.fields.regimen').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('regimen'))
                        <p class="help-block">
                            {{ $errors->first('regimen') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('regimen', '1', false, []) !!}
                            Initial Regimen 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('regimen', '2', false, []) !!}
                            Retreatment Regimen
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('regimen', '3', false, []) !!}
                            Childhood Regimen
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('smear_result_0', trans('quickadmin.patient.fields.smear-result-0').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('smear_result_0'))
                        <p class="help-block">
                            {{ $errors->first('smear_result_0') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('smear_result_0', '1', false, []) !!}
                            positive
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('smear_result_0', '2', false, []) !!}
                            negative 
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('smear_result_0', '3', false, []) !!}
                            unknown
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('x_pert_result', trans('quickadmin.patient.fields.x-pert-result').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('x_pert_result'))
                        <p class="help-block">
                            {{ $errors->first('x_pert_result') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('x_pert_result', '1', false, []) !!}
                            MTB not Detected
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('x_pert_result', '2', false, []) !!}
                            Invalid
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('x_pert_result', '3', false, []) !!}
                            MTB Detected
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('x_pert_result', '4', false, []) !!}
                            Rif Resistant
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('x_pert_result', '5', false, []) !!}
                            MTB (+) /Rif Resistant is invalid
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('culture_result', trans('quickadmin.patient.fields.culture-result').'', ['class' => 'control-label']) !!}
                    {!! Form::number('culture_result', old('culture_result'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('culture_result'))
                        <p class="help-block">
                            {{ $errors->first('culture_result') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_h_0', trans('quickadmin.patient.fields.dst-h-0').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_h_0', old('dst_h_0'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_h_0'))
                        <p class="help-block">
                            {{ $errors->first('dst_h_0') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_r_0', trans('quickadmin.patient.fields.dst-r-0').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_r_0', old('dst_r_0'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_r_0'))
                        <p class="help-block">
                            {{ $errors->first('dst_r_0') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_e_0', trans('quickadmin.patient.fields.dst-e-0').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_e_0', old('dst_e_0'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_e_0'))
                        <p class="help-block">
                            {{ $errors->first('dst_e_0') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('lpa_e_0', trans('quickadmin.patient.fields.lpa-e-0').'', ['class' => 'control-label']) !!}
                    {!! Form::number('lpa_e_0', old('lpa_e_0'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('lpa_e_0'))
                        <p class="help-block">
                            {{ $errors->first('lpa_e_0') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('lpa_r_0', trans('quickadmin.patient.fields.lpa-r-0').'', ['class' => 'control-label']) !!}
                    {!! Form::number('lpa_r_0', old('lpa_r_0'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('lpa_r_0'))
                        <p class="help-block">
                            {{ $errors->first('lpa_r_0') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('weight', trans('quickadmin.patient.fields.weight').'', ['class' => 'control-label']) !!}
                    {!! Form::number('weight', old('weight'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('weight'))
                        <p class="help-block">
                            {{ $errors->first('weight') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('smear_result_2', trans('quickadmin.patient.fields.smear-result-2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('smear_result_2', old('smear_result_2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('smear_result_2'))
                        <p class="help-block">
                            {{ $errors->first('smear_result_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('xpert_result_2', trans('quickadmin.patient.fields.xpert-result-2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('xpert_result_2', old('xpert_result_2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('xpert_result_2'))
                        <p class="help-block">
                            {{ $errors->first('xpert_result_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('culture_result_2', trans('quickadmin.patient.fields.culture-result-2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('culture_result_2', old('culture_result_2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('culture_result_2'))
                        <p class="help-block">
                            {{ $errors->first('culture_result_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_h_2', trans('quickadmin.patient.fields.dst-h-2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_h_2', old('dst_h_2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_h_2'))
                        <p class="help-block">
                            {{ $errors->first('dst_h_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_r_2', trans('quickadmin.patient.fields.dst-r-2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_r_2', old('dst_r_2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_r_2'))
                        <p class="help-block">
                            {{ $errors->first('dst_r_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_s_2', trans('quickadmin.patient.fields.dst-s-2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_s_2', old('dst_s_2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_s_2'))
                        <p class="help-block">
                            {{ $errors->first('dst_s_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_e_2', trans('quickadmin.patient.fields.dst-e-2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_e_2', old('dst_e_2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_e_2'))
                        <p class="help-block">
                            {{ $errors->first('dst_e_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('lpa_h_2', trans('quickadmin.patient.fields.lpa-h-2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('lpa_h_2', old('lpa_h_2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('lpa_h_2'))
                        <p class="help-block">
                            {{ $errors->first('lpa_h_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('lpa_r_2', trans('quickadmin.patient.fields.lpa-r-2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('lpa_r_2', old('lpa_r_2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('lpa_r_2'))
                        <p class="help-block">
                            {{ $errors->first('lpa_r_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('wt_2', trans('quickadmin.patient.fields.wt-2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('wt_2', old('wt_2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('wt_2'))
                        <p class="help-block">
                            {{ $errors->first('wt_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('smear_result_5', trans('quickadmin.patient.fields.smear-result-5').'', ['class' => 'control-label']) !!}
                    {!! Form::number('smear_result_5', old('smear_result_5'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('smear_result_5'))
                        <p class="help-block">
                            {{ $errors->first('smear_result_5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('xpert_result_5', trans('quickadmin.patient.fields.xpert-result-5').'', ['class' => 'control-label']) !!}
                    {!! Form::number('xpert_result_5', old('xpert_result_5'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('xpert_result_5'))
                        <p class="help-block">
                            {{ $errors->first('xpert_result_5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('culture_result_5', trans('quickadmin.patient.fields.culture-result-5').'', ['class' => 'control-label']) !!}
                    {!! Form::number('culture_result_5', old('culture_result_5'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('culture_result_5'))
                        <p class="help-block">
                            {{ $errors->first('culture_result_5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_h_5', trans('quickadmin.patient.fields.dst-h-5').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_h_5', old('dst_h_5'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_h_5'))
                        <p class="help-block">
                            {{ $errors->first('dst_h_5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_r_5', trans('quickadmin.patient.fields.dst-r-5').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_r_5', old('dst_r_5'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_r_5'))
                        <p class="help-block">
                            {{ $errors->first('dst_r_5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_s_5', trans('quickadmin.patient.fields.dst-s-5').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_s_5', old('dst_s_5'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_s_5'))
                        <p class="help-block">
                            {{ $errors->first('dst_s_5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_e_5', trans('quickadmin.patient.fields.dst-e-5').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_e_5', old('dst_e_5'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_e_5'))
                        <p class="help-block">
                            {{ $errors->first('dst_e_5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('lpa_h_5', trans('quickadmin.patient.fields.lpa-h-5').'', ['class' => 'control-label']) !!}
                    {!! Form::number('lpa_h_5', old('lpa_h_5'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('lpa_h_5'))
                        <p class="help-block">
                            {{ $errors->first('lpa_h_5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('lpa_r_5', trans('quickadmin.patient.fields.lpa-r-5').'', ['class' => 'control-label']) !!}
                    {!! Form::number('lpa_r_5', old('lpa_r_5'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('lpa_r_5'))
                        <p class="help-block">
                            {{ $errors->first('lpa_r_5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('wt_5', trans('quickadmin.patient.fields.wt-5').'', ['class' => 'control-label']) !!}
                    {!! Form::number('wt_5', old('wt_5'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('wt_5'))
                        <p class="help-block">
                            {{ $errors->first('wt_5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('smear_result_e', trans('quickadmin.patient.fields.smear-result-e').'', ['class' => 'control-label']) !!}
                    {!! Form::number('smear_result_e', old('smear_result_e'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('smear_result_e'))
                        <p class="help-block">
                            {{ $errors->first('smear_result_e') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('xpert_result_e', trans('quickadmin.patient.fields.xpert-result-e').'', ['class' => 'control-label']) !!}
                    {!! Form::number('xpert_result_e', old('xpert_result_e'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('xpert_result_e'))
                        <p class="help-block">
                            {{ $errors->first('xpert_result_e') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('culture_result_e', trans('quickadmin.patient.fields.culture-result-e').'', ['class' => 'control-label']) !!}
                    {!! Form::number('culture_result_e', old('culture_result_e'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('culture_result_e'))
                        <p class="help-block">
                            {{ $errors->first('culture_result_e') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_h_e', trans('quickadmin.patient.fields.dst-h-e').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_h_e', old('dst_h_e'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_h_e'))
                        <p class="help-block">
                            {{ $errors->first('dst_h_e') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_r_e', trans('quickadmin.patient.fields.dst-r-e').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_r_e', old('dst_r_e'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_r_e'))
                        <p class="help-block">
                            {{ $errors->first('dst_r_e') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_s_e', trans('quickadmin.patient.fields.dst-s-e').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_s_e', old('dst_s_e'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_s_e'))
                        <p class="help-block">
                            {{ $errors->first('dst_s_e') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dst_e_e', trans('quickadmin.patient.fields.dst-e-e').'', ['class' => 'control-label']) !!}
                    {!! Form::number('dst_e_e', old('dst_e_e'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dst_e_e'))
                        <p class="help-block">
                            {{ $errors->first('dst_e_e') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('lpa_h_e', trans('quickadmin.patient.fields.lpa-h-e').'', ['class' => 'control-label']) !!}
                    {!! Form::number('lpa_h_e', old('lpa_h_e'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('lpa_h_e'))
                        <p class="help-block">
                            {{ $errors->first('lpa_h_e') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('lpa_r_e', trans('quickadmin.patient.fields.lpa-r-e').'', ['class' => 'control-label']) !!}
                    {!! Form::number('lpa_r_e', old('lpa_r_e'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('lpa_r_e'))
                        <p class="help-block">
                            {{ $errors->first('lpa_r_e') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('wt_e', trans('quickadmin.patient.fields.wt-e').'', ['class' => 'control-label']) !!}
                    {!! Form::number('wt_e', old('wt_e'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('wt_e'))
                        <p class="help-block">
                            {{ $errors->first('wt_e') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('c_regimen', trans('quickadmin.patient.fields.c-regimen').'', ['class' => 'control-label']) !!}
                    {!! Form::number('c_regimen', old('c_regimen'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('c_regimen'))
                        <p class="help-block">
                            {{ $errors->first('c_regimen') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_test_result', trans('quickadmin.patient.fields.hiv-test-result').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_test_result'))
                        <p class="help-block">
                            {{ $errors->first('hiv_test_result') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('hiv_test_result', '1', false, []) !!}
                            P
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('hiv_test_result', '2', false, []) !!}
                            N
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('hiv_test_result', '3', false, []) !!}
                            U
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hiv_test_date', trans('quickadmin.patient.fields.hiv-test-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('hiv_test_date', old('hiv_test_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hiv_test_date'))
                        <p class="help-block">
                            {{ $errors->first('hiv_test_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cpt', trans('quickadmin.patient.fields.cpt').'', ['class' => 'control-label']) !!}
                    {!! Form::text('cpt', old('cpt'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cpt'))
                        <p class="help-block">
                            {{ $errors->first('cpt') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('art', trans('quickadmin.patient.fields.art').'', ['class' => 'control-label']) !!}
                    {!! Form::text('art', old('art'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('art'))
                        <p class="help-block">
                            {{ $errors->first('art') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('outcome', trans('quickadmin.patient.fields.outcome').'', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('outcome'))
                        <p class="help-block">
                            {{ $errors->first('outcome') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('outcome', '1', false, []) !!}
                            Cure
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('outcome', '2', false, []) !!}
                            Completed
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('outcome', '3', false, []) !!}
                            Die
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('outcome', '4', false, []) !!}
                            Failure
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('outcome', '5', false, []) !!}
                            LFU
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('outcome', '6', false, []) !!}
                            Not Evaluated
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('outcome', '7', false, []) !!}
                            Move to 2nd line drug
                        </label>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
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