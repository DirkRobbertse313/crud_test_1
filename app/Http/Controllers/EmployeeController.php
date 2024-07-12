<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\Employee\StoreEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::Latest()->get();

        return view('employees.index',
            [
                'employee' => $employee,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $sanitized = $request->validated();

        Employee::create($sanitized);

        return redirect()
            ->route('employee.index')
            ->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show',
            [
                'employee' => $employee
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit',
            [
                'employee' => $employee,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $sanitized = $request->validated();

        if($employee->update($sanitized)) {
            return redirect()
                ->route('employee.index')
                ->with('success', 'Employee updated successfully.');
        }else {
            return redirect()
            ->back()
            ->with('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        if($employee->delete()) {
            return redirect()
                ->route('employee.index')
                ->with('success', 'Employee deleted successfully.');
        }else {
            return redirect()
            ->back()
            ->with('error', 'Something went wrong');
        }
    }
}
