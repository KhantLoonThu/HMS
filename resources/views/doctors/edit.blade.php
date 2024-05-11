@extends('layouts.master')
@section('content')
    <section class="container">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mt-4">
                <h2>Add New Doctor</h2>
                <a href="{{ route('doctors.index') }}" class="btn btn-info">Back to List</a>
            </div>
            <div class="col-md-10 mx-auto py-5">
                <form method="POST" action="{{ route('doctors.update', $doctor->id) }}">
                    @csrf
                    @method('put')
                    <div class="my-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $doctor->name }}">
                        <span class="text-danger mt-2">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="my-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control"
                            value="{{ $doctor->email }}">
                        <span class="text-danger mt-2">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="my-2">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control"
                            value="{{ $doctor->phone }}">
                        <span class="text-danger mt-2">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="my-2">
                        <label for="specialization" class="form-label">Specialization</label>
                        <input type="text" name="specialization" id="specialization" class="form-control"
                            value="{{ $doctor->specialization }}">
                        <span class="text-danger mt-2">
                            @error('specialization')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="my-2">
                        <label for="department" class="form-label">Department</label>
                        <select name="department_id" id="department" class="form-select">
                            @foreach ($departments as $dept)
                                @if ($doctor->department->id == $dept->id)
                                    <option selected value="{{ $dept->id }}">{{ $dept->name }} </option>
                                @else
                                    <option value="{{ $dept->id }}">{{ $dept->name }} </option>
                                @endif
                            @endforeach
                        </select>
                        <span class="text-danger mt-2">
                            @error('department')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary">Update Doctor</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
