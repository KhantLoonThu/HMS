@extends('layouts.master')
@section('content')
    <section class="container">
        <div class="row my-2">
            <h2>Department Info</h2>
        </div>
        <div class="my-2">
            <a href="{{ route('departments.create') }}" class="btn btn-info">Add New Department</a>
        </div>
        <div class="row my-4">
            <div class="col-md-12 mx-auto">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($depts as $dept)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dept['name'] }}</td>
                                <td>{{ $dept['description'] }}</td>
                                <td>{{ $dept['phone'] }}</td>
                                <td>{{ $dept['location'] }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('departments.show', $dept->id) }}"
                                        class="btn btn-info me-3">Details</a>
                                    <a href="{{ route('departments.edit', $dept->id) }}"
                                        class="btn btn-warning me-3">Edit</a>
                                    {{-- I dont understand why I am using form for delete  --}}
                                    <form action="{{ route('departments.destroy', $dept->id) }}" method="POST">
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
