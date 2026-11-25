<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Detail</title>
</head>
<body>
    <h2>Course Detail</h2>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p><strong>ID:</strong> {{ $course->id }}</p>
    <p><strong>Code:</strong> {{ $course->code }}</p>
    <p><strong>Title:</strong> {{ $course->title }}</p>
    <p><strong>Credits:</strong> {{ $course->credits }}</p>
    <p><strong>Description:</strong> {{ $course->description ?? '-' }}</p>

    <p>
        <a href="/courses/{{ $course->id }}/edit">Edit</a>
        <a href="/workshop1">Back</a>
    </p>
</body>
</html>