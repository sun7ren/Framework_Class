<x-layout>
  <form action="{{ route('students.store') }}" method="POST">
    <!-- CSRF token for security -->
    @csrf

    <h2>Create a New Student</h2>

    <!-- Student Name -->
    <label for="name">Student Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      value="{{ old ('name')}}"
      required
    >

    <!-- Student Strength -->
    <label for="skill">Student Skill (0-100):</label>
    <input 
      type="number" 
      id="skill" 
      name="skill" 
      value="{{ old ('skill')}}"
      required
    >

    <!-- ninja Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio" 
      name="bio" 
      required
    >{{ old ('bio')}}"</textarea>

    <!-- select a classroom -->
    <label for="classroom_id">Classroom:</label>
    <select id="classroom_id" name="classroom_id" required>
      <option value="" disabled selected>Select a classroom</option>
      @foreach ($classrooms as $classroom)
        <option value="{{ $classroom->id }}" {{ $classroom->id == old('classroom_id') ? 'selected' : ''}}>
          {{ $classroom->name }}
        </option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create Student</button>

    @if ($errors->any())
    <div class="text-red-600 my-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
  </form>
</x-layout>