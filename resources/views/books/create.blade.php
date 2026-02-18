<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register New Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="card shadow border-0 col-md-6 mx-auto">
            <div class="card-header bg-primary text-white text-center">
                <h3 class="mb-0">Add New Book</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Book Title</label>
                        <input type="text" name="title" class="form-control" placeholder="e.g. Harry Potter" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Author</label>
                        <input type="text" name="author" class="form-control" placeholder="e.g. J.K. Rowling" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">ISBN</label>
                        <input type="text" name="isbn" class="form-control" placeholder="e.g. 978-3-16-148410-0" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Save Book</button>
                    <a href="{{ route('books.index') }}" class="btn btn-link w-100 mt-2">Back to List</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
