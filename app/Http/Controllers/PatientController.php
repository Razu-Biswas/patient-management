<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function index() {
        $patients = Patient::latest()->get();
        return view('patients.index', compact('patients'));
    }


    public function create() {
        return view('patients.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'=>'required',
            'age'=>'required|numeric',
            'gender'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'disease'=>'required',
            'admission_date'=>'required|date'
        ]);

        Patient::create($validated);
        return redirect()->route('patients.index')->with('success','Patient added successfully');
    }

    public function edit(Patient $patient) {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient) {
        $validated = $request->validate([
            'name'=>'required',
            'age'=>'required|numeric',
            'gender'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'disease'=>'required',
            'admission_date'=>'required|date'
        ]);

        $patient->update($validated);
        return redirect()->route('patients.index')->with('success', 'Patient Updated successfully');

    }

    public function destroy(Patient $patient) {
        $patient->delete();
        return redirect()->route('patients.index')->with('success','Deleted successfully');
    }


}
