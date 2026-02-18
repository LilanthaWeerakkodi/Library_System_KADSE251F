<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; padding: 50px; }
        .card { border: none; transition: 0.3s; }
        .card:hover { transform: translateY(-5px); }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="display-4 fw-bold text-primary mb-5">City Library Management</h1>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow p-4 bg-primary text-white">
                    <h3>Books</h3>
                    <a href="{{ route('books.index') }}" class="btn btn-light mt-3">Manage Inventory</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow p-4 bg-success text-white">
                    <h3>Members</h3>
                    <a href="{{ route('members.index') }}" class="btn btn-light mt-3">Manage Members</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow p-4 bg-warning text-dark">
                    <h3>Lending</h3>
                    <a href="{{ route('lendings.create') }}" class="btn btn-dark mt-3">Issue a Book</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
