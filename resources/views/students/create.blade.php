@extends('layouts.app')

@section('content')
<h2>Add Student</h2>

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Student Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Section</label>
        <select name="section_id" class="form-select" required>
            <option value="">-- Select Section --</option>
            @foreach($sections as $section)
                <option value="{{ $section->id }}">{{ $section->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
