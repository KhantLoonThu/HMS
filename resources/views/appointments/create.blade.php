@extends('layouts.master')
@section('content')
    <section class="container">
        <div class="row">

            <div class="col-md-10 mx-auto py-5">
                <form method="POST" action="{{ route('appointments.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row my-2 border border-2 border-info p-5">
                        <h2 class="mb-3">Patient Information</h2>
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                                <span class="text-danger mt-2">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" name="age" id="age" class="form-control">
                                <span class="text-danger mt-2">
                                    @error('age')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="my-2">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control">
                                <span class="text-danger mt-2">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="my-2">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                                <span class="text-danger mt-2">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="my-2">
                                <label for="gender" class="form-label">Gender</label> <br>
                                <input type="radio" name="gender" id="gender" class="form-check-input" value="male"
                                    checked>
                                Male
                                <input type="radio" name="gender" id="gender" class="form-check-input ms-2"
                                    value="female">
                                Female
                                <span class="text-danger mt-2">
                                    @error('gender')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5 mb-2 border border-2 border-info p-5">
                        <h2 class="mb-3">Appointment Date and Time</h2>
                        <div class="col-md-4 my-3">
                            <label for="" class="form-label">Doctors</label>
                            <select name="doctor" id="" class="form-select">
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 my-3">
                            <label for="" class="form-label">Preferred Date And Time1</label>
                            <input type="date" class="form-control" name="date1">
                            <input type="time" class="form-control mt-3" name="time1">
                        </div>
                        <div class="col-md-4 my-3">
                            <label for="" class="form-label">Preferred Date And Time2</label>
                            <input type="date" class="form-control" name="date2">
                            <input type="time" class="form-control mt-3" name="time2">
                        </div>
                        <div class="col-md-4 my-3">
                            <label for="" class="form-label">Diagnosis</label>
                            <input type="text" class="form-control" name="diagnosis">
                        </div>
                        <div class="col-md-4 my-3">
                            <label for="" class="form-label">File</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                    </div>


                    <div class="my-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>



        </div>
    </section>
@endsection
