<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Http\Requests\StoreEmployee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Employee::with('departments')->orderBy('id', 'desc')->paginate(7);

        return view('employee.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = Employee::make();
        $departments = Department::pluck('name', 'id');

        return view('employee.create', compact('employee', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployee $request)
    {
        $employee = Employee::create($request->validated());

        // add the ids of departments to the department_staff table
        $employee->departments()->attach($request->get('departments'));

        return redirect()->route('staff.index')
            ->with('success', 'Сотрудник успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $departments = Department::pluck('name', 'id');

        return view('employee.edit', compact('employee', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployee $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $employee->update($request->validated());
        $employee->departments()->sync($request->get('departments'));

        return redirect()->route('staff.index')
            ->with('success', 'Данные о сотруднике успешно обновлены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);

        if ($employee) {
            $employee->delete();
        }

        return redirect()->route('staff.index')
            ->with('success', 'Пользователь успешно удален');
    }
}
