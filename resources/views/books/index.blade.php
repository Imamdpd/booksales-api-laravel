<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Ini adalah halaman books</p>

    <!-- Looping data book -->
    @foreach ($books as $book)
        <ul>
            <li>{{ $book['title'] }}</li>
        </ul>
    @endforeach
</body>
</html>