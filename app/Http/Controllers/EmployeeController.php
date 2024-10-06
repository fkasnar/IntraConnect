<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // Fetch all employees with their positions, departments, and contacts
        $employees = Employee::with(['position.department', 'contact'])->get();

        // Pass the data to the view
        return view('employees.index', compact('employees'));
    }
}