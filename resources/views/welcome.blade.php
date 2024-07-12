@extends('layouts.app')


@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CRUD Test 1 Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for the welcome page */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to top, #7f0000, #ffffff);
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        .hero-section {
            padding: 100px 0;
            text-align: center;
            color: #fff;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        .btn-get-started {
            font-size: 1.2rem;
            padding: 10px 40px;
            border-radius: 30px;
            transition: background-color 0.3s ease-in-out;
        }
        .btn-get-started:hover {
            background-color: #dc3545; /* Bootstrap danger color */
        }
        .features-section {
            padding: 80px 0;
            background-color: #f8f9fa; /* Bootstrap light gray background */
        }
        .feature-box {
            text-align: center;
            margin-bottom: 40px;
        }
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #dc3545; /* Bootstrap danger color */
        }
        .feature-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .feature-description {
            font-size: 1.2rem;
            color: #666;
        }
        .pattern {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: url('path/to/pattern.png') repeat;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('login') }}">CRUD Test 1 Application</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to CRUD Test 1 Application</h1>
            <a href="{{ route('register') }}" class="btn btn-danger btn-lg btn-get-started">Get Started</a>
        </div>
        <div class="pattern"></div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <div class="feature-title">Create</div>
                        <div class="feature-description">Create a new Employee</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-layers-fill"></i>
                        </div>
                        <div class="feature-title">Read</div>
                        <div class="feature-description">Fetching a created Employee</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                        <div class="feature-title">Update</div>
                        <div class="feature-description">Update a Employee</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                        <div class="feature-title">Delete</div>
                        <div class="feature-description">Delete a Employee</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 CRUD Test 1 Application. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection