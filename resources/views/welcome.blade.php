<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-green-50 to-green-100 text-center px-6">
    <h1 class="text-4xl font-extrabold text-green-700 mb-4">
        Welcome to the First Lesson
    </h1>
    <p class="text-lg text-gray-600 mb-8">
        Click the button below to view the list of students
    </p>

    <a href="/students" 
       class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 hover:shadow-lg transition duration-300 ease-in-out">
        View Students
    </a>
</div>

</body>
</html>