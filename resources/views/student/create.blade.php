<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/students" method="POST">
        @csrf

        <div>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div><br>

        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div><br>

        <div>
            <label for="phone">Phone:</label><br>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>
        </div><br>

        <div>
            <label for="date_of_birth">Date of Birth:</label><br>
            <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
        </div><br>

        <div>
            <label for="address">Address:</label><br>
            <textarea id="address" name="address" rows="3">{{ old('address') }}</textarea>
        </div><br>

        <button type="submit">Save Student</button>
        <a href="/students">Cancel</a>
    </form>
</body>
</html>