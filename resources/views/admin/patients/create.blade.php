@extends('layouts.app')

@section('content')
      {!! Form::open(['method' => 'POST', 'route' => ['admin.patients.store']]) !!}

<div class="panel panel-default">
    <div class="panel-heading justify-content-center">
      <h3 class="text-centerd">  NTP TB Treatment Card(TB01)</h3>
    </div>
    <div class="panel-body bg-success">
        <!-- upper -->
            <div class="row">
            <!-- left side -->
                <div class="col-sm-8 bg-success">
                            <div class="row">
                                <div class="col-xs-2 form-group">
                                    {!! Form::label('name', trans('quickadmin.patient.fields.name').'', ['class' => 'control-label form-group']) !!}
                                
                                </div>
                                <div class="col-xs-4">
                                {!! Form::text('name', old('name'), ['class' => 'form-control form-group', 'placeholder' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('name'))
                                        <p class="help-block">
                                            {{ $errors->first('name') }}
                                        </p>
                                    @endif
                                </div>
                        
                        
                                <div class="col-xs-2 form-group">
                                    {!! Form::label('phone', trans('quickadmin.patient.fields.phone').'*', ['class' => 'control-label']) !!}
                                
                                </div>
                                <div class="col-xs-4">
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
                                <div class="col-xs-4 form-group">
                                    {!! Form::label('permanent_address','Address', ['class' => 'control-label']) !!}
                            
                                </div>
                                <div class="col-xs-8">
                                    {!! Form::text('permanent_address', old('permanent_address'), ['class' => 'form-control', 'placeholder' => 'Permanent Address']) !!}
                                    
                                    <p class="help-block"></p>
                                    @if($errors->has('permanent_address'))
                                        <p class="help-block">
                                            {{ $errors->first('permanent_address') }}
                                        </p>
                                    @endif
                                    {!! Form::text('current_address', old('current_address'), ['class' => 'form-control', 'placeholder' => 'Current Address']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('current_address'))
                                        <p class="help-block">
                                            {{ $errors->first('current_address') }}
                                        </p>
                                    @endif
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-1 form-group">
                                    {!! Form::label('sex', trans('quickadmin.patient.fields.sex').'', ['class' => 'control-label form-group']) !!}
                                
                                    
                                </div>
                                <div class="col-xs-3">
                                    <div>
                                        <label>
                                            {!! Form::radio('sex', '1', false, []) !!}
                                            M
                                        </label>
                                
                                        <label>
                                            {!! Form::radio('sex', '0', false, []) !!}
                                            F
                                        </label>
                                    </div>
                                    <p class="help-block"></p>
                                    @if($errors->has('sex'))
                                        <p class="help-block">
                                            {{ $errors->first('sex') }}
                                        </p>
                                    @endif
                                </div>
                        
                        
                                <div class="col-xs-1 form-group">
                                    {!! Form::label('dob', trans('quickadmin.patient.fields.dob').'*', ['id'=>'dob','name'=>'dob', 'class' => 'control-label']) !!}
                                
                                </div>
                                <div class="col-xs-3">
                                {!! Form::text('dob', old('dob'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('dob'))
                                        <p class="help-block">
                                            {{ $errors->first('dob') }}
                                        </p>
                                    @endif
                                </div>
                                <div class="col-xs-1">
                                {!! Form::label('age', 'age'.'*', ['class' => 'control-label']) !!}
                                </div>
                                <div class="col-xs-3">
                                {!! Form::number('age', old('age'), ['id'=>'age','name'=>'age', 'class' => 'form-control', 'placeholder' => 'age', 'required' => '']) !!}
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-4 form-group">
                                    {!! Form::label('dot_provider', trans('quickadmin.patient.fields.dot-provider').'', ['class' => 'control-label']) !!}
                            
                                </div>
                                <div class="col-xs-8">
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
                                <div class="col-xs-4 form-group">
                                    {!! Form::label('dots_supervisor', trans('quickadmin.patient.fields.dots-supervisor').'', ['class' => 'control-label']) !!}
                                
                                </div>
                                <div class="col-xs-8">
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
                                <div class="col-xs-4 form-group">
                                    {!! Form::label('contact_person', trans('quickadmin.patient.fields.contact-person').'', ['class' => 'control-label']) !!}
                                
                                </div>
                                <div class="col-xs-8">
                                {!! Form::text('contact_person', old('contact_person'), ['class' => 'form-control', 'placeholder' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('contact_person'))
                                        <p class="help-block">
                                            {{ $errors->first('contact_person') }}
                                        </p>
                                    @endif 
                                </div>
                            </div>
                            <hr>

                </div>
            <!-- left side -->

            <!-- right side -->
                <div class="col-sm-4 bg-success">
                            <div class="row">
                                <div class="col-xs-6 form-group">
                                    {!! Form::label('tb_no', trans('quickadmin.patient.fields.tb-no').'*', ['class' => 'control-label']) !!}
                                
                                </div>
                                <div class="col-xs-6">
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
                                <div class="col-xs-6 form-group">
                                    {!! Form::label('health_facility_id', trans('quickadmin.patient.fields.health-facility').'*', ['class' => 'control-label']) !!}
                                
                                </div>
                                <div class="col-xs-6">
                                {!! Form::label('health_facility_id', Auth()->User()->township->title , ['class' => 'control-label']) !!}
                                    {!! Form::hidden('health_facility_id', Auth()->User()->township->id, old('health_facility_id'), ['class' => 'form-control', 'required' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('health_facility_id'))
                                        <p class="help-block">
                                            {{ $errors->first('health_facility_id') }}
                                        </p>
                                    @endif
                            
                                    {!! Form::hidden('report_person_id', trans('quickadmin.patient.fields.report-person').'*', ['class' => 'control-label']) !!}
                                    {!! Form::hidden('report_person_id', Auth()->user()->id , old('report_person_id'), ['class' => 'form-control', 'required' => '']) !!}
                                
                                </div>
                            </div>
                            <p></p>
                            
                            
                    
                            <div class="row">
                                <div class="col-xs-6 form-group">
                                    {!! Form::label('tb_site', trans('quickadmin.patient.fields.tb-site').'', ['class' => 'control-label form-group']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('tb_site'))
                                        <p class="help-block">
                                            {{ $errors->first('tb_site') }}
                                        </p>
                                    @endif
                                    
                                    
                                </div>
                                <div class="col-xs-6">
                                <div>
                                        <label>
                                            {!! Form::radio('tb_site', '0', false, []) !!}
                                            P
                                    
                                            {!! Form::radio('tb_site', '1', false, []) !!}
                                            EP
                                            {!! Form::radio('tb_site', '2', false, []) !!}
                                            TBM
                                        </label>
                                    </div>
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
                </div>
            <!-- right side -->             
            </div>
        <!-- upper -->

        <!-- regiemen and refer -->
            <div class="row">
                <div class="col-xs-8 form-group">
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
                    
                            <label>
                                {!! Form::radio('regimen', '2', false, []) !!}
                                Retreatment Regimen
                            </label>
                    
                            <label>
                                {!! Form::radio('regimen', '3', false, []) !!}
                                Childhood Regimen
                            </label>
                        </div>
                            
                </div>

                
                <div class="col-xs-4 form-group">
                    {!! Form::label('referred_by', trans('quickadmin.patient.fields.referred-by').'', ['class' => 'control-label']) !!}
                    {!! Form::select('referred_by', array('H'=>'Health Staff', 'P'=>'Private Prectioner', 'C'=>'Community', 'O'=>'Other'), old('referred_by'), ['class' => 'form-control', 'placeholder' => 'Select']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('referred_by'))
                        <p class="help-block">
                            {{ $errors->first('referred_by') }}
                        </p>
                    @endif
                </div>

            </div>
        <!-- regiemen and refer -->
                            
                    
            <div class="row">
                <div class="col-xs-4">
                    {!! Form::label('txt_start_date','Treatment Start Date *'.'', ['class' => 'control-label']) !!}
                    {!! Form::text('txt_start_date', old('txt_start_date'), ['class' => 'form-control date', 'placeholder' => 'Treatment Start Date','required'=>'']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('txt_start_date'))
                        <p class="help-block">
                            {{ $errors->first('txt_start_date') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-8">
                        <table class='table bg-success table-sm borderless'>
                                <thead class='gb-success'>

                                    <tr >
                                        <th colspan='2' class='text-center' >Result of Examination </th>
                                        <th colspan='7' class='text-center' >Result of Culture & DST </th>
                                        <th rowspan='3' class='text-center'> weight(kg) </th>
                                    </tr>
                                    <tr>
                                        <th rowspan='2'> Smear</th>
                                        <th  rowspan='2'> Xpert</th>
                                        <th  rowspan='2'> Cutlure</th>
                                    
                                    
                                        <th colspan='4' class='text-center' > DST</th>
                                        <th colspan='2' class='text-center' > LPA </th>
                                    
                                    
                                    </tr>
                                    <tr>
                                    
                                        <th> H </th>
                                        <th>R</th>
                                        <th>S</th>
                                        <th>E</th>
                                        <th>H</th>
                                        <th>R</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                        {!! Form::select('smear_result_0', array('1'=>'P', '2'=>'N', '3'=>'U'),false,  ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('x_pert_result', array('1'=>'N', '2'=>'I', '3'=>'T','4'=>'RR','5'=>'TI'),false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('culture_result', array('1'=>'Pos', '2'=>'Neg', '3'=>'Con'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_h_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_r_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_s_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_e_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('lpa_h_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('lpa_r_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td >
                                        {!! Form::number('weight', null, ['class' => 'form-control','placeholder' => '']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        {!! Form::select('smear_result_0', array('1'=>'P', '2'=>'N', '3'=>'U'),false,  ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('x_pert_result', array('1'=>'N', '2'=>'I', '3'=>'T','4'=>'RR','5'=>'TI'),false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('culture_result', array('1'=>'Pos', '2'=>'Neg', '3'=>'Con'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_h_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_r_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_s_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_e_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('lpa_h_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('lpa_r_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td >
                                        {!! Form::number('weight', null, ['class' => 'form-control','placeholder' => '']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        {!! Form::select('smear_result_0', array('1'=>'P', '2'=>'N', '3'=>'U'),false,  ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('x_pert_result', array('1'=>'N', '2'=>'I', '3'=>'T','4'=>'RR','5'=>'TI'),false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('culture_result', array('1'=>'Pos', '2'=>'Neg', '3'=>'Con'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_h_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_r_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_s_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_e_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('lpa_h_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('lpa_r_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td >
                                        {!! Form::number('weight', null, ['class' => 'form-control','placeholder' => '']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        {!! Form::select('smear_result_0', array('1'=>'P', '2'=>'N', '3'=>'U'),false,  ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('x_pert_result', array('1'=>'N', '2'=>'I', '3'=>'T','4'=>'RR','5'=>'TI'),false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('culture_result', array('1'=>'Pos', '2'=>'Neg', '3'=>'Con'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_h_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_r_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_s_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_e_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('lpa_h_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('lpa_r_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td >
                                        {!! Form::number('weight', null, ['class' => 'form-control','placeholder' => '']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        {!! Form::select('smear_result_0', array('1'=>'P', '2'=>'N', '3'=>'U'),false,  ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('x_pert_result', array('1'=>'N', '2'=>'I', '3'=>'T','4'=>'RR','5'=>'TI'),false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('culture_result', array('1'=>'Pos', '2'=>'Neg', '3'=>'Con'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_h_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_r_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_s_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('dst_e_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('lpa_h_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td>
                                        {!! Form::select('lpa_r_0', array('1'=>'R', '2'=>'S', '3'=>'U'), false, ['class' => 'form-control select2','placeholder' => '']) !!}
                                        </td>
                                        <td >
                                        {!! Form::number('weight', null, ['class' => 'form-control','placeholder' => '']) !!}
                                        </td>
                                    </tr>
                                
                            
                                </tbody>
                        </table>
                </div>
            </div>
    

            <hr>
        
        <!-- continuation phase -->
            <div class="row">
                <div class="col-xs-12 form-group">
                     <h4>II . CONTINUATION PHASE: <small>Prescribed Regimen and Dosages</small></h4>
                  
                        <p class="help-block"></p>
                        @if($errors->has('c_regimen'))
                            <p class="help-block">
                                {{ $errors->first('c_regimen') }}
                            </p>
                        @endif
                        <div>
                                <label>
                                    {!! Form::radio('c_regimen', '1', false, []) !!}
                                    Initial Regimen 
                                </label>
                            
                                <label>
                                    {!! Form::radio('c_regimen', '2', false, []) !!}
                                    Retreatment Regimen
                                </label>
                            
                                <label>
                                    {!! Form::radio('c_regimen', '3', false, []) !!}
                                    Childhood Regimen
                                </label>
                            </div>
                    </div>
            </div>

            <div class="row">
                <div class="col-sm-6 bg-success">
                    <table class='table table-bardered bg-danger'>
                        <thead>
                        <tr>
                                    <th>
                                        TB/HIV Activity
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Date
                                    </th>
                        
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                                <td>
                                    HIV Test
                                </td>
                                <td>
                                        <div>
                                            <label>
                                                {!! Form::radio('hiv_test_result', '1', false, []) !!}
                                                P
                                            </label>
                                    
                                            <label>
                                                {!! Form::radio('hiv_test_result', '2', false, []) !!}
                                                N
                                            </label>
                                    
                                            <label>
                                                {!! Form::radio('hiv_test_result', '3', false, []) !!}
                                                U
                                            </label>
                                        </div>
                                
                                </td>
                                <td>
                                        {!! Form::text('hiv_test_date', old('hiv_test_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                                        <p class="help-block"></p>
                                        @if($errors->has('hiv_test_date'))
                                            <p class="help-block">
                                                {{ $errors->first('hiv_test_date') }}
                                            </p>
                                        @endif
                                </td>
                        </tr>

                        <tr>
                                <td>
                                    CPT
                                </td>
                                <td>
                                </td>
                                <td>
                                        {!! Form::text('cpt', old('cpt'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                                        <p class="help-block"></p>
                                        @if($errors->has('cpt'))
                                            <p class="help-block">
                                                {{ $errors->first('cpt') }}
                                            </p>
                                        @endif
                                </td>
                        </tr>
                        <tr>
                                <td>
                                    ART
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                        {!! Form::text('art', old('art'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                                        <p class="help-block"></p>
                                        @if($errors->has('art'))
                                            <p class="help-block">
                                                {{ $errors->first('art') }}
                                            </p>
                                        @endif
                                </td>
                        
                        </tr>
                        </tbody>
                    </table>
                    



                </div>

                <div class="col-sm-4 bg-success text-right">
                            {!! Form::label('outcome', 'Treatment Outcome'.'', ['class' => 'control-label']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('outcome'))
                                <p class="help-block">
                                    {{ $errors->first('outcome') }}
                                </p>
                            @endif
                            <div>
                                <label>
                                Cure
                                    {!! Form::radio('outcome', '1', false, []) !!}
                                  
                                </label>
                            </div>
                            <div>
                                <label>
                                Completed
                                    {!! Form::radio('outcome', '2', false, []) !!}
                                  
                                </label>
                            </div>
                            <div>
                                <label>
                                      Died
                                    {!! Form::radio('outcome', '3', false, []) !!}
                                 
                                </label>
                            </div>
                            <div>
                                <label>
                                 Failure
                                    {!! Form::radio('outcome', '4', false, []) !!}
                                  
                                </label>
                            </div>
                            <div>
                                <label>
                                      LFU
                                    {!! Form::radio('outcome', '5', false, []) !!}
                                 
                                </label>
                            </div>
                            <div>
                                <label>
                                    Not Evaluated
                                    {!! Form::radio('outcome', '6', false, []) !!}
                                
                                </label>
                            </div>
                            <div>
                                <label>
                                Move to 2nd line drug
                                    {!! Form::radio('outcome', '7', false, []) !!}
                                  
                                </label>
                            </div>
                  
                
                
                </div>



            </div>  
        <!-- continuation phase -->
         
           
            
    </div>
</div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-lg btn-success']) !!}
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

    <script>
    $(document).ready(function(){

        $("#dob").change(function(){
           var value = $("#dob").val();
            var dob = new Date(value);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            if(isNaN(age)) {

            // will set 0 when value will be NaN
             age=0;

            }
            else{
              age=age;
            }
            $('#age').val(age);

        });

    });
    </script>
    

            
@stop