@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Create Employee</h2>
  <form action="{{ route('employee.store') }}" method="POST" class="row g-3">
    @csrf
    <div class="col-md-6">
      <label for="first_name" class="form-label">
        First Name
      </label>

      <input type="text" class="form-control" id="first_name" name="first_name" required>
    </div>
    <div class="col-md-6">
      <label for="last_name" class="form-label">
        Last Name
      </label>
      <input type="text" class="form-control" id="last_name" name="last_name" required>
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">
        Email
      </label>

      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="col-md-6">
      <label for="phone" class="form-label">
        Phone
      </label>

      <input type="text" class="form-control" id="phone" name="phone">
    </div>
    <div class="col-md-6">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="col-md-6">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" id="city" name="city">
    </div>
    <div class="col-md-4">
      <label for="state" class="form-label">State</label>
      <input type="text" class="form-control" id="state" name="state">
    </div>
    <div class="col-md-4">
      <label for="country" class="form-label">Country</label>
      <input type="text" class="form-control" id="country" name="country">
    </div>
    <div class="col-md-4">
      <label for="postal_code" class="form-label">Postal Code</label>
      <input type="text" class="form-control" id="postal_code" name="postal_code">
    </div>
    <div class="col-md-4">
      <label for="date_of_birth" class="form-label">Date of Birth</label>
      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
    </div>
    <div class="col-md-4">
      <label for="date_hired" class="form-label">Date Hired</label>
      <input type="date" class="form-control" id="date_hired" name="date_hired">
    </div>
    <div class="col-md-4">
      <label for="position" class="form-label">Position</label>
      <input type="text" class="form-control" id="position" name="position">
    </div>
    <div class="col-md-4">
      <label for="salary" class="form-label">Salary</label>
      <input type="number" step="0.01" class="form-control" id="salary" name="salary">
    </div>

    <div class="col-12 d-flex justify-content-end">
      <button type="submit" class="btn btn-primary mx-2">Submit</button>
    </div>
  </form>
  <div class="col-12 d-flex justify-content-start">
    <a href="{{ route('employee.index') }}" class="btn btn-secondary mx-2">Back</a>
  </div>
</div>
@endsection
