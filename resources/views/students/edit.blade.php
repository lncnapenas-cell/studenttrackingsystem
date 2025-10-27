@extends('layouts.app')

@section('content')
<h2>Edit Student</h2>

<form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Student Name</label>
        <input type="text" name="name" value="{{ $student->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="{{ $student->email }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Section</label>
        <select name="section_id" class="form-select" required>
            @foreach($sections as $section)
                <option value="{{ $section->id }}" {{ $student->section_id == $section->id ? 'selected' : '' }}>
                    {{ $section->name }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
