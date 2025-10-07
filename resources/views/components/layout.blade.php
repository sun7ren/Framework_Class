<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Class</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@if (session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
        {{ session('success')}}
    </div>
@endif
    <header>
        <nav>
            <h1>Student Class</h1>
            <a href="{{ route('students.index')}}">All Students</a>
            <a href="{{ route('students.create')}}">Create New Students</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>