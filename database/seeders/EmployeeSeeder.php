<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Department;
use Faker\Factory;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory()->count(25)->create()
            ->each(function ($employee) {
                $department = Department::find(rand(1, 5));
                $employee->departments()->save($department);
            });
    }
}
