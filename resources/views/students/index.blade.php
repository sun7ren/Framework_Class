<x-layout>
    <h2>Currently Available Students</h2>

    @if($greeting == 'hello')
        <p>Hi from inside the if statement</p>
    @endif

    <ul>
      @foreach($students as $student)
        <li>
          <a href="/students/{{$student['id']}}">
            View Details
          </a>
        </li>
      @endforeach
    </ul>
</x-layout>