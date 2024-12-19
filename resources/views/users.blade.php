<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeGlam - View All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        :root {
            --primary-bg: #A2D2DF;
            --secondary-bg: #F6EFBD;
            --accent-color: #E4C087;
            --highlight-color: #BC7C7C;
        }

        h1{
            color: #BC7C7C
        }

        body {
            background-color: #fffdef;
            color: #333;
        }

        .navbar {
            background-color: var(--secondary-bg);
        }

        .navbar-brand, .nav-link {
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

        .card {
            background-color: var(--secondary-bg);
            border: 1px solid var(--accent-color);
        }

        .table thead {
            background-color: var(--highlight-color);
            color: #fff;
        }

        footer {
            background-color: var(--highlight-color);
            color: #fff;
            padding: 10px 0;
            position: relative;
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
                        <a class="nav-link active" aria-current="page" href="/user"><b>All Users</b></a>
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
    
    <div class="container mt-4">

        <h1 class="text-center mb-4">Daftar Seluruh Pelanggan</h1>

        <div class="card">
            <div class="card-header">
                Daftar Pesanan Online 
                <a href="/user/add" class="btn btn-success btn-sm float-end">Add New</a> 
            </div>

            @if (Session::has('sucess'))
                <span class="alert alert-success p-2"> {{Session::get('sucess')}}</span>
            @endIf

            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
            @endif

            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Registration Date</th>
                        <th>Last Update</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        @if (count($all_users) > 0)
                            @foreach ($all_users as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone_number}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a></td>
                                    <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                                </tr>    
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8">No User Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
