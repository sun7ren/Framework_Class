<x-layout>
    <h2>Currently Available Students</h2>

    @if($greeting == 'hello')
        <p>Hi from inside the if statement</p>
    @endif

    <ul>
      @foreach($students as $student)
        <li>
          <x-card href="/students/{{$student['id']}}" :highlight="$student['skill'] > 70">
            <h3>{{ $student['name'] }}</h3>
          </x-card>
        </li>
      @endforeach
    </ul>
</x-layout>