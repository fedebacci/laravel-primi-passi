<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>
</head>
<body>
    <h1>Hello World!</h1>

    <p>
        {{ $info_test }}
    </p>

    <!-- <a href="/about" target="_blank">About</a> -->
    <a href="{{ route("about") }}">About</a>
</body>
</html>