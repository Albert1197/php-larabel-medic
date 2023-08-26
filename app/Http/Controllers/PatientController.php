<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    //va a recibir los pacients
    public function index(){
        $patients = Patient::all();
        return $patients;
    }

    //eloquent
    public function store(Request $request){
    
        $patient = Patient::create($request->all());
        return response()->json($patient,201);


    }

    public function update(Request $request,string $id){
        //Laravel 8 o menor
       /* 
        $patient = Patient::findOrFail($id);
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->num_afi = $request->num_afi;
        $patient->address = $request->adress;

        $patient->save(); */

        $patient = Patient::findOrFail($id);
        $patient->update($request->all());
        return response()->json($patient,200);
    }

    
}
