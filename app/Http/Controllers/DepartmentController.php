<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $depts = Department::all();
        return view('departments.index', ["depts" => $depts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'phone' => 'required',
                'location' => 'required'
            ],
            [
                'name.required' => 'Please Enter Department Name',
                'description.required' => 'Please Enter Description',
                'phone.required' => 'Please Enter Office Phone',
                'location' => 'Please Enter Department Location',
            ]
        );

        Department::create($request->except('_token'));
        return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dept = Department::find($id);
        return view('departments.view', ['dept' => $dept]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department = Department::find($id);
        return view('departments.edit', ['department' => $department]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $dept = Department::find($id);

        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'phone' => 'required',
                'location' => 'required'
            ],
            [
                'name.required' => 'Please Enter Department Name',
                'description.required' => 'Please Enter Description',
                'phone.required' => 'Please Enter Office Phone',
                'location' => 'Please Enter Department Location',
            ]
        );

        $dept->update($request->except('_token'));
        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Department::destroy($id);
        return redirect()->route('departments.index');
    }
}
