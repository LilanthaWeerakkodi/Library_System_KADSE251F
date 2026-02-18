<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">📚 Library Inventory</h2>
            <a href="{{ route('books.create') }}" class="btn btn-primary">+ Add New Book</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow border-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>ISBN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td class="fw-bold">{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td><span class="badge bg-secondary">{{ $book->isbn }}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ url('/') }}" class="btn btn-outline-secondary mt-3">Back to Dashboard</a>
    </div>
</body>
</html>
