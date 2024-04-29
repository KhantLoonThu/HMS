<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', ['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'age' => 'required',
                'phone' => 'required',
                'address' => 'required',
            ],
            [
                'name.required' => 'Please fill patient\'s name',
                'age.required' => 'Please fill patient\'s age',
                'phone.required' => 'Please fill patient\'s phone number',
                'address.required' => 'Please fill patient\'s address',
            ]
        );

        Patient::create($request->except('_token'));
        return redirect()->route('patients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::find($id);
        return view('patients.view', ['patient' => $patient]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = Patient::find($id);
        return view('patients.edit', ['patient' => $patient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $patient = Patient::find($id);

        $request->validate(
            [
                'name' => 'required',
                'age' => 'required',
                'phone' => 'required',
                'address' => 'required',
            ],
            [
                'name.required' => 'Please fill patient\'s name',
                'age.required' => 'Please fill patient\'s age',
                'phone.required' => 'Please fill patient\'s phone number',
                'address.required' => 'Please fill patient\'s address',
            ]
        );

        $patient->update($request->except('_token'));
        return redirect()->route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Patient::destroy($id);
        return redirect()->route('patients.index');
    }
}
