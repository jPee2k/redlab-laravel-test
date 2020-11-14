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
                $departments = Department::inRandomOrder()->take(mt_rand(1, random_int(1, 3)))->get();
                $employee->departments()->sync($departments);
            });
    }
}
