<x-layout>
    <h2>Currently Available Students</h2>
    <p>{{ $greeting }}</p>

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