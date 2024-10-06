<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyCar extends Model
{
    protected $fillable = ['employee_id', 'registration_number', 'model'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
