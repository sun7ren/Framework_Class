<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Welcome to the First Lesson</h1>
    <p>Click the button below to view the list of students</p>

    <a href="/students" class="btn">
        View Students
    </a>
</body>
</html>