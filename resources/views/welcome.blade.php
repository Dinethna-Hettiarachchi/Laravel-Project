<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>EasyRides - Your Transportation Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #74ebd5, #acb6e5);
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #fff;
            margin-right: 15px;
        }

        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            background: url('https://source.unsplash.com/1920x1080/?transportation') no-repeat center center/cover;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.25rem;
            margin-top: 15px;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            text-decoration: none;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            color: white;
        }

        .features {
            padding: 50px 15px;
            text-align: center;
            background-color: white;
        }

        .features h2 {
            margin-bottom: 30px;
        }

        .feature-box {
            margin: 20px;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">EasyRides</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div>
            <h1>Welcome to EasyRides</h1>
            <p>Seamless and Reliable Transportation Solutions</p>
            <a href="#features" class="btn-custom">Explore Services</a>
        </div>
    </div>

    <section id="features" class="features">
        <div class="container">
            <h2>Why Choose EasyRides?</h2>
            <div class="row">
                <div class="col-md-4 feature-box">
                    <i class="fas fa-bus fa-3x text-primary"></i>
                    <h3>Convenient</h3>
                    <p>Experience the ease of booking and managing rides with our user-friendly platform.</p>
                </div>
                <div class="col-md-4 feature-box">
                    <i class="fas fa-route fa-3x text-success"></i>
                    <h3>Efficient</h3>
                    <p>We ensure timely and reliable services to make your commute hassle-free.</p>
                </div>
                <div class="col-md-4 feature-box">
                    <i class="fas fa-shield-alt fa-3x text-danger"></i>
                    <h3>Safe</h3>
                    <p>Your safety is our priority with secure rides and verified drivers.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 EasyRides. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
