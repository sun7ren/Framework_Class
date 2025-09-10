<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Class</title>
</head>
<body>
    <header>
        <nav>
            <h1>Student Class</h1>
            <a href="/students">All Students</a>
            <a href="/students/create">Create New Students</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>