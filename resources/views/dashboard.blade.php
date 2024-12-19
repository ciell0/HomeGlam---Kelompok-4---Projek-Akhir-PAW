<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeGlam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        :root {
            --primary-bg: #A2D2DF;
            --secondary-bg: #F6EFBD;
            --accent-color: #E4C087;
            --highlight-color: #BC7C7C;
        }

        body {
            background-color: #fffdef;
            color: #333;
        }

        .navbar {
            background-color: var(--secondary-bg);
        }

        .navbar-brand, .nav-link, .navbar-toggler-icon {
            color: var(--highlight-color) !important;
        }

        .nav-link:hover {
            font-weight: bold;
        }

        .btn-success {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }

        .btn-primary {
            background-color: var(--highlight-color);
            border-color: var(--highlight-color);
        }

        .btn-warning {
            background-color: var(--secondary-bg);
            color: #333;
        }

        .carousel-item img {
            filter: brightness(90%);
        }

        .card {
            background-color: var(--secondary-bg);
            border: 1px solid var(--accent-color);
        }

        footer {
            background-color: var(--highlight-color);
            color: #fff;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img src="/logo 1 1.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
                HomeGlam
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><b>Dashboard</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user">All Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user/add">Add User</a>
                    </li>
                </ul>
                <form class="d-flex" action="{{ route('user.search') }}" method="GET">
                    <input id="searchInput" name="query" class="form-control me-2" type="search" placeholder="Search users by name" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Image Slider -->
    <div id="heroCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1920x600?text=Welcome+to+HomeGlam" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to HomeGlam</h5>
                    <p>This Website Helps You Control Your Users!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x600?text=Beautiful+Interiors" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Simple Design</h5>
                    <p>Transform your space with our curated designs.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x600?text=Contact+Us" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Get in Touch</h5>
                    <p>We are here to bring your vision to life.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Statistik -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <h2>3</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">New Users This Week</h5>
                        <h2>3</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Roles</h5>
                        <h2>1 Admin / 3 Users</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aksi Utama -->
        <div class="text-center mt-4">
            <a href="/user/add" class="btn btn-success btn-lg">Add New User</a>
            <a href="/user" class="btn btn-primary btn-lg">View All Users</a>
            <button class="btn btn-warning btn-lg" onclick="document.getElementById('searchInput').focus()">Search User</button>
        </div>
    </div>

    <footer class="text-center mt-4">
        &copy; 2024 Admin Dashboard. All rights reserved.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFx98bmoF11Q2qXwqYjFGh4p3eS29oA9rGhNqUigFkn6az6/6bB0gFLRM9" crossorigin="anonymous"></script>
</body>
</html>
