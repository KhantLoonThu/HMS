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
        $patients = [];
        $doctors = [];
        $appointments = Appointment::all();
        foreach ($appointments as $appt) {
            $patient = Patient::find($appt->patient_id);
            $doctor = Doctor::find($appt->doctor_id);
            echo ($doctor->name);
            array_push($patients, $patient);
            array_push($doctors, $doctor);
        }
        return view('appointments.index', ['appointments' => $appointments, 'patients' => $patients, 'doctors' => $doctors]);
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
                'file' => 'required|image|mimes:jpeg,jpg,svg|max:2048',
            ],
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
        $imageName = uniqid() . "." . $request->file->extension();
        // $success = $request->file->move(public_path('uploaded'), $imageName);
        $success = $request->file->storeAs('imgs', $imageName);
        if ($success == true) {
            $appointment = Appointment::create(
                [
                    'patient_id' => $patient_id,
                    'doctor_id' => $request->doctor,
                    'date1' => $request->date1,
                    'time1' => $request->time1,
                    'date2' => $request->date2,
                    'time2' => $request->time2,
                    'diagnosis' => $request->diagnosis,
                    'file' => $imageName,
                ]
            );
        }
        // $appointment = new Appointment();
        // $appointment->patient_id = $patient_id;
        // $appointment->doctor_id = $request->doctor;
        // $appointment->date1 = $request->date1;
        // $appointment->time1 = $request->time1;
        // $appointment->date2 = $request->date2;
        // $appointment->time2 = $request->time2;
        // $appointment->diagnosis = $request->diagnosis;
        // $appointment->file = $request->file;
        // $appointment->save();
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
