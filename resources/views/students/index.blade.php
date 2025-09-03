<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Network | Home</title>
</head>
<body>
    <h2>Currently Available Students</h2>
    <p>{{ $greeting }}</p>

    <ul>
        <li>
            <a href="/students/{{$students[0]['id']}}">
                {{ $students[0]['name'] }}
            </a>
        </li>
        <li>
            <a href="/students/{{$students[1]['id']}}">
                {{ $students[1]['name'] }}
            </a>
        </li>
    </ul>
</body>
</html>