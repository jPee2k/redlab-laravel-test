<?php

namespace Tests\Feature;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DepartmentControllerTest extends TestCase
{
    public function testIndex()
    {
        $response = $this->get(route('departments.index'));
        $response->assertOk();
    }

    public function testCreate()
    {
        $response = $this->get(route('departments.create'));
        $response->assertOk();
    }

    public function testEdit()
    {
        $department = Department::factory()->create();

        $response = $this->get(route('departments.edit', $department));
        $response->assertOk();
    }

    public function testStore()
    {
        $data = Department::factory()->make()->toArray();

        $response = $this->post(route('departments.store'), $data);
        $response->assertRedirect(route('departments.index'));
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas('departments', $data);
    }

    public function testUpdate()
    {
        $department = Department::factory()->create();
        $data = Department::factory()->make()->toArray();

        $response = $this->patch(route('departments.update', $department), $data);
        $response->assertRedirect(route('departments.index'));
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas('departments', $data);
    }

    public function testCanBeDeleted()
    {
        $department = Department::factory()->create();

        $response = $this->delete(route('departments.destroy', $department));
        $response->assertRedirect(route('departments.index'));
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseMissing('departments', ['id' => $department->id]);
    }

    public function testCanNotBeDeleted()
    {
        $department = Department::factory()->create();
        $employee = Employee::factory()->create();
        $employee->departments()->attach($department);

        $response = $this->delete(route('departments.destroy', $department));
        $response->assertRedirect(route('departments.index'));
        $response->assertSessionHas('warning');
        
        $this->assertDatabaseHas('departments', ['id' => $department->id]);
    }
}
