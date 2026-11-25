<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workshop 1</title>
</head>
<body>
    <h2>Student List</h2>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p><a href="/students/create">Add New Student</a></p>

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href="/students/{{ $student->id }}">Detail</a>
                        <a href="/students/{{ $student->id }}/edit">Edit</a>
                        <form action="/students/{{ $student->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this student?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <h2>Course List</h2>

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