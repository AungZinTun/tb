<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public function index() 
    {
        $events = []; 

        foreach (\App\Patient::all() as $patient) { 
           $crudFieldValue = $patient->getOriginal('txt_start_date'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $patient->name; 
           $prefix         = ''; 
           $suffix         = 'Start'; 
           $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
           $events[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'url'   => route('admin.patients.edit', $patient->id)
           ]; 
        } 


       return view('admin.calendar' , compact('events')); 
    }

}
