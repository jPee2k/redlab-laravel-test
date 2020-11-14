<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $staff = Employee::orderBy('id')->paginate(7);
        $departments = Department::all();

        return view('page.index', compact('staff', 'departments'));
    }
}
