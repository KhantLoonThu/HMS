@extends('layouts.master')
@section('content')
    <section class="container">
        <a href="{{ route('departments.index') }}" class="btn btn-info my-2">Back to List</a>
        <div class="row mt-5">
            <div class="col-md-3 mb-5">
                <div class="card" id="{{ $dept->id }}">
                    <div class="card-header">
                        <h4 class="my-4 text-center"> {{ $dept->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="my-2 d-flex justify-content-between">
                            <p>
                                Description :
                            </p>
                            <p class="text-end">{{ $dept->description }}</p>
                        </div>
                        <div class="my-2 d-flex justify-content-between">
                            <p>Phone :</p>
                            <p class="text-end">{{ $dept->phone }}</p>
                        </div>
                        <div class="my-2 d-flex justify-content-between">
                            <p>Location :</p>
                            <p class="text-end">{{ $dept->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
