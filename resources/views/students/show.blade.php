<x-layout>
    <h2>{{ $student->name }}</h2>

    <div class="bg-white p-6 rounded-lg">
        <p><strong>Skill Level:</strong> {{ $student->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $student->bio }}</p>
    </div>

    <div class="bg-white py-4 my-4 rounded px-5">
        <h3>Classroom Information</h3>
        <p><strong>Classroom name:</strong> {{ $student->classroom->name}} </p>
        <p><strong>Location:</strong> {{ $student->classroom->location}} </p>
        <p><strong>About the Classroom:</strong></p>
        <p>{{ $student->classroom->description}} </p>
    </div>
</x-layout>