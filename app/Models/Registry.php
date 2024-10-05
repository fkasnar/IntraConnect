<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
    use HasFactory;

    protected $fillable = ['registration_number', 'model', 'employee_id'];

    //Relationship with employee
    public function registry()
    {
        return $this->belongsTo(Employee::class);
    }

    //Relationship with 
}
