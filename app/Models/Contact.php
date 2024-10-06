<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['employee_id', 'phone_number', 'email', 'linkedin', 'workplace_profile'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
