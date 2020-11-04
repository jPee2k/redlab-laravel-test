<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function staff()
    {
        return $this->belongsToMany(
            Employee::class,
            'department_staff',
            'department_id',
            'employee_id'
        );
    }
}
