<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors</title>
</head>
<body>
    <h1>Hello World!</h1>
    <p>Ini adalah halaman Author!</p>

    <!-- Looping data author -->
    @foreach ($authors as $author)
        <ul>
            <li>{{ $author['id'] }}</li>
            <li>{{ $author['name'] }}</li>
            <li>{{ $author['bio'] }}</li>
        </ul>
    @endforeach
</body>
</html>