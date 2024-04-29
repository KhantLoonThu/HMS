<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docs = Doctor::with('department')->get();
        return view('doctors.index', ['docs' => $docs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('doctors.create', ['departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'specialization' => 'required',
                'department_id' => 'required',
            ],
            [
                'name.required' => 'Please Enter Doctor\'s name',
                'email.required' => 'Please Enter Doctor\'s email',
                'phone.required' => 'Please Enter Doctor\'s phone',
                'specialization.required' => 'Please Enter Doctor\'s specialization',
                'department_id.required' => 'Please Enter Doctor\'s department',
            ]
        );

        Doctor::create($request->except('_token'));
        return redirect()->route('doctors.index');
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
        Doctor::destroy($id);
        return redirect()->route('doctors.index');
    }
}
