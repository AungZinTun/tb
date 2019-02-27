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
            {{ count($pb) }}
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
          

    </tbody>
</table>
<!-- block 2 -->
<table  class="table table-bordered">
    <thead>
       
            
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