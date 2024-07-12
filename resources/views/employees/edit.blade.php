@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Edit Employee</h2>
  <form action="{{ route('employee.update', $employee->id) }}" method="POST" class="row g-3">
    @csrf
    @method('PUT')
    <div class="col-md-6">
      <label for="first_name" class="form-label">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $employee->first_name) }}" required>
    </div>
    <div class="col-md-6">
      <label for="last_name" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $employee->last_name) }}" required>
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $employee->email) }}" required>
    </div>
    <div class="col-md-6">
      <label for="phone" class="form-label">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $employee->phone) }}">
    </div>
    <div class="col-md-6">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $employee->address) }}">
    </div>
    <div class="col-md-6">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $employee->city) }}">
    </div>
    <div class="col-md-4">
      <label for="state" class="form-label">State</label>
      <input type="text" class="form-control" id="state" name="state" value="{{ old('state', $employee->state) }}">
    </div>
    <div class="col-md-4">
      <label for="country" class="form-label">Country</label>
      <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $employee->country) }}">
    </div>
    <div class="col-md-4">
      <label for="postal_code" class="form-label">Postal Code</label>
      <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ old('postal_code', $employee->postal_code) }}">
    </div>
    <div class="col-md-4">
      <label for="date_of_birth" class="form-label">Date of Birth</label>
      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $employee->date_of_birth) }}">
    </div>
    <div class="col-md-4">
      <label for="date_hired" class="form-label">Date Hired</label>
      <input type="date" class="form-control" id="date_hired" name="date_hired" value="{{ old('date_hired', $employee->date_hired) }}">
    </div>
    <div class="col-md-4">
      <label for="position" class="form-label">Position</label>
      <input type="text" class="form-control" id="position" name="position" value="{{ old('position', $employee->position) }}">
    </div>
    <div class="col-md-4">
      <label for="salary" class="form-label">Salary</label>
      <input type="number" step="0.01" class="form-control" id="salary" name="salary" value="{{ old('salary', $employee->salary) }}">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
    <div class="col-12 d-flex justify-content-start">
      <a href="{{ route('employee.index') }}" class="btn btn-secondary mx-2">Back</a>
    </div>
  </form>
</div>

@endsection
