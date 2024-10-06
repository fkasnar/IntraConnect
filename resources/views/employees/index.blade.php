@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'Employees List') <!-- Set the page title -->

@section('content') <!-- Define the content section -->



<div class="container" style="background-color: white; padding-left:auto">
    <h2>Employees List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Department</th>
                <th>Phone Number</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                    <td>{{ $employee->position->title ?? 'N/A' }}</td>
                    <td>{{ $employee->position->department->name ?? 'N/A' }}</td>
                    <td>{{ $employee->contact->phone_number ?? 'N/A' }}</td>
                    <td>{{ $employee->contact->email ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection