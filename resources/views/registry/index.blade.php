@extends('layouts.app')

@section('content')
<div class="container" style="background-color: white; padding-left:auto">
    <h1>Find by Registration ID</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Position</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Car Registration</th>
                <th>Car Model</th> <!-- New column for Car Model -->
            </tr>
        </thead>
        <tbody>
            @foreach ($registry as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ optional($employee->position)->title }}</td>
                    <td>{{ optional($employee->contact)->phone_number }}</td>
                    <td>{{ optional($employee->contact)->email }}</td>
                    <td>{{ optional($employee->companyCar)->registration_number }}</td>
                    <td>{{ optional($employee->companyCar)->model }}</td> <!-- Displaying Car Model -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
