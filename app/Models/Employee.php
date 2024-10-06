<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['first_name', 'last_name', 'position_id', 'profile_picture'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function companyCar()
    {
        return $this->hasOne(CompanyCar::class);
    }
}
