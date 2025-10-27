@extends('layouts.app')

@section('content')
<h2>Edit Section</h2>

<form action="{{ route('sections.update', $section) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Section Name</label>
        <input type="text" name="name" value="{{ $section->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ $section->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('sections.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
