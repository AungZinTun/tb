@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading text-center">
         <h4>   NTP TB07</h4>
        </div>

        <div class="talpanel-body ">
    <table  class="table table-bordered">
       
    <thead >
        <tr>
            <td> Township</td>
            <td colspan=6 > Report Period 
                <div>
                <form action="" method="GET">
                {!! Form::label('from', 'from', ['class' => 'control-label']) !!}
                {!! Form::text('from', $from, ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}    
                {!! Form::label('to', 'to', ['class' => 'control-label']) !!}
                {!! Form::text('to', $to, ['class' => 'form-control date', 'placeholder' => '', ]) !!}  
                <button type='submit'>Filter</button>  
                
                </form>
                </div>
            </td>
            <td colspan=6> Quarter {{$thisQ}}
            @foreach ($patient as $pt)
           {{ $pt->id}}
            @endforeach
             </td>
        </tr>
   
        <tr class="bg-success" > <th colspan=6> Block 1: All Tb Cases Registered During the reporting quarter except Transfer in</th> </tr>
        <tr class="bg-success">
            <th rowspan=3 class='col-sm-3 text-center' >Type of Disease</th>
            <th colspan=2 rowspan=2 class='col-sm-1 text-center'>New</th>
            <th colspan=6 class='text-center'>Retreatment</th>
            <th colspan=2 rowspan=2 class='col-sm-1 text-center'>Total</th>
            <th  rowspan=3  class='col-sm-1 text-center'>Grand Total</th>
        </tr>

        <tr class="bg-success">
           
           <th class="col-xs-1" colspan=2>Relapse</th>
           <th  class="col-xs-1" colspan=2>Previously Treated</th>
           <th  class="col-xs-1" colspan=2>Unknown Previously Treated</th>
         
          
       </tr>

        <tr>
           
            <th>M</th>
            <th>F</th>
            <th>M</th>
            <th>F</th>
            <th>M</th>
            <th>F</th>
            <th>M</th>
            <th>F</th>
            <th>M</th>
            <th>F</th>
   
           
        </tr>
    </thead>
    <tbody>
        
            <tr>
                <td>Pulmanary Bact Confirm</td>
                <td>{{ $pb_n_m}} </td> <td>{{ $pb_n_f}} </td>  
                <td>{{ $pb_r_m}} </td><td>{{ $pb_r_f}}</td> 
                <td>{{ $pb_p_m}} </td><td>{{ $pb_p_f}} </td>   
                <td>{{ $pb_u_m}} </td><td>{{ $pb_u_f}} </td>  
                <td> {{$pb_m}} </td><td>{{$pb_f}} </td>  
                <td> {{count($pb)}} </td>
            </tr>

            <tr>
                <td>Pulmanary Clinical Diagnose</td>
                <td> {{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>
                
                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                

            </tr>
      
            <tr>
                <td>EP Bact Confirm</td>
                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>
                
                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
               

            </tr>

            <tr>
                <td>EP Clinical Diagnose</td>
                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>
                
                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
               
            </tr>

            <tr>
                <td>Total</td>
                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>
                
                <td>{{ $pb_n_m}} </td>
                <td>{{ $pb_n_f}} </td>

                <td>{{ $pb_n_m}} </td>
               

            </tr>
    </tbody>
</table>
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