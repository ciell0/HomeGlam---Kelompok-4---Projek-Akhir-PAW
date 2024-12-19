<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Warna latar belakang halaman */
        :root {
            --primary-bg: #A2D2DF;
            --secondary-bg: #F6EFBD;
            --accent-color: #E4C087;
            --highlight-color: #BC7C7C;
        }

        body {
            background-color: #fffdef; /* Primary background */
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

        /* Kontainer utama */
        .container {
            background: #F6EFBD; /* Secondary background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        /* Heading halaman */
        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #BC7C7C; /* Primary heading text */
        }

        /* Tabel */
        .table {
            margin-top: 20px;
            border-color: #E4C087;
        }

        .table thead {
            background-color: #E4C087; /* Header tabel */
            color: #343a40;
        }

        .table-bordered th, .table-bordered td {
            border-color: #BC7C7C; /* Border tabel */
        }

        /* Tombol */
        .btn-primary {
            background-color: #BC7C7C; /* Tombol utama */
            border-color: #BC7C7C;
        }

        .btn-primary:hover {
            background-color: #9B5A5A; /* Hover tombol utama */
        }

        .btn-danger {
            background-color: #E4C087; /* Tombol delete */
            border-color: #E4C087;
        }

        .btn-danger:hover {
            background-color: #D09C68; /* Hover tombol delete */
        }

        .btn-secondary {
            background-color: #A2D2DF; /* Tombol kembali */
            border-color: #A2D2DF;
        }

        .btn-secondary:hover {
            background-color: #7BAEBF; /* Hover tombol kembali */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
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

    <div class="container mt-5">
        <h1 class="mb-4 text-center">Search Results for "{{ $query }}"</h1>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Registration Date</th>
                        <th>Last Update</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($all_users->count() > 0)
                        @foreach ($all_users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone_number ?? 'N/A' }}</td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>{{ $item->updated_at->format('d M Y') }}</td>
                                <td>
                                    <a href="/edit/{{ $item->id }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="/delete/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>    
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" class="text-center">No User Found!</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <a href="/" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
