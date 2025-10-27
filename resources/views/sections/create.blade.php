@extends('layouts.app')

@section('content')
<h2>Add Section</h2>

<form action="{{ route('sections.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Section Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('sections.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
