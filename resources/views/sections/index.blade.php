@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sections</h2>
    <a href="{{ route('sections.create') }}" class="btn btn-primary mb-3">Add Section</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        @foreach ($sections as $section)
        <tr>
            <td>{{ $section->id }}</td>
            <td>{{ $section->name }}</td>
            <td>{{ $section->description }}</td>
            <td>
                <a href="{{ route('sections.edit', $section) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('sections.destroy', $section) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
