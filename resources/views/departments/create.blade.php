@extends('layouts.master')
@section('content')
    <section class="container">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mt-4">
                <h2>Add New Department</h2>
                <a href="{{ route('departments.index') }}" class="btn btn-info">Back to List</a>
            </div>
            <div class="col-md-10 mx-auto py-5">
                <form method="POST" action="{{ route('departments.store') }}">
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
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control">
                        <span class="text-danger mt-2">
                            @error('description')
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
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control">
                        <span class="text-danger mt-2">
                            @error('location')
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
