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
               
                {!! Form::text('year', $year, ['class' => 'form-control date', 'placeholder' => '']) !!}
                <p></p>
                {!! Form::select('quarter',array(1=>'Q 1', 2=>'Q 2', 3=>'Q 3', 4=>'Q 4'), $q, ['class' => 'form-control', 'placeholder' => 'Annual']) !!}
               <p></p>
                <button type='submit' class='btn btn-sm btn-primary'><i class="fa fa-filter"></i> Filter</button>  
                
                </form>
                </div>
            </td>
            <td colspan=6> 
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
                <td>pulmonary Bact Confirm</td>
                <td>{{ $pb_n_m}} </td> <td>{{ $pb_n_f}} </td>  
                <td>{{ $pb_r_m}} </td><td>{{ $pb_r_f}}</td> 
                <td>{{ $pb_p_m}} </td><td>{{ $pb_p_f}} </td>   
                <td>{{ $pb_u_m}} </td><td>{{ $pb_u_f}} </td>  
                <td> {{$pb_m}} </td><td>{{$pb_f}} </td>  
                <td> {{count($pb)}} </td>
            </tr>

            <tr>
                <td>pulmonary Clinically Diagnosed</td>
                <td>{{ $pc_n_m}} </td> <td>{{ $pc_n_f}} </td>  
                <td>{{ $pc_r_m}} </td><td>{{ $pc_r_f}}</td> 
                <td>{{ $pc_p_m}} </td><td>{{ $pc_p_f}} </td>   
                <td>{{ $pc_u_m}} </td><td>{{ $pc_u_f}} </td>  
                <td> {{$pc_m}} </td><td>{{$pc_f}} </td>  
                <td> {{count($pc)}} </td>
            </tr>

      
            <tr>
                <td>EP Bact Confirm</td>
                <td>{{ $eb_n_m}} </td> <td>{{ $eb_n_f}} </td>  
                <td>{{ $eb_r_m}} </td><td>{{ $eb_r_f}}</td> 
                <td>{{ $eb_p_m}} </td><td>{{ $eb_p_f}} </td>   
                <td>{{ $eb_u_m}} </td><td>{{ $eb_u_f}} </td>  
                <td> {{$eb_m}} </td><td>{{$eb_f}} </td>  
                <td> {{count($eb)}} </td>
            </tr>

            <tr>
                <td>pulmonary Clinically Diagnosed</td>
                <td>{{ $ec_n_m}} </td> <td>{{ $ec_n_f}} </td>  
                <td>{{ $ec_r_m}} </td><td>{{ $ec_r_f}}</td> 
                <td>{{ $ec_p_m}} </td><td>{{ $ec_p_f}} </td>   
                <td>{{ $ec_u_m}} </td><td>{{ $ec_u_f}} </td>  
                <td> {{$ec_m}} </td><td>{{$ec_f}} </td>  
                <td> {{count($ec)}} </td>
            </tr>

          
          

    </tbody>
</table>
<!-- block 2 -->
<table  class="table table-bordered">
    <thead>
        <tr> <td>Block 2: </td></tr>
        <tr class='bg-success text-centered'>
           <th> Age </th>
           <th colspan=2 > 0-4 </th>
           <th colspan=2 > 5-9 </th>
           <th colspan=2 > 10-14 </th>
           <th colspan=2 > 15-24 </th>
           <th colspan=2 > 25-34 </th>
           <th colspan=2 > 35-44 </th>
           <th colspan=2 > 45-54 </th>
           <th colspan=2 > 55-64 </th>
           <th colspan=2 > >65 </th>
           <th colspan=2 > Total </th>
           <th rowspan=2 class='mb-2' >Grand Total</th>
        </tr>
        <tr class='bg-success text-centered'>
           <th>Type</th>
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
            <td>
            New
            </td>
            <td>{{ $n_04_m }} </td>    <td>{{ $n_04_f }} </td>
            <td>{{ $n_59_m }} </td>    <td>{{ $n_59_f }} </td>
            <td>{{ $n_1014_m }} </td>  <td>{{$n_1014_f }} </td>
            <td>{{ $n_1524_m }} </td>  <td>{{ $n_1524_f }} </td>
            <td>{{ $n_2534_m }} </td>  <td>{{ $n_2534_f }} </td>
            <td>{{ $n_3544_m }} </td>  <td>{{ $n_3544_f }} </td>
            <td>{{ $n_4554_m }} </td>  <td>{{ $n_4554_f }} </td>
            <td>{{ $n_5564_m }} </td>  <td>{{ $n_5564_f }} </td>
            <td>{{ $n_65_m }} </td>    <td>{{ $n_65_f }} </td>
            <td>{{ count($n_m) }} </td>       <td>{{ count($n_f) }} </td>
            <td>{{ count($n) }} </td>  
        </tr>
        <tr>
            <td>
            Relapse
            </td>
            <td>{{ $r_04_m }} </td>    <td>{{ $r_04_f }} </td>
            <td>{{ $r_59_m }} </td>    <td>{{ $r_59_f }} </td>
            <td>{{ $r_1014_m }} </td>  <td>{{$r_1014_f }} </td>
            <td>{{ $r_1524_m }} </td>  <td>{{ $r_1524_f }} </td>
            <td>{{ $r_2534_m }} </td>  <td>{{ $r_2534_f }} </td>
            <td>{{ $r_3544_m }} </td>  <td>{{ $r_3544_f }} </td>
            <td>{{ $r_4554_m }} </td>  <td>{{ $r_4554_f }} </td>
            <td>{{ $r_5564_m }} </td>  <td>{{ $r_5564_f }} </td>
            <td>{{ $r_65_m }} </td>    <td>{{ $r_65_f }} </td>
            <td>{{ count($r_m) }} </td>       <td>{{ count($r_f) }} </td>
            <td>{{ count($r) }} </td>  
        </tr>
            <td>Total</td>
            <td>{{ $n_04_m + $r_04_m}} </td>    <td>{{ $n_04_f }} </td>
            <td>{{ $n_59_m +  $r_59_m }} </td>    <td>{{ $n_59_f }} </td>
            <td>{{ $n_1014_m +  $r_1014_m }} </td>  <td>{{$n_1014_f }} </td>
            <td>{{ $n_1524_m + $r_1524_m }} </td>  <td>{{ $n_1524_f }} </td>
            <td>{{ $n_2534_m + $r_2534_m }} </td>  <td>{{ $n_2534_f }} </td>
            <td>{{ $n_3544_m +  $r_3544_m }} </td>  <td>{{ $n_3544_f }} </td>
            <td>{{ $n_4554_m +  $r_4554_m }} </td>  <td>{{ $n_4554_f }} </td>
            <td>{{ $n_5564_m +  $r_5564_m }} </td>  <td>{{ $n_5564_f }} </td>
            <td>{{ $n_65_m  + $r_65_m}} </td>    <td>{{ $n_65_f + $r_65_f}} </td>
            <td>{{ count($n_m) + count($r_m) }} </td>       <td>{{ count($n_f) + count($r_f) }} </td>
            <td>{{ count($n) +  count($r) }} {{count($nr)}} </td>  
         
        <tr>
            <td>
           Total
            </td>
        </tr>

<!-- preview -->
        <tr class="bg-warning"><td>detail</td></tr>


        {{  $no=1}}
    @foreach ($n_2534 as $pt)

            <tr>
           <td> {{ $no++ }} </td>

           <td>
             {{ ($pt->age) }} 
           </td>
          
          
            </tr>
            @endforeach
            
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
                format: "YYYY",
                locale: "{{ App::getLocale() }}",
            });
            
        });
    </script>
            
@stop