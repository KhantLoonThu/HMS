@extends('layouts.master')
@section('content')
    <section class="container">
        <div class="row my-2">
            <h2>Patients Info</h2>
        </div>
        <div class="my-2">
            <a href="{{ route('patients.create') }}" class="btn btn-info">Add New Patient</a>
        </div>
        <div class="row my-4">
            <div class="col-md-12 mx-auto">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->age }}</td>
                                <td>{{ $patient->phone }}</td>
                                <td>{{ $patient->address }}</td>
                                <td>{{ $patient->gender }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('patients.show', ['patient' => $patient->id]) }}"
                                        class="btn btn-info me-3">Details</a>
                                    <a href="{{ route('patients.edit', ['patient' => $patient->id]) }}"
                                        class="btn btn-warning me-3">Edit</a>
                                    <form action="{{ route('patients.destroy', ['patient' => $patient->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger me-3">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
