<!DOCTYPE html>
<html lang="en">
<head>
    <title>Member List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="d-flex justify-content-between mb-4">
            <h2 class="text-success fw-bold">👥 Registered Members</h2>
            <a href="{{ route('members.create') }}" class="btn btn-success shadow">+ Register Member</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow border-0">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead class="table-success">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td class="fw-bold">{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->phone }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Back to Dashboard</a>
    </div>
</body>
</html>
