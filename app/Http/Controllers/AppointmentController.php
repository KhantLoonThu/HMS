<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('appointments.create', ['doctors' => $doctors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'age' => 'required|numeric',
                'phone' => 'required',
                'address' => 'required',
                'date1' => 'required',
                'time1' => 'required',
                // 'file' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048'
            ]
        );

        $patient = Patient::create(
            [
                'name' => $request->name,
                'age' => $request->age,
                'phone' => $request->phone,
                'address' => $request->address,
                'gender' => $request->gender,
            ]
        );
        $patient_id = $patient->id;

        $appointment = Appointment::create(
            [
                'patient_id' => $patient_id,
                'doctor_id' => $request->doctor,
                'date1' => $request->date1,
                'time1' => $request->time1,
                'date2' => $request->date2,
                'time2' => $request->time2,
                'diagnosis' => $request->diagnosis,
                'file' => $request->file,
            ]
        );

        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
