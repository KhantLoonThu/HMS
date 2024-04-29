@extends('layouts.master')
@section('content')
    <section class="container">
        <a href="{{ route('patients.index') }}" class="btn btn-info my-2">Back to List</a>
        <div class="row mt-5">
            <div class="col-md-3 mb-5">
                <div class="card" id="{{ $patient->id }}">
                    <div class="card-header">
                        <h4 class="my-4 text-center"> {{ $patient->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="my-2 d-flex justify-content-between">
                            <p>
                                Name :
                            </p>
                            <p class="text-end">{{ $patient->name }}</p>
                        </div>
                        <div class="my-2 d-flex justify-content-between">
                            <p>
                                Age :
                            </p>
                            <p class="text-end">{{ $patient->age }}</p>
                        </div>
                        <div class="my-2 d-flex justify-content-between">
                            <p>Phone Number :</p>
                            <p class="text-end">{{ $patient->phone }}</p>
                        </div>
                        <div class="my-2 d-flex justify-content-between">
                            <p>Address :</p>
                            <p class="text-end">{{ $patient->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
