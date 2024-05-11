@extends('layouts.master')
@section('content')
    <section class="container">
        <div class="row my-2">
            <h2>Doctors Info</h2>
        </div>
        <div class="my-2">
            <a href="{{ route('doctors.create') }}" class="btn btn-info">Add New Doctor</a>
        </div>
        <div class="row my-4">
            <div class="col-md-12 mx-auto">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Specialization</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($docs as $doc)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $doc->name }}</td>
                                <td> {{ $doc->email }}</td>
                                <td> {{ $doc->phone }}</td>
                                <td> {{ $doc->specialization }}</td>
                                <td> {{ $doc->department->name }}</td>
                                <td class="d-flex">
                                    <a href="" class="btn btn-info me-3">Details</a>
                                    <a href="{{ route('doctors.edit', $doc->id) }}" class="btn btn-warning me-3">Edit</a>
                                    <form action="{{ route('doctors.destroy', $doc->id) }}" method="POST">
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
