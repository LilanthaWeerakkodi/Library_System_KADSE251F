<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lending History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-warning fw-bold">📖 Lending History</h2>
            <a href="{{ route('lendings.create') }}" class="btn btn-warning shadow-sm">+ Issue New Book</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow border-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0 text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Lending ID</th>
                            <th>Book ID</th>
                            <th>Member ID</th>
                            <th>Due Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lendings as $lending)
                        <tr>
                            <td>{{ $lending->id }}</td>
                            <td><span class="badge bg-primary">Book #{{ $lending->book_id }}</span></td>
                            <td><span class="badge bg-success">Member #{{ $lending->member_id }}</span></td>
                            <td>{{ $lending->due_date }}</td>
                            <td><span class="badge bg-info">Issued</span></td>
                        </tr>
                        @endforeach
                        @if($lendings->isEmpty())
                        <tr>
                            <td colspan="5" class="text-muted py-4">No books have been issued yet.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ url('/') }}" class="btn btn-outline-secondary">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
