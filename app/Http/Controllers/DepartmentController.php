<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Department::all();
        return view('department.index', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("department.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Department::create([
            "name" => $request->name
        ]);
        return redirect('employee/department')->with("message", "Department Added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $employee = Employee::all();
        $department = Department::findOrFail($id);
        return view('department.edit_dept', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $department = Department::findOrFail($id);
        $department->name = $request->name;
        // $department->department_id = $request->department_id;
        $department->save();

        // $departmentEmployees = Employee::where('department_id', $id)->get();
        // foreach ($departmentEmployees as $employee) {
        //     $employee->department_id = $department->id;
        //     $employee->save();
        // }
        return redirect('employee/department')->with('message', 'Department Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $employee = Employee::findOrFail($id);
        // $employee->delete();

        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->back()->with("message", "Department Deleted");
    }
}
