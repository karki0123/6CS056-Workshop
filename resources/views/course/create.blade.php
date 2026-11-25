<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Course</title>
</head>
<body>
    <h2>Add New Course</h2>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/courses" method="POST">
        @csrf

        <div>
            <label for="code">Code:</label><br>
            <input type="text" id="code" name="code" value="{{ old('code') }}" required>
        </div><br>

        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div><br>

        <div>
            <label for="credits">Credits:</label><br>
            <input type="number" id="credits" name="credits" value="{{ old('credits', 3) }}" min="1" max="10" required>
        </div><br>

        <div>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div><br>

        <button type="submit">Save Course</button>
        <a href="/workshop1">Back</a>
    </form>
</body>
</html>