<?php
namespace App\Http\Controllers;

use App\Models\Employee; // Assuming Employee model is the main model for registry
use Illuminate\Http\Request;

class RegistryController extends Controller
{
    public function index()
    {
        // Fetch all employees with their registration and contact
        $registry = Employee::with(['position', 'contact', 'companyCar'])->get();

        // Pass the data to the view
        return view('registry.index', compact('registry'));
    }
}
