@extends('layouts.app')

@section('content')


<div class="container-fluid">
  <h2>Employees</h2>
  <div class="d-flex justify-content-end mb-3">
    <a href="{{ route('employee.create') }}" class="btn btn-success">Create Employee</a>
  </div>
  @if (!empty($employee) && count($employee) > 0)
  @else
  <div class="alert alert-danger" role="alert">
    No Employees Found <a href="{{ route('employee.create') }}" class="alert-link">Add Employee</a>.
  </div>
  @endif
  <table class="table">
    <thead>
      <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Postal Code</th>
        <th>Country</th>
        <th>Date of Birth</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Date Hired</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($employee as $employee)
      <tr class="border-rounded">
        <td>{{ $employee->id }}</td>
        <td>{{ $employee->first_name }}</td>
        <td>{{ $employee->last_name }}</td>
        <td>{{ $employee->email }}</td>
        <td>{{ $employee->phone }}</td>
        <td>{{ $employee->address }}</td>
        <td>{{ $employee->city }}</td>
        <td>{{ $employee->state }}</td>
        <td>{{ $employee->postal_code }}</td>
        <td>{{ $employee->country }}</td>
        <td>{{ $employee->date_of_birth }}</td>
        <td>{{ $employee->position }}</td>
        <td>{{ $employee->salary }}</td>
        <td>{{ $employee->date_hired }}</td>
        <td>
          <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-primary btn-sm">Show</a>
          <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@if (session('success'))
<div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Please fix the following errors:<br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@endsection
