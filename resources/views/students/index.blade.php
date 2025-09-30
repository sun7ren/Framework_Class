<x-layout>
    <h2>Currently Available Students</h2>

    <ul>
      @foreach($students as $student)
        <li>
          <x-card href="{{ route('students.show', $student->id)}}" :highlight="$student['skill'] > 70">
            <div>
              <h3>{{ $student->name }}</h3>
              <p>{{ $student->classroom->name }}</p>
            </div>
          </x-card>
        </li>
      @endforeach
    </ul>

    {{ $students->links() }}
</x-layout>