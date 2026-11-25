<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Course</title>
</head>
<body>
    <h2>Edit Course</h2>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/courses/{{ $course->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="code">Code:</label><br>
            <input type="text" id="code" name="code" value="{{ old('code', $course->code) }}" required>
        </div><br>

        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title', $course->title) }}" required>
        </div><br>

        <div>
            <label for="credits">Credits:</label><br>
            <input type="number" id="credits" name="credits" value="{{ old('credits', $course->credits) }}" min="1" max="10" required>
        </div><br>

        <div>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="3">{{ old('description', $course->description) }}</textarea>
        </div><br>

        <button type="submit">Update Course</button>
        <a href="/workshop1">Back</a>
    </form>
</body>
</html>