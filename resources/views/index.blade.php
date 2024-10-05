@extends('layouts.app')

@section('content')
    <h1>Registry</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Employee Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Registration Number</th>
                <th>Model</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registry as $car)
                <tr>
                    <td>{{ $car->employee->first_name }} {{ $car->employee->last_name }}</td>
                    <td>{{ $car->employee->contact->phone_number }}</td>
                    <td>{{ $car->employee->contact->email }}</td>
                    <td>{{ $car->registration_number }}</td>
                    <td>{{ $car->model }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
