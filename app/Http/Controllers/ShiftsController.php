<?php

namespace App\Http\Controllers;


use App\Models\Shift;
use App\Models\Patient;
use Illuminate\Http\Request;

class ShiftsController extends Controller
{
    
    public function index(){
        $shifts = Shift::all();
        return $shifts;
    }

    public function store(Request $request){
        $shift = Shift::create($request->all());
        return response()->json($shift,201);
    }

    public function update(Request $request, string $id){
        $shift = Shift::findOrFail($id);
        $shift->update($request->all());
        return response()->json($shift,200);
    }

    public function showAll(){
        //Eloquent
        $shifts = Patient::with('Shift')->get();
        return $shifts;

        //QueryBuilder
        /*
            $patients = DB::table('patients')->get();

            forearch($patients as $patient){
                $patient->shifts = DB::table('shifts')
                ->where('patient_id',$patient->id)
                ->get()
            }
        */
    }


}


