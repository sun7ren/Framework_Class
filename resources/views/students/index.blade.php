<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Network | Home</title>
</head>
<body>
    <h2>Currently Available Students</h2>

    @if($greeting == 'hello')
        <p>Hi from inside the if statement</p>
    @endif

    <ul>
        @foreach($students as $student)
            <li>
                <p>{{ $student['name'] }}</p>
                <a href="/students/{{$student['id']}}">
                    View Details
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>