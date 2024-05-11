@extends('layouts.master')
@section('content')
    <section class="container">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mt-4">
                <h2>Add New Patient</h2>
                <a href="{{ route('patients.index') }}" class="btn btn-info">Back to List</a>
            </div>
            <div class="col-md-10 mx-auto py-5">
                <form method="POST" action="{{ route('patients.store') }}">
                    @csrf
                    <div class="my-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <span class="text-danger mt-2">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="my-2">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" name="age" id="age" class="form-control">
                        <span class="text-danger mt-2">
                            @error('age')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="my-2">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                        <span class="text-danger mt-2">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="my-2">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                        <span class="text-danger mt-2">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="my-2">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" name="gender" id="gender" class="form-control">
                        <span class="text-danger mt-2">
                            @error('gender')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
