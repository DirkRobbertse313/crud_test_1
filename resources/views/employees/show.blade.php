@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Employee Details</h2>
  <div class="card">
    <div class="card-header">
      {{ $employee->first_name }} {{ $employee->last_name }}
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>First Name</th>
          <td>{{ $employee->first_name }}</td>
        </tr>
        <tr>
          <th>Last Name</th>
          <td>{{ $employee->last_name }}</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{{ $employee->email }}</td>
        </tr>
        <tr>
          <th>Phone</th>
          <td>{{ $employee->phone }}</td>
        </tr>
        <tr>
          <th>Address</th>
          <td>{{ $employee->address }}</td>
        </tr>
        <tr>
          <th>City</th>
          <td>{{ $employee->city }}</td>
        </tr>
        <tr>
          <th>State</th>
          <td>{{ $employee->state }}</td>
        </tr>
        <tr>
          <th>Country</th>
          <td>{{ $employee->country }}</td>
        </tr>
        <tr>
          <th>Postal Code</th>
          <td>{{ $employee->postal_code }}</td>
        </tr>
        <tr>
          <th>Date of Birth</th>
          <td>{{ $employee->date_of_birth }}</td>
        </tr>
        <tr>
          <th>Date Hired</th>
          <td>{{ $employee->date_hired }}</td>
        </tr>
        <tr>
          <th>Position</th>
          <td>{{ $employee->position }}</td>
        </tr>
        <tr>
          <th>Salary</th>
          <td>{{ $employee->salary }}</td>
        </tr>
      </table>
      <a href="{{ route('employee.index') }}" class="btn btn-secondary">Back</a>
      <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
      <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
