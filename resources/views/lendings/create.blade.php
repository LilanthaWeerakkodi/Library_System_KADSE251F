<!DOCTYPE html>
<html lang="en">
<head>
    <title>Issue Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="card shadow border-0 col-md-6 mx-auto">
            <div class="card-header bg-warning text-dark text-center">
                <h3 class="mb-0">Issue Book to Member</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('lendings.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Select Book</label>
                        <select name="book_id" class="form-select" required>
                            <option value="">-- Choose a Book --</option>
                            @foreach($books as $book)
                                <option value="{{ $book->id }}">{{ $book->title }} ({{ $book->author }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Select Member</label>
                        <select name="member_id" class="form-select" required>
                            <option value="">-- Choose a Member --</option>
                            @foreach($members as $member)
                                <option value="{{ $member->id }}">{{ $member->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Due Date</label>
                        <input type="date" name="due_date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 fw-bold">Issue Book</button>
                    <a href="{{ url('/') }}" class="btn btn-link w-100 mt-2 text-decoration-none">Back to Dashboard</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
