<x-layout>
    <h2>{{ $student->name }}</h2>

    <div class="bg-white p-6 rounded-lg">
        <p><strong>Skill Level:</strong> {{ $student->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $student->bio }}</p>
    </div>
</x-layout>