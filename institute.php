<?php
session_start();
include "index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurdistan Technical Institute</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="\school website\css\style.css">
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .hero {
            text-align: center;
            background-size: cover;
            background-position: center;
            color: rgb(255, 255, 255);
            padding: 100px 0;
            background-image: url('campus.jpg'); /* Add your image path here */
           
        }

        .navbar-nav .nav-link {
            color: #000; /* Default text color */
            transition: color 0.3s, background-color 0.3s; /* Smooth transition for color changes */
        }

        .navbar-nav .nav-link:hover {
            color: #fff; /* Change text color on hover */
            background-color: #007bff; /* Background color on hover */
            border-radius: 5px; /* Optional: Add rounded corners to the background */
        }

        .section-item {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
            background-color: white;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .section-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
        }

        .registration-form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .registration-form input, .registration-form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #69696d;
            border-radius: 5px;
        }

        .registration-form button {
            background-color: #690efb;
            color: rgb(255, 255, 255);
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .registration-form button:hover {
            background-color: #19d62c;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">KTI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome To KTI</h1>
    </section>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="section-item">
                    <h2 php>KTI Cafeteria</h2>
                    <p>KTI has two cafeterias: the upper cafeteria and the lower cafeteria, offering a variety of meals and snacks for students and staff.</p>
                    <a href="cafeteria.html" class="btn btn-primary">Click for More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="section-item">
                    <h2>Events</h2>
                    <p>KTI hosts numerous events monthly, including workshops, guest lectures, and cultural festivals, providing students with opportunities to engage and learn.</p>
                    <a href="events.html" class="btn btn-primary">View Events</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="section-item">
                    <h2>Gallery</h2>
                    <p>Visit our gallery to view images capturing the vibrant life at KTI, including events, campus activities, and student achievements.</p>
                    <a href="gallery.html" class="btn btn-primary">View Gallery</a>
                </div>
            </div>
        </div>
    </section>

    <section class="registration-form">
        <h2>Registration Form</h2>
        <form action="process.php" method="post">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <button type="submit">Register</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Kurdistan Technical Institute</p>
    </footer>

</body>
</html>