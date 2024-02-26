<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::all();
        return view('index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = Department::all();
        return view('create', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $department = Department::findOrFail($request->department_id);

        // $department->employee()->create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'designation' => $request->designation,
        // ]);


        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->designation = $request->designation;

        $department->employee()->save($employee);

        return redirect('employee/employee')->with('message', 'Employee Added');
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
        $department = Department::all();
        $employee = Employee::findOrFail($id);
        return view('edit_employee', compact('employee', 'department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->designation = $request->designation;
        $employee->department_id = $request->department_id; // Update the department

        $employee->save();


        return redirect('employee/employee')->with('message', 'Employee Updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->back()->with('message', 'Employee deleted successfully.');
    }
}
