@extends('layouts.master')
@section('content')
    <section class="container mt-5">
        <div class="my-5">
            <a href="{{ route('appointments.create') }}" class="btn btn-info">Add New Appointement</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-info">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Patient</th>
                            <th>Doctor</th>
                            <th>Date 1</th>
                            <th>Time 1</th>
                            <th>Date 2</th>
                            <th>Time 2</th>
                            <th>Apporoved</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                            <tr class="tr" id="{{ $appointment->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @foreach ($patients as $patient)
                                        @if ($appointment->patient_id == $patient->id)
                                            {{ $patient->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($doctors as $doctor)
                                        @if ($appointment->doctor_id == $doctor->id)
                                            {{ $doctor->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $appointment->date1 }}</td>
                                <td>{{ $appointment->time1 }}</td>
                                <td>
                                    @if ($appointment->date2 == null)
                                        -
                                    @else
                                        {{ $appointment->date2 }}
                                    @endif
                                </td>
                                <td>
                                    @if ($appointment->time2 == null)
                                        -
                                    @else
                                        {{ $appointment->time2 }}
                                    @endif
                                </td>
                                <td>
                                    @if (!$appointment->approved_by)
                                        {{-- <button class="btn btn-danger approve-btn" --}}
                                        {{-- data-update-url="{{ route('appointments.update', $appointment->id) }}">Approve</button> --}}
                                        <button class="btn btn-danger approve-btn">Approve</button>
                                    @else
                                        <button class="btn btn-success" disabled>Comfirmed</button>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-info me-3">Details</button>
                                    <button class="btn btn-warning me-3">Edit</button>
                                    <button class="btn btn-danger me-3">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script lang="ts">
        const doc = document;
        let num1: number = 1;
        const approveBtns = Array.from(doc.getElementsByClassName('approve-btn'));

        approveBtns.forEach(btn => {
            btn.addEventListener('click', async (event) => {
                let tr = event.currentTarget.parentElement.parentElement.id;
                // let url = event.currentTarget.dataset.updateUrl;
                let url = "{{ route('appointments.update', $appointment->id) }}";
                let data = {
                    id: tr
                };
                try {
                    let response = await fetch(url, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        body: JSON.stringify(data),
                    })
                    if (response.ok) {
                        console.log('Request successful');
                    }
                    console.log(response);
                } catch (error) {
                    console.log('Error: ', error);
                }
            });
        });
    </script>
@endsection
