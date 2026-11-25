<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course List</title>
</head>
<body>
    <h2>Course List</h2>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p><a href="/courses/create">Add New Course</a></p>

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Title</th>
                <th>Credits</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->credits }}</td>
                    <td>
                        <a href="/courses/{{ $course->id }}">Detail</a>
                        <a href="/courses/{{ $course->id }}/edit">Edit</a>
                        <form action="/courses/{{ $course->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this course?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No courses found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>