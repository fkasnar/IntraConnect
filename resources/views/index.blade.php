<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IntraConnect - Home</title>
</head>
<body>
    <h1>Welcome to IntraConnect</h1>
    <p>Your go-to application for employee contact information.</p>
</body>
</html>
>>>>>>> 4d19dab (setting up environment)
