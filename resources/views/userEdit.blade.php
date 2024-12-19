<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeGlam - Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        :root {
            --primary-bg: #A2D2DF; /* Latar belakang utama */
            --card-bg: #F6EFBD;    /* Latar belakang kartu */
            --btn-color: #E4C087; /* Warna tombol utama */
            --btn-hover: #BC7C7C; /* Warna hover tombol */
            --text-danger: #BC7C7C; /* Warna teks error */
            --nav-bg: #E4C087; /* Latar belakang navbar */
            --nav-text: #FFFFFF; /* Warna teks navbar */
            --primary-bg: #A2D2DF;
            --secondary-bg: #F6EFBD;
            --accent-color: #E4C087;
            --highlight-color: #BC7C7C;
        }

        body {
            background-color: #fffdef;
            color: #333;
            font-family: Arial, sans-serif;
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

        .btn-primary {
            background-color: var(--btn-color);
            border-color: var(--btn-color);
        }

        .btn-primary:hover {
            background-color: var(--btn-hover);
            border-color: var(--btn-hover);
        }

        .card {
            background-color: var(--card-bg);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .text-danger {
            color: var(--text-danger) !important;
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
                        <a class="nav-link" aria-current="page" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/user">All Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/user/add') }}">Add User</a>
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
            <div class="card-header">Edit User</div>
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{ Session::get('fail') }}</span>
            @endif
            <div class="card-body">
                <form action="{{ route('EditUser') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Full Name</label>
                        <input type="text" name="full_name" value="{{ $user->name }}" class="form-control" id="formGroupExampleInput" placeholder="Enter Full Name">
                        @error('full_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
                        <input type="number" name="phone_number" value="{{ $user->phone_number }}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Phone Number">
                        @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>