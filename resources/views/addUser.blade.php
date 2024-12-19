<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeGlam - Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Definisi variabel warna */
        :root {
            --primary-bg: #A2D2DF; /* Warna latar utama */
            --secondary-bg: #F6EFBD; /* Warna latar elemen seperti kartu */
            --accent-color: #E4C087; /* Warna aksen untuk tombol */
            --highlight-color: #BC7C7C; /* Warna untuk teks atau efek hover */
        }

        body {
            background-color: #fffdef;
            color: #333; /* Warna teks default */
        }

        .navbar {
            background-color: var(--secondary-bg); /* Warna latar navbar */
        }

        .navbar-brand, .nav-link {
            color: var(--highlight-color) !important; /* Warna teks pada navbar */
        }

        .nav-link:hover {
            font-weight: bold; /* Efek hover untuk mempertebal teks */
        }

        .btn-primary {
            background-color: var(--highlight-color); /* Warna tombol utama */
            border-color: var(--highlight-color);
        }

        .card {
            background-color: var(--secondary-bg); /* Warna latar kartu */
            border: 1px solid var(--accent-color); /* Border dengan warna aksen */
        }

        .form-control {
            border: 1px solid var(--accent-color); /* Border input */
        }

        .text-danger {
            color: #D9534F !important; /* Warna teks error */
        }

        .btn-outline-success {
            color: var(--highlight-color);
            border-color: var(--highlight-color);
        }

        .btn-outline-success:hover {
            background-color: var(--highlight-color);
            color: #fff;
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
                        <a class="nav-link" aria-current="page" href="/home">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/user">All Users</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href=""><b>Add User</b></a>
                    </li>
                </ul>
                <form class="d-flex" action="{{ route('user.search') }}" method="GET">
                    <input id="searchInput" name="query" class="form-control me-2" type="search" placeholder="Search users by name" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>                 
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">Add New User</div>
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2"> {{Session::get('fail')}}</span>
            @endIf
            <div class="card-body">
                <form action="{{ route('AddUser')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Full Name</label>
                        <input type="text" name="full_name" value="{{old('full_name')}}" class="form-control" id="formGroupExampleInput" placeholder="Enter Full Name">
                        @error('full_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{old('email')}}" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
                        <input type="number" name="phone_number" value="{{old('phone_number')}}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Phone Number">
                        @error('phone_number')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Password">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Password">
                        @error('password_confirmation')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>

                </form>
                
            </div>
        </div>
    </div>
</body>
</html>
