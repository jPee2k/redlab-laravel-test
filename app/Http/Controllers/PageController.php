<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $staff = Employee::orderBy('id')->paginate(7);

        return view('page.index', compact('staff', 'departments'));
    }
}
