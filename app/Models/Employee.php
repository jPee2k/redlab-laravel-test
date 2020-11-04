<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'staff';

    public function departments()
    {
        return $this->belongsToMany(
            Department::class,
            'department_staff',
            'employee_id',
            'department_id'
        );
    }
}
