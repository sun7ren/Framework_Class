<x-layout>
    <h2>Currently Available Students</h2>

    <ul>
      @foreach($students as $student)
        <li>
          <x-card href="/students/{{$student->id}}" :highlight="$student['skill'] > 70">
            <h3>{{ $student->name }}</h3>
          </x-card>
        </li>
      @endforeach
    </ul>
</x-layout>