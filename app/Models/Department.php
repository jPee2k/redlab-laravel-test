<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $touches = ['employees'];

    public function employees()
    {
        return $this->belongsToMany(
            Employee::class,
            'department_staff',
            'department_id',
            'employee_id'
        );
    }

    public function getMaxSalary()
    {
        $ids = $this->getIDsForUniversalStaff();

        return $this->employees()
            ->whereNotIn('employee_id', $ids)
            ->max('salary');
    }

    public function getIDsForUniversalStaff()
    {
        return DB::table('department_staff')->distinct('employee_id')->groupBy('employee_id')
            ->havingRaw('count(department_id) > ?', [1])->select('employee_id');
    }
}
